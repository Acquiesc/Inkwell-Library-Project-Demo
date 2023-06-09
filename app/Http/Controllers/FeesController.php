<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

use App\Models\FeePaymentLog;
use App\Models\Order;

class FeesController extends Controller
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
        if(Auth::user()->is_admin)
        {
            $validator = Validator::make($request->all(), [ 
                'order_id' => 'required',
                'amount_paid' => 'required',
            ]);
        } else {
            $validator = Validator::make($request->all(), [ 
                'order_id' => 'required',
                'amount_paid' => 'required',
                'card_number' => 'required',
                'cvv' => 'required',
                'expiration_date' => 'required',
                'street' => 'required',
                'city' => 'required',
                'state' => 'required',
                'country' => 'required',
                'zipcode' => 'required',
            ]);
        }

        if($validator->fails()) {
            return back()->with('errors', $validator->errors());
        }

        $payment = new FeePaymentLog;

        $payment->order_id = $request->input('order_id');
        $payment->amount_paid = $request->input('amount_paid');
        if(!Auth::user()->is_admin)
        {
            $payment->card_number = $request->input('card_number');
            $payment->cvv = $request->input('cvv');
            $payment->expiration_date = $request->input('expiration_date');
            $payment->street = $request->input('street');
            $payment->city = $request->input('city');
            $payment->state = $request->input('state');
            $payment->country = $request->input('country');
            $payment->zipcode = $request->input('zipcode');
        }

        $payment->save();

        $order = Order::find($payment->order_id);
        $order->total_fees_paid = $order->total_fees_paid + $payment->amount_paid;
        $order->total_fees_due = $order->total_fees_accrued - $order->total_fees_paid;
        $order->save();

        return redirect('/profile/fees')->with('success', 'Successfully made fee payment');
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
        //
    }
}
