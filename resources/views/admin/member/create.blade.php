@extends('admin.layouts.app')
@section('content')
    <section id="main-content">
        <section class="wrapper">
            <!-- page start-->
            <div class="row">
                <div class="col-sm-12">
                    <section class="card">
                        <h5 class="card-header">
                            Add Team Member
                        </h5>
                        <div class="card-body">
                            <form role="form" action="{{ route('members.store') }}" enctype="multipart/form-data" method="POST">@csrf
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control" name="name" id="name" placeholder="Consultants Full Name">
                                </div>
                                <div class="form-group">
                                    <label for="position">Position</label>
                                    <input type="text" class="form-control" name="position" id="position"
                                        placeholder="Consultants Position">
                                </div>                               
                                <div class="form-group">
                                    <label for="image">Consultants Image</label>
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