<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormProcessor extends Controller
{
    public function index()
    {
        return view('userForm');
    }

    public function store(Request $request)
    {
        $userData =
            [
                'name' => $request->username,
                'lastname' => $request->lastname,
                'email' => $request->email
            ];

        // return response()->json($userData);
        return view('helloUser',['user' => $userData]);
    }
}
