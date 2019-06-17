<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return View
     */

    public function show($id)
    {
        return view('users.show', ['user' => User::find($id)]);
    }

    public function edit(Request $request,$id)
    {
        return view('users.edit', ['user' => User::find($id)]);
    }

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
