@extends('layouts.seller')
@section('admin_content')


 <div class="container my-5">
    <div class="row">
        <div class="col-md-12">
            
<div class="col-md-5 mx-auto">
                	<div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="col-md-9 heading_title">
                                All Category Information
                             </div>
                            <div class="clearfix"></div>
                        </div>
                      <div class="panel-body">
                          <table id="example" class="table align-middle mb-0 bg-white">
                          		<thead class="table_head">
                            		<tr>
                                    	<th>ID</th>
                                    	<th>Category Name</th>

                                    </tr>
                            	</thead>
                                <tbody>


                                @foreach($alldata as $data)

                                	<tr>
                                    	  <td>{{$data->id}}</td>

                                        
                                        <td>{{$data->name}}</td>
                                       
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