<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use Auth;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, int $postId)
    {
        $data = $request->validate([
            'content' => ['required', 'string'],
        ]);

        $data['user_id'] = $request->user()->id;
        $data['post_id'] = $postId;
        Comment::create($data);

        return to_route('post.show', $postId)->with('message', 'Comentário adicionado com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Comment $comment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comment $comment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comment $comment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comment $comment)
    {
        //
    }

}
