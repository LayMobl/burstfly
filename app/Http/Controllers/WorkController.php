<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Work;
use App\Http\Controllers\Controller;

/**
 * Class WorkController
 * @package App\Http\Controllers
 */
class WorkController extends Controller
{

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * Je retourne la vue index des works avec pagination
     */
    public function index()
    {
        return view('works.index', ['works' => Work::simplePaginate(16)]);
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * Je retourne la vue show d'un work en fonction de son id
     */
    public function show($id)
    {
        return view('works.show', ['work' => Work::find($id)]);
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * Je retourne la vue index des works en fonction de son tag avec limitation à 4
     */
    public function more($id)
    {
        return view('works.more', ['works' => Work::where('tag_id',$id)->limit(4)->get()]);
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * Je retourne la vue index des works en fonction de l'id de son user
     */
    public function indexUser($id)
    {
        return view('works.indexUser', ['works' => Work::where('user_id',$id)->get()]);
    }

    public function download()
    {


    }

}
