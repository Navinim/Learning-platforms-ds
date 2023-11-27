@extends('admin.layouts.app')
@section('content')
    <div class="container">
        <section class="card">
            <div class="card-body">
                <div class="card-title">
                    Edit Highligts
                </div>
                <form action="{{ route('highlight.update',$highlight->id) }}" method="post">
                    @csrf
                    @method('PUT')
                    @php
                        $highlights = json_decode($highlight->data, true);
                    @endphp
                    <label for="type">Type:</label>
                    <select class="form-select" name="type" value="{{$highlights['type']}}"  aria-label="Default select example">
                        <option selected value="{{$highlights['type']}}">{{$highlights['type']}}</option>
                        @foreach ($course as $item)
                            <option value="{{ $item->slug }}">{{ $item->title }}</option>
                        @endforeach

                    </select>
                    <label for="title">Title:</label>
                    <input class="form-control" type="text" name="title" value="{{$highlights['title']}}"
                        placeholder="Title" required>

                    <label for="icon">Icon:</label>
                    <input class="form-control" type="text" name="icon" value="{{$highlights['icon']}}" placeholder="icon"
                        required>

                    <label for="details">Details:</label>
                    <textarea class="form-control" name="details" value="" placeholder="Short details" required>{{$highlights['details']}}</textarea>

                    <button type="submit" class="btn btn-info mt-2">Create Item</button>
                </form>
            </div>
        </section>
    </div>
@endsection
