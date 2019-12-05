<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\BlogPost;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('post.index', ['posts' => BlogPost::all()]);
    }

    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request,$id)
    {
        // $request->session()->reflash();
        return view('post.show', ['post' => BlogPost::findOrFail($id)]);
        
        //
        
    }

    public function create()
    {
        return view('post.create');
        
        //
    }

    public function store(Request $request)
    {
        $validate_Data = $request->validate([
            'title'=>'required|max:100|min:5',
            'content'=>'required|min:5'
        ] );
        $blogPost = new BlogPost();
        $blogPost->title = $request->input('title');
        $blogPost->content = $request->input('content');
        $blogPost->save();
        $request->session()->flash('status','success');
        return redirect(route('posts.show',['post' =>$blogPost->id]));
        
        //
    }

   
}
