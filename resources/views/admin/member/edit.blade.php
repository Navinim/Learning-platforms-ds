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
                            <form role="form" action="{{ route('members.update',$teams->id) }}" enctype="multipart/form-data" method="POST">@csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control" name="name" id="name" value="{{$teams->name}}" placeholder="Client Name">
                                </div>
                                <div class="form-group">
                                    <label for="position">Position</label>
                                    <input type="text" class="form-control" name="position" value="{{$teams->position}}" id="position"
                                        placeholder="CLient Position">
                                </div>                               
                                <div class="form-group">
                                    <label for="img">Client Image</label>
                                    <input type="file" class="form-control" id="image" name="image" value="{{$teams->image}}">
                                    <img src="{{asset('uploads/members')}}/{{$teams->image}}" height="100" width="100">
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