@extends('admin.layouts.app')
@section('content')
    <div class="container">
        <section class="card">
            <div class="card-body">
            <div class="card-title">
                Add Sponsors
            </div>
        <form action="{{ route('sponsors.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <label for="type">Type:</label>
            <select class="form-select" name="type" aria-label="Default select example">
                <option selected>Select Bootcamp Course Type</option>
                @foreach ($bootcamps as $item)
                <option value="{{$item->slug}}">{{$item->title}}</option>
                @endforeach                   
                
              </select>
            <label for="title">Comapny</label>
            <input class="form-control" type="text" name="title" placeholder="title" required>

            <label for="details">Details</label>
            <textarea class="form-control" type="text" name="details" placeholder="details"></textarea>

            <label for="image">Image</label>
            <input class="form-control" type="file" name="image" placeholder="image" required>

            <button type="submit" class="btn btn-info mt-2">Create</button>
        </form>
            </div>
        </section>
    </div>
@endsection
