<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

    public function like($commentId, $userId)
    {
        $comment = Comment::find($commentId);
        $comment->like()->toggle($userId);

        return response()->json([
            'comment_id' => $comment->id,
            'likes' => $comment->getLikes(),
        ]);
    }
}
