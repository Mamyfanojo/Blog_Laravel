<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\admin\PostRequest;
use App\Models\admin\Category;
use App\Models\admin\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::orderBy('created_at', 'desc')->with('category')->paginate(10);
        return view('admin.post.post', [
            'posts' => $posts
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.post.addpost', [
            'post' => new Post(),
            'categories' => Category::select('id', 'name')->get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PostRequest $request)
    {
        Post::create($request->validated());
        return to_route('admin.post.index')->with('success', 'Le post a bien été sauvegardé');
    }

  

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        return view('admin.post.editpost', [
            'post' => $post,
            'categories' => Category::select('id', 'name')->get()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PostRequest $request, Post $post)
    {
        $post->update($request->validated());
        return to_route('admin.post.index')->with('success', 'Le post a bien été modifié');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return to_route('admin.post.index')->with('success', 'Le post a bien été supprimé');
    }
}
