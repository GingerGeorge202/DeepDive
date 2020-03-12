@extends('layouts.admin')
@section('content')
    <form action="{{route('client.update',$client->id)}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        <div class="form-group">
            <label for="exampleFormControlInput1">Імя</label>
            <input type="text" name="name" class="form-control" id="exampleFormControlInput1" value="{{old('title') ?? $client->name ?? ''}}">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Прізвище</label>
            <input type="text" name="surname" class="form-control" id="exampleFormControlInput1" value="{{old('title') ?? $client->surname ?? ''}}">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Email address</label>
            <input type="email" name="email" class="form-control" id="exampleFormControlInput1" value="{{old('title') ?? $client->email ?? ''}}">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Телефон</label>
            <input type="text" name="phone" class="form-control" id="exampleFormControlInput1" value="{{old('title') ?? $client->phone ?? ''}}">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Місто</label>
            <input type="text" name="city" class="form-control" id="exampleFormControlInput1" value="{{old('title') ?? $client->city ?? ''}}">
        </div>
        <input type="submit" value="Редагувати" class="btn-outline-success btn">
    </form>
@endsection
