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
                                <h5>All Question</h5>
                                <a href="{{ route('interviews.create') }}" class="btn btn-success" style="margin-bottom: 10px">Add
                                    New <i class="bx bx-plus px-2"></i></a>
                            </header>

                            <div class="adv-table">
                                <table class="display table table-bordered table-striped" id="dynamic-table">
                                    <thead>
                                        <tr>
                                            <th>Main Topic</th>
                                            <th>Questions</th>
                                            <th>Answer</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($interview as $item)
                                            <tr class="gradeX">
                                                <td>{{ $item->interviewcategory->title }}</td>
                                                <td>
                                                    {{ $item->question }}

                                                </td>
                                                <td>
                                                    {{$item->answer}}

                                                </td>
                                                <td>
                                                    <a href="{{ route('interviews.edit', $item->id) }}"
                                                        class="btn btn-primary mx-2"><i class="bx bx-edit"></i></a>

                                                    <form method="POST" action="{{ route('interviews.destroy', $item->id) }}">
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
                                <h5>All Main Topic</h5>
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
                                        @foreach ($interviewCate as $item)
                                            <tr class="gradeX">
                                                <td>{{ $item->title }}</td>
                                                <td>
                                                    <div class="d-flex">
                                                        <a href="{{ route('interview-cates.edit', $item->id) }}" data-bs-toggle="modal"
                                                            data-bs-target="#editModal" class="btn btn-primary mx-2"><i
                                                                style="font-size: 1rem" class="bx bx-edit"></i></a>

                                                        <form method="POST"
                                                            action="{{ route('interview-cates.destroy', $item->id) }}">
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
                <div class="modal-dialog modal-lg">
                    <form id="addItemForm1221" action="{{ route('interview-cates.store') }}" method="POST">
                        @csrf
                        <div class="modal-content ">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Add Main Topic</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="name">Main Topic</label>
                                    <input type="text" class="form-control" name="title" value="{{ old('title') }}"
                                        placeholder="Enter topic title" required>
                                    @error('title')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="name">Sub Title</label>
                                    <input type="text" class="form-control" name="sub_title" value="{{ old('sub_title') }}"
                                        placeholder="Enter topic sub title" required>
                                    @error('sub_title')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="name">Short Details</label>
                                    <textarea type="text" class="form-control" id="details" name="details" value="{{ old('title') }}"
                                        placeholder="Enter topic title" required></textarea>
                                    @error('name')
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
                        <form action="{{ route('practice-cates.update', $item->id) }}" method="POST">
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
                                        <label for="title">Main Topic Name</label>
                                        <input type="text" class="form-control" name="name"
                                            value="{{ $item->name}}" placeholder="Enter Category name">
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
    <script>
        CKEDITOR.replace( 'details');
    </script>
@endsection
