@extends('layouts.admin')
@section('admin_content')
<div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="col-md-9 heading_title">
                                Order Information
                             </div>
                             <div class="col-md-3 text-right">
                             	<a href="{{url('admin/product')}}" class="btn btn-sm btn btn-primary"><i class="fa fa-plus-circle"></i> All Product</a>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                      <div class="panel-body">
                          <div class="col-md-1">
                          </div>
                          <div class="col-md-9">
                          	<table class="table table-hover table-striped table-responsive view_table_cus">

                            	<tr>
                                    <td>Order ID</td>
                                    <td>:</td>
                                    <td>{{ $order_id }}</td>
                                </tr>

                                <tr>
                                    <td>Order By</td>
                                    <td>:</td>
                                    <td>{{ $shipping_data->full_name }}</td>
                                </tr>

                                <tr>
                                    <td>Current Order Status</td>
                                    <td>:</td>
                                    <td>{{ $shipping_data->order_status == 0 ? 'Pending' : 'Completed' }}</td>
                                </tr>

                                <tr>
                                    <td>Change the Order Status</td>
                                    <td>:</td>
                                    <td>
                                        <form action="{{ url('admin/order/update') }}" method="post">
                                            @csrf
                                            <input type="hidden" name="id" value="{{ $order_id }}">
                                            <select name="order_status" id="">
                                                <option value="0">Pending</option>
                                                <option value="1">Completed</option>
                                            </select>
                                            <input type="submit" value="Change">
                                        </form>
                                    </td>
                                </tr>
                                

                                <tr>
                                    <td>Delete/Cancel the Order</td>
                                    <td>:</td>
                                    <td><a onclick="return window.confirm('Are you sure?');" href="{{url('admin/order/delete/'.$shipping_data->id)}}">Delete This Order</a></td>
                                </tr>





                                

                            </table>



                            
                          </div>
                          <div class="col-md-2">
                          </div>
                      </div>
                      <div class="panel-footer">
                        <div class="col-md-4">
                            <a href="#" class="btn btn-sm btn-primary">PDF</a>
                        </div>
                        <div class="col-md-4">
                        </div>
                        <div class="col-md-4 text-right">
                        	
                        </div>
                        <div class="clearfix"></div>
                      </div>
                    </div>
@endsection