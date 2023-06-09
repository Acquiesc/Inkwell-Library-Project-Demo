<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Carbon\Carbon;

use App\Models\Order;

class OrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = Auth::user();

        $unavailable_book = false;

        foreach($user->carts as $cart_item) {
            $available_books = $cart_item->book->total_quantity - $cart_item->book->total_currently_checked_out;

            if($available_books > 0) {
                $book = $cart_item->book;

                $currently_checked_out = $book->total_currently_checked_out;
                $book->total_currently_checked_out = ($currently_checked_out + 1);
                $book->save();  

                $order = new Order;
    
                $order->user_id = $cart_item->User_ID;
                $order->book_id = $cart_item->Book_ID;
                $order->available_date = Carbon::now()->addWeeks(1)->toDateString();
                $order->due_date = Carbon::now()->addWeeks(3)->toDateString();

                $order->save();

                $cart_item->delete();
            } else {
                $unavailable_book = true;
                $cart_item->delete();
            }
        }

        if($unavailable_book) {
            return redirect('/profile/orders')->with('warning', 'Your order has been placed.  Unfortunately some books are currently unavailable and has been removed from your cart');
        } else {
            return redirect('/profile/orders')->with('success', 'Your order has been placed');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $order = Order::find($id);
        $order->checked_in_date = Carbon::now()->toDateTimeString();
        $order->is_active = 0;
        $order->save();

        return back()->with('success', 'Checked in book successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
