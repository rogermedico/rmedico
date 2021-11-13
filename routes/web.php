<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Views\HomeController;
use App\Http\Controllers\Views\ProjectsController;
use App\Http\Controllers\Views\CvController;
use App\Http\Controllers\Views\ContactController;

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

Route::get('/', [HomeController::class,'getView'])->name('home');
Route::get('/projects', [ProjectsController::class,'getView'])->name('projects');
Route::get('/cv', [CvController::class,'getView'])->name('cv');
Route::get('/contact', [ContactController::class,'getView'])->name('contact');
Route::post('/contact', [ContactController::class,'contactForm'])->name('contactPost');
