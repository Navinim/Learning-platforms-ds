@extends('admin.layouts.app')
@section('content')
    <section id="main-content">
        <section class="wrapper">
            <!-- page start-->
            <div class="row">
                <div class="col-sm-12">
                    <section class="card">
                        <div class="card-header d-flex justify-between">
                            <h5>Our Consultants Team</h5>
                            
                            {{-- <a href="{{route('network.create')}}" class="btn btn-success" style="margin-bottom: 10px">Add New <i class="bx bx-plus px-2"></i></a> --}}
                        </div>
                        <div class="card-body">                          

                            <div class="adv-table">
                                <table class="display table table-bordered table-striped" id="dynamic-table">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Position</th>                                          
                                            <th>Image</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($network as $item)   
                                        <tr class="gradeX">
                                            <td>{{$item->title}}</td>
                                            <td>{{$item->detail}}</td>                                            
                                            <td><img src="{{url('uploads/networks/'.$item->image)}}" height="100" width="100"></td>
                                            <td>
                                                <a href="{{route('network.edit',$item->id)}}" class="btn btn-primary mx-2"><i class="bx bx-edit"></i></a>
                                                {{-- <form action="{{route('network.destroy',$item->id)}}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button onclick="return confirm('Are you sure you want to delete this user?');" class="btn btn-danger mx-2 mt-2"><i class="bx bx-trash"></i></button>
                                                </form> --}}
                                                
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </section>
                </div>
            </div>           
            <!-- page end-->
        </section>
    </section>
@endsection
