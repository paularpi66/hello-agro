@extends('layouts.admin')
@section('admin_content')


 <div class="container my-5">
    <div class="row">
        <div class="col-md-12">
            
<div class="col-md-11 mx-auto">
                	<div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="col-md-9 heading_title">
                                All Seller Application Information
                             </div>
                            <div class="clearfix"></div>
                        </div>
                      <div class="panel-body">
                          <table id="example" class="table align-middle mb-0 bg-white">
                          		<thead class="table_head">
                            		<tr>
                                    	<th>Name</th>
                                        <th>Product Quantity</th>
                                        <th>Expected Profit</th>
                                        <th>Status</th>
                                        <th>Manage</th>

                                    </tr>
                            	</thead>
                                <tbody>


                                @foreach($alldata as $data)

                                	<tr>
                                    	  <td>{{$data->full_name}}</td>

                                        
                                        <td>{{$data->product_quantity}}</td>
                                        <td>{{$data->expected_profit}}</td>
                                        <td>{{ $data->status == 0 ? 'Pending' : 'Approved' }}</td>


                                        <td>
                                        	<a href="{{url('admin/applyseller/view/'.$data->id)}}">View</a>
                                        
                                            
                                            @if($data->status == 0 )
                                            <a onclick="return window.confirm('Are you sure?');" href="{{url('admin/applyseller/approve/'.$data->id)}}">Approve</a>
                                            @else 
                                            <a onclick="return window.confirm('Are you sure?');" href="{{url('admin/applyseller/disapproved/'.$data->id)}}">Disapproved</a>
                                            @endif
                                            <a onclick="return window.confirm('Are you sure?');" href="{{url('admin/applyseller/delete/'.$data->id)}}">Delete</a>
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