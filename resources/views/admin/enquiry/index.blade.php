@extends('admin.layouts.app')
@section('content')
    <section id="main-content">
        <section class="wrapper">
            <!-- page start-->
            <div class="row">
                <div class="col-sm-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Admission Form
                            <span class="tools pull-right">
                                <a href="javascript:;" class="fa fa-chevron-down"></a>
                                <a href="javascript:;" class="fa fa-times"></a>
                            </span>
                        </header>
                        <div class="panel-body">
                            {{-- <a href="{{route('admin.feature.add')}}" class="btn btn-success" style="margin-bottom: 10px">Add New <i class="fa fa-plus px-2"></i></a> --}}

                            <div class="adv-table">
                                <table class="display table table-bordered table-striped" id="dynamic-table">
                                    <thead>
                                        <tr>
                                            <th>Full Name</th>
                                            <th>Phone Number</th>
                                            <th>Email</th>
                                            <th>Education Country</th>
                                            <th>Visa Service</th>
                                            <th>Documents</th>
                                            <th>COmments</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($enquires as $item)   
                                        <tr class="gradeX">
                                            <td>{{$item->fname}} {{$item->lname}}</td>
                                            <td>{{$item->phone}}</td>
                                            <td>{{$item->email}}</td>
                                            <td>{{$item->study_destination}}</td>
                                            <td>{{$item->visa_service}}</td>
                                            <td>{{$item->documents}}
                                                <ul>
                                                    @foreach ($item->documents as $item)
                                                        <li><a href="{{asset('storage/documents/enquiry/'.$item)}}">Document {{$loop->iteration}}</li>
                                                    @endforeach
                                                </ul>
                                            </td>
                                            <td>{{$item->comments}}</td>
                        
                                            <td>
                                                <a href="{{route('admin.enquiry.destroy',['id'=>$item->id])}}" class="btn btn-danger mx-2"><i class="fa fa-trash-o"></i></a>
                                            </td>
                                        </tr>
                                        @endforeach

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
