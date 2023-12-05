@extends('admin.layouts.app')
@section('content')
    <section id="main-content">
        <section class="wrapper">
            <!-- page start-->
            <div class="row">
                <div class="col-sm-12">
                    <section class="card">
                        <header class="card-header">
                            Edit Course
                        </header>
                        <div class="card-body">
                            <form role="form" action="{{ route('blog.update', $blog->id) }}" enctype="multipart/form-data"
                                method="POST">@csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label for="course_category_id">Tag</label><sup>*</sup>
                                    <select class="form-select" name="tag_id" aria-label="Default select example">
                                        <option value="">Select a tag</option>                                        
                                        @foreach ($tags as $item)
                                            <option value="{{ $item->id }}" {{ $item->id == $blog->tag_id ? 'selected' : '' }}>
                                                {{ $item->title }}
                                            </option>
                                        @endforeach
                                    </select>
                                    
                                </div>
                                <div class="form-group">
                                    <label for="title">Title</label>
                                    <input type="text" class="form-control" name="title" value="{{ $blog->title }}"
                                        id="title" placeholder="e.g. Full stack developer">
                                </div>
                                <div class="form-group ">
                                    <label for="banner_description">Post Details</label>
                                    <div class="">
                                        <textarea class="form-control" name="details" id="banner_description">{{ $blog->details }}</textarea>
                                    </div>
                                </div>
                                <div class="form-group">                                    
                                    <input type="text" class="form-control" name="owner" value="Durshikshya" id="owner" placeholder="e.g. full stack developer" hidden>
                                </div>
                                <div class="form-group">
                                    <label for="banner">Banner Image</label>
                                    <input type="file" class="form-control" id="banner" name="banner">
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
    <script>
        CKEDITOR.replace('banner_description');
        CKEDITOR.replace('explore_detail');
        CKEDITOR.replace('scholarship');
        CKEDITOR.replace('fee_structure');
        CKEDITOR.replace('visa_requirements');
        CKEDITOR.replace('employment');
        CKEDITOR.replace('education_system');
        CKEDITOR.replace('intake_option');
        CKEDITOR.replace('intake_option');
    </script>
     <script>
        $(document).ready(function () {
            $('#addform').submit(function () {                
                $('#owner').val('Durshikshya');
            });
        });
    </script>
@endsection
