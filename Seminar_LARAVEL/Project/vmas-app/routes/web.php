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