@extends('admin.layouts.app')
@section('content')
    <section id="main-content">
        <section class="wrapper">
            <!-- page start-->
            <div class="row">
                <div class="col-sm-12">
                    <section class="card">
                        <div class="card-header d-flex justify-between">                            
                            <h5>Company Details</h5>
                            <a href="{{route('profile.index')}}" class="btn btn-success" style="margin-bottom: 10px">Back<i class="bx bx-share px-2"></i></a>
                        </div>
                        <div class="card-body">
                            <form class=" form-horizontal" method="POST" action="{{ route('profile.update',$profile->id) }}" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="form-group ">
                                    <label for="image" class="control-label col-lg-2">Favicon</label>
                                    <div class="col-lg-10">
                                        <input class="form-control" type="file" id="image" name="favicon" accept="image/png, image/gif, image/jpeg" onchange="previewImage(this)">
                                        {{-- <img id="previewImg" src="{{ asset('uploads/profile')}}/{{$profile->favicon}}" alt="" style="max-width: 130px; margin-top: 20px;"> --}} 
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="image" class="control-label col-lg-2">Main Logo</label>
                                    <div class="col-lg-10">
                                        <input class=" form-control" type="file" id="image" name="logo_main" accept="image/png, image/gif, image/jpeg" onchange="previewImage(this)">
                                        {{-- <img id="previewImg" src="{{ asset('uploads/profile')}}/{{$profile->main_logo}}" style="max-width: 130px; margin-top: 20px;"> --}}
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="image" class="control-label col-lg-2">Footer Logo</label>
                                    <div class="col-lg-10">
                                        <input class=" form-control" type="file" id="image" name="logo_footer" accept="image/png, image/gif, image/jpeg" onchange="previewImage(this)">
                                        {{-- <img id="previewImg" src="{{ asset('uploads/profile')}}/{{$profile->main_logo}}" style="max-width: 130px; margin-top: 20px;"> --}}
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="name" class="control-label col-lg-2">Company Name</label>
                                    <div class="col-lg-10">
                                        <input class=" form-control" type="text" id="name" name="name" value="{{ $profile->name }}">
                                    </div>
                                </div>
                              
                                <div class="form-group ">
                                    <label class="control-label col-lg-2">Footer Description</label>
                                    <div class="col-lg-10">
                                        <textarea class="form-control" name="footer_details" id="footer-ckeditor">{{ $profile->footer_details }}</textarea>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label class="control-label col-lg-2">Why Durshikshya</label>
                                    <div class="col-lg-10">
                                        <textarea class="form-control" name="why_detail" id="footer-ckeditor1">{{ $profile->why_detail }}</textarea>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="image" class="control-label col-lg-2">Banner for Description</label>
                                    <div class="col-lg-10">
                                        <input class=" form-control" type="file" id="image" name="why_banner" accept="image/png, image/gif, image/jpeg" onchange="previewImage(this)">
                                        {{-- <img id="previewImg" src="{{ asset('uploads/profile')}}/{{$profile->main_logo}}" style="max-width: 130px; margin-top: 20px;"> --}}
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="slogan" class="control-label col-lg-2">Contact Number</label>
                                    <div class="col-lg-10">
                                        <input class=" form-control" type="number" id="slogan" name="phone" value="{{ $profile->phone }}">
                                    </div>
                                </div>
                                
                                <div class="form-group ">
                                    <label for="slogan" class="control-label col-lg-2">Contact Email</label>
                                    <div class="col-lg-10">
                                        <input class=" form-control" type="email" id="slogan" name="email" value="{{ $profile->email }}">
                                    </div>
                                </div>                            
                               
                                <div class="form-group ">
                                    <label for="slogan" class="control-label col-lg-2">Address</label>
                                    <div class="col-lg-10">
                                        <input class=" form-control" type="text" id="slogan" name="address" value="{{ $profile->address }}">
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="open" class="control-label col-lg-2">Office Opening Time and Day</label>
                                    <div class="col-lg-10">
                                        <input class=" form-control" type="text" id="open" name="open" value="{{ $profile->open }}">
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label class="control-label col-lg-2">Iframe Map</label>
                                    <div class="col-lg-10">
                                        <textarea class=" form-control" name="iframe">{{ $profile->iframe}}</textarea>
                                    </div>
                                </div>
                                <div class="form-group mt-2">
                                    <div class="col-lg-offset-2 col-lg-10">
                                        <div class="pull-right">
                                            <input class="btn btn-danger" type="submit" value="Submit">
                                            <a href="{{ route('profile.index') }}" class="btn btn-default" type="button">Cancel</a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </section>
                </div>
            </div>
           
            <!-- page end-->
        </section>
    </section>
@endsection

@section('js')
    <script>
        CKEDITOR.replace( 'about-ckeditor');
        CKEDITOR.replace( 'mission-ckeditor');
        CKEDITOR.replace( 'vision-ckeditor');
        CKEDITOR.replace( 'goal-ckeditor');
        CKEDITOR.replace( 'company-ckeditor');
        CKEDITOR.replace( 'footer-ckeditor');
        CKEDITOR.replace( 'meta-ckeditor'); 
        CKEDITOR.replace( 'footer-ckeditor1');  
    </script>
@endsection