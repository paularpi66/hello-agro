@extends('layouts.admin')
@section('admin_content')
<main class="content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">


                            <table id="example" class="table align-middle mb-0 bg-white">
                                <thead class="bg-light">
                                    <tr>
                                        <th>Info Name</th>
                                        <th>Image</th>
                                        <th>Status</th>
                                        <th>Description</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($all_data as $single_data)
                                    <tr>
                                            <td>
                                                @if(!$single_data->info_title == "")
                                                {{ $single_data->info_title }}
                                                @else
                                                No Title Here
                                                @endif
                                            </td>
                                            <td>
                                                @if(!$single_data->image == "")
                                                <img src="{{asset('uploads/image/'.$single_data->image)}}" height="40px" alt="">
                                                @else
                                                <img src="{{asset('uploads/No_image_available.svg.webp')}}" class="img-fluid" width="" height="50px" alt="">
                                                @endif
                                            </td>
                                            <td>
                                            {{ $single_data->status == 1 ? 'ON' : 'OFF' }}
                                            </td>
                                            <td>{{ $single_data->description }}</td>
                                            <td>
                                                <a href="{{url('admin/agriinfo-edit/'.$single_data->id)}}">Edit</a>
                                                <a onclick="return window.confirm('Are you sure?');" href="{{url('admin/agriinfo-del/'.$single_data->id)}}">Delete</a>
                                            </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </main>


            @if (session('deleted'))
            <div class="toast show p-2">
            <div class="toast-header">
                <strong class="me-auto"> Thanks </strong>
                <button type="button" class="btn-close" data-bs-dismiss="toast"> </button>
            </div>
            <div class="toast-body">
                <p> Successfully Added </p>
            </div>
        </div>

            @endif
@endsection