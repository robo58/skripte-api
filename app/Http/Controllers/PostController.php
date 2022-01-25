<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(Request $request)
    {
        return Post::all()->load('category');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title'=>'required|string',
            'description'=>'nullable|string',
            'category_id'=>'nullable|int'
        ]);

        $post = new Post();
        $post->title=$request->title;
        $post->description=$request->description;
        $post->category_id=$request->category_id;
        $post->save();
        return $post->load('category');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title'=>'required|string',
            'description'=>'nullable|string',
            'category_id'=>'nullable|number'
        ]);

        $post= Post::find($id);
        $post->title=$request->title;
        $post->description=$request->description;
        $post->category_id=$request->category_id;
        $post->save();
        return $post;
    }

    public function delete(Request $request,$id)
    {
        Post::delete($id);
        return ['message'=>'Post deleted'];
    }

    public function getAllPosts(Request $request)
    {
        return Post::all();
    }

    public function createPost(Request $request)
    {
        if(!Auth::user()->can('create-posts')){
            return abort(422,['message'=> 'Nemate dozvolu.']);
        }

        return Post::all();
    }
}
