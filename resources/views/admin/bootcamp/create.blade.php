@extends('admin.layouts.app')
@section('content')
    <section id="main-content">
        <section class="wrapper">
            <!-- page start-->
            <div class="row">
                <div class="col-sm-12">
                    <section class="card">
                        <div class="card-body">
                        <div class="card-title">
                            Bootcamp Courses
                        </div>                        
                            <form role="form" action="{{ route('bootcamps.store') }}" enctype="multipart/form-data" method="POST">@csrf
                                <div class="form-group">
                                    <label for="tag">Tag</label>
                                    <input type="text" class="form-control"  name="tag" id="tag" placeholder="e.g.Development">
                                </div>
                                <div class="form-group">
                                    <label for="title">Title</label>
                                    <input type="text" class="form-control" name="title" id="title" placeholder="e.g. Full stack developer">
                                </div>
                                <div class="form-group">
                                    <label for="sub_title">Sub Title</label>
                                    <input type="text" class="form-control" name="sub_title" id="sub_title" placeholder="e.g. full stack developer">
                                </div>                               
                                <div class="form-group ">
                                    <label for="banner_description">Banner Description</label>
                                    <div class="">
                                        <textarea class="form-control" name="banner_description" id="banner_description"></textarea>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="description">Course Description</label>
                                    <div class="">
                                        <textarea class="form-control" name="description" id="description"></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="event_gain">Gain From Event</label>
                                    <div class="">
                                        <textarea class="form-control" name="event_gain" id="event_gain"></textarea>
                                    </div>                                    
                                </div>                        
                                
                                <div class="form-group">
                                    <label for="banner">Banner Image</label>
                                    <input type="file" class="form-control" id="banner" name="banner">
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
        CKEDITOR.replace( 'banner_description');
        CKEDITOR.replace( 'event_gain');
        CKEDITOR.replace( 'description');
        
    </script>
@endsection