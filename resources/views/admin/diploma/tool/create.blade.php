@extends('admin.layouts.app')
@section('content')
    <div class="container">
        <section class="card">
            <div class="card-body">
            <div class="card-title">
                Add Tools
            </div>
        <form action="{{ route('tools.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <label for="type">Type:</label>
            <select class="form-select" name="type" aria-label="Default select example">
                <option selected>Select Course type</option>
                @foreach ($course as $item)
                <option value="{{$item->slug}}">{{$item->title}}</option>
                @endforeach                                       
                
              </select>
            <label for="title">Title:</label>
            <input class="form-control" type="text" name="title" placeholder="Title">

            <label for="file">Image:</label>
            <input class="form-control" type="file" name="image" placeholder="icon" required>

            <button type="submit" class="btn btn-info mt-2">Create</button>
        </form>
            </div>
        </section>
    </div>
@endsection
