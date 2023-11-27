@extends('admin.layouts.app')
@section('content')
    <section id="main-content">
        <section class="wrapper">
            <!-- page start-->
            <div class="row">
                <div class="col-sm-12">
                    <section class="card">
                        <div class="card-header">
                            <h5>Gallery Categories</h5>
                            <a href="{{route('gallery-categories.create')}}" class="btn btn-success" style="margin-bottom: 10px">Add New <i class="bx bx-plus px-2"></i></a>
                            
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
                                        @foreach ($categories as $category)   
                                        <tr class="gradeX">
                                            <td>{{$category->title}}</td>
                                            
                                            <td>
                                                <a href="{{route('gallery-categories.edit',$category->id)}}" class="btn btn-success mx-2"><i class="bx bx-edit"></i></a>
                                                <form method="POST" action="{{route('gallery-categories.destroy',$category->id)}}">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn btn-danger mt-2 mx-2"><i class="bx bx-trash"></i></button>
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
