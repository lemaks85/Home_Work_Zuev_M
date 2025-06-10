<?php

use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\FormProcessor;
use App\Models\Employee;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\PdfGeneratorController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/', function () {
    return view('userForm');
});

Route::get('/user', [UserController::class, 'index']);
Route::get('/user/{id}', [UserController::class, 'get']);
Route::post('/store-user', [UserController::class, 'store']);

Route::get('/resume/{id}', [PdfGeneratorController::class, 'index']);


















// Route::get('/userform', [FormProcessor::class, 'index'])->name('user-form');
// Route::post('/store_form',[FormProcessor::class, 'store']);

// Route::get('/test_database', function () {
//     $newUser = 'newUser2';
//     $employee = new Employee();
//     $employee->first_name = $newUser;
//     $employee->save();
//      echo "Добавлен пользователь $newUser.";
//     });


//     Route::get('/', function () {
//     $user = [
//         'name' => 'Zuev Maksim',
//         'age' => 40,
//         'position' => 'married',
//         'address' => 'Moscow'
//     ];
//     return view(
//         'home',
//         [
//             'title' => 'main',
//             'style' => "css/app.css",
//             'user' => $user
//         ]
//     );
// });

// Route::get('/contacts', function () {
//     $user = [
//         'address' => 'Moscow',
//         'post_code' => 117403,
//         'email' => '',
//         'phone' => 89161907775
//     ];
//     return view(
//         'contacts',
//         [
//             'title' => 'contacts',
//             'style' => "css/style.css",
//             'user' => $user
//         ]
//     );
// });

// Route::get('get-employee-data', [EmployeeController::class,'index']);
// Route::post('stote-form', [EmployeeController::class,'store']);
// Route::put('/user/{id}', [EmployeeController::class,'update']);

// Route::get('/', function () {
//     return view('bookForm');
// });

// Route::get('/index', [BookController::class,'index'])->name('index');
// Route::post('/store', [BookController::class,'store']);