@extends('admin.layouts.app')
@section('content')
    <section id="main-content">
        <section class="wrapper">
            <!-- page start-->
            <div class="row">
                <div class="col-sm-12">
                    <section class="card">
                        <div class="card-header">
                            <h5>Add Blog</h5>                            
                        </div>
                        <div class="card-body">
                            <form role="form" action="{{ route('blog.store') }}" enctype="multipart/form-data" method="POST">@csrf
                                <div class="form-group">
                                    <label for="title">Post Title</label>
                                    <input type="text" class="form-control" name="title" id="title" placeholder="Post Title">
                                </div>
                                <div class="form-group">
                                    <label for="post">Post Details</label>
                                    <textarea type="text" class="form-control" name="post" id="post" placeholder="post"></textarea>
                                </div>                               
                                <div class="form-group">
                                    <label for="media">Image File</label>                                    
                                    <input type="file" class="form-control" id="media" name="media">
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
    CKEDITOR.replace( 'post');
</script>
@endsection