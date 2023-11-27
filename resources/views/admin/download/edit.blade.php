@extends('admin.layouts.app')
@section('content')
    <section id="main-content">
        <section class="wrapper">
            <!-- page start-->
            <div class="row">
                <div class="col-sm-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Edit Download Form
                        </header>
                        <div class="panel-body">
                            <form role="form" action="{{ route('admin.download.update', ['id'=>$download->id]) }}" enctype="multipart/form-data" method="POST">@csrf
                                <div class="form-group">
                                    <label for="title">Title</label>
                                    <input type="text" class="form-control" name="title" id="title" value="{{$download->title}}" placeholder="Title">
                                </div>
                                <div class="form-group">
                                    <label for="pdf">PDF</label>
                                    <input type="file" id="pdf" name="pdf" value="{{$download->pdf}}">
                                    @if (isset($download->pdf))
                                        <a href="{{asset('storage/pdf/forms/'.$download->pdf)}}" target="_blank">{{$download->title}}</a>
                                    @endif
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