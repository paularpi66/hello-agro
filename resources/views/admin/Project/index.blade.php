@extends('layouts.admin')
@section('admin_content')
<main class="content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">


                            <table id="example" class="table align-middle mb-0 bg-white">
                                <thead class="bg-light">
                                    <tr>
                                        <th>Name</th>
                                        <th>Image</th>
                                        <th>Amount</th>
                                        <th>Location</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($all_project as $single_project)
                                    <tr>
                                            <td>
                                                @if(!$single_project->name == "")
                                                {{ $single_project->name }}
                                                @else
                                                No Title Here
                                                @endif
                                            </td>
                                            <td>
                                                @if(!$single_project->image == "")
                                                <img src="{{asset('uploads/image/'.$single_project->image)}}" height="40px" alt="">
                                                @else
                                                <img src="{{asset('uploads/No_image_available.svg.webp')}}" class="img-fluid" width="" height="50px" alt="">
                                                @endif
                                            </td>
                                            <td>{{ $single_project->amount }}</td>
                                            <td>{{ $single_project->location }}</td>

                                            <td>
                                            {{ $single_project->status == 1 ? 'ON' : 'OFF' }}
                                            </td>
                                            <td>
                                                <a href="{{url('admin/project-edit/'.$single_project->id)}}">Edit</a>
                                                <a onclick="return window.confirm('Are you sure?');" href="{{url('admin/project-del/'.$single_project->id)}}">Delete</a>
                                            </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </main>
@endsection