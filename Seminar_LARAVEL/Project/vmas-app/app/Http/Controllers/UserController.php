<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return User::all();
    }




    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'max:50'],
            'surname' => ['required', 'max:50'],
            'email' => ['required', 'email']
        ]);

        return User::create($request->all());
    }




    public function get(Request $request, $id)
    {
        return User::where('id', $id)->first();
    }
}
