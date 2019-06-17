<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

/**
 * Class UserController
 * @package App\Http\Controllers
 */
class UserController extends Controller
{

    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * Je retourne la vue show d'un user en fonction de son id
     */
    public function show($id)
    {
        return view('users.show', ['user' => User::find($id)]);
    }

    /**
     * @param Request $request
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * Je retourne la vue edit d'un user en fonction de son id
     */
    public function edit(Request $request, $id)
    {
        return view('users.edit', ['user' => User::find($id)]);
    }

    /**
     * @param Request $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     * Je sauvegarde une modification d'un user dans la DB et je retourne la vue show de celui-ci
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name'=>'required',
            'email'=> 'required'
        ]);

        $user = User::find($id);
        $user->name = $request->get('name');
        $user->email = $request->get('email');
        if (!empty($request->get('password'))){
            $user->password = Hash::make($request->get('password'));
        }
        $user->save();

        return redirect('/users/' .$id. '/' .$user->name);
    }
}
