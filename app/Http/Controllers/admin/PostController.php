<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use App\Http\Requests\admin\PostRequest;
use App\Models\admin\Category;
use App\Models\admin\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
            'categories' => Category::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PostRequest $request)
    {
        Post::create($this->extractData($request, new Post()));
        return to_route('admin.post.index')->with('success', 'Le post a bien été sauvegardé');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        return view('admin.post.editpost', [
            'post' => $post,
            'categories' => Category::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PostRequest $request, Post $post)
    {
        // dd($request->validated());
        $post->update($this->extractData($request, $post ));
        return to_route('admin.post.index')->with('success', 'Le post a bien été modifié');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        Storage::disk('public')->delete($post->image);
        $post->delete();
        return to_route('admin.post.index')->with('success', 'Le post a bien été supprimé');
    }

    private function extractData(PostRequest $request, Post $post) {
        $data = $request->validated();
        $image = $request->validated('image');
        //  dd($image);

        if ($image == null || $image->getError()) {
            // dd($image);
            return $data;
        }
        if($post->image) {
            Storage::disk('public')->delete($post->image);
        }

        $data['image'] = $image->store('blog', 'public');
        return $data;
    }
}
