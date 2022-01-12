<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $post = Post::where('user_id', Auth::user()->id )->paginate(10);

        return view('post', [
            'post' => $post
        ]);
    }
     public function create(){
         $post = new Post;
         $request->validate([
            'title' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                ]);

        if ($request->hasfile('image'))
        {
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('uploads',$filename);
            $post->image = $filename;
        }
        $post->title = $request->input('title');
        $post->slug = $request->input('slug');
        $post->slug = $request->input('body');


     }
}
