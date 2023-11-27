@extends('admin.layouts.app')
@section('content')
    <section id="main-content">
        <section class="wrapper">
            <!-- page start-->
            <div class="row">
                <div class="col-sm-12">
                    <section class="card">
                        <div class="card-header d-flex justify-between">
                             <h5>Our University</h5>
                             <a href="{{route('partner-associate.create')}}" class="btn btn-success" style="margin-bottom: 10px">Add New <i class="bx bx-plus px-2"></i></a>
                        </div>    
                        @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>Success!</strong> {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif                    
                        <div class="card-body">           

                            <div class="adv-table">
                                <table class="display table table-bordered table-striped" id="dynamic-table">
                                    <thead>
                                        <tr>
                                            <th>Name</th>                                            
                                            <th>Logo</th>
                                            <th>Is Associates</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($universities as $item)   
                                        <tr class="gradeX">
                                            <td>{{$item->name}}</td>
                                            <td><img src="{{asset('uploads/university')}}/{{$item->image}}" height="80" width="190"></td>
                                            <td>
                                                @if ($item->is_associate !==1)
                                                {No}
                                                    @else{
                                                        Yes
                                                    }
                                                @endif
                                            </td>
                                            
                                            
                                            <td>
                                                <a href="{{route('partner-associate.edit',$item->id)}}" class="btn btn-primary mx-2"><i class="bx bx-edit"></i></a>
                                                <form method="POST" action="{{route('partner-associate.destroy',$item->id)}}">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button onclick="return confirm('Are you sure you want to delete this item?')" class="btn btn-danger mt-3 mx-2"><i class="bx bx-trash"></i></button>
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
