<?php

namespace App\Http\Controllers;
use App\Models\Vet;
use Illuminate\Support\Carbon;
use Image;
use Illuminate\Support\Facades\Auth;


use Illuminate\Http\Request;

class ApplyVetController extends Controller
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
        $alldata = Vet::orderBy('id','DESC')->get();
        return view('admin.vet.index',compact('alldata'));
    }
 



    public function index2()
    {
        $alldata = Vet::orderBy('id','DESC')->where('user_id',Auth::user()->id)->get();
        return view('vet-status',compact('alldata'));
    }

    public function index3()
    {
        $alldata = Vet::orderBy('id','DESC')->where('status',1)->get();
        return view('website.our-vets',compact('alldata'));
    }

    public function approve($id)
    {

        $approve = Vet::where('id',$id)->update([
            'status'=> 1,

        ]);

        //$data = Vet::where('id',$id)->firstorFail();
        
        
        //$user_id = $approve['user_id'];
        //$alldata = Vet::orderBy('id','DESC')->where('user_id',$user_id)->get();

        //$user_id = $data['user_id'];
        //return  $user_id;
        //$user_id = Auth::user()->id;
        $data = Vet::where('id',$id)->firstorFail();
        $user_id = $data['user_id'];
        Auth::user()->where('id',$user_id)->update([
            'role'=> 3,
        ]);




        if($approve){
            return redirect('admin/applyvet/');

        }

    }

    public function disapproved($id)
    {

        $disapproved = Vet::where('id',$id)->update([
            'status'=> 0,

        ]);




        $data = Vet::where('id',$id)->firstorFail();
        $user_id = $data['user_id'];
        Auth::user()->where('id',$user_id)->update([
            'role'=> 0,
        ]);



        if($disapproved){
            return redirect('admin/applyvet/');

        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $alldata = Vet::orderBy('id','DESC')->where('user_id',Auth::user()->id)->get();
        //return $alldata;
        return view('website.apply-vet',compact('alldata'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $insert = Vet::insertGetId([
            'full_name'=>$_POST['full_name'],
            'nid'=>$_POST['nid'],
            'fathername'=>$_POST['fathername'],
            'mothername'=>$_POST['mothername'],
            'email'=>$_POST['email'],
            'phone'=>$_POST['phone'],
            'bvc_reg_no'=>$_POST['bvc_reg_no'],
            'experience'=>$_POST['experience'],
            'specialist_area'=>$_POST['specialist_area'],
            'expected_fee'=>$_POST['expected_fee'],
            'district'=>$_POST['district'],
            'full_address'=>$_POST['full_address'],
            'user_id'=> Auth::user()->id,
            'created_at'=>Carbon::now('Asia/Dhaka')->toDateTimeString(),
            'updated_at'=>Carbon::now('Asia/Dhaka')->toDateTimeString(),

        ]);

        if($request->hasFile('nid')){
            $image = $request->File('nid');
            $imageName = 'nid_'.$insert.'_'.time().'.'.$image->getClientOriginalExtension();
            Image::make($image)->save('uploads/nid/'.$imageName);

            Vet::where('id',$insert)->update([
                'nid_pic'=>$imageName,
                'updated_at'=>Carbon::now('Asia/Dhaka')->toDateTimeString(),
    
            ]);
        }

        if($request->hasFile('profile_photo')){
            $image = $request->File('profile_photo');
            $imageName = 'vet_photo_'.$insert.'_'.time().'.'.$image->getClientOriginalExtension();
            Image::make($image)->save('uploads/profile/'.$imageName);

            Vet::where('id',$insert)->update([
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
        $data = Vet::where('id',$id)->firstorFail();
        return view('admin.vet.show',compact('data'));
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
        $delete = Vet::where('id',$id)->delete();

        if($delete){
            return redirect('admin/applyvet/');

        }
    }
}
