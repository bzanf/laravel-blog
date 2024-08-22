<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::with('user')
            ->where('status', 1)
            ->orWhere('user_id', request()->user()?->id)
            ->orWhere(request()->user()?->role, 'admin')
            ->orderBy('created_at', 'desc')->paginate(12);
        return view("post.index", ["posts" => $posts]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("post.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            "title" => ["required", "string"],
            "content" => ["required", "string"],
        ]);

        $data['user_id'] = $request->user()->id;
        $post = Post::create($data);

        return to_route('post.show', $post)->with('message', 'Post criado com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        $data = Post::with('comments')->where('id', $post->id)->first();
        return view('post.show', ['post' => $data]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        $this->authorize('update', $post);

        return view("post.edit", ["post" => $post]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        $this->authorize('update', $post);

        $data = $request->validate([
            "title" => ["required", "string"],
            "content" => ["required", "string"],
            "status" => ["required", "integer"],
        ]);

        $post->update($data);
        return to_route('post.show', $post)->with('message', 'Post atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        $this->authorize('delete', $post);

        $post->delete();
        return to_route('post.index')->with('message', 'Post removido com sucesso!');
    }
}
