@extends('admin.layouts.app')
@section('content')
    <section id="main-content">
        <section class="wrapper">
            <!-- page start-->
            <div class="row">
                <div class="col-sm-12">
                    <section class="card">
                        <div class="card-body">
                        <div class="card-title">
                            Add Question
                        </div>                        
                            <form id="addform" action="{{ route('interviews.store') }}" enctype="multipart/form-data" method="POST">@csrf
                                <div class="form-group">
                                    <label for="course_category_id">Main Topic</label><sup>*</sup>
                                    <select class="form-select" name="interview_cate_id" aria-label="Default select example" required>
                                        <option selected>Select Main Topic</option>
                                        @foreach ($interviewCate as $item)
                                        <option value="{{$item->id}}">{{$item->title}}</option>
                                        @endforeach                              
                                        
                                      </select>
                                </div>
                                <div class="form-group">
                                    <label for="question">Question</label>
                                    <input type="text" class="form-control" name="question" id="question" placeholder="e.g.What is Full stack developer?" required>
                                </div>
                                <div class="form-group"> 
                                    <label for="answer">Answer</label>                                   
                                    <textarea type="text" class="form-control" name="answer" id="answer" placeholder="e.g. full stack developer" required></textarea>
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
        CKEDITOR.replace( 'banner_description');
        CKEDITOR.replace( 'explore_detail');
        CKEDITOR.replace( 'scholarship');
        CKEDITOR.replace( 'fee_structure');
        CKEDITOR.replace( 'visa_requirements');
        CKEDITOR.replace( 'employment');
        CKEDITOR.replace( 'education_system');
        CKEDITOR.replace( 'intake_option');
        CKEDITOR.replace( 'intake_option');
    </script>
    <script>
        $(document).ready(function () {
            $('#addform').submit(function () {                
                $('#owner').val('Durshikshya');
            });
        });
    </script>
@endsection