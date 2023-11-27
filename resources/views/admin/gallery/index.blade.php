@extends('admin.layouts.app')
@section('content')
    <section id="main-content">
        <section class="wrapper">
            <!-- page start-->
            <div class="row">
                <div class="col-sm-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Gallery Images
                            <span class="tools pull-right">
                                <a href="javascript:;" class="fa fa-chevron-down"></a>
                                <a href="javascript:;" class="fa fa-times"></a>
                            </span>
                        </header>
                        <div class="panel-body">
                            <a href="{{route('gallery.create')}}" class="btn btn-success" style="margin-bottom: 10px">Add New <i class="fa fa-plus px-2"></i></a>

                            <div class="adv-table">
                                <div class="row">
                                    @foreach ($galleries as $gallery) 
                                    <div class="col-lg-3">
                                        <img src="{{asset('uploads/gallery/'.$gallery->image)}}" height="200px" width="100%">
                                        <p>
                                            <form method="POST" action="{{route('gallery.destroy',$gallery->id)}}"></form>
                                            @csrf
                                            @method('DELETE')
                                            <button onclick="return confirm('Are you sure you want to delete this item?')" class="btn btn-danger mx-2"><i class="bx bx-trash"></i></button>
                                            <span class="btn brn-xs btn-warnning"><Strong>Category: {{$gallery->category->title}}</Strong></span>
                                        </p>
                                    </div>
                                    @endforeach
                                </div>
                                {{-- <table class="display table table-bordered table-striped" id="dynamic-table">
                                    <thead>
                                        <tr>
                                            <th>Category</th>
                                            <th>Title</th>
                                            <th>Image</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($galleries as $gallery)   
                                        <tr class="gradeX">
                                            <td>{{$gallery->category->title}}</td>
                                            <td>{{$gallery->title}}</td>
                                            <td><img src="{{asset('uploads/gallery/'.$gallery->image)}}" height="100" width="100"></td>
                                            
                                            <td>
                                                <a href="{{route('admin.gallery.destroy',['id'=>$gallery->id])}}" class="btn btn-danger mx-2"><i class="fa fa-trash-o"></i></a>
                                            </td>
                                        </tr>
                                        @endforeach

                                    </tbody>
                                </table> --}}
                            </div>
                        </div>
                    </section>
                </div>
            </div>
           
            <!-- page end-->
        </section>
    </section>
@endsection
