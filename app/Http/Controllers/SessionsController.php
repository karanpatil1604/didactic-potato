<?php

namespace App\Http\Controllers;

use Illuminate\Validation\ValidationException;

class SessionsController extends Controller
{

    public function create()
    {
        return view('sessions.create');
    }
    public function store()
    {
        $atrributes = request()->validate([
            'email' => 'required',
            'password' => [
                'required',
            ]
        ]);
        if (auth()->attempt($atrributes)) {
            // session fixation security concern
            session()->regenerate();
            return redirect('/')->with("success", 'Welcom Back!');
        }
        throw ValidationException::withMessages([
            'email' => "You provided credintials could not be verified!"
        ]);
        // return back()->withInput()->withErrors('email'=>"You provided credintials could not be verified!");
    }
    public function destroy()
    {
        auth()->logout();
        return redirect('/')->with('sucess', 'GoodBye!');
    }
}