<?php

namespace App\Http\Controllers;
 use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Comment;
use App\Http\Controllers\Controller;

class CommentController extends Controller
{




    public function index($id)
    {

        return view('comments.index', ['comments' => Comment::where('work_id',$id)->get()]);
    }


    public function store(Request $request)
    {
      
      $comment = new Comment;
      $comment->message = $request->message;
      $comment->work_id=$request->id;
      $comment->user_id=$request->user;
      $comment->save();
       return view('comments.item',['comment' => $request->message] );
    }


}
