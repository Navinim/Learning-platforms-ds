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
                            <form role="form" action="{{ route('courses.update',$course->id) }}" enctype="multipart/form-data" method="POST">@csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label for="tag">Tag</label>
                                    <input type="text" class="form-control"  name="tag" value="{{$course->tag}}" id="tag" placeholder="e.g.Development">
                                </div>
                                <div class="form-group">
                                    <label for="title">Title</label>
                                    <input type="text" class="form-control" name="title" value="{{$course->title}}" id="title" placeholder="e.g. Full stack developer">
                                </div>
                                <div class="form-group">
                                    <label for="sub_title">Sub Title</label>
                                    <input type="text" class="form-control" name="sub_title" value="{{$course->sub_title}}" id="sub_title" placeholder="e.g. full stack developer">
                                </div>
                                <div class="form-group">
                                    <label for="course_category_id">Course Category</label><sup>*</sup>
                                    <select class="form-select" name="course_category_id" aria-label="Default select example">                                       
                                        @foreach ($cate_course as $item)
                                        <option value="{{$item->id}}"{{ $item->id == $course->course_category_id ? 'selected' : '' }}>{{$item->title}}</option>
                                        @endforeach                                       
                                        
                                      </select>
                                </div>
                                <div class="form-group ">
                                    <label for="banner_description">Banner Description</label>
                                    <div class="">
                                        <textarea class="form-control" name="description" id="banner_description">{{$course->description}}</textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="h_student">Number Of Happy Student</label>
                                    <input type="number" class="form-control" name="h_student" value="{{$course->h_student}}" id="h_student" placeholder="e.g.123">
                                </div>
                                <div class="form-group">
                                    <label for="workshop">Number Of WorkShop</label>
                                    <input type="number" class="form-control" name="workshop" value="{{$course->workshop}}" id="workshop" placeholder="e.g.321">
                                </div>
                                <div class="form-group">
                                    <label for="trained">Professionals Trained</label>
                                    <input type="number" class="form-control" name="trained" value="{{$course->trained}}" id="trained" placeholder="e.g.321">
                                </div>
                                <div class="form-group">
                                    <label for="explore_title">Explore Title</label>
                                    <input type="text" class="form-control" name="explore_title" value="{{$course->explore_title}}" id="explore_title" placeholder="e.g.Explore our Immersive Back-End Development Course!">
                                </div>
                                <div class="form-group ">
                                    <label for="explore_detail">Short Detail For Explore Title</label>
                                    <div class="">
                                        <textarea class="form-control" name="explore_details" id="explore_detail">{{$course->explore_details}}</textarea>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="tab_detail">Curriculum Description</label>
                                    <div class="">
                                        <textarea class="form-control" name="tab_description" id="scholarship">{{$course->tab_description}}</textarea>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="tab_course_modal">Course Modal</label>
                                    <div class="">
                                        <textarea class="form-control" name="course_modal" id="fee_structure">{{$course->course_modal}}</textarea>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="tab_outcomes">Expected Outcomes</label>
                                    <div class="">
                                        <textarea class="form-control" name="tab_outcomes" id="visa_requirements">{{$course->tab_outcomes}}</textarea>
                                    </div>
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
@endsection