<?php

namespace App\Http\Controllers;

use App\Notifications\OrderNotification;
use App\Order;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware(['auth','verified']);
    }
    public function index()
    {
        $orders=Order::all();
        return view('Order.Orders',compact('orders'));
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
        $user=User::all();
        $data=request()->validate([
           'name'=>'required',
           'email'=>'required',
           'Quantity'=>'required',
           'size'=>'required',
           'phone'=>'required',
            'product_name'=>'required',
            'address'=>'required',
            'message'=>'required'
        ]);

        $order=Order::create([
            'name'=>$data['name'],
            'email'=>$data['email'],
            'Quantity'=>$data['Quantity'],
            'size'=>$data['size'],
            'phone'=>$data['phone'],
            'product_name'=>$data['product_name'],
            'address'=>$data['address'],
            'message'=>$data['message'],
        ]);
        Notification::send($user, new OrderNotification($order));
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        $order->delete();
        return redirect('/order');
    }
}
