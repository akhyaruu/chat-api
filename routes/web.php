<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware('auth')->group(function () {
    Route::get('/', [UserController::class, 'index'])->name('index');
});




Route::get('/tes/chat', [UserController::class, 'tesChat']);
Route::get('/tes/login', [UserController::class, 'tesLogin']);
Route::get('/tes/register', [UserController::class, 'tesRegister']);