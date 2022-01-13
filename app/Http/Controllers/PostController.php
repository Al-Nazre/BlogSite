<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use File;
use Image;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $posts = Post::where('user_id', Auth::user()->id )->paginate(10);

        return view('post.index',compact('posts'));
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

       /* if ($request->hasfile('image'))
        {
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('storage/uploads/',$filename);
            $post->image = $filename;

          //small thumbnail name
            $smallthumbnail = $filename.'_small_'.time().'.'.$ext;

            $request->file('image')->move('public/uploads/thumbnail/', $smallthumbnail);

        //create small thumbnail
        $smallthumbnailpath = public_path('storage/uploads/thumbnail/'.$smallthumbnail);
        $this->createThumbnail($smallthumbnailpath, 300, 200);
        }*/

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
    $img = Image::make($path)->resize($width, $height, function ($constraint) {
        $constraint->aspectRatio();
    });
    $img->save($path);
}
}
