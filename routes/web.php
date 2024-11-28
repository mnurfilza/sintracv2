<?php

use App\Http\Controllers\ChangePasswordController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InfoUserController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ResetController;
use App\Http\Controllers\SessionsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
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







Route::get('/', [HomeController::class, 'home']);
Route::get("/products/{category}",[HomeController::class, 'products']);
Route::get("/products/brand/{category}",[HomeController::class, 'brands']);
Route::get("/products/brand/type/{id}",[HomeController::class, 'type']);
Route::get("/product/detail/{id}",[HomeController::class, 'detail']);

Route::get('/login', function () {
    return view('session/login-session');
})->name('login');