<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostCommentsController extends Controller
{
    public function store(Post $post)
    {
        // validate the comment
        request()->validate([
            'body' => 'required',
        ]);
        // add a comment the given post
        $post->comments()->create([
            'user_id' => auth()->user()->id,
            'body' => request('body'),

        ]);

        return back();
    }
}