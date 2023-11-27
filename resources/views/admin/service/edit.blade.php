@extends('admin.layouts.app')
@section('content')
    <section id="main-content">
        <section class="wrapper">
            <!-- page start-->
            <div class="row">
                <div class="col-sm-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Edit Service
                        </header>
                        <div class="panel-body">
                            <form role="form" action="{{ route('our-services.update',$service->id) }}" enctype="multipart/form-data" method="POST">@csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label for="title">Title</label>
                                    <input type="text" class="form-control" name="title" value="{{$service->title}}" id="title" placeholder="Service Title">
                                </div>                                                           

                                <div class="form-group">
                                    <label> Description</label>
                                    <textarea rows="7" name="description" id="description" class="form-control" placeholder="Description">{{$service->description}}</textarea>
                                </div>
                                <div class="form-group">
                                    <label>Assign Order </label>
                                    <input type="text" class="form-control" name="order" value="{{$service->order}}">
                                    <small class="text-success">If you assign order this will shows accordingly.</small>
                                </div>                               
                                <div class="form-group">
                                    <label for="img"> Image</label>
                                    <input type="file" class="form-control" id="img" name="img">
                                    <img src="{{ url('uploads/services/' . $service->img) }}" height="100" width="100">
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
        CKEDITOR.replace( 'description');
    </script>
@endsection