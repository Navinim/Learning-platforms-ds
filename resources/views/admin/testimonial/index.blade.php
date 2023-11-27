@extends('admin.layouts.app')
@section('content')
    <section id="main-content">
        <section class="wrapper">
            <!-- page start-->
            <div class="row">
                <div class="col-sm-12">
                    <section class="card">
                        <div class="card-header">
                            <h5>Testimonials (What Client's Say?)</h5>
                            
                            <a href="{{route('testimonials.create')}}" class="btn btn-success" style="margin-bottom: 10px">Add New <i class="bx bx-plus px-2"></i></a>
                        </div>
                        <div class="card-body">                        

                            <div class="adv-table">
                                <table class="display table table-bordered table-striped" id="dynamic-table">
                                    <thead>
                                        <tr>
                                            <th>Name</th>                                            
                                            <th>Country</th>
                                            <th>Message</th>                                            
                                            <th>Image</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($testimonials as $testimonial)   
                                        <tr class="gradeX">
                                            <td>{{$testimonial->name}}</td>                                            
                                            <td>{{$testimonial->country}}</td>
                                            <td>{!! $testimonial->message !!}</td>                                            
                                            <td><img src="{{url('uploads/testimonials/'.$testimonial->image)}}" height="100" width="100"></td>
                                            <td>
                                                <a href="{{route('testimonials.edit',$testimonial->id)}}" class="btn btn-primary mx-2"><i class="bx bx-edit"></i></a>
                                                <form method="POST" action="{{route('testimonials.destroy',$testimonial->id)}}">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button onclick="return confirm('Are you sure you want to delete this item?')" class="btn btn-danger mt-3 mx-2"><i class="bx bx-trash"></i></button>
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
