@extends('admin.layouts.app')
@section('content')
    <section id="main-content">
        <section class="wrapper">
            <!-- page start-->
            <div class="row">
                <div class="col-sm-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Edit Team students
                        </header>
                        <div class="panel-body">
                            <form role="form" action="{{ route('student.update',$students->id) }}" enctype="multipart/form-data" method="POST">@csrf
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control" name="name" id="name" value="{{$students->name}}" placeholder="Client Name">
                                </div>
                                <div class="form-group">
                                    <label for="category">File Type</label>
                                    <select class="form-control" name="user_type" id="user_type" placeholder="user_type">
                                        <option value="{{$students->user_type}}">{{$students->user_type}}</option>                                      
                                        
                                    </select>
                                </div>                              
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control"  id="email" name="email" value="{{$students->email}}">                                    
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control"  id="password" name="password" value="{{$students->password}}">                                    
                                </div>
                                <div class="form-group">
                                    <label for="hint">Password Hint</label>
                                    <input type="text" class="form-control" name="hint" id="hint" placeholder="Password hint" value="{{$students->hint}}">
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