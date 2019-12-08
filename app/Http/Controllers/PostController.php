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

    public function edit($id)
    {
        $post = BlogPost::findOrFail($id);
        return view('post.edit',['post'=>$post]);
        
        //
    }

    public function update(StorePost $request ,$id)
    {
        $post = BlogPost::findOrFail($id);
        $validate_Data = $request->validated();
        $post->fill($validate_Data);
        $post->save();
        $request->session()->flash('status','update');
        return redirect(route('posts.show',['post' =>$post->id]));
        
        //
    }

    public function destroy(Request $request,$id)
    {
        BlogPost::destroy($id);
        $request->session()->flash('status','delete');
        return redirect(route('posts.index'));
        //
    }
   
}
