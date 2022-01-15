<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use File;
use Image;

class PostController extends Controller
{
    

    public function index(){
        $posts = Post::where('user_id', Auth::user()->id )->paginate(5);

        return view('post.index',compact('posts'))->with('user', auth()->user());
    }

    public function create(){
        return view('post.create');
    }
    
     public function store(Request $request){
         $post = new Post;
         $request->validate([
        'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'title' => 'required',
                ]);

       if($request->hasFile('image')) {

           $file = $request->file('image');

        //get filename with extension
        $filenamewithextension = $file->getClientOriginalName();
  
        //get filename without extension
        $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);
  
        //get file extension
        $extension = $file->getClientOriginalExtension();
  
        //filename to store
        $filenametostore = $filename.'_'.time().'.'.$extension;
 
        //small thumbnail name
        $smallthumbnail = $filename.'_small_'.time().'.'.$extension;
 
       
 
        //Upload File
        $request->file('image')->storeAs('public/uploads', $filenametostore);
        $request->file('image')->storeAs('public/uploads/thumbnail', $smallthumbnail);

  
        //create small thumbnail
        $smallthumbnailpath = public_path('storage/uploads/thumbnail/'.$smallthumbnail);
        $this->createThumbnail($smallthumbnailpath, 300, 200);

            $post->image = $filenametostore;
        }
        

        $post->user_id = Auth::user()->id;
        $post->title = $request->input('title');
        $post->slug = $request->input('slug');
        $post->body = $request->input('body');
        $post->save();

        return redirect('post')->with('status', 'Post Added Successfully!');



     }
     public function createThumbnail($path, $width, $height)
{
    $img = Image::make($path)->resize($width, $height);
    $img->save($path);
}

    public function edit($id){
        $post = Post::find($id);
        return view('post.edit', compact('post'));
    }

    public function update(Request $request, $id)
    {
        $post = Post::find($id);
         $request->validate([
        'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'title' => 'required',
        
                ]);
        if($request->hasfile('image'))
        {
            $path = 'storage/uploads/'.$post->image;
            if(File::exists($path))
            {
                File::delete($path);
            }
             $file = $request->file('image');

        //get filename with extension
        $filenamewithextension = $file->getClientOriginalName();
  
        //get filename without extension
        $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);
  
        //get file extension
        $extension = $file->getClientOriginalExtension();
  
        //filename to store
        $filenametostore = $filename.'_'.time().'.'.$extension;

        //small thumbnail name
        $smallthumbnail = $filename.'_small_'.time().'.'.$extension;
        
        $request->file('image')->storeAs('public/uploads', $filenametostore);
        $request->file('image')->storeAs('public/uploads/thumbnail', $smallthumbnail);

  
        //create small thumbnail
        $smallthumbnailpath = public_path('storage/uploads/thumbnail/'.$smallthumbnail);
        $this->createThumbnail($smallthumbnailpath, 300, 200);

            $post->image = $filenametostore;
        }

        $post->title = $request->input('title');
        $post->slug = $request->input('slug');
        $post->body = $request->input('body');
        $post->update();

        return redirect('post')->with('status', 'Post updated Successfully!');
    }

    public function delete($id)
    {
        $post = Post::find($id);
        if($post->image)
        {
            $path = 'storage/uploads/'.$post->image;
            if(File::exists($path))
            {
                File::delete($path);
            }
        }
        $post->delete();
        return redirect('post')->with('status', 'Post deleted Successfully!');
    }

    public function slug($slug)
    {
        $post = Post::where('slug',$slug)->first();
        return view('post.slug', compact('post'));
    }
}
