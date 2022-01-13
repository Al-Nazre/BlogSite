<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use file;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $post = Post::where('user_id', Auth::user()->id )->paginate(10);

        return view('post.index', [
            'post' => $post
        ]);
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

        if ($request->hasfile('image'))
        {
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('uploads/',$filename);
            $post->image = $filename;
        }
        $post->user_id = Auth::user()->id;
        $post->title = $request->input('title');
        $post->slug = $request->input('slug');
        $post->body = $request->input('body');
        $post->save();

        return view('post.index');


     }
}
