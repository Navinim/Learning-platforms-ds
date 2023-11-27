@extends('admin.layouts.app')
@section('content')
    <div class="container">
        <section class="card">
            <div class="card-body">
            <div class="card-title">
                Edit Tools
            </div>
        <form action="{{ route('tools.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <label for="type">Type:</label>
            <select class="form-select" name="type" aria-label="Default select example">
                <option selected value="{{$tool->type}}">{{$tool->type}}</option>
                @foreach ($course as $item)
                <option value="{{$item->slug}}">{{$item->title}}</option>
                @endforeach                                       
                
              </select>
            <label for="title">Title:</label>
            <input class="form-control" type="text" name="title" value="{{$tool->title}}" placeholder="Title">

            <label for="file">Image:</label>
            <input id="fileInput" class="form-control" type="file" name="image" placeholder="icon" required data-previous-image="{{ asset('uploads/tools/' . $tool->image) }}" onchange="previewImage(this)">
            <img class="mt-2" id="imagePreview" src="{{ asset('uploads/tools/' . $tool->image) }}"  alt="" style="width: 100px">
            <button type="submit" class="btn btn-info mt-2">Create</button>
        </form>
            </div>
        </section>
    </div>
@endsection
@section('js')
<script>
    function previewImage(input) {
        var preview = document.getElementById('imagePreview');
        var fileInput = input.files[0];

        if (fileInput) {
            var reader = new FileReader();
            reader.onload = function (e) {
                preview.src = e.target.result;
                preview.style.display = 'block';
            };

            reader.readAsDataURL(fileInput);
        } else {
            var previousImage = input.getAttribute('data-previous-image');
            preview.src = previousImage;
            preview.style.display = 'block';
        }
    }
</script>
@endsection
