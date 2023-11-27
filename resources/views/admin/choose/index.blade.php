@extends('admin.layouts.app')
@section('content')
    <section id="main-content">
        <section class="wrapper">
            <!-- page start-->
            <div class="row">
                <div class="col-sm-12">
                    <section class="card">
                        <div class="card-body">
                        <div class="card-header d-flex gap-3">
                            <h5>Why Choose Us</h5>                            
                            <a href="{{route('choose.create')}}" class="btn btn-success" style="margin-bottom: 10px">Add New <i class="fa fa-plus px-2"></i></a>
                        </div>               
                            

                            <div class="adv-table">
                                <table class="display table table-bordered table-striped" id="dynamic-table">
                                    <thead>
                                        <tr>
                                            <th>Title</th>
                                            <th>Description</th>
                                            <th>Icon</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($items as $choose)   
                                        <tr class="gradeX">
                                            <td>{{$choose->title}}</td>                                          
                                            <td>{!! $choose->description !!}</td>
                                            <td>
                                                <img  style="background-color: rgb(0, 0, 0)" src="{{url('uploads/choose/'.$choose->img)}}" alt="image">
                                            </td>
                                            <td>
                                                <a href="{{route('choose.edit',$choose->id)}}" class="btn btn-primary mx-2"><i class="bx bx-edit"></i></a>
                                                <form method="POST" action="{{route('choose.destroy',$choose->id)}}">
                                                 @csrf
                                                 @method('DELETE')
                                                 <button onclick="return confirm('Are you sure you want to delete this item?')" class="btn btn-danger mx-2 mt-2"><i class="bx bx-trash-alt"></i></button>
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
