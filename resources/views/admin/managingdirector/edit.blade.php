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
                            <form role="form" action="{{ route('mds.update',$mds->id) }}" enctype="multipart/form-data" method="POST">@csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control" name="name" id="name" value="{{$mds->name}}" placeholder="Client Name">
                                </div>
                                <div class="form-group">
                                    <label for="position">Position</label>
                                    <input type="text" class="form-control" name="position" value="{{$mds->position}}" id="position"
                                        placeholder="CLient Position">
                                </div>
                                <div class="form-group">
                                    <label for="message">Message</label>
                                    <textarea type="text" class="form-control" name="message" id="message"
                                        placeholder="MD's message">{{$mds->message}}</textarea>
                                </div>             
                                <div class="form-group">
                                    <label for="image">Client Image</label>
                                    <input type="file" id="image" name="image" value="{{$mds->image}}">
                                    <img src="{{asset('uploads/mds/')}}/{{$mds->image}}" height="100" width="100">
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