<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Tag;
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
    public function show()
    {
        return view('tags.show', ['tags' => Tag::all()]);
    }
}
