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
                @if (session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif
                <div class="col-sm-8">
                    <section class="card">
                        <div class="card-body">
                            <header class="card-header d-flex justify-between">
                                <h5>All Blog</h5>
                                <a href="{{ route('blog.create') }}" class="btn btn-success" style="margin-bottom: 10px">Add
                                    New <i class="bx bx-plus px-2"></i></a>
                            </header>

                            <div class="adv-table">
                                <table class="display table table-bordered table-striped" id="dynamic-table">
                                    <thead>
                                        <tr>
                                            <th>Title</th>
                                            <th>Tag</th>
                                            <th>Image</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($blog as $item)
                                            <tr class="gradeX">
                                                <td>{{ $item->title }}</td>
                                                <td>
                                                    {{ $item->tag->title }}

                                                </td>
                                                <td>
                                                    <img src="{{ asset('uploads/blogs/' . $item->banner) }}"
                                                        style="height: 150px;width:200px;" />

                                                </td>
                                                <td>
                                                    <a href="{{ route('blog.edit', $item->id) }}"
                                                        class="btn btn-primary mx-2"><i class="bx bx-edit"></i></a>

                                                    <form method="POST" action="{{ route('blog.destroy', $item->id) }}">
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
                <div class="col-sm-4 col-md-4 col-lg-4">
                    <section class="card">
                        <div class="card-body">
                            <header class="card-header d-flex justify-between">
                                <h5>All Tags</h5>
                                <button type="button" class="btn btn-success" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal">
                                    Add<i class="bx bx-plus px-2"></i>
                                </button>
                            </header>
                            <div class="adv-table">
                                <table class="display table table-bordered table-striped" id="dynamic-table">
                                    <thead>
                                        <tr>
                                            <th>Title</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($tags as $item)
                                            <tr class="gradeX">
                                                <td>{{ $item->title }}</td>
                                                <td>
                                                    <div class="d-flex">
                                                        <a href="{{ route('tags.edit', $item->id) }}" data-bs-toggle="modal"
                                                            data-bs-target="#editModal" class="btn btn-primary mx-2"><i
                                                                style="font-size: 1rem" class="bx bx-edit"></i></a>

                                                        <form method="POST"
                                                            action="{{ route('tags.destroy', $item->id) }}">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button
                                                                onclick="return confirm('Are you sure you want to delete this item?')"
                                                                class="btn btn-danger mx-2"><i style="font-size: 1rem"
                                                                    class="bx bx-trash-alt"></i></button>
                                                        </form>
                                                    </div>

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
            {{-- add form modal --}}
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <form id="addItemForm1221" action="{{ route('tags.store') }}" method="POST">
                        @csrf
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Add Blog Tags</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="title">Tag Name</label>
                                    <input type="text" class="form-control" name="title" value="{{ old('title') }}"
                                        placeholder="Enter tag name">
                                    @error('title')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                <button type="submit" id="saveItemButton" class="btn btn-success">Save</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            {{-- add form modal end --}}
            {{-- edit form modal --}}
            <!-- Modal -->
            @if (!empty($item))
                <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <form action="{{ route('tags.update', $item->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Tag</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label for="title">Tag Name</label>
                                        <input type="text" class="form-control" name="title"
                                            value="{{ old('title', $item->title) }}" placeholder="Enter Category name">
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" id="saveItemButton" class="btn btn-success">Save</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            @endif

            {{-- edit form modal end --}}
        </section>
    </section>
@endsection
@section('js')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Add this script to your Blade file -->
    <script>
        // document.addEventListener('DOMContentLoaded', function () {        
        //     let form = document.getElementById('addItemForm1221');

        //     form.addEventListener('submit', function (event) {
        //         event.preventDefault();            
        //         let success = true; 
        //         if (success) {                
        //             $('#exampleModal').modal('hide');
        //         }
        //     });
        // });
    </script>
@endsection
