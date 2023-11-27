@extends('admin.layouts.app')
@section('content')
    <section id="main-content">
        <section class="wrapper">
            <!-- page start-->
            <div class="row">
                <div class="col-sm-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Add New Applicants
                        </header>

                        <div class="panel-body">
                            <form role="form" action="{{route('admin.track.update',['id'=>$tracks->id]) }})}}" enctype="multipart/form-data" method="POST">@csrf
                                <div class="form-group">
                                    <label for="name">Full Name</label>
                                    <input type="text" class="form-control" name="name" id="name" value="{{$tracks->name}}" placeholder="Applicants Name">
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" name="email" id="email" value="{{$tracks->email}}"
                                        placeholder="Application For">
                                </div>
                                <div class="form-group">
                                    <label for="phone">Phone Number</label>
                                    <input type="phone" class="form-control" name="phone" id="phone" value="{{$tracks->phone}}"
                                        placeholder="Application For">
                                </div>
                                <div class="form-group">
                                    <label for="country">country</label>
                                    <input type="text" class="form-control" name="country" id="country" value="{{$tracks->country}}"
                                        placeholder="Application For">
                                </div>
                                <div class="form-group">
                                    <label for="score">Score in Language Test</label>
                                    <input type="text" class="form-control" name="score" id="score" value="{{$tracks->score}}"
                                        placeholder="Applicants Score in English test">
                                </div>                             

                                <div class="form-group">
                                    <label>Additional Info</label>
                                    <textarea rows="7" name="message" id="message" value="{{$tracks->message}}" class="form-control" placeholder="Client Review"> </textarea>
                                </div>
                               
                                <div class="form-group">
                                    <label for="file">Documents In Single Pdf File</label>
                                    <input type="file" id="file" name="file" value="{{$tracks->document_name}}">
                                    <p class="help-block">Upload File.</p>
                                    @error('file')
                                        
                                    <span>{{$message}}</span>
                                    
                                    @enderror

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