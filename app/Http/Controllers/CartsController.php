<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\Cart;

class CartsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();

        $cart_items = Cart::with('book')->where('User_ID', $user->id)->get();

        return view('profile.cart')->with('cart_items', $cart_items);
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
        $user_id = $request->input('user_id');
        $book_id = $request->input('book_id');

        $existing_cart = Cart::where('User_ID', $user_id)
                        ->where('Book_ID', $book_id)
                        ->first();;

        if($existing_cart) {
            return back()->with('error', 'This item is already in your cart');
        }

        $cart = new Cart;
        $cart->User_ID = $user_id;
        $cart->Book_ID = $book_id;
        $cart->save();

        return redirect('/catalog')->with('success', 'Item has been added to your cart ');
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cart_item = Cart::find($id);
        $cart_item->delete();
        return back()->with('success', 'Item has been removed from your cart');
    }
}
