<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
class EmployeeController extends Controller
{
    public function index()
    {
        return view('get-employee-data');
    }
   
    public function store(Request $request)
    {
        $name = $request->input('name');
        $email = $request->input('email');
    }
}
