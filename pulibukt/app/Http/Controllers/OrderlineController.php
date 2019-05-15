<?php

namespace App\Http\Controllers;

use App\Orderline;
use App\Order;
use App\Cart;
use App\Genre;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\DB;

class OrderlineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orderlines = Orderline::join('products', 'products.id', '=', 'orderlines.product_id')
                                ->join('books', 'books.id', '=', 'products.book_id')
                                ->get();
        return View::make('orderline.index')->with(compact('orderlines'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    
    {
        return View::make('orderline.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $date = \Carbon\Carbon::now()->format('d/m/Y');
        $data = $request->all();
        Order::create([
            'user_id' => $data['user_id'],
            'date' => $date
        ]);
        $last = Order::all()->last()->id;
        // dd($data['product_id'][1]);
        for($q=0;$q<count($data['product_id']);$q++){
            Orderline::create([
                'product_id' => $data['product_id'][$q],
                'order_id' => $last,
                'quantity' => $data['quantity'][$q]
            ]);
            $id = $data['product_id'][$q];
            $id+=0;
            // dd($id);
            $product = Product::findOrFail($id);
            $old = $product->quantity;
            // dd($product->id);
            $diff = $data['quantity'][$q];
            $new = ($old-$diff);
            // dd($new);
            $product->quantity = $new;
            $product->save();
        }
        // dd(count($data['product_id']));
        
        
        // dd($product->quantity." ".$product->id);

        $total = $data['total'];
        Cart::truncate();
        
        //dd(route('payment.create', ['total' => $total]));
        // return redirect(route('payment.create'))->with(compact('total'))->with(compact('last'));
        //return redirect(route('payment.create'))->with(['total' => $total]);
        return redirect(route('payment.create', ['total' => $total,'order_id'=>$last]));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Orderline  $orderline
     * @return \Illuminate\Http\Response
     */
    public function show($order_id)
    {
        $orderlines= Orderline::with('product')->get()->where('order_id','=',$order_id);
        $genres = Genre::all();
        $carts = DB::table('carts')->groupBy('carts.product_id')->select(DB::raw('carts.product_id,sum(carts.quantity) as quantity'))->get();
        return View::make('orderline.show')->with(compact('orderlines'))->with(compact('genres'))->with(compact('carts'))->with($order_id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Orderline  $orderline
     * @return \Illuminate\Http\Response
     */
    public function edit(Orderline $orderline)
    {
        return View::make('orderline.edit')->with(compact('orderline'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Orderline  $orderline
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Orderline $orderline)
    {
        $data = $request->all();
        $orderline->orderline_id = $data['orderline_id'];
        $orderline->order_id = $data['order_id'];
        $orderline->quantity = $data['quantity'];
        $orderline->save();
        return redirect(route('orderline.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Orderline  $orderline
     * @return \Illuminate\Http\Response
     */
    public function destroy(Orderline $orderline)
    {
        //
    }
}
