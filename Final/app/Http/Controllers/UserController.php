<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    // public function __construct () {
    //     $this->middleware('auth')->except(['index','show']);
    // }

    /**
    * Display a listing of the resource/
    *
    * @return \Illuminate\Http\Response
    */
    public function index()
    {

    	$posts = Post::orderBy('id', 'desc')->get();
    	return view('posts.index', ['posts' => $posts]);
    }


    /** 
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function create()
    {
    return view('posts.create');
    }

    /**
    * Display the specified resource.
    *
    * @param \App\Post $post
    * @return \Illuminate\Http\Response
    */
    public function show(Post $post)
    {
    	return view('posts.show', ['post' => $post]);
    }
    


    /**
    * Store a newly created resource in storage.
    *
    * @param \Illuminate\Http\Request $request
    *@return \Illuminate\Http\Response
    */
    public function store(Request $request)
    {
        $this->validate($request,[
            'title' => 'required|min:3',
            'content' => 'required|min:10'
        ]);
            
            Post::create([
            'title' => $request->title,
            'content' => $request->content,
        ]);
        return redirect(route('posts.index'));
    }

    public function edit(Post $post)
    {
    	return view('posts.edit', compact('post'));
    }


    /**
    *Update the specified resource in storage.
    *
    * @param \Illuminate\Http\Request $request
    * @param \App\Post $post
    *return \Illuminate\Http\Response
    */
    public function update(Request $request, Post $post)
    {
    	$post->title = $request->title;
        $post->content = $request->content;
        $post->save();
        session()->flash('message','Your data have been updated successfully');
        return redirect()->back();
    }


    /**
    * Remove the specified resource from storage.
    *
    * @param \App\Post $post
    * @return \Illuminate\Http\Response
    */
    public function destroy(Post $post)
    {   
    	$post->delete();
        return redirect(route('posts.index'));
    }
}
