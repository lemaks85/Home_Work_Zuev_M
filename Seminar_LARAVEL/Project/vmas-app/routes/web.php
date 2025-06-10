<?php

use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\FormProcessor;
use App\Models\Employee;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\PdfGeneratorController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LogController;
use App\Events\NewsHidden;
use App\Models\News;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UsersController;
use App\Mail\Welcome;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use Telegram\Bot\Laravel\Facades\Telegram;



require __DIR__ . '/auth.php';

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/test-telegram', function () {
    Telegram::sendMessage([
        'chat_id' => env('TELEGRAM_CHANNEL_ID'),
        'parse_mode' => 'HTML',
        'text' => 'Произошло тестовое событие.'
    ]);

    return response()->json(['status' => 'success']);
});

Route::get('/test-email', function () {
    $email = env('USER_MAIL');
    Mail::to($email)->send(new Welcome(User::where('id', 1)->first()));
});


















// require __DIR__ . '/auth.php';

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });


// Route::get('/users', [UsersController::class, 'index']);






// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/news/create-test', function () {
//     $news = new News;
//     $news->title = 'Test news title';
//     $news->body = 'Test news body';

//     $news->save();
//     return $news;
// });

// Route::get('/news/{id}/hide', function ($id) {
//     $news = News::findOrFail($id);
//     $news->hidden = true;
//     $news->save();

//     NewsHidden::dispatch($news);
//     return 'News hidden';
// });








// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/logs',[LogController::class, 'index']);



// Route::get('/', function () {
//     return view('welcome');
// });


// Route::get('/', function () {
//     return view('userForm');
// });

// Route::get('/user', [UserController::class, 'index']);
// Route::get('/user/{id}', [UserController::class, 'get']);
// Route::post('/store-user', [UserController::class, 'store']);

// Route::get('/resume/{id}', [PdfGeneratorController::class, 'index']);





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