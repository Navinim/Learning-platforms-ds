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
                        </div>
                        <div class="card-body">
                            <div class="adv-table" style="max-width: 100%; overflow-x:auto">
                                <table class="display table table-bordered table-striped" id="dynamic-table" >
                                    <thead>
                                        <tr>
                                            <th>Company Name</th>                                            
                                            <th>Footer Description</th>                                            
                                            <th>Contact Phone</th>
                                            <th>Contact Email</th>
                                            <th>Address</th>                                            
                                            <th>Mian Logo</th>
                                            <th>Footer Logo</th>
                                            <th>Favicon</th>
                                            <th>Iframe Map</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        {{-- @foreach ($profile_details as $detail)    --}}
                                        <tr class="gradeX">
                                            <td>{{$profile->name}}</td>                                            
                                            <td>{!! \Illuminate\Support\Str::limit($profile->footer_details, 100, $end='...') !!}</td>                                           
                                            <td>{{$profile->phone}}</td>
                                            <td>{{$profile->email}}</td>
                                            <td>{{$profile->address}}</td>
                                            <td> <img height="100" width="300" src="{{ asset('uploads/profile')}}/{{$profile->logo_main}}" alt=""></td>
                                            <td><img style="background-color: rgb(22, 22, 68)" height="100" width="300" src="{{ asset('uploads/profile')}}/{{$profile->logo_footer}}" alt=""></td>
                                            <td><img height="100" width="100" src="{{ asset('uploads/profile')}}/{{$profile->favicon}}" alt=""></td>
                                            <td>{{ \Illuminate\Support\Str::limit($profile->iframe, 60, $end='...') }}</td>
                                            <td>
                                                <a href="{{route('profile.edit',$profile->id)}}" class="btn btn-success mx-2"><i class="bx bx-edit-alt"></i></a>
                                            </td>
                                        </tr>
                                        {{-- @endforeach --}}

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
           
            <!-- page end-->
        </section>
    </section>
@endsection
