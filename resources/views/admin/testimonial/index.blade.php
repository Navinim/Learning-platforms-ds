@extends('admin.layouts.app')
@section('content')
    <section id="main-content">
        <section class="wrapper">
            <!-- page start-->
            <div class="row">
                <div class="col-sm-12">
                    <section class="card">
                        <div class="card-header d-flex justify-between">
                            <h5>Testimonials (What Client's Say?)</h5>
                            
                            <a href="{{route('testimonial.create')}}" class="btn btn-success" style="margin-bottom: 10px">Add New <i class="bx bx-plus px-2"></i></a>
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
                                            <th>Video</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($testimonial as $testimonial)   
                                        <tr class="gradeX">
                                            <td>{{$testimonial->name}}({{$testimonial->type}})</td>                                            
                                            <td>{{$testimonial->position}}</td>
                                            <td>{!! $testimonial->feedback !!}</td>                                            
                                            <td><img src="{{url('uploads/testi/'.$testimonial->image)}}" height="100" width="100"></td>
                                            <td>{{$testimonial->videoUrl}}</td>
                                            <td>
                                                <a href="{{route('testimonial.edit',$testimonial->id)}}" class="btn btn-primary mx-2"><i class="bx bx-edit"></i></a>
                                                <form method="POST" action="{{route('testimonial.destroy',$testimonial->id)}}">
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
