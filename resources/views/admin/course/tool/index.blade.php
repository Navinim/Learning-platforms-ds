@extends('admin.layouts.app')
@section('content')
    <section id="main-content">
        <section class="wrapper">
            <!-- page start-->
            <div class="row">
                <div class="col-sm-12">
                    <section class="card">
                        <div class="card-header d-flex justify-between">
                            <h5>All Tools</h5>
                            <a href="{{route('tools.create')}}" class="btn btn-success" style="margin-bottom: 10px">Add New <i class="bx bx-plus px-2"></i></a>                            
                        </div>
                        <div class="card-body">
                            @if(session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif
                            <div class="adv-table">
                                <table class="display table table-bordered table-striped" id="dynamic-table">
                                    <thead>
                                        <tr>
                                            <th>Type</th>
                                            <th>Title</th>
                                            <th>Image</th>
                                            {{-- <th>icon</th> --}}
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($tools as $item)                                                                               
                                        <tr class="gradeX">
                                            <td>{{ $item['type'] }}</td>
                                            <td>{{ $item['title'] }}</td>                                           
                                            <td><img src="{{asset('uploads/tools/'.$item->image)}}" alt="image" style="width: 100px"></td>
                                            {{-- <td>{{ $item['icon'] }}</td> --}}
                                            <td>
                                                <a href="{{route('tools.edit',$item->id)}}" class="btn btn-success mx-2"><i class="bx bx-edit"></i></a>
                                                <form method="POST" action="{{route('tools.destroy',$item->id)}}">
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
