@extends('layouts.vet')
@section('admin_content')


 <div class="container my-5">
    <div class="row">
        <div class="col-md-12">
            
<div class="col-md-11 mx-auto">
                	<div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="col-md-9 heading_title">
                                All Farmer Problem Information
                             </div>
                            <div class="clearfix"></div>
                        </div>
                      <div class="panel-body">
                          <table id="example" class="table align-middle mb-0 bg-white">
                          		<thead class="table_head">
                            		<tr>
                                    	<th>Problem Name</th>
                                        <th>Problem Title</th>
                                        <th>Problem Detail</th>
                                        <th>Manage</th>

                                    </tr>
                            	</thead>
                                <tbody>


                                @foreach($alldata as $data)

                                	<tr>
                                    	  <td>{{$data->problem_name}}</td>

                                        
                                        <td>{{$data->problem_title}}</td>
                                        <td>{{$data->problem_detail}}</td>

                                        <td>
                                        	<a href="{{url('vet/me/farmerissue/view/'.$data->id)}}">View</a>
                                        <br>
                                            @if($data->status == 0 )
                                            <a onclick="return window.confirm('Are you sure?');" href="{{url('vet/me/farmerissue/solve/'.$data->id)}}">Solve</a>
                                            @else 
                                            <a onclick="return window.confirm('Are you sure?');" href="{{url('vet/me/farmerissue/notsolve/'.$data->id)}}">Not solve</a>
                                            @endif
                                            <br>

                                            <!--
                                            <a onclick="return window.confirm('Are you sure?');" href="{{url('/vet/me/farmerissue/delete/'.$data->id)}}">Delete</a>
                                            -->
                                        </td>
                                       
                                    </tr>
                                @endforeach

                                </tbody>
                          </table>
                      </div>
                      <div class="panel-footer">
                        
                        <div class="col-md-4">
                        </div>
                        <div class="col-md-4 text-right">
                        	
                        </div>
                        <div class="clearfix"></div>
                      </div>
                    </div>
                </div>



        </div>
    </div>
 </div>

@endsection