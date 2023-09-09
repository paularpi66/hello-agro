<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\VegCultivation;
use App\Models\Seller;
use App\Models\AgriInfo;
use App\Models\Project;
use App\Models\Vet;
use Illuminate\Support\Facades\Auth;


class WebsiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $professional_vet = Vet::orderBy('id','DESC')->where('status',1)->get();
        $all_data = AgriInfo::where('status',1)->orderBy('id','DESC')->get();
        $all_project = Project::where('status',1)->orderBy('id','DESC')->get();

        return view('website.index',compact('all_data','all_project','professional_vet'));
    }


    public function vegcul()
    {
        $all_data = VegCultivation::where('status',1)->orderBy('id','DESC')->get();
        return view('website.vegcul',compact('all_data'));
    }

    public function graincul()
    {
        return view('website.graincul');
    }


    public function single_proj($id)
    {
        $single_proj = Project::where('id',$id)->firstorFail();
        return view('website.single-project',compact('single_proj'));
    }


    public function seller_status()
    {
        $alldata = Seller::orderBy('id','DESC')->where('user_id',Auth::user()->id)->get();
        return view('seller-status',compact('alldata'));
    }

    public function project_all()
    {
        $all_project = Project::where('status',1)->orderBy('id','DESC')->get();

        return view('website.project',compact('all_project'));
    }


    public function privacy(){
        return view('website.privacy');
    }


    public function termsandcondition(){
        return view('website.termsandcondition');
    }


    public function cow_far(){
        return view('website.cow-farming');
    }





    public function agriculture_information()
    {
        $all_agri = AgriInfo::orderBy('id','DESC')->get();

        return view('website.informations',compact('all_agri'));
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
