@extends('admin.layouts.app')
@section('content')
    <section id="main-content">
        <section class="wrapper">
            <!-- page start-->
            <div class="row">
                <div class="col-sm-12">
                    <section class="card">
                        <div class="card-header">
                            <h5>Edit Testimonials (What Client's Say?)</h5>                            
                            <a href="{{route('testimonials.index')}}" class="btn btn-success" style="margin-bottom: 10px">Add New <i class="bx bx-share px-2"></i></a>
                        </div>
                        <div class="card-body">
                            <form role="form" action="{{ route('testimonials.update',$testimonial->id) }}" enctype="multipart/form-data" method="POST">@csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control" name="name" id="name" value="{{$testimonial->name}}" placeholder="Client Name">
                                </div>
                                
                                <div class="form-group">
                                    <label for="country">Country Name</label>
                                    <input type="text" class="form-control" name="country" value="{{$testimonial->country}}" id="country"
                                        placeholder="Settle country Name">
                                </div>
                                <div class="form-group">
                                    <label>Message</label>
                                    <textarea rows="7" name="message" id="message" class="form-control" placeholder="Client Review">{{$testimonial->message}} </textarea>
                                </div>
                                <div class="form-group">
                                    <label for="image">Students Image</label>
                                    <input type="file" class="form-control" id="image" name="image" value="{{$testimonial->image}}">
                                    <p class="help-block">Change client image leave null.</p>
                                    <img src="{{asset('uploads/testimonials/')}}/{{$testimonial->image}}" height="100" width="100">
                                </div>
                                <button type="submit" class="btn btn-info mt-2">Submit</button>
                            </form>

                        </div>
                    </section>
                </div>
            </div>
        </section>
    </section>
@endsection

@section('js')
    <script>
        CKEDITOR.replace( 'message');
    </script>
@endsection