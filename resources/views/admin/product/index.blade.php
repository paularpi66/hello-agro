@extends('layouts.admin')
@section('admin_content')


 <div class="container my-5">
    <div class="row">
        <div class="col-md-12">
            
<div class="col-md-11 mx-auto">
                	<div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="col-md-9 heading_title">
                                All Product Information
                             </div>
                            <div class="clearfix"></div>
                        </div>
                      <div class="panel-body">
                          <table id="example" class="table align-middle mb-0 bg-white">
                          		<thead class="table_head">
                            		<tr>
                                    	<th>Product Name</th>
                                        <th>Product Price</th>
                                        <th>Product Add By</th>
                                        <th>Product Status</th>           
                                        <th>Manage</th>

                                    </tr>
                            	</thead>
                                <tbody>


                                @foreach($alldata as $data)

                                	<tr>
                                    	  <td>{{$data->name}}</td>

                                        
                                        <td>{{$data->price}}</td>
                                        <td>{{$data->product_upload_by}}</td>
                                        <td>{{ $data->status == 0 ? 'Pending' : 'Approved' }}</td>

                                        <td>

                                        @if($data->status == 0 )
                                            <a onclick="return window.confirm('Are you sure?');" href="{{url('admin/product/approve/'.$data->id)}}">Approve</a>
                                            @else 
                                            <a onclick="return window.confirm('Are you sure?');" href="{{url('admin/product/disapproved/'.$data->id)}}">Disapproved</a>
                                            @endif


                                        <a style="color:red" onclick="return window.confirm('Are you sure?');" href="{{url('admin/product/delete/'.$data->id)}}">Delete</a>



                                        

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