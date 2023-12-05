@extends('admin.layouts.app')
@section('content')
    <section id="main-content">
        <section class="wrapper">
            <!-- page start-->
            <div class="row">
                <div class="col-sm-12">
                    <section class="card">
                        <header class="card-header">
                            Add Feedback
                        </header>
                        <div class="card-body">
                            <form role="form" action="{{ route('testimonial.store') }}" enctype="multipart/form-data" method="POST">@csrf
                                <div class="form-group">
                                    <label for="type">Type of feedback</label><sup>*</sup>
                                    <select class="form-select" name="type" id="type" aria-label="Default select example">
                                        <option selected>Select the feedback type</option> 
                                        <option value="Text">Text Format</option>                                                                           
                                        <option value="Video">Video</option>                                        
                                      </select>
                                </div>
                                <div class="form-group" id="nameField">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control" name="name" id="name" placeholder="students full Name">
                                </div>                               
                                <div class="form-group" id="positionField">
                                    <label for="position">Student's Position</label>
                                    <input type="text" class="form-control" name="position" id="position"
                                        placeholder="Sr. Developer">
                                </div>
                                <div class="form-group" id="urlField">
                                    <label for="videoUrl">Youtube Links</label>
                                    <input type="text" class="form-control" name="videoUrl" id="videoUrl"
                                        placeholder="Sr. Developer">
                                </div>
                                <div class="form-group" id="feedbackField">
                                    <label>Message</label>
                                    <textarea rows="7" name="feedback" id="message" class="form-control" placeholder="Client Review"> </textarea>
                                </div>                               
                                <div class="form-group" id="imageField">
                                    <label for="image">Student's Image</label>
                                    <input type="file" class="form-control"  id="image" name="image">
                                    <p class="help-block">Upload client image leave null.</p>
                                </div>
                                <button type="submit" class="btn btn-info mt-3">Submit</button>
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
        $(document).ready(function () {            
            $("#imageField").hide(); 
            $("#nameField").hide();   
            $("#positionField").hide();
            $("#urlField").hide();
            $("#feedbackField").hide();            
            $("#type").change(function () {
                var selectedType = $(this).val();    
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
        });
    </script>
@endsection