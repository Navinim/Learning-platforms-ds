@extends('admin.layouts.app')
@section('content')
    <section id="main-content">
        <section class="wrapper">
            <!-- page start-->
            <div class="row">
                <div class="col-sm-12">
                    <section class="card">
                        <div class="card-header">
                            <h5>Add Gallery</h5>                            
                        </div>
                        <div class="card-body">
                            <form role="form" action="{{ route('gallery.store') }}" enctype="multipart/form-data" method="POST">@csrf
                                <div class="form-group">
                                    <label for="category">Category</label>
                                    <select class="form-control" name="category" id="category" placeholder="Category">
                                        @foreach ($categories as $category)
                                            <option value="{{$category->id}}">{{$category->title}}
                                        @endforeach

                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="title">Title</label>
                                    <input type="text" class="form-control" name="title" id="title" placeholder="Title">
                                </div>
                               
                                <div class="form-group">
                                    <label for="image"> Image</label>
                                    <input type="file" class="form-control" id="image" name="images[]" multiple required accept="images/*">
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