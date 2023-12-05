@extends('admin.layouts.app')
@section('content')
    <section id="main-content">
        <section class="wrapper">
            <!-- page start-->
            <div class="row">
                <div class="col-sm-12">
                    <section class="card">
                        <header class="card-header">
                            Add Slider Image
                        </header>
                        <div class="card-body">
                            <form role="form" action="{{ route('slider.store') }}" enctype="multipart/form-data" method="POST">@csrf
                                <div class="form-group">
                                    <label for="tag">Tag</label>
                                    <input type="text" class="form-control" name="tag" id="tag" placeholder="Enter image overlay slogan"/>
                                </div>
                                
                                <div class="form-group">
                                    <label for="title">Title</label>
                                    <input type="text" class="form-control" name="title" id="title" placeholder="Enter main title">
                                </div>
                                <div class="form-group">
                                    <label for="typed1">Typed1</label>
                                    <input type="text" class="form-control" name="typed1" id="typed1" placeholder="Enter Typeing title">
                                </div>
                                <div class="form-group">
                                    <label for="typed2">Typed2</label>
                                    <input type="text" class="form-control" name="typed2" id="typed2" placeholder="Enter Typeing title">
                                </div>
                                <div class="form-group">
                                    <label for="description">Description </label>
                                    <textarea class="form-control" name="description" id="description" placeholder="Enter Sub title"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="image">Upload Image</label>
                                    <input type="file" class="form-control" id="image" name="image" accept="image/png, image/gif, image/jpeg">
                                    <p class="help-block">Upload image like: .jpg, .png, gif, jpeg etc.</p>
                                    
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
        // CKEDITOR.replace( 'title');
        CKEDITOR.replace( 'description');
    </script>
@endsection
