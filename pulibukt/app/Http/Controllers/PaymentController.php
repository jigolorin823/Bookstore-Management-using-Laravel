<?php

namespace App\Http\Controllers;

use App\Payment;
use App\Genre;
use App\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\DB;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $payments = Payment::all();
        $carts = DB::table('carts')->groupBy('carts.product_id')->select(DB::raw('carts.product_id,sum(carts.quantity) as quantity'))->get();
        $genres = Genre::all();
        return View::make('payment.index')->with(compact('payments'))->with(compact('carts'))->with(compact('genres'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    { 
        $data = $request->all();
        // dd($data);
        $total = $data['total'];
        $order_id = $data['order_id'];
        $carts = DB::table('carts')->groupBy('carts.product_id')->select(DB::raw('carts.product_id,sum(carts.quantity) as quantity'))->get();
        $genres = Genre::all();
        return View::make('payment.create')->with(compact('carts'))->with(compact('genres'))->with(compact('total'))->with(compact('order_id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        Payment::create([
            'order_id' => $data['order_id'],
            'card_num' => $data['card_num'],
            'address' => $data['address'],
            'amount' => $data['amount'],
        ]);

        return redirect(route('home'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function show(Payment $payment)
    {
        return View::make('payment.show')->with(compact('payment'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function edit(Payment $payment)
    {
        return View::make('payment.edit')->with(compact('payment'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Payment $payment)
    {
        $data = $request->all();
        $payment->name = $data['name'];
        $payment->save();
        return redirect(route('payment.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Payment $payment)
    {
        //
    }
}
