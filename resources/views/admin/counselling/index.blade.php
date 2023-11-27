@extends('admin.layouts.app')
@section('content')
    <section id="main-content">
        <section class="wrapper">
            <!-- page start-->
            <div class="row">
                <div class="col-sm-12">
                    <section class="panel">
                        <header class="panel-heading">
                            User Counselling Message
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
                                            <th>FUll Name</th>
                                            <th>Phone Number</th>
                                            <th>Email</th>
                                            <th>Study Destination</th>
                                            <th>Intake Date</th>
                                            <th>Mode of Councelling</th>
                                            <th>Study Level</th>
                                            <th>Contact Through Phone, Email, SMS</th>
                                            <th>Recive Updates and Offers</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($collections as $item)   
                                        <tr class="gradeX">
                                            <td>{{$item->fname}} {{$item->lname}}</td>
                                            <td>{{$item->phone}}</td>
                                            <td>{{$item->email}}</td>
                                            <td>{{$item->study_destination}}</td>
                                            <td>{{$item->study_intake}}</td>
                                            <td>{{$item->mode_counselling}}</td>
                                            <td>{{$item->level}}</td>
                                            <td>@if ($item->contact_me == 1)
                                                <span class="text-success"><i class="fa fa-check-square"></i></span>
                                            @else
                                                <span class="text-danger"><i class="fa fa-minus-square"></i></span>
                                            @endif</td>
                                            <td>@if ($item->update_offer == 1)
                                                <span class="text-success"><i class="fa fa-check-square"></i></span>
                                            @else
                                                <span class="text-danger"><i class="fa fa-minus-square"></i></span>
                                            @endif</td>
                                            <td>
                                                <a href="{{route('admin.counselling.destroy',['id'=>$item->id])}}" class="btn btn-danger mx-2"><i class="fa fa-trash-o"></i></a>
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
