@extends('admin.layouts.app')
@section('content')
    <section id="main-content">
        <section class="wrapper">
            <!-- page start-->
            <div class="row">
                <div class="col-sm-12">
                    <section class="card">
                        <header class="card-header d-flex justify-between">
                            <h5>Slider Images</h5>
                            <a href="{{route('slider.create')}}" class="btn btn-success" style="margin-bottom: 10px">Add Image <i class="fa fa-plus px-2"></i></a>
                        </header>
                        <div class="card-body">
                            

                            <div class="adv-table">
                                <table class="display table table-bordered table-striped" id="dynamic-table">
                                    <thead>
                                        <tr>
                                            <th>Title</th>
                                            <th>Typed</th>
                                            <th>Image</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($slider as $item)   
                                        <tr class="gradeX">
                                            <td>{!! $item->title !!}</td>
                                            <td>
                                                <li>{{$item->typed1}}</li>
                                                <li>{{$item->typed2}}</li>
                                            </td>
                                            <td> <img height="200" width="200" src="{{asset('uploads/slider')}}/{{$item->image}}"></td>
                                            <td>
                                                {{-- <div class="d-flex justify-content-center"></div> --}}
                                                <a href="{{route('slider.edit',$item->id)}}" class="btn btn-primary mx-2 mb-2"><i class="bx bx-edit-alt"></i></a>
                                                <form method="POST" action="{{route('slider.destroy',$item->id)}}">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button onclick="return confirm('Are you sure you want to delete this item?')" class="btn btn-danger mx-2"><i class="bx bx-trash-alt"></i></button>
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
