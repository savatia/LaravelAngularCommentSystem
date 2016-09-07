<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Auth\Access\Response;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Input;

class CommentController extends Controller
{
    //
    public function index()
    {
        //return Response::json(Comment::get());
        return response()->json(Comment::get());
    }

    public function store()
    {
        Comment::create(array(
            'author'=> Input::get('author'),
            'text' => Input::get('text')
        ));

        //return Response::json(array('success' => true));
        return response()->json(['success' => true]);
    }

    public function destroy($id)
    {
        Comment::destroy($id);
        //return Response::json(array('success' => true));
        return response()->json(['success' => true]);
    }
}
