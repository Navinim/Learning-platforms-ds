@extends('admin.layouts.app')
@section('content')
    <section id="main-content">
        <section class="wrapper">
            <!-- page start-->
            <div class="row">
                <div class="col-sm-12">
                    <section class="card">
                        <div class="card-header">
                            <h5>Add Material</h5>
                        </div>
                        <div class="card-body">
                            <form role="form" action="{{ route('material.store') }}" enctype="multipart/form-data"
                                method="POST">@csrf
                                <div class="form-group">
                                    <label for="category">File Type</label>
                                    <select class="form-control" name="file_type" id="file_type" placeholder="file_type">
                                        <option value="audio">Audio</option>
                                        <option value="video">Video</option>
                                        <option value="docs">Documents</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="title">Title</label>
                                    <input type="text" class="form-control" name="title" id="title"
                                        placeholder="Title">
                                </div>
                                <div class="form-group">
                                    <label for="media"> file</label>
                                    <input type="file" class="form-control" id="media" name="media">
                                </div>
                                <button type="submit" class="btn btn-info mt-2">Submit</button>
                            </form>
                        </div>
                    </section>
                </div>
            </div>
        </section>
    </section>
@endsection
@section('js')
    
@endsection
