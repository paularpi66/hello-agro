<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Apply;
use Illuminate\Support\Carbon;
use Image;
use Illuminate\Support\Facades\Auth;

class ApplyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * 
     */


     public function __construct()
    {
        $this->middleware('auth');
    }





    public function index()
    {

        $alldata = Apply::orderBy('id','DESC')->get();
        return view('admin.applied.index',compact('alldata'));

    }

    public function index2()
    {

        $alldata = Apply::orderBy('id','DESC')->where('user_id',Auth::user()->id)->get();
        return view('inv-status',compact('alldata'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('website.apply');
    }
    public function thanks()
    {
        return view('website.thanks2');
    }


    public function seller_thanks()
    {
        return view('website.thanks4');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {



        $insert = Apply::insertGetId([
            'full_name'=>$_POST['full_name'],
            'nid'=>$_POST['nid'],
            'fathername'=>$_POST['fathername'],
            'mothername'=>$_POST['mothername'],
            'email'=>$_POST['email'],
            'phone'=>$_POST['phone'],
            'farm_category'=>$_POST['farm_category'],
            'farm_name'=>$_POST['farm_name'],
            'req_amount'=>$_POST['req_amount'],
            'return_invest'=>$_POST['return_invest'],
            'land_amount'=>$_POST['land_amount'],
            'duration'=>$_POST['duration'],
            'net_profit'=>$_POST['net_profit'],
            'district'=>$_POST['district'],
            'full_address'=>$_POST['full_address'],
            'fund_used'=>$_POST['fund_used'],
            'user_id'=> Auth::user()->id,
            'created_at'=>Carbon::now('Asia/Dhaka')->toDateTimeString(),
            'updated_at'=>Carbon::now('Asia/Dhaka')->toDateTimeString(),

        ]);

        if($request->hasFile('nid')){
            $image = $request->File('nid');
            $imageName = 'nid_'.$insert.'_'.time().'.'.$image->getClientOriginalExtension();
            Image::make($image)->save('uploads/nid/'.$imageName);

            Apply::where('id',$insert)->update([
                'nid_pic'=>$imageName,
                'updated_at'=>Carbon::now('Asia/Dhaka')->toDateTimeString(),
    
            ]);
        }

        if($request->hasFile('profile_photo')){
            $image = $request->File('nid');
            $imageName = 'profile_photo_'.$insert.'_'.time().'.'.$image->getClientOriginalExtension();
            Image::make($image)->save('uploads/profile/'.$imageName);

            Apply::where('id',$insert)->update([
                'profile_photo'=>$imageName,
                'updated_at'=>Carbon::now('Asia/Dhaka')->toDateTimeString(),
    
            ]);
        }

        if($insert){
            return redirect('/invest-application-ty');
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
        $data = Apply::where('id',$id)->firstorFail();
        return view('admin.applied.show',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Apply::where('id',$id)->firstorFail();
        return view('admin.applied.edit',compact('data'));
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
        $delete = Apply::where('id',$id)->delete();

        if($delete){
            return redirect('admin/apply/');

        }
    }
}
