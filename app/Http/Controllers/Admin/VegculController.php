<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Image;
use App\Models\VegCultivation;

class VegculController extends Controller
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
        $all_data = VegCultivation::where('status',1)->orderBy('id','DESC')->get();
        return view('admin.VegetableCultivation.index',compact('all_data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.VegetableCultivation.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $insert = VegCultivation::insertGetId([
            'plant_name'=>$_POST['plant_name'],
            'btn_title'=>$_POST['btn_title'],
            'description'=>$_POST['description'],
            'created_at'=>Carbon::now('Asia/Dhaka')->toDateTimeString(),
            'updated_at'=>Carbon::now('Asia/Dhaka')->toDateTimeString(),

        ]);

        if($request->hasFile('img_plant')){
            $image = $request->File('img_plant');
            $imageName = 'img_plant_'.$insert.'_'.time().'.'.$image->getClientOriginalExtension();
            Image::make($image)->resize(261, 261)->save('uploads/image/'.$imageName);

            VegCultivation::where('id',$insert)->update([
                'image'=>$imageName,
                'updated_at'=>Carbon::now('Asia/Dhaka')->toDateTimeString(),
    
            ]);
        }
 
        if($insert){
            return redirect('admin/addvegcul');
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
        $data = VegCultivation::where('id',$id)->firstorFail();
        return view('admin.VegetableCultivation.edit',compact('data'));
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
        $update = VegCultivation::where('id',$id)->update([
            'plant_name'=>$_POST['plant_name'],
            //'category_id'=>$_POST['product_name'],
            'btn_title'=>$_POST['btn_title'],
            //'image'=>'',
            'description'=>$_POST['description'],
            'updated_at'=>Carbon::now('Asia/Dhaka')->toDateTimeString(),
        ]);

        if($request->file('img_plant')){
        
        if($request->hasFile('img_plant')){
            $image = $request->File('img_plant');
            $imageName = 'vegcul_'.$id.'_'.time().'.'.$image->getClientOriginalExtension();
            Image::make($image)->resize(261, 261)->save('uploads/image/'.$imageName);
            

            VegCultivation::where('id',$id)->update([
                'image'=>$imageName,
                'updated_at'=>Carbon::now('Asia/Dhaka')->toDateTimeString(),
    
            ]);
        }
    }




        if($update){
            return redirect('admin/vegcul');
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
        $delete = VegCultivation::where('id',$id)->delete();

        if($delete){
            return redirect('admin/vegcul/');

        }
    }
}
