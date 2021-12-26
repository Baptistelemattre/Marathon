<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Serie;

class CommentControler
{
    public function create(Request $request, $idSerie) {
        $validated = $this->validate($request, [
            'content' => 'required',
            'note' => 'required|between:1,10'
        ]);

        if (Serie::find($idSerie)) {
            $comment = new Comment($validated);
            $comment->serie_id = $idSerie;
            $comment->user_id = Auth::user()->id;
            $comment->validated = false;

            $comment->save();
        }
        return redirect()->back();
    }
    public function valider($idComment) {
        /** @var Comment $comment */
        if ($comment = Comment::find($idComment)) {
            $comment->validated = 1;

            $comment->update();
        }
        return redirect()->back();
    }

    public function rejeter($idComment) {
        /** @var Comment $comment */
        if ($comment = comments::find($idComment)) {
            $comment->delete();
        }
        return redirect()->back();
    }
}