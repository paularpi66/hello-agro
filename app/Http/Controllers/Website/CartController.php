<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Cart;
use App\Models\Project;
use App\Models\Product;

class CartController extends Controller
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
        return view('website.cart');
    }


    public function addtocart(Project $project)
    {
        //return $project->quantity;

       $add = Cart::add([
            'id' => $project->id, // inique row ID
            'user_id' => Auth::user()->id, // inique row ID
            'name' => $project->name,
            'price' => $project->amount,
            'quantity' => 1,
            'attributes' => [
                'imageName' => $project->image,
            ],
        ]);

        if($add){
            return redirect('/cart');
        }


        

    }

    public function itemremove($id){
        $removeoperation = Cart::remove($id);

        if($removeoperation){
            return back()->with('Success','Remove success');        }
    }


    public function addtocart2(Product $product)
    {
        //return $project->quantity;


        //return $product;
       $add = Cart::add([
            'id' => $product->id, // inique row ID
            'user_id' => Auth::user()->id, // inique row ID
            'name' => $product->name,
            'price' => $product->price,
            'quantity' => 1,
            'attributes' => [
                'imageName' => $product->image,
            ],
        ]);

        if($add){
            return redirect('/cart');
        }


        

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
