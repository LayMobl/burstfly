<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Tag;
use App\Work;
use App\Http\Controllers\Controller;

class TagController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return View
     */
    public function index()
    {
        return view('tags.index', ['tags' => Tag::all()]);
    }
    public function show($id)
    {

        $works = Work::where('tag_id',$id)->simplePaginate(16);
        return view('works.index', ['works' => $works]);
    }
}
