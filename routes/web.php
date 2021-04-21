<?php

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\LocalizatioController;
use App\Http\Controllers\UploadController;

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

Route::get('/', [MainController::class, 'home']);
//Route::get('/{lang}', [LocalizatioController::class, 'home']);
Route::get('/{l}', [MainController::class, 'homeL']);

Route::get('/courses', [MainController::class, 'courses']);
Route::get('/courses/{l}', [MainController::class, 'coursesL']);

Route::get('/Mathematics', [MainController::class, 'Mathematics']);
Route::get('/test', [MainController::class, 'test']);

//email sending
Route::get('/upload/{l}', [MainController::class, 'uploadL']);
Route::post('/upload', [UploadController::class, 'index'])->name('add');
