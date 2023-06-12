<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\OrdersController;

use Carbon\Carbon;

use App\Models\Book;
use App\Models\FeePaymentLog;
use App\Models\User;
use App\Models\Order;
use App\Models\Event;

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
    
    $events = Event::orderBy('date')->limit(3)->get();

    return view('index')->with(['favorite_books' => $favorite_books, 'events' => $events]);
});

Route::get('/catalog', 'App\Http\Controllers\BooksController@index');
Route::get('/catalog/view/{id}', 'App\Http\Controllers\BooksController@show');

Route::get('/catalog/search/title', 'App\Http\Controllers\BooksController@searchTitle');
Route::get('/catalog/search/author', 'App\Http\Controllers\BooksController@searchAuthor');
Route::get('/catalog/search/ISBN', 'App\Http\Controllers\BooksController@searchISBN');

Route::get('/events', function() {
    $upcoming_events = Event::orderBy('date')->limit(3)->get();

    $events = Event::orderBy('date')->get();

    return view('events')->with(['events' => $events, 'upcoming_events' => $upcoming_events]);
});

Route::get('/events/view/{id}', 'App\Http\Controllers\EventsController@show');

Route::prefix('/profile')->middleware(['auth', 'verified'])->group(function () {
    Route::get('/home', function() {
        $orders = Order::all();

        foreach ($orders as $order) {
            $order->calculateFees();
        }

        return view('profile.home');
    });
    Route::get('/orders', function() {
        $current_orders = Order::where('User_ID', Auth::user()->id)->where('is_active', 1)->get();

        foreach ($current_orders as $order) {
            $order->calculateFees();
        }

        return view('profile.orders')->with('current_orders', $current_orders);
    });
    Route::get('/order-history', function() {
        $orders = Order::where('User_ID', Auth::user()->id)->where('is_active', 0)->get();

        foreach ($orders as $order) {
            $order->calculateFees();
        }

        return view('profile.order-history')->with('orders', $orders);
    });
    Route::get('/fees', function() {
        $active_orders = Order::where('user_id', Auth::user()->id)->where('total_fees_due', '>', 0)->where('is_active', 1)->get();

        $payment_logs = Auth::user()->orders->flatMap(function ($order) {
            return $order->feePaymentLogs;
        });

        foreach ($active_orders as $order) {
            $order->calculateFees();
        }

        return view('profile.fees')->with(['active_orders' => $active_orders, 'payment_logs' => $payment_logs]);
    });
    Route::get('/fees/pay/{id}', function($id) {
        $order = Order::find($id);
        
        return view('profile.pay-fee')->with('order', $order);
    });
    Route::post('/fees/pay/validate', 'App\Http\Controllers\FeesController@store');

    Route::get('/cart', 'App\Http\Controllers\CartsController@index');
    Route::post('/cart/store', 'App\Http\Controllers\CartsController@store');
    Route::delete('/cart/remove/{id}', 'App\Http\Controllers\CartsController@destroy');

    Route::post('/order/store', 'App\Http\Controllers\OrdersController@store');
});

Route::prefix('/admin')->middleware(['auth', 'verified', 'admin'])->group(function () {
    Route::get('/home', function() {
        $orders = Order::all();

        foreach ($orders as $order) {
            $order->calculateFees();
        }

        return view('admin.home');
    });

    Route::get('/orders', function() {        
        $current_orders = Order::where('is_active', 1)->get();

        foreach ($current_orders as $order) {
            $order->calculateFees();
        }

        return view('admin.orders')->with('current_orders', $current_orders);
    });

    Route::put('/orders/check-in/{id}', 'App\Http\Controllers\OrdersController@update');

    Route::get('/users/search/pin', 'App\Http\Controllers\UsersController@searchPin');
    Route::get('/users/search/name', 'App\Http\Controllers\UsersController@searchName');
    Route::get('/users/search/email', 'App\Http\Controllers\UsersController@searchEmail');
    
    Route::get('/users/search/get', 'App\Http\Controllers\UsersController@queryUser');
    
    Route::get('/orders/user/{id}', 'App\Http\Controllers\UsersController@manageUser');



    Route::get('/orders/history', function() {
        $orders = Order::where('is_active', 0)->get();

        foreach ($orders as $order) {
            $order->calculateFees();
        }
        
        return view('admin.orders-history')->with('orders', $orders);
    });

    Route::get('/fees/manage/{id}', function($id) {
        $order = Order::find($id);

        return view('admin.collect-fee')->with('order', $order);
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

    Route::get('/events', 'App\Http\Controllers\EventsController@index');
    Route::get('/events/create', 'App\Http\Controllers\EventsController@createEvent');

    Route::post('/events/create/store', 'App\Http\Controllers\EventsController@store');

});

//enable auth routes
Auth::routes();