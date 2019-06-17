<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Newsletter;

/**
 * Class NewsletterController
 * @package App\Http\Controllers
 */
class NewsletterController extends Controller
{

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @throws \Illuminate\Validation\ValidationException
     * Je sauvegarde dans le DB et je retourne la vue en fonction de la présence dans la DB
     */
    public function store(Request $request)
    {
        $email = $request->get('email');
        if (Newsletter::where('email', '=', $email)->exists()) {
            return view('newsletters.newsletter')->with(['email' => $email, 'success' => 0]);
        } else {
            $this->validate($request, [
                'email' => 'required'
            ]);
            $newsletter = new Newsletter([
                'email' => $email
            ]);
            $newsletter->save();
            return view('newsletters.newsletter')->with(['email' => $email, 'success' => 1]);
        }
    }
}
