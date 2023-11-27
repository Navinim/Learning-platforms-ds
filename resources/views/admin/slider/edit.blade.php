@extends('admin.layouts.app')
@section('content')
    <section id="main-content">
        <section class="wrapper">
            <!-- page start-->
            <div class="row">
                <div class="col-sm-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Edit Slider Image
                        </header>
                        <div class="panel-body">
                            <form role="form" action="{{ route('slider-image.update',$slider->id) }}" enctype="multipart/form-data" method="POST">@csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label for="title">Title</label>
                                    <textarea type="text" class="form-control" name="title" id="title"  placeholder="Enter image overlay slogan">{{$slider->title}}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="sub_title">Sub Title</label>
                                    <input type="text" class="form-control" name="sub_title" id="sub_title" value="{{$slider->sub_title}}" placeholder="Enter image overlay slogan">
                                </div> 
                                <div class="form-group">
                                    <label for="description">Description </label>
                                    <textarea class="form-control" name="description" id="description" placeholder="Enter Sub title">{{$slider->description}}</textarea>
                                </div>                              
                                <div class="form-group">
                                    <label for="img">Upload Image</label>
                                    <input type="file" id="img" name="img" value="{{$slider->image}}" accept="image/png, image/gif, image/jpeg">
                                    <p class="help-block">Upload image like: .jpg, .png, gif, jpeg etc.</p>
                                    <img src="{{asset('uploads/slider')}}/{{$slider->image}}" height="100" width="100">
                                </div>
                                <button type="submit" class="btn btn-info">Submit</button>
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
        CKEDITOR.replace( 'title');
        CKEDITOR.replace( 'description');
    </script>
@endsection
