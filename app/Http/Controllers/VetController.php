<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vet;
use Illuminate\Support\Carbon;
use Image;
use Illuminate\Support\Facades\Auth;
use App\Models\FarmerProblem;

class VetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


     public function __construct()
     {
         $this->middleware(['auth','isVet']);
         
     }
 

    public function index()
    {
        return view('vet.index');
    }



    
    public function farmer_index()
    {
        
        $alldata = FarmerProblem::orderBy('id','DESC')->where('vet_id',Auth::user()->id)->get();
        return view('vet.farmerproblem',compact('alldata'));
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
        $data = FarmerProblem::where('id',$id)->firstorFail();
        return view('vet.show',compact('data'));
    }

    public function solve($id)
    {

        $solve = FarmerProblem::where('id',$id)->update([
            'status'=> 1,
            'solved_by'=> Auth::user()->name,
            'solved_by_user_id'=> Auth::user()->id,

        ]);

        if($solve){
            return redirect('vet/me/farmerissue');

        }

    }

    public function notsolve($id)
    {

        $notsolve = FarmerProblem::where('id',$id)->update([
            'status'=> 0,
            'solved_by'=> 'Not Solved Yet',
            'solved_by_user_id'=> '',
        ]);

        if($notsolve){
            return redirect('vet/me/farmerissue');

        }

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
        $delete = FarmerProblem::where('id',$id)->delete();

        if($delete){
            return redirect('admin/farmerproblem/');

        }
    }
}
