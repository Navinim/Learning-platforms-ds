@extends('admin.layouts.app')
@section('content')
    <section id="main-content">
        <section class="wrapper">
            <!-- page start-->
            <div class="row">
                <div class="col-sm-12">
                    <section class="card">
                        <div class="card-header">
                            <h5>Our Registered Student</h5>
                            
                            <a href="{{route('student.create')}}" class="btn btn-success" style="margin-bottom: 10px">Add New <i class="bx bx-plus px-2"></i></a>
                        </div>
                        <div class="card-body">                          

                            <div class="adv-table">
                                <table class="display table table-bordered table-striped" id="dynamic-table">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Email</th>                                          
                                            <th>Password Hint</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($students as $member)  
                                    @if ($member->user_type=='student')                                   
                                    
                                        <tr class="gradeX">
                                            <td>{{$member->name}}</td>
                                            <td>{{$member->email}}</td>                                            
                                            <td>{{$member->hint}}</td>
                                            <td>
                                                {{-- <a href="{{route('student.edit',$member->id)}}" class="btn btn-primary mx-2"><i class="bx bx-edit"></i></a> --}}
                                                <form action="{{route('student.destroy',$member->id)}}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button onclick="return confirm('Are you sure you want to delete this user?');" class="btn btn-danger mx-2"><i class="bx bx-trash"></i></button>
                                                </form>
                                                
                                            </td>
                                        </tr>
                                        @endif 
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
