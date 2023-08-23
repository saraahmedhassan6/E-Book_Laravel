<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/dash', function () {
    return view('Dashboard.index');
});

Route::get('/', [HomeController::class, 'index']);

Auth::routes();

Route::get('/index', [HomeController::class, 'index']);

Route::get('/Books/ShowAll', [BookController::class, 'index']);
Route::get('Books/Show/{id}',[BookController::class,'show']);
Route::put('Books/Show/Borrow/{id}', [BookController::class, 'Borrow']);


Route::middleware(['auth'])->group(function () {
    
    Route::get('/dash', function () {
        return view('Dashboard.index');
    });    

    Route::get('/Dashboard/Books',[BookController::class,'Dashindex']);
    Route::post('/Books/store',[BookController::class,'store']);
    Route::patch('/Books/update',[BookController::class,'update']);
    Route::delete('/Books/destroy',[BookController::class,'destroy']);

    Route::get('/UserBorrowed',[BookController::class,'UserBorrowed']);






    Route::get('/Profile/index', [ProfileController::class, 'index']);
    Route::patch('/Profile/update', [ProfileController::class, 'update']);

    Route::get('/Dashboard/Users', [UserController::class, 'index']);
});




Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
