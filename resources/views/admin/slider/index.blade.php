@extends('admin.layouts.app')
@section('content')
    <section id="main-content">
        <section class="wrapper">
            <!-- page start-->
            <div class="row">
                <div class="col-sm-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Slider Images
                            <span class="tools pull-right">
                                <a href="javascript:;" class="fa fa-chevron-down"></a>
                                <a href="javascript:;" class="fa fa-times"></a>
                            </span>
                        </header>
                        <div class="panel-body">
                            {{-- <a href="{{route('slider-image.create')}}" class="btn btn-success" style="margin-bottom: 10px">Add Image <i class="fa fa-plus px-2"></i></a> --}}

                            <div class="adv-table">
                                <table class="display table table-bordered table-striped" id="dynamic-table">
                                    <thead>
                                        <tr>
                                            <th>Title</th>
                                            <th>Sub Title</th>
                                            <th>Image</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($sliders as $slider)   
                                        <tr class="gradeX">
                                            <td>{!! $slider->title !!}</td>
                                            <td>{!! $slider->sub_title !!}</td>
                                            <td> <img height="200" width="200" src="{{asset('uploads/slider')}}/{{$slider->image}}"></td>
                                            <td class="d-flex justify-content-center">
                                                <a href="{{route('slider-image.edit',$slider->id)}}" class="btn btn-primary mx-2"><i class="bx bx-edit-alt"></i></a>
                                                {{-- <form method="POST" action="{{route('slider-image.destroy',$slider->id)}}">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button onclick="return confirm('Are you sure you want to delete this item?')" class="btn btn-danger mx-2"><i class="bx bx-trash-alt"></i></button>
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
