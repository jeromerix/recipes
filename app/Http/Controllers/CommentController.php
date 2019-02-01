<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
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

        return redirect()->back()->with('message', 'You succesfully placed your comment.');

    }
    public function destroy($id)
    {
        $comment =Comment::FindorFail($id);
        if (Auth::user()->id != $comment->user_id)
        return redirect()->back()->with('message', 'You are not allowed to delete this comment');
        else $comment->delete();
        return redirect()->back()->with('message', 'You succesfully deleted your comment');
    }
}
