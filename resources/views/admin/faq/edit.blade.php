@extends('admin.layouts.app')
@section('content')
    <section id="main-content">
        <section class="wrapper">
            <!-- page start-->
            <div class="row">
                <div class="col-sm-12">
                    <section class="card">
                        <header class="card-header">
                            Edit FAQ
                        </header>
                        <div class="card-body">
                            <form role="form" action="{{ route('faqs.update', $faq->id) }}" enctype="multipart/form-data"
                                method="POST">@csrf
                                @method('PUT')
                                
                                <div class="form-group">
                                    <label for="question">Question?</label>
                                    <input type="text" class="form-control" name="question" id="question" value="{{$faq->question}}" placeholder="e.g. What are the key skills needed for a frontend developer?">
                                </div>                                                               
                                <div class="form-group ">
                                    <label for="banner_description">Answer</label>
                                    <div class="">
                                        <textarea class="form-control" name="answer" id="banner_description">{{$faq->answer}}</textarea>
                                    </div>
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
