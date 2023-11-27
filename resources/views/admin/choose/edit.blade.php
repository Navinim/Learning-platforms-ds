@extends('admin.layouts.app')
@section('content')
    <section id="main-content">
        <section class="wrapper">
            <!-- page start-->
            <div class="row">
                <div class="col-sm-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Add Choose Form
                        </header>
                        <div class="panel-body">
                            <form role="form" action="{{ route('choose.update', $choose->id) }}" enctype="multipart/form-data" method="POST">@csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label for="title">Title</label>
                                    <input type="text" class="form-control" name="title" id="title" value="{{$choose->title}}" placeholder="Title">
                                </div>
                                <div class="form-group">
                                    <label>Description</label>
                                    <textarea rows="7" name="description" id="description" class="form-control" placeholder="Description for choose">{{$choose->description}} </textarea>
                                </div>
                                <div class="form-group">
                                    <label>Assign Order </label>
                                    <input type="text" class="form-control" name="order" value="{{$choose->order}}">
                                    <small class="text-success">If you assign order this will shows accordingly.</small>
                                </div>    
                                <div class="form-group">
                                    <label for="img">choose Icon</label>
                                    <input type="file" class="form-control" id="img" name="img">
                                    <img src="" alt="image">
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
        CKEDITOR.replace('description');
    </script>
@endsection