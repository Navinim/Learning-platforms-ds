@extends('admin.layouts.app')
@section('content')
    <div class="container">
        <section class="card">
            <div class="card-body">
            <div class="card-title">
                Add Courses
                @if($errors->has('*'))
                <div class="alert alert-danger" role="alert">
                    {{ $errors->first('*') }}
                </div>
            @endif
            </div>
        <form action="{{ route('highlight.store') }}" method="post">
            @csrf
            <label for="type">Type:</label>
            <select class="form-select" name="type" aria-label="Default select example" required>
                <option selected>Select Course type</option>
                @foreach ($course as $item)
                <option value="{{$item->slug}}">{{$item->title}}</option>
                @endforeach                                       
                
              </select>
            <label for="data[0][title]">Title:</label>
            <input class="form-control" type="text" name="data[0][title]" placeholder="Title" required>

            <label for="data[0][icon]">Icon:</label>
            <input class="form-control" type="text" name="data[0][icon]" placeholder="icon" required>         

            <button type="submit" class="btn btn-info mt-2">Create Item</button>
        </form>
            </div>
        </section>
    </div>
@endsection
