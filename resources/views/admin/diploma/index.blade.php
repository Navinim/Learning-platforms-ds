@extends('admin.layouts.app')
@push('css')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
@endpush
@section('content')
    <section id="main-content">
        <section class="wrapper">
            <!-- page start-->
            <div class="row">                
                @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Success!</strong> {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            
                <div class="col">
                    <section class="card">
                        <div class="card-body">
                            <header class="card-header d-flex justify-between">
                                <h5>All Diploma Courses</h5>
                                <a href="{{ route('diploma.create') }}" class="btn btn-success"
                                    style="margin-bottom: 10px">Add New <i class="bx bx-plus px-2"></i></a>
                            </header>

                            <div class="adv-table">
                                <table class="display table table-bordered table-striped" id="dynamic-table">
                                    <thead>
                                        <tr>
                                            <th>Title</th>                                            
                                            <th>Image</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($diploma as $item)
                                            <tr class="gradeX">
                                                <td>{{ $item->title }}</td>                                              
                                            
                                                <td>
                                                        <img src="{{ asset('uploads/diploma/'. $item->banner) }}" style="height: 150px;width:200px"/>
                                                        
                                                </td>
                                                <td>
                                                    <a href="{{ route('diploma.edit', $item->id) }}"
                                                        class="btn btn-primary mx-2"><i class="bx bx-edit"></i></a>

                                                    <form method="POST"
                                                        action="{{ route('diploma.destroy', $item->id) }}">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button
                                                            onclick="return confirm('Are you sure you want to delete this item?')"
                                                            class="btn btn-danger  mt-2 mx-2"><i
                                                                class="bx bx-trash-alt"></i></button>
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
@section('js')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>

@endsection
