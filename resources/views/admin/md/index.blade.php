@extends('admin.layouts.app')
@section('content')
    <section id="main-content">
        <section class="wrapper">
            <!-- page start-->
            <div class="row">
                <div class="col-sm-12">
                    <section class="card">
                        <div class="card-header">
                            <h5>MD MEssage</h5>                            
                            {{-- <a href="{{route('members.create')}}" class="btn btn-success" style="margin-bottom: 10px">Add New <i class="bx bx-plus px-2"></i></a> --}}
                        </div>
                        <div class="card-body">                          

                            <div class="adv-table">
                                <table class="display table table-bordered table-striped" id="dynamic-table">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Position</th>
                                            <th>Message</th>                                          
                                            <th>Image</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                          
                                        <tr class="gradeX">
                                            <td>{{$md->name}}</td>
                                            <td>{{$md->position}}</td> 
                                            <td>{!! $md->message !!}</td>                                           
                                            <td><img src="{{url('uploads/mds/'.$md->image)}}" height="100" width="100"></td>
                                            <td>
                                                <a href="{{route('mds.edit',$md->id)}}" class="btn btn-primary mx-2"><i class="bx bx-edit"></i></a>
                                                {{-- <a href="{{route('mds.destroy',$md->id)}}" class="btn btn-danger mx-2"><i class="bx bx-trash"></i></a> --}}
                                            </td>
                                        </tr>
                                       

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
