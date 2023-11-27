@extends('admin.layouts.app')
@section('content')
    <section id="main-content">
        <section class="wrapper">
            <!-- page start-->
            <div class="row">
                <div class="col-sm-12">
                    <section class="card">
                        <div class="card-header">
                             <h5>Language Classes</h5>
                            
                        </div>
                        <div class="card-body">
                            <a href="{{route('classes.create')}}" class="btn btn-success" style="margin-bottom: 10px">Add New <i class="fa fa-plus px-2"></i></a>

                            <div class="adv-table">
                                <table class="display table table-bordered table-striped" id="dynamic-table">
                                    <thead>
                                        <tr>
                                            <th>Title</th>
                                            <th>Overview</th>                                            
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($classes as $class)   
                                        <tr class="gradeX">
                                            <td>{{$class->title}}</td>
                                            <td>{!! $class->overview !!}</td>                                            
                                            <td>
                                                <a href="{{route('classes.edit',$class->id)}}" class="btn btn-primary mx-2"><i class="bx bx-edit"></i></a>
                                                <form method="POST" action="{{route('classes.destroy',$class->id)}}">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button onclick="return confirm('Are you sure you want to delete this item?')" class="btn btn-danger  mt-2 mx-2"><i class="bx bx-trash-alt"></i></button>
                                                </form>                                                
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
