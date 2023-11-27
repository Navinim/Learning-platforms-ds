@extends('admin.layouts.app')
@section('content')
    <section id="main-content">
        <section class="wrapper">
            <!-- page start-->
            <div class="row">
                <div class="col-sm-12">
                    <section class="card">
                        <header class="card-header d-flex justify-between">
                            <h5>Add University</h5>
                             <a href="{{route('partner-associate.index')}}" class="btn btn-success" style="margin-bottom: 10px">Back <i class="bx bx-share px-2"></i></a>
                        </header>
                        <div class="card-body">
                            <form role="form" action="{{ route('partner-associate.store') }}" enctype="multipart/form-data" method="POST">
                                @csrf
                                
                                <div class="form-group">
                                    <label for="name">Name of Institute</label>
                                    <input type="text" class="form-control" name="name" id="name" placeholder="University/Partners Name">
                                </div>                             
                                <div class="form-group mt-2 mb-2">
                                    <input class="form-check-input" type="checkbox" name="is_associate" id="is_associate" value="is_associate">
                                    <label class="form-check-label" for="is_associate">
                                        Is Associates
                                    </label>
                                </div>                               
                               
                                <div class="form-group">
                                    <label for="image">Associates/Partners Logo</label>
                                    <input type="file" class="form-control" id="image" name="image" required>
                                </div>
                                <button type="submit" class="btn btn-info mt-3">Submit</button>
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