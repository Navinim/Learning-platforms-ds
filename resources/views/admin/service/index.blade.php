@extends('admin.layouts.app')
@section('content')
    <section id="main-content">
        <section class="wrapper">
            <!-- page start-->
            <div class="row">
                <div class="col-sm-12">
                    <section class="panel">
                        <header class="panel-heading">
                           Services
                            <span class="tools pull-right">
                                <a href="javascript:;" class="fa fa-chevron-down"></a>
                                <a href="javascript:;" class="fa fa-times"></a>
                            </span>
                        </header>
                        <div class="panel-body">
                            <a href="{{route('our-services.create')}}" class="btn btn-success" style="margin-bottom: 10px">Add New <i class="fa fa-plus px-2"></i></a>

                            <div class="adv-table">
                                <table class="display table table-bordered table-striped" id="dynamic-table">
                                    <thead>
                                        <tr>
                                            <th>Title</th>
                                            <th>Icon</th>
                                            <th>Description</th>
                                            {{-- <th>Image</th>
                                            <th>Home Service</th> --}}
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($services as $service)   
                                        <tr class="gradeX">
                                            <td>{{$service->title}}</td>
                                            <td><img  style="background-color: rgb(0, 0, 0)" src="{{asset('uploads/services')}}/{{$service->img}}"></td>
                                            <td>{!! $service->description !!}</td>
                                            {{-- <td><img src="{{asset('storage/images/services')}}/{{$service->image}}" height="100" width="100"></td>
                                            <td>@if ($service->home_service === 'home_service')
                                                <span class="text-success"><i class="fa fa-check-square"></i></span>
                                            @else
                                                <span class="text-danger"><i class="fa fa-minus-square"></i></span>
                                            @endif</td> --}}
                                            <td>
                                                <a href="{{route('our-services.edit',$service->id)}}" class="btn btn-primary mx-2"><i class="bx bx-edit"></i></a>
                                                <form method="POST" action="{{route('our-services.destroy',$service->id)}}">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button onclick="return confirm('Are you sure you want to delete this item?')" class="btn btn-danger  mt-2 mx-2"><i class="bx bx-trash-alt"></i></button>
                                                </form>
                                               
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
