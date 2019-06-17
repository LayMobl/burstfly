<?php

namespace App\Http\Controllers;
 use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Comment;
use App\Http\Controllers\Controller;

 /**
  * Class CommentController
  * @package App\Http\Controllers
  */
 class CommentController extends Controller
{
     /**
      * @param $id
      * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
      * je retourne la vue index avec l'id de son work
      */
     public function index($id)
    {
        return view('comments.index', ['comments' => Comment::where('work_id',$id)->get()]);
    }

     /**
      * @param Request $request
      * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
      * Je sauvegarde dans la DB mon message et je retourne la vue simple du comment
      */
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
