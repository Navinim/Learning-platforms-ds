@extends('admin.layouts.app')
@section('content')
    <section id="main-content">
        <section class="wrapper">
            <!-- page start-->
            <div class="row">
                <div class="col-sm-12">
                    <section class="card">
                        <div class="card-header d-flex justify-between">
                            <h5>Edit Testimonials (What Client's Say?)</h5>                            
                            <a href="{{route('testimonial.index')}}" class="btn btn-success" style="margin-bottom: 10px">Add New <i class="bx bx-share px-2"></i></a>
                        </div>
                        <div class="card-body">
                            <form role="form" action="{{ route('testimonial.update',$testimonial->id) }}" enctype="multipart/form-data" method="POST">@csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label for="type">Type of feedback</label><sup>*</sup>
                                    <select class="form-select" name="type" id="type" aria-label="Default select example">                                        
                                        <option value="{{ $testimonial->type}}" selected>{{ $testimonial->type}} Format</option>                                                                           
                                        {{-- <option value="Video"{{ $testimonial->type == 'Video' ? 'selected' : '' }}>Video</option>                                         --}}
                                      </select>
                                </div>
                                @if ($testimonial->type=='Text')
                                <div class="form-group" id="nameField">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control" name="name" value="{{$testimonial->name}}" id="name" placeholder="students full Name">
                                </div>                               
                                <div class="form-group" id="positionField">
                                    <label for="position">Student's Position</label>
                                    <input type="text" class="form-control" name="position"value="{{$testimonial->position}}"  id="position"
                                        placeholder="Sr. Developer">
                                </div>
                                
                                <div class="form-group" id="feedbackField">
                                    <label>Message</label>
                                    <textarea rows="7" name="feedback" id="message" class="form-control" placeholder="Client Review">{{$testimonial->feedback}} </textarea>
                                </div>                              
                               
                                <div class="form-group" id="imageField">
                                    <label for="image">Students Image</label>
                                    <input type="file" class="form-control" id="image" name="image" value="{{$testimonial->image}}">
                                    <p class="help-block">Change client image leave null.</p>
                                    <img src="{{asset('uploads/testimonials/')}}/{{$testimonial->image}}" height="100" width="100">
                                </div>
                                @endif
                                @if ($testimonial->type=='Video')
                                <div class="form-group" id="urlField">
                                    <label for="videoUrl">Youtube Links</label>
                                    <input type="text" class="form-control" name="videoUrl"value="{{$testimonial->videoUrl}}"  id="videoUrl"
                                        placeholder="Sr. Developer">
                                </div>
                                @endif                                                       
                                
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
     <script>                 
            $("#type").change(function (e) {
                var selectedType = $(this).val(); 
                //    e.preventDefault();
                if (selectedType === "Video") {
                    $("#imageField").hide(); 
                    $("#nameField").hide();   
                    $("#positionField").hide();
                    $("#urlField").show();
                    $("#feedbackField").hide(); 
                } else {
                    $("#imageField").show(); 
                    $("#nameField").show();   
                    $("#positionField").show();
                    $("#urlField").hide();
                    $("#feedbackField").show(); 
                }
            });
       
    </script>
@endsection