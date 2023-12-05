@extends('admin.layouts.app')
@section('content')
    <section id="main-content">
        <section class="wrapper">
            <!-- page start-->
            <div class="row">
                <div class="col-sm-12">
                    <section class="card">
                        <h5 class="card-header">
                            Add Networks
                        </h5>
                        <div class="card-body">
                            <form role="form" action="{{ route('network.store') }}" enctype="multipart/form-data" method="POST">@csrf
                                <div class="form-group">
                                    <label for="title">Title</label>
                                    <input type="text" class="form-control" name="title" id="name" placeholder="Title">
                                </div>
                                <div class="form-group">
                                    <label for="detail">Short Detail</label>
                                    <textarea type="text" class="form-control" name="detail" id="detail"
                                        placeholder="Consultants detail"></textarea>
                                </div>                               
                                <div class="form-group">
                                    <label for="image">Image</label>
                                    <input type="file" class="form-control"  id="image" name="image">                                    
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