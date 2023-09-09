@extends('layouts.admin')
@section('admin_content')


 <div class="container">
    <div class="row">
        <div class="col-md-12 p-5">
            
<div class="col-md-12">
                	<div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="col-md-9 heading_title">
                                All Orders Information
                             </div>
                            <div class="clearfix"></div>
                        </div>
                      <div class="panel-body">
                          <table id="example" class="table align-middle mb-0 bg-white">
                          		<thead class="table_head">
                            		<tr>
                                    	<th>Order ID</th>
                                        <th>Order By</th>
                                        <th>Order Time</th>
                                        <th>Manage</th>

                                    </tr>
                            	</thead>
                                <tbody>


                                @foreach($alldata as $data)

                                	<tr>
                                    	  <td>{{$data->id}}</td>

                                        
                                        <td>{{$data->full_name}}</td>
                                        <td>{{$data->updated_at}}</td>

                                        <td>
                                        	<a href="{{url('admin/order/view/'.$data->id)}}">View</a>
                                            <a href="{{url('admin/order/edit/'.$data->id)}}">Edit</a>
                                            <a onclick="return window.confirm('Are you sure?');" href="{{url('admin/order/delete/'.$data->id)}}">Delete</a>
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