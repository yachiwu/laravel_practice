<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\BlogPost;
use App\Http\Requests\StorePost;

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

    public function store(StorePost $request)
    {
        $validate_Data = $request->validated();
        // dd($validate_Data);
        // mass assignment
        $blogPost = BlogPost::create($validate_Data);
        $request->session()->flash('status','success');
        return redirect(route('posts.show',['post' =>$blogPost->id]));
        
        //
    }

   
}
