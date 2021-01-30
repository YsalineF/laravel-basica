<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Works;

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

// ROUTE PAR DEFAUT
// PATTERN: /
Route::get('/', function () {
    return view('home.index');
})->name('home');

// ROUTE PORTFOLIO : LISTE DES WORKS
// PATTERN: /portfolio
// CTRL: Works
// ACTION: index
Route::get('/portfolio', [Works::class, 'index'])->name('works.index');

// ROUTE PORTFOLIO : MORE WORKS
// PATTERN: /portfolio/ajax/more
// CTRL: Works
// ACTION: more
Route::get('/portfolio/ajax/more', [Works::class, 'more'])->name('works.ajax.more');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
