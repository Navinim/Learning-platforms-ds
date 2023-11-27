@extends('admin.layouts.app')
@section('content')
    <section id="main-content">
        <section class="wrapper">
            <!-- page start-->
            <div class="row">
                <div class="col-sm-12">
                    <section class="card">
                        <div class="card-header">                            
                            <h5>Company Details</h5>
                            <a href="{{route('company-profiles.index')}}" class="btn btn-success" style="margin-bottom: 10px">Back<i class="bx bx-share px-2"></i></a>
                        </div>
                        <div class="card-body">
                            <form class=" form-horizontal" method="POST" action="{{ route('company-profiles.update',$profile->id) }}" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="form-group ">
                                    <label for="image" class="control-label col-lg-2">Favicon</label>
                                    <div class="col-lg-10">
                                        <input class="form-control" type="file" id="image" name="favicon" accept="image/png, image/gif, image/jpeg" onchange="previewImage(this)">
                                        <img id="previewImg" src="{{ asset('uploads/company-profile')}}/{{$profile->favicon}}" alt="" style="max-width: 130px; margin-top: 20px;">
                                        
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="image" class="control-label col-lg-2">Logo</label>
                                    <div class="col-lg-10">
                                        <input class=" form-control" type="file" id="image" name="logo" accept="image/png, image/gif, image/jpeg" onchange="previewImage(this)">
                                        <img id="previewImg" src="{{ asset('uploads/company-profile')}}/{{$profile->logo}}" style="max-width: 130px; margin-top: 20px;">
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="name" class="control-label col-lg-2">Company Name</label>
                                    <div class="col-lg-10">
                                        <input class=" form-control" type="text" id="name" name="company_name" value="{{ $profile->company_name }}">
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="slogan" class="control-label col-lg-2">Company Title</label>
                                    <div class="col-lg-10">
                                        <input class=" form-control" type="text" id="slogan" name="company_title" value="{{ $profile->company_title }}">
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label class="control-label col-lg-2">Company Description</label>
                                    <div class="col-lg-10">
                                        <textarea class="form-control" name="company_description" id="company-ckeditor">{{ $profile->company_description }}</textarea>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label class="control-label col-lg-2">Footer Description</label>
                                    <div class="col-lg-10">
                                        <textarea class="form-control" name="footer_description" id="footer-ckeditor">{{ $profile->footer_description }}</textarea>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="meta" class="control-label col-lg-2">Enter Meta Tags</label>
                                    <div class="col-lg-10 ">
                                        <textarea id="meta-ckeditor"  class="form-control" name="meta_title" data-role="tagsinput">{{ $profile->meta_title}}</textarea>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="slogan" class="control-label col-lg-2">About Title</label>
                                    <div class="col-lg-10">
                                        <input class=" form-control" type="text" id="slogan" name="about_title" value="{{ $profile->about_title}}">
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="slogan" class="control-label col-lg-2">About Sub-Title</label>
                                    <div class="col-lg-10">
                                        <input class=" form-control" type="text" id="slogan" name="about_sub_title" value="{{ $profile->about_sub_title}}">
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="image" class="control-label col-lg-2">About Image</label>
                                    <div class="col-lg-10">
                                        <input class=" form-control" type="file" id="image" name="about_images[]" accept="image/*" multiple onchange="previewImage(this)">
                                        <span class="">Must have to select 3 images.</span>
                                        @if ($about_images->count() > 0)
                                        <div class="row">
                                            @foreach ($about_images as $item)
                                            <div class="col-lg-3">
                                                <img id="previewImg" src="{{ asset('uploads/multiple-images')}}/{{$item->url}}" style="max-width: 100px; max-height:100px; margin-top: 20px;">
                                                <a class="btn btn-xs btn-danger" href="{{route('admin.destroy_about_image', $item->id)}}">Delete</a>
                                            </div>
                                            @endforeach

                                        </div>
                                        @endif

                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label class="control-label col-lg-2">About Description</label>
                                    <div class="col-lg-10">
                                        <textarea class=" form-control" name="about_description" id="about-ckeditor">{{ $profile->about_description}}</textarea>
                                    </div>
                                </div>                              
                               
                                <div class="form-group ">
                                    <label for="slogan" class="control-label col-lg-2">Contact Number</label>
                                    <div class="col-lg-10">
                                        <input class=" form-control" type="text" id="slogan" name="contact_phone" value="{{ $profile->contact_phone }}">
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="slogan" class="control-label col-lg-2">Contact Number Alternative</label>
                                    <div class="col-lg-10">
                                        <input class=" form-control" type="text" id="slogan" name="contact_phone2" value="{{ $profile->contact_phone2 }}">
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="slogan" class="control-label col-lg-2">Contact Email</label>
                                    <div class="col-lg-10">
                                        <input class=" form-control" type="email" id="slogan" name="contact_email" value="{{ $profile->contact_email }}">
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="slogan" class="control-label col-lg-2">Contact Email 2</label>
                                    <div class="col-lg-10">
                                        <input class=" form-control" type="email" id="slogan" name="contact_email2" value="{{ $profile->contact_email2 }}">
                                    </div>
                                </div>
                               
                                <div class="form-group ">
                                    <label for="slogan" class="control-label col-lg-2">Address 1</label>
                                    <div class="col-lg-10">
                                        <input class=" form-control" type="text" id="slogan" name="address_1" value="{{ $profile->address_1 }}">
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="slogan" class="control-label col-lg-2">Address 2</label>
                                    <div class="col-lg-10">
                                        <input class=" form-control" type="text" id="slogan" name="address_2" value="{{ $profile->address_2 }}">
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label class="control-label col-lg-2">Mission</label>
                                    <div class="col-lg-10">
                                        <textarea class=" form-control" name="mission" id="mission-ckeditor">{{ $profile->mission}}</textarea>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label class="control-label col-lg-2">Vision</label>
                                    <div class="col-lg-10">
                                        <textarea class=" form-control" name="vision" id="vision-ckeditor">{{ $profile->vision}}</textarea>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label class="control-label col-lg-2">Goal</label>
                                    <div class="col-lg-10">
                                        <textarea class=" form-control" name="goal" id="goal-ckeditor">{{ $profile->goal}}</textarea>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label class="control-label col-lg-2">Iframe Map</label>
                                    <div class="col-lg-10">
                                        <textarea class=" form-control" name="map">{{ $profile->map}}</textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-lg-offset-2 col-lg-10">
                                        <div class="pull-right">
                                            <input class="btn btn-danger" type="submit" value="Submit">
                                            <a href="{{ route('company-profiles.index') }}" class="btn btn-default" type="button">Cancel</a>
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
        CKEDITOR.replace( 'ceo-ckeditor');  
    </script>
@endsection