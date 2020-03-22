@extends('layouts.admin')
@section('content')
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
                    <a href="{{route('client.edit',$client->id)}}" class="btn btn-outline-primary">Редагувати</a>
                </th>
                <th>
                <form action="{{route('client.destroy',$client->id)}} " method="post" enctype="multipart/form-data">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-outline-primary">Видалити</button>
                </form>
                </th>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection

