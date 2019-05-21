<?php

namespace App\Http\Controllers;
 use Illuminate\Http\Request;

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
        return view('works.index', ['works' => Work::all()]);
    }
    public function show($id)
    {
        
        return view('works.show', ['work' => Work::find($id)]);
    }

}
