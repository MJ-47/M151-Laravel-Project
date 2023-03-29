<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegistrationController extends Controller {
    public function show() {
        return view('register');
    }

    public function showlogin() {
        return view('login');
    }

    public function create($id) {
        $request = request();

        //TODO

        return redirect('/event/' . $id);
    }

    public function login() {
        $data = request()->validate([

            'email' => 'required|max:255|email',
            'password' => 'required'
        ]);

        return redirect('/login');
    }

    public function store() {
        $data = request()->validate([

            'email' => 'required|max:255|email',
            'password' => 'required'
        ]);


    }

}
