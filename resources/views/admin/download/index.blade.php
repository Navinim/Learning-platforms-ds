@extends('admin.layouts.app')
@section('content')
    <section id="main-content">
        <section class="wrapper">
            <!-- page start-->
            <div class="row">
                <div class="col-sm-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Download Forms
                            <span class="tools pull-right">
                                <a href="javascript:;" class="fa fa-chevron-down"></a>
                                <a href="javascript:;" class="fa fa-times"></a>
                            </span>
                        </header>
                        <div class="panel-body">
                            <a href="{{route('admin.download.add')}}" class="btn btn-success" style="margin-bottom: 10px">Add New <i class="fa fa-plus px-2"></i></a>

                            <div class="adv-table">
                                <table class="display table table-bordered table-striped" id="dynamic-table">
                                    <thead>
                                        <tr>
                                            <th>Form</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($downloads as $download)   
                                        <tr class="gradeX">
                                            <td><a href="{{asset('storage/pdf/forms/'.$download->pdf)}}" target="_blank">{{$download->title}}</a></td>
                                            
                                            <td>
                                                <a href="{{route('admin.download.edit',['id'=>$download->id])}}" class="btn btn-primary mx-2"><i class="fa fa-edit"></i></a>
                                                <a href="{{route('admin.download.destroy',['id'=>$download->id])}}" class="btn btn-danger mx-2"><i class="fa fa-trash-o"></i></a>
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
