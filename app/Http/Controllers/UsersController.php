<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Order;

class UsersController extends Controller
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

    public function manageUser($id)
    {
        $user = User::find($id);

        $active_orders = Order::where('user_id', $user->id)->where('is_active', 1)->get();
        $order_history = Order::where('user_id', $user->id)->where('is_active', 0)->get();

        return view('admin.manage-user')->with(['user' => $user, 'active_orders' => $active_orders, 'order_history' => $order_history]);
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

    public function queryUser(Request $request)
    {
        $id = $request->query('searchTerm');

        $user = User::find($id);

        return response()->json($user);
    }

    public function searchPin(Request $request)
    {
        $pin = $request->query('searchTerm');

        $users = User::where('pin', 'like', $pin . '%')->limit(10)->get();

        return response()->json($users);
    }

    public function searchName(Request $request)
    {
        $name = $request->query('searchTerm');

        $users = User::where('name', 'like', $name . '%')->limit(10)->get();

        return response()->json($users);
    }

    public function searchEmail(Request $request)
    {
        $email = $request->query('searchTerm');

        $users = User::where('email', 'like', $email . '%')->limit(10)->get();

        return response()->json($users);
    }
}
