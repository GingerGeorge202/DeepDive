@extends('layouts.admin')
@section('content')
    <form class="form-inline">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">№</th>
            <th scope="col">Name</th>
            <th scope="col">Surname</th>
            <th scope="col">Email</th>
            <th scope="col">Phone</th>
            <th scope="col">City</th>
            <th scope="col">Редагувати</th>
            <th scope="col">Видалити</th>
        </tr>
        </thead>
        <tbody>
        @foreach($clients as $client)
            <tr>
                <th scope="row">{{$loop->iteration}}
                </th>
                <td>{{$client->name}}</td>
                <td>{{$client->surname}}</td>
                <td>{{$client->email}}</td>
                <td>{{$client->phone}}</td>
                <td>{{$client->city}}</td>
                <th>
                    <a href="{{route('client.edit',jy)}}" class="btn btn-outline-primary">Редагувати</a>
                </th>
                <th>
                <form action="{{route('client.destroy',$client->id)}} " method="post" enctype="multipart/form-data">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-outline-danger">Видалити</button>
                    @section('content')

                </form>

                </th>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection

