<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Tag;
use App\Work;
use App\Http\Controllers\Controller;

/**
 * Class TagController
 * @package App\Http\Controllers
 */
class TagController extends Controller
{

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * Je retourne la vue index des tags
     */
    public function index()
    {
        return view('tags.index', ['tags' => Tag::all()]);
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * Je retourne la vue index des works en fonction du tag
     */
    public function show($id)
    {
        $works = Work::where('tag_id',$id)->simplePaginate(16);
        return view('works.index', ['works' => $works]);
    }
}
