<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormProcessor;
use App\Models\Employee;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/userform', [FormProcessor::class, 'index'])->name('user-form');
Route::post('/store_form',[FormProcessor::class, 'store']);

Route::get('/test_database', function () {
    $newUser = 'newUser2';
    $employee = new Employee();
    $employee->first_name = $newUser;
    $employee->save();
     echo "Добавлен пользователь $newUser.";
    });


    Route::get('/', function () {
    $user = [
        'name' => 'Zuev Maksim',
        'age' => 40,
        'position' => 'married',
        'address' => 'Moscow'
    ];
    return view(
        'home',
        [
            'title' => 'main',
            'style' => "css/app.css",
            'user' => $user
        ]
    );
});

Route::get('/contacts', function () {
    $user = [
        'address' => 'Moscow',
        'post_code' => 117403,
        'email' => '',
        'phone' => 89161907775
    ];
    return view(
        'contacts',
        [
            'title' => 'contacts',
            'style' => "css/style.css",
            'user' => $user
        ]
    );
});