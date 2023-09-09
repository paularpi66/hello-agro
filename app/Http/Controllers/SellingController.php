<?php

namespace App\Http\Controllers;

use App\Models\Seller;
use App\Models\Product;
use App\Models\Category;
use App\Models\Orders;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
use Image;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class SellingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


     public function __construct()
     {
         $this->middleware('auth');
     }




    public function index()
    {

        $alldata = Seller::orderBy('id','DESC')->get();
        return view('admin.seller.index',compact('alldata'));

    }


    public function index2()
    {

        return view('seller.index');

    }


    public function index3()
    {
        $id = Auth::user()->id;
        $alldata = Product::orderBy('id','DESC')->where('user_id',$id)->get();
        return view('seller.allproduct',compact('alldata'));

    }


    public function index4()
    {
        $categories = Category::all();
        return view('seller.addproduct',compact('categories'));
    }


    public function addcategory(){
        return view('seller.addcategory');
    }


    public function addcategory_store(){
        

        $insert = Category::insertGetId([

            'name'=>$_POST['name'],
            'created_at'=>Carbon::now('Asia/Dhaka')->toDateTimeString(),
            'updated_at'=>Carbon::now('Asia/Dhaka')->toDateTimeString(),

        ]);


        if( $insert ){
            return redirect('/seller/me/allproduct');
        }

    }

    public function allcategory(){
        $alldata = Category::all();
        return view('seller.allcategory',compact('alldata'));
    }


    public function store2(Request $request)
    {

        $insert = Product::insertGetId([

            'name'=>$_POST['name'],
            'product_upload_by'=>Auth::user()->name,
            'user_id'=>Auth::user()->id,
            'user_name'=>Auth::user()->name,
            'category_id'=>$_POST['category_id'],
            'price'=>$_POST['price'],
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
            return redirect('/seller/me/allproduct');
        }
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $alldata = Seller::orderBy('id','DESC')->where('user_id',Auth::user()->id)->get();
        return view('website.apply-seller',compact('alldata'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $insert = Seller::insertGetId([





            'full_name'=>$_POST['full_name'],
            'nid'=>$_POST['nid'],
            'fathername'=>$_POST['fathername'],
            'mothername'=>$_POST['mothername'],
            'email'=>$_POST['email'],
            'phone'=>$_POST['phone'],
            'product_quantity'=>$_POST['product_quantity'],
            'product_type'=>$_POST['product_type'],
            'avg_product_price'=>$_POST['avg_product_price'],
            'expected_profit'=>$_POST['expected_profit'],
            'payment_method'=>$_POST['payment_method'],
            'bkash_account_no'=>$_POST['bkash_account_no'],
            'full_address'=>$_POST['full_address'],
            'user_id'=> Auth::user()->id,
            'created_at'=>Carbon::now('Asia/Dhaka')->toDateTimeString(),
            'updated_at'=>Carbon::now('Asia/Dhaka')->toDateTimeString(),

        ]);

        if($request->hasFile('nid')){
            $image = $request->File('nid');
            $imageName = 'seller_nid_'.$insert.'_'.time().'.'.$image->getClientOriginalExtension();
            Image::make($image)->save('uploads/nid/'.$imageName);

            Seller::where('id',$insert)->update([
                'nid_pic'=>$imageName,
                'updated_at'=>Carbon::now('Asia/Dhaka')->toDateTimeString(),
    
            ]);
        }

        if($request->hasFile('profile_photo')){
            $image = $request->File('profile_photo');
            $imageName = 'seller_photo_'.$insert.'_'.time().'.'.$image->getClientOriginalExtension();
            Image::make($image)->save('uploads/profile/'.$imageName);

            Seller::where('id',$insert)->update([
                'profile_photo'=>$imageName,
                'updated_at'=>Carbon::now('Asia/Dhaka')->toDateTimeString(),
    
            ]);
        }

        if($insert){
            return redirect('/seller-application-ty');
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
        $data = Seller::where('id',$id)->firstorFail();
        return view('admin.seller.show',compact('data'));
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
        $delete = Seller::where('id',$id)->delete();

        if($delete){
            return redirect('admin/applyseller');

        }
    }


    public function approve($id)
    {

        $approve = Seller::where('id',$id)->update([
            'status'=> 1,

        ]);

        //$data = Vet::where('id',$id)->firstorFail();
        
        
        //$user_id = $approve['user_id'];
        //$alldata = Vet::orderBy('id','DESC')->where('user_id',$user_id)->get();

        //$user_id = $data['user_id'];
        //return  $user_id;
        //$user_id = Auth::user()->id;
        $data = Seller::where('id',$id)->firstorFail();
        $user_id = $data['user_id'];
        Auth::user()->where('id',$user_id)->update([
            'role'=> 4,
        ]);




        if($approve){
            return redirect('admin/applyseller/');

        }

    }


    public function disapproved($id)
    {

        $disapproved = Seller::where('id',$id)->update([
            'status'=> 0,

        ]);




        $data = Seller::where('id',$id)->firstorFail();
        $user_id = $data['user_id'];
        Auth::user()->where('id',$user_id)->update([
            'role'=> 0,
        ]);



        if($disapproved){
            return redirect('admin/applyseller/');

        }

    }








    public function orderforme(){

        $allmyproduct = Product::where('user_id', Auth::user()->id)->where('status',1)->get();
        
        


        $allmyproductid = array();

        foreach($allmyproduct as $myproductsingle){

            array_push($allmyproductid,$myproductsingle['id']);


        } 
        //return $allmyproductid;

        $allmyorder = array();
        $single_product = array();


        foreach($allmyproductid as $single_id){
            
        }

        return $allmyorder;

    }

}
