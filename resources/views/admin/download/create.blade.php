@extends('admin.layouts.app')
@section('content')
    <section id="main-content">
        <section class="wrapper">
            <!-- page start-->
            <div class="row">
                <div class="col-sm-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Add Gallery Image
                        </header>
                        <div class="panel-body">
                            <form role="form" action="{{ route('admin.gallery.store') }}" enctype="multipart/form-data" method="POST">@csrf
                                <div class="form-group">
                                    <label for="title">Title</label>
                                    <input type="text" class="form-control" name="title" id="title" placeholder="Title">
                                </div>
                                <div class="form-group">
                                    <label for="image"> Image</label>
                                    <input type="file" id="image" name="image">
                                    <p class="help-block">Upload Image.</p>
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
        CKEDITOR.replace( 'message');
    </script>
@endsection