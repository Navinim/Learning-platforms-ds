@extends('admin.layouts.app')
@push('css')
   <link rel="stylesheet" href="{{ asset('admin/assets/data-tables/DT_bootstrap.css')}}" />
@endpush
@section('content')
    <section id="main-content">
        <section class="wrapper site-min-height">
            <!-- page start-->
            <section class="panel">
                <header class="panel-heading">
                    Applicants Details
                </header>
                <div class="panel-body">
                    <div class="adv-table editable-table ">
                        <div class="clearfix">
                            <div class="btn-group">
                                <a href="{{route('admin.track.add')}}" id="editable-sample_new" class="btn green">
                                    Add New <i class="fa fa-plus"></i>
                                </a>
                            </div>
                            <div class="btn-group pull-right">
                                <button class="btn dropdown-toggle" data-toggle="dropdown">Tools <i class="fa fa-angle-down"></i>
                                </button>
                                {{-- <ul class="dropdown-menu pull-right">
                                    <li><a href="#">Print</a></li>
                                    <li><a href="#">Save as PDF</a></li>
                                    <li><a href="#">Export to Excel</a></li>
                                </ul> --}}
                            </div>
                        </div>
                        <div class="space15"></div>

                        <div class="table-responsive">

                        <table class="table table-striped table-hover table-bordered" id="dynamic-table">
                            <thead>
                            <tr>
                                
                                <th>Full Name</th>
                                <th>Phone And Email</th>
                                <th>Country</th>                                
                                <th>Documents</th>
                                <th>PTE/IELTS</th>
                                <th>Comments</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach ($tracks as $item)
                                <tr class="">
                                    <td>{{$item->name}}</td> 
                                    <td class="center">{{$item->phone}} <br> {{$item->email}}</td>                              
                                    <td class="center">{{$item->country}}</td>
                                    <td><a class="edit center" href="{{ asset($item->document_path)}}" type="application/pdf">View</a></td>
                                    <td>{{$item->score}}</td>
                                    <td>{!! $item->message !!}</td>
                                    <td><a href="{{route('admin.track.edit',['id'=>$item->id])}}" class="btn btn-primary mx-2"><i class="fa fa-edit"></i></a></td>
                                </tr>    
                                @endforeach
                                                   
                            </tbody>
                        </table>

                        </div>
                    </div>
                </div>
            </section>
            <!-- page end-->
        </section>
    </section>
@endsection

@section('js')
<script type="text/javascript" src="{{ asset('admin/assets/data-tables/jquery.dataTables.js')}}"></script>
<script type="text/javascript" src="{{ asset('admin/assets/data-tables/DT_bootstrap.js')}}"></script>
<!--dynamic table initialization -->
<script src="{{ asset('admin/js/dynamic_table_init.js')}}"></script>
@endsection