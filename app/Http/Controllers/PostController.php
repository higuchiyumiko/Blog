<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use App\Http\Requests\PostRequest;

class PostController extends Controller
{
    public function index(Post $post){
        return view('posts.index')->with(['posts'=>$post->getPaginateByLimit()]);
    }
    public function index2(Post $post){
        return view('posts.index',['posts'=>$post->get()]);
    }
    public function index3(Post $post){
        $posts=Post::get();
        return view('posts.index',compact('posts'));
    }
    public function show(Post $post){
        return view('posts.show')->with(['post'=>$post]);
    }
    public function create(){
        return view('posts.create')->with(['categories'=>$category->get()]);
       // return view('posts.create');
    }
    public function store(Request $request,Post $post){
        $input=$request['post'];
        $post->fill($input)->save();
        return redirect('/posts/'.$post->id);
    }
    public function edit(Post $post){
        return view('posts.edit')->with(['post'=>$post]);
    }
    public function update(PostRequest $request,Post $post){
        $input_post=$request['post'];
        $post->fill($input_post)->save();
        return redirect('/posts/'.$post->id);
    }
    public function delete(Post $post){
        $post->delete();
        return redirect('/');
    }
}