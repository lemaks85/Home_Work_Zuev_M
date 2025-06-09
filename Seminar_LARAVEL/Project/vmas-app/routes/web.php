<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormProcessor;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/userform', [FormProcessor::class, 'index'])->name('user-form');
Route::post('/store_form',[FormProcessor::class, 'store']);