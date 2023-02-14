<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
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

Route::get('/', [UserController::class, 'index'])->name("index");

Route::get('/registro', [UserController::class, 'create']);

Route::post('/createUser', [UserController::class, 'createUser']) -> name("createUser");

Route::post('/logInUser', [UserController::class, 'login']) -> name("logInUser");

Route::get('/main', [UserController::class, 'main']) -> name("main");

