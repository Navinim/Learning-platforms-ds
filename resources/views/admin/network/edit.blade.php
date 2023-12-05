@extends('admin.layouts.app')
@section('content')
    <section id="main-content">
        <section class="wrapper">
            <!-- page start-->
            <div class="row">
                <div class="col-sm-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Edit Team Member
                        </header>
                        <div class="panel-body">
                            <form role="form" action="{{ route('network.update',$network->id) }}" enctype="multipart/form-data" method="POST">@csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label for="title">Title</label>
                                    <input type="text" class="form-control" name="title" id="name" value="{{$network->title}}" placeholder="Title">
                                </div>
                                <div class="form-group">
                                    <label for="detail">Short Detail</label>
                                    <textarea type="text" class="form-control" name="detail" id="detail"
                                        placeholder="Consultants detail">{{$network->detail}}</textarea>
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