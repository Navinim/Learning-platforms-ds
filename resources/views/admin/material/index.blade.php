@extends('admin.layouts.app')
@section('content')
    <section id="main-content">
        <section class="wrapper">
            <!-- page start-->
            <div class="row">
                <div class="col-sm-12">
                    <section class="card">
                        <div class="card-header">
                            <h5>Study Material Details</h5>
                            <a href="{{route('material.create')}}" class="btn btn-success" style="margin-bottom: 10px">Add New <i class="bx bx-plus px-2"></i></a>                            
                        </div>
                        <div class="card-body">
                               <div class="adv-table">
                                <table class="display table table-bordered table-striped" id="dynamic-table">
                                    <thead>
                                        <tr>
                                            <th>Title</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                         @foreach ($materials as $item)   
                                        <tr class="gradeX">
                                            <td>{{$item->title}}</td>                                            
                                            <td>
                                                <a href="{{route('material.edit',$item->id)}}" class="btn btn-success mx-2"><i class="bx bx-edit"></i></a>
                                                <form method="POST" action="{{route('material.destroy',$item->id)}}">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button onclick="return confirm('Are you sure you want to delete this user?');" class="btn btn-danger mt-2 mx-2"><i class="bx bx-trash"></i></button>
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
