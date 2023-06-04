<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


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

Route::get('/', function () {
    return redirect('/home');
});

Route::get('/home', function() {
    return view('index')->with('success', 'Please note that this website was developed
    by Adam Lee as a demonstration project.  Inkwell Libraries in no way represents a
    real business');
});

Route::prefix('/profile')->middleware(['auth', 'verified'])->group(function () {
    Route::get('/home', function() {
        return view('profile.home');
    });
});

Route::get('/catalog', 'App\Http\Controllers\BooksController@index');

//enable auth routes
Auth::routes();

