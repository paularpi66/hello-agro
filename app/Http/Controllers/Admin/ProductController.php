<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Product;
use App\Models\Category;
use App\Models\Shipping;
use App\Models\Orders;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Carbon;
use Image;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id = Auth::user()->id;
        $alldata = Product::orderBy('id','DESC')->get();
        return view('admin.product.index',compact('alldata'));
    }
    public function product_page()
    {


        $products = Product::with('category')->orderBy('id','desc')->where('status',1)->get();
        $categories = Category::with('products')->get();

        return view('website.product',compact('products','categories'));
    }

    public function single_product_page($id){


        $single_product = Product::where('id',$id)->firstorFail();
        return view('website.single-product',compact('single_product'));

    }

    // public function admin_product_page_index()
    // {
    //     $alldata = Product::orderBy('id','DESC')->get();
    //     return view('admin.allproduct',compact('alldata'));

    // }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.product.addproduct',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $insert = Product::insertGetId([

            'name'=>$_POST['name'],
            'product_upload_by'=>Auth::user()->name,
            'user_id'=>Auth::user()->id,
            'user_name'=>Auth::user()->name,
            'category_id'=>$_POST['category_id'],
            'price'=>$_POST['price'],
            'status'=>1,

            'description'=>$_POST['description'],
            'short_description'=>$_POST['short_description'],
            'created_at'=>Carbon::now('Asia/Dhaka')->toDateTimeString(),
            'updated_at'=>Carbon::now('Asia/Dhaka')->toDateTimeString(),

        ]);

        if($request->hasFile('image')){
            $image = $request->File('image');
            $imageName = 'product_'.$insert.'_'.time().'.'.$image->getClientOriginalExtension();
            Image::make($image)->save('uploads/product/'.$imageName);

            Product::where('id',$insert)->update([
                'image'=>$imageName,
                'updated_at'=>Carbon::now('Asia/Dhaka')->toDateTimeString(),
    
            ]);
        }


        if($insert){
            return redirect('/admin/product');
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
        $delete = Product::where('id',$id)->delete();

        if($delete){
            return redirect('admin/product');

        }
    }




    public function approve($id)
    {

        $approve = Product::where('id',$id)->update([
            'status'=> 1,

        ]);

        if($approve){
            return redirect('admin/product/');

        }

    }


    public function disapproved($id)
    {

        $disapproved = Product::where('id',$id)->update([
            'status'=> 0,

        ]);

        if($disapproved){
            return redirect('admin/product/');

        }

    }









}
