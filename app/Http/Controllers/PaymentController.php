<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shipping;
use App\Models\Payment;
use App\Models\Orders;
use Cart;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Carbon;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {

        return view('payment',compact('id'));
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
        // $cart_items = Cart::getContent('user_id',Auth::user()->id);


        // foreach($cart_items as $item){

        //     Orders::create([
        //         'order_id' =>  $item->order_id,
        //         'product_id' => $item->id,
        //         'quantity' => $item->quantity,
        //         'price' => $item->price,

        //     ]);

        // }

        //return $cart_items;


        $order_id = $request->input('order_id');


        $create = Payment::create([
            
            'order_id'=>$request->input('order_id'),
            'name'=>Auth::user()->name,
            'email'=>Auth::user()->email,
            'phone'=>Auth::user()->mobile_no,
            'amount'=>Cart::getSubTotal(),
            'total_amount'=>Cart::getSubTotal(),
            'address'=>Auth::user()->country,
            'bkash_no'=>$request->input('bkash_no'),
            'bkash_txnid'=>$request->input('bkash_txnl'),
            'rocket_no'=>$request->input('rocket_no'),
            'rocket_no'=>$request->input('rocket_no'),
            'rocket_txnid'=>$request->input('rocket_txnl'),
            'nagad_no'=>$request->input('nagad_no'),
            'nagad_txnid'=>$request->input('nagad_txnl'),
            'status'=>1,
            'order_status'=>0,
            'payment_status'=>0,
            'updated_at'=>Carbon::now('Asia/Dhaka')->toDateTimeString(),
        ]);


        // $update = Orders::where('order_id',$order_id)->create([
        //     'name'=>Auth::user()->name,
        //     'email'=>Auth::user()->email,
        //     'phone'=>Auth::user()->mobile_no,
        //     'amount'=>Cart::getSubTotal(),
        //     'address'=>Auth::user()->country,
        //     'status'=>1,
        //     'bkash_no'=>$request->input('bkash_no'),
        //     'bkash_txnid'=>$request->input('bkash_txnl'),
        //     'rocket_no'=>$request->input('rocket_no'),
        //     'rocket_no'=>$request->input('rocket_no'),
        //     'rocket_txnid'=>$request->input('rocket_txnl'),
        //     'nagad_no'=>$request->input('nagad_no'),
        //     'nagad_txnid'=>$request->input('nagad_txnl'),
        //     'order_status'=>0,
        //     'updated_at'=>Carbon::now('Asia/Dhaka')->toDateTimeString(),
        // ]);


        if($create){
            Cart::clear();
            return redirect('/thanks/');
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
