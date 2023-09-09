<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SharminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


     public function cow(){
        return view('website.cow.cow');
     }
     public function cow1(){
        return view('website.cow.cow1');
     }

     public function cow2(){
        return view('website.cow.cow2');
     }


     public function cow3(){
        return view('website.cow.cow3');
     }


     public function cow4(){
        return view('website.cow.cow4');
     }


     public function cow5(){
        return view('website.cow.cow5');
     }

     public function hen(){
        return view('website.hen.hen');
     }


     public function hen1(){
        return view('website.hen.hen1');
     }


     public function hen2(){
        return view('website.hen.hen2');
     }


     public function hen3(){
        return view('website.hen.hen3');
     }


     public function hen4(){
        return view('website.hen.hen4');
     }


     public function hen5(){
        return view('website.hen.hen5');
     }


     public function fruit(){
      return view('website.fruits.fruit');
  }


     public function fish(){
      return view('website.fish.fish');
  }
  
  public function fish1(){
      return view('website.fish.fish1');
  }
  
  public function fish2(){
      return view('website.fish.fish2');
  }

  
  public function fish3(){
      return view('website.fish.fish3');
  }



  
  public function goat(){
      return view('website.goat.goat');
  }



  public function goat1(){
      return view('website.goat.goat1');
  }
  public function goat2(){
      return view('website.goat.goat2');
  }
  public function goat3(){
      return view('website.goat.goat3');
  }
  public function goat4(){
      return view('website.goat.goat4');
  }













    public function index()
    {
        //
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
