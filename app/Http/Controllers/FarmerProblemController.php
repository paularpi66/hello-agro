<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FarmerProblem;
use Illuminate\Support\Carbon;
use Image;
use Illuminate\Support\Facades\Auth;
use App\Models\Vet;

class FarmerProblemController extends Controller
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
        $alldata = FarmerProblem::orderBy('id','DESC')->get();
        return view('admin.farmerproblem.index',compact('alldata'));
    }

    public function index2()
    {
        //frontend
        $alldata = FarmerProblem::orderBy('id','DESC')->where('user_id',Auth::user()->id)->get();
        return view('farmer-problem-status',compact('alldata'));
    }


    public function solve($id)
    {

        $solve = FarmerProblem::where('id',$id)->update([
            'status'=> 1,

        ]);

        if($solve){
            return redirect('admin/farmerproblem/');

        }

    }

    public function notsolve($id)
    {

        $notsolve = FarmerProblem::where('id',$id)->update([
            'status'=> 0,

        ]);

        if($notsolve){
            return redirect('admin/farmerproblem/');

        }

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $all_vet = Vet::orderBy('id','DESC')->where('status',1)->get();       
        return view('website.apply-farmerproblem',compact('all_vet'));            


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $insert = FarmerProblem::insertGetId([
            'problem_name'=>$_POST['problem_name'],
            'problem_title'=>$_POST['problem_title'],
            'problem_detail'=>$_POST['problem_detail'],
            'phone'=>$_POST['phone'],
            'addresss'=>$_POST['addresss'],
            'user_id'=> Auth::user()->id,
            'user_name'=> Auth::user()->name,
            'vet_id'=> $_POST['vet_id'],
            'solved_by'=> 'Pending',
            //'solved_by_user_id'=> 'Pending',
            'created_at'=>Carbon::now('Asia/Dhaka')->toDateTimeString(),
            'updated_at'=>Carbon::now('Asia/Dhaka')->toDateTimeString(),

        ]);

        if($request->hasFile('problem_image1')){
            $image = $request->File('problem_image1');
            $imageName = 'problem_image1_'.$insert.'_'.time().'.'.$image->getClientOriginalExtension();
            Image::make($image)->save('uploads/nid/'.$imageName);

            FarmerProblem::where('id',$insert)->update([
                'problem_image1'=>$imageName,
                'updated_at'=>Carbon::now('Asia/Dhaka')->toDateTimeString(),
    
            ]);
        }

        if($request->hasFile('problem_image2')){
            $image = $request->File('problem_image2');
            $imageName = 'problem_image2_'.$insert.'_'.time().'.'.$image->getClientOriginalExtension();
            Image::make($image)->save('uploads/profile/'.$imageName);

            FarmerProblem::where('id',$insert)->update([
                'problem_image2'=>$imageName,
                'updated_at'=>Carbon::now('Asia/Dhaka')->toDateTimeString(),
    
            ]);
        }

        if($insert){
            return redirect('/problem-ty');
        }

    }

    public function thanks(){
        return view('website.thanks3');
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
        return view('admin.farmerproblem.show',compact('data'));
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
