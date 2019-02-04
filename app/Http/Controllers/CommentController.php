<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    //
    public function store(Request $request, $id)
    {
        $comment = Comment::create([
            'comment' => $request->comment,
            'user_id' => \Illuminate\Support\Facades\Auth::user()->id,
            'recipe_id' => $id,
        ]);

        return redirect()->back();

    }

    public function like($commentId)
    {
        $comment = Comment::find($commentId);
        $comment->rating++;
        $comment->save();

        return $comment;
    }
}
