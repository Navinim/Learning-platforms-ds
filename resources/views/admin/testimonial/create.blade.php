@extends('admin.layouts.app')
@section('content')
    <section id="main-content">
        <section class="wrapper">
            <!-- page start-->
            <div class="row">
                <div class="col-sm-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Add Clients Testimonials
                        </header>
                        <div class="panel-body">
                            <form role="form" action="{{ route('testimonials.store') }}" enctype="multipart/form-data" method="POST">@csrf
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control" name="name" id="name" placeholder="students full Name">
                                </div>                               
                                <div class="form-group">
                                    <label for="country">country Name</label>
                                    <input type="text" class="form-control" name="country" id="country"
                                        placeholder="CLient country Name">
                                </div>
                                <div class="form-group">
                                    <label>Message</label>
                                    <textarea rows="7" name="message" id="message" class="form-control" placeholder="Client Review"> </textarea>
                                </div>

                               
                                <div class="form-group">
                                    <label for="image">Student's Image</label>
                                    <input type="file" class="form-control"  id="image" name="image">
                                    <p class="help-block">Upload client image leave null.</p>
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