<?php

namespace App\Http\Controllers;
 use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Work;
use App\Http\Controllers\Controller;

class WorkController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return View
     */

    public function index()
    {
        return view('works.index', ['works' => Work::simplePaginate(16)]);
    }
    public function show($id)
    {

        return view('works.show', ['work' => Work::find($id)]);
    }

    public function more($id)
    {

        return view('works.more', ['works' => Work::where('tag_id',$id)->limit(4)->get()]);
    }

    public function indexUser($id)
    {

        return view('works.indexUser', ['works' => Work::where('user_id',$id)->get()]);
    }

    public function download()
    {


    }


}
