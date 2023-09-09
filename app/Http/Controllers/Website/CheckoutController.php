<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Models\Shipping;
use App\Models\Orders;
use Cart;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct(){
        $this->middleware('auth');
    }


    public function index()
    {
        return view('website.checkout');
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

        // $data = $request->all();
        // $data['customer_id'] = auth()->id();
        // $insert = Shipping::create($data);
        // if($insert){
        //     Cart::clear();
        //     return redirect('/thanks');
        // }



        $shipping = new Shipping();

        $shipping->full_name = $request->input('full_name');
        $shipping->email = $request->input('email');
        $shipping->phone = $request->input('phone');
        $shipping->country = $request->input('country');
        $shipping->order_type = $request->input('order_type');
        $shipping->full_address = $request->input('full_address');
        $shipping->city_town = $request->input('city_town');
        $shipping->zip_code = $request->input('zip_code');
        $shipping->created_at = Carbon::now('Asia/Dhaka');
        $shipping->updated_at = Carbon::now('Asia/Dhaka');
        $shipping->customer_id = Auth::user()->id;
        $shipping->total_amount = $request->input('total_amount');
        $shipping->save();

        $cart_items = Cart::getContent('user_id',Auth::user()->id);


        foreach($cart_items as $item){

            Orders::create([
                'order_id' => $shipping->id,
                'product_id' => $item->id,
                'quantity' => $item->quantity,
                'price' => $item->price,
            ]);

        }



        
        //return $cart_items;
          if($shipping){
            //Cart::clear();
            return redirect('/paynow/'.$shipping->id);
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


    public function thanks()
    {
        return view('website.thanks');
    }
}
