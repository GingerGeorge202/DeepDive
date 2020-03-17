@extends('layouts.admin')
@section('content')

    <form action="{{route('feedback.update',$feedback->id)}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="exampleFormControlInput1">Автор</label>
            <input type="text" name="author" class="form-control" id="exampleFormControlInput1" value="{{$feedback->author}}">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Опис</label>
            <input type="text" name="describe" class="form-control" id="exampleFormControlInput1" value="{{$feedback->describe}}">
        </div>
        <input type="file" name="img">
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
