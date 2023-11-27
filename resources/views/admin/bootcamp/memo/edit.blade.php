@extends('admin.layouts.app')
@section('content')
    <div class="container">
        <section class="card">
            <div class="card-body">
            <div class="card-title">
                Add Memo
            </div>
            @if($errors->has('*'))
    <div class="alert alert-danger" role="alert">
        {{ $errors->first('*') }}
    </div>
@endif

        <form action="{{ route('memos.update',$bootcampmemos->id) }}" method="post">
            @csrf
            @method('PUT')
            @php
                $bootcampmemo = json_decode($bootcampmemos->data, true);
            @endphp
            <label for="type">Type:</label>
            <select class="form-select" name="type" aria-label="Default select example">
                <option selected value="{{$bootcampmemos['type']}}">{{$bootcampmemos['type']}}</option>
                @foreach ($bootcamps as $item)
                <option value="{{$item->slug}}">{{$item->title}}</option>
                @endforeach                   
                
              </select>
            <label for="start">Start Date:</label>
            <input class="form-control" type="date" name="start" value="{{$bootcampmemo['start']}}" placeholder="start" required>

            <label for="end">End Data:</label>
            <input class="form-control" type="date" name="end" value="{{$bootcampmemo['end']}}" placeholder="end" required>

            <label for="time">Time:</label>
            <textarea class="form-control" name="time" placeholder="Short details" required>{{$bootcampmemo['time']}}</textarea>

            <label for="venue">Venue Data:</label>
            <input class="form-control" type="text" name="venue" value="{{$bootcampmemo['venue']}}" placeholder="venue" required>
            
            <label for="expert">Expert Team:</label>
            <input class="form-control" type="text" name="expert" value="{{$bootcampmemo['expert']}}" placeholder="expert" required>

            <button type="submit" class="btn btn-info mt-2">Update Memo</button>
        </form>
            </div>
        </section>
    </div>
@endsection
