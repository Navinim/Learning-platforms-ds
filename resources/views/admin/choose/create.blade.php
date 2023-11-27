@extends('admin.layouts.app')
@section('content')
    <section id="main-content">
        <section class="wrapper">
            <!-- page start-->
            <div class="row">
                <div class="col-sm-12">
                    <section class="card">
                        <div class="card-body">
                        <div class="card-header">
                            <h5>Add New</h5>                            
                        </div>                        
                            <form role="form" action="{{ route('choose.store') }}" enctype="multipart/form-data" method="POST">@csrf
                                <div class="form-group">
                                    <label for="title">Title</label>
                                    <input type="text" class="form-control" name="title" id="title" placeholder="Why Choose Us Title">
                                </div>
                                <div class="form-group">
                                    <label>Description</label>
                                    <textarea rows="7" name="description" id="description" class="form-control" placeholder="Description"> </textarea>
                                </div>
                                <div class="form-group">
                                    <label>Assign Order </label>
                                    <input type="text" class="form-control" name="order">
                                    <small class="text-success">If you assign order this will shows accordingly.</small>
                                </div>    
                                <div class="form-group">
                                    <label for="img">choose Icon</label>
                                    <input type="file" class="form-control" id="img" name="img">
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
        CKEDITOR.replace( 'description');
    </script>
@endsection
