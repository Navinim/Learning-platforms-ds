@extends('admin.layouts.app')
@push('css')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
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
                                <h5>Bootcamp Courses</h5>
                                <a href="{{ route('memos.create') }}" class="btn btn-success"
                                    style="margin-bottom: 10px">Add New <i class="bx bx-plus px-2"></i></a>
                            </header>
                            <div class="adv-table">
                                <table class="display table table-bordered table-striped" id="dynamic-table">
                                    <thead>
                                        <tr>
                                            <th>Type</th>
                                            <th>Memo</th>                                            
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($bootcampmemos as $items)
                                            @php
                                                $item = json_decode($items->data, true);
                                            @endphp 
                                            <tr class="gradeX">
                                                <td>{{ $items['type'] }}</td>
                                                <td>
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <h5 class="card-title">Bootcamp Information</h5>                                                            
                                                            <p class="card-text"><strong>Start Date:</strong> {{ $item['start'] }}</p>                                                            
                                                            <p class="card-text"><strong>End Date:</strong> {{ $item['end'] }}</p>                                                            
                                                            <p class="card-text"><strong>Time:</strong> {{ $item['time'] }}</p>                                                            
                                                            <p class="card-text"><strong>Venue:</strong> {{ $item['venue'] }}</p>                                                            
                                                            <p class="card-text"><strong>Expert:</strong> {{ $item['expert'] }}</p>
                                                        </div>
                                                    </div>
                                                    
                                                </td>                                                
                                                <td>
                                                    <a href="{{ route('memos.edit', $items->id) }}"
                                                        class="btn btn-primary mx-2"><i class="bx bx-edit"></i></a>

                                                    <form method="POST"
                                                        action="{{ route('memos.destroy', $items->id) }}">
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
                {{-- <div class="col-sm-4 col-md-4 col-lg-4">
                    <section class="card">
                        <div class="card-body">
                            <header class="card-header d-flex justify-between">
                                <h5>Course Category</h5>
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
                                        @foreach ($cate_course as $item)
                                            <tr class="gradeX">
                                                <td>{{ $item->title }}</td>                                                                                               
                                                <td>
                                                    <div class="d-flex">
                                                        <a href="{{ route('category.edit', $item->id) }}" data-bs-toggle="modal"
                                                            data-bs-target="#editModal"
                                                            class="btn btn-primary mx-2" ><i style="font-size: 1rem" class="bx bx-edit"></i></a>
    
                                                        <form method="POST"
                                                            action="{{ route('category.destroy', $item->id) }}">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button
                                                                onclick="return confirm('Are you sure you want to delete this item?')"
                                                                class="btn btn-danger mx-2" ><i style="font-size: 1rem"
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
                </div> --}}
            </div>
           
        </section>
    </section>
@endsection
@section('js')
    
    <!-- Add Bootstrap JS and CSS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
        integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous">
    </script>
    
    @endsection
