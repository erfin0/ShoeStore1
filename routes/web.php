<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Navbar;

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

// Route::get('/', [Navbar::class, 'index']);
Route::get('/', function () {
    return view('pages.home', ['name' => 'Finn']);
});

Route::get('/active', function () {
    return view('pages.active');
});