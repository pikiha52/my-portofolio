<?php

use App\Http\Controllers\WelcomeController;
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

Route::get('/', [WelcomeController::class, 'index'])->name('/');
Route::get('/porto', [WelcomeController::class, 'porto'])->name('my-projects');
Route::get('/cv', [WelcomeController::class, 'curriculum_vitae'])->name('my-cv');
