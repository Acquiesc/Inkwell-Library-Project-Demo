<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Models\Book;
use App\Models\User;

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
    $favorite_books = Book::latest()->limit(5)->get();

    return view('index')->with('favorite_books', $favorite_books);
});

Route::get('/catalog', 'App\Http\Controllers\BooksController@index');
Route::get('/catalog/view/{id}', 'App\Http\Controllers\BooksController@show');

Route::prefix('/profile')->middleware(['auth', 'verified'])->group(function () {
    Route::get('/home', function() {
        return view('profile.home');
    });
    Route::get('/orders', function() {
        return view('profile.orders');
    });
    Route::get('/order-history', function() {
        return view('profile.order-history');
    });
    Route::get('/fees', function() {
        return view('profile.fees');
    });
    Route::get('/cart', 'App\Http\Controllers\CartsController@index');
    Route::post('/cart/store', 'App\Http\Controllers\CartsController@store');
    Route::delete('/cart/remove/{id}', 'App\Http\Controllers\CartsController@destroy');

    Route::post('/order/store', 'App\Http\Controllers\OrdersController@store');
});

Route::prefix('/admin')->middleware(['auth', 'verified', 'admin'])->group(function () {
    Route::get('/home', function() {
        return view('admin.home');
    });
    Route::get('/orders', function() {
        return view('admin.orders');
    });
    Route::get('/catalog', function() {
        $books = Book::all();

        return view('admin.catalog')->with('books', $books);
    });
    Route::get('/catalog/edit/{id}', 'App\Http\Controllers\BooksController@edit');
    Route::put('/catalog/update/{id}', 'App\Http\Controllers\BooksController@update');
    Route::get('/catalog/create', function() {
        return view('admin.create-book');
    });
    Route::post('/catalog/new/store', 'App\Http\Controllers\BooksController@store');
    Route::get('/fees', function() {
        return view('admin.fees');
    });
});

//enable auth routes
Auth::routes();

