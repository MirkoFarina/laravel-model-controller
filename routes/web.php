<?php

use App\Http\Controllers\Guest\PageController;
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

Route::get('/', [PageController::class, 'Index'])->name('home');

Route::get('/about', [PageController::class, 'About'])->name('about');

Route::get('/description/{id}', [PageController::class, 'Description'])->name('descriptionMovie');

Route::get('/contacts', [PageController::class, 'Contacts'])->name('contacts');
