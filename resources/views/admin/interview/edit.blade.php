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
                            <form role="form" action="{{ route('interviews.update', $interview->id) }}" enctype="multipart/form-data"
                                method="POST">@csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label for="course_category_id">Main Topic</label><sup>*</sup>
                                    <select class="form-select" name="interview_cate_id" aria-label="Default select example">
                                        <option value="">Select a Topic</option>                                        
                                        @foreach ($interviewCate as $item)
                                            <option value="{{ $item->id }}" {{ $item->id == $interview->interview_cate_id ? 'selected' : '' }}>
                                                {{ $item->title }}
                                            </option>
                                        @endforeach
                                    </select>
                                    
                                </div>                                
                                <div class="form-group">
                                    <label for="question">Question</label>
                                    <input type="text" class="form-control" name="question" value="{{$interview->question}}" id="question" placeholder="e.g.What is Full stack developer?" required>
                                </div>
                                <div class="form-group"> 
                                    <label for="answer">Answer</label>                                   
                                    <textarea type="text" class="form-control" name="answer" id="answer" placeholder="e.g. full stack developer" required>{{$interview->answer}}</textarea>
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
