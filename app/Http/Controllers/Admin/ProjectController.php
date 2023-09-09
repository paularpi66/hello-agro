<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Image;
use App\Models\Project;


class ProjectController extends Controller
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
        $all_project = Project::orderBy('id','DESC')->get();
        return view('admin.Project.index',compact('all_project'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('admin.Project.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {





        $insert = Project::insertGetId([
            'name'=>$_POST['name'],
            'amount'=>$_POST['amount'],
            'per_unit'=>$_POST['per_unit'],
            'location'=>$_POST['location'],
            'tagline'=>$_POST['tagline'],
            'duration'=>$_POST['duration'],
            'return'=>$_POST['return'],
            'net_profit'=>$_POST['net_profit'],
            'profit'=>$_POST['profit'],
            'risk'=>$_POST['risk'],
            'created_at'=>Carbon::now('Asia/Dhaka')->toDateTimeString(),
            'updated_at'=>Carbon::now('Asia/Dhaka')->toDateTimeString(),

        ]);

        if($request->hasFile('image')){
            $image = $request->File('image');
            $imageName = 'project_'.$insert.'_'.time().'.'.$image->getClientOriginalExtension();
            Image::make($image)->resize(280,216)->save('uploads/image/'.$imageName);

            Project::where('id',$insert)->update([
                'image'=>$imageName,
                'updated_at'=>Carbon::now('Asia/Dhaka')->toDateTimeString(),
    
            ]);
        }
 
        if($insert){
            //return redirect('admin/addagriinfo');
            return redirect('admin/project')->with('success', 'Added Successfully');   
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




        $project_id = $id;
        $data = Project::where('id',$project_id)->firstorFail();
        return view('admin.Project.edit',compact('data'));
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
        $update = Project::where('id',$id)->update([
            'name'=>$_POST['name'],
            'amount'=>$_POST['amount'],
            'per_unit'=>$_POST['per_unit'],
            'location'=>$_POST['location'],
            'tagline'=>$_POST['tagline'],
            'duration'=>$_POST['duration'],
            'return'=>$_POST['return'],
            'net_profit'=>$_POST['net_profit'],
            'profit'=>$_POST['profit'],
            'risk'=>$_POST['risk'],
            'created_at'=>Carbon::now('Asia/Dhaka')->toDateTimeString(),
            'updated_at'=>Carbon::now('Asia/Dhaka')->toDateTimeString(),
        ]);

        if($request->hasFile('image')){
            $image = $request->File('image');
            $imageName = 'project_'.$id.'_'.time().'.'.$image->getClientOriginalExtension();
            Image::make($image)->resize(280,216)->save('uploads/image/'.$imageName);

            Project::where('id',$id)->update([
                'image'=>$imageName,
                'updated_at'=>Carbon::now('Asia/Dhaka')->toDateTimeString(),
    
            ]);
        }

        if($update){
            //return redirect('admin/addagriinfo');
            return redirect('admin/project')->with('success', 'Added Successfully');   
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
        $delete = Project::where('id',$id)->delete();

        if($delete){
            return redirect('admin/project/')->with('deleted', 'Deleted Successfully');   ;

        }
    }
}
