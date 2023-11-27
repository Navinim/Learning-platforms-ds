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
                                            <th>Company Title</th>
                                            <th>Company Description</th>
                                            <th>Meta Content</th>
                                            <th>Contact Phone</th>
                                            <th>Contact Email</th>
                                            <th>Address</th>
                                            <th>About Title</th>
                                            <th>About Sub Title</th>
                                            <th>About Description</th>
                                            <th>Mission</th>
                                            <th>About Image</th>
                                            <th>Logo</th>
                                            <th>Favicon</th>
                                            <th>Iframe Map</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        {{-- @foreach ($profile_details as $detail)    --}}
                                        <tr class="gradeX">
                                            <td>{{$detail->company_name}}</td>
                                            <td>{{$detail->company_title}}</td>
                                            <td>{!! \Illuminate\Support\Str::limit($detail->company_description, 100, $end='...') !!}</td>
                                            <td>{!! \Illuminate\Support\Str::limit($detail->meta_title, 100, $end='...') !!}</td>
                                            <td>{{$detail->contact_phone}}, {{$detail->contact_phone2}}</td>
                                            <td>{{$detail->contact_email}}, {{$detail->contact_email2}}</td>
                                            <td>{{$detail->address_1}}, {{$detail->address_2}}</td>
                                            <td>{{$detail->about_title}}</td>
                                            <td>{{$detail->about_sub_title}}</td>
                                            <td>{!! \Illuminate\Support\Str::limit($detail->about_description, 100, $end='...') !!}</td>
                                            <td>{!! \Illuminate\Support\Str::limit($detail->mission, 100, $end='...') !!}</td>                                            
                                            {{-- <td>{!! \Illuminate\Support\Str::limit($detail->goal, 100, $end='...') !!}</td> --}}
                                            {{-- <td>{{ \Illuminate\Support\Str::limit($detail->about_description, 100, $end='...') }}</td> --}}
                                            <td> <img height="100" width="100" src="{{ asset('uploads/company-profile')}}/{{$detail->about_image}}" alt=""></td>
                                            <td><img height="100" width="100" src="{{ asset('uploads/company-profile')}}/{{$detail->logo}}" alt=""></td>
                                            <td><img height="100" width="100" src="{{ asset('uploads/company-profile')}}/{{$detail->favicon}}" alt=""></td>
                                            <td>{{ \Illuminate\Support\Str::limit($detail->map, 60, $end='...') }}</td>
                                            <td>
                                                <a href="{{route('company-profiles.edit',$detail->id)}}" class="btn btn-success mx-2"><i class="bx bx-edit-alt"></i></a>
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
