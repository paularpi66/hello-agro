<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Category;
use App\Models\Shipping;
use App\Models\Orders;
use App\Models\Product;
use App\Models\Payment;
use Illuminate\Support\Facades\Auth;

class ProductOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $alldata = Shipping::orderBy('id','desc')->where('order_type',2)->get();
        return view('admin.product_order.index',compact('alldata'));

    }

    public function user_index()
    {

        $alldata = Shipping::orderBy('id','desc')->where('customer_id',Auth::user()->id)->get();
        return view('my-order',compact('alldata'));

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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $order_id = $id;
        $shipping_data = Shipping::where('id',$order_id)->firstorFail();
        $order_detail = Orders::where('order_id',$order_id)->get();
        $all_products = Product::all();
        
        //

        $order_all_details = array();

        foreach($order_detail as $single){


          
            $product_name = Product::where('id',$single->product_id)->firstorFail();

            $all_detail = array(
                "product_name" => $product_name['name'],
                "quantity" => $single->quantity,
                "price" => $single->price,

            );

            array_push($order_all_details,$all_detail);


            
            



        } 

        //return $order_all_details;


        //PAYMENT DETAILS

        $payment_details = Payment::where('order_id',$id)->firstorFail();


        //return $payment_details;

        return view('admin.order.show',compact('shipping_data','order_all_details','order_id','payment_details'));



    }







    public function user_show($id)
    {
        $order_id = $id;
        $shipping_data = Shipping::where('id',$order_id)->firstorFail();
        $order_detail = Orders::where('order_id',$order_id)->get();
        $all_products = Product::all();



        
        //

        $order_all_details = array();

        foreach($order_detail as $single){


          
            $product_name = Product::where('id',$single->product_id)->firstorFail();

            $all_detail = array(
                "product_name" => $product_name['name'],
                "quantity" => $single->quantity,
                "price" => $single->price,

            );

            array_push($order_all_details,$all_detail);


            
            



        } 

        //return $order_all_details;

        return view('my-order-single',compact('shipping_data','order_all_details','order_id'));



    }













    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $order_id = $id;
        $shipping_data = Shipping::where('id',$order_id)->firstorFail();

        return view('admin.product_order.edit',compact('order_id','shipping_data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $id = $request['id'];

        $update = Shipping::where('id',$id)->update([
            'order_status'=>$_POST['order_status'],
        ]);

        if($update){
            return redirect('admin/order/view/'.$id);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = Shipping::where('id',$id)->delete();

        if($delete){
            return redirect('admin/product-order/');

        }
    }
}
