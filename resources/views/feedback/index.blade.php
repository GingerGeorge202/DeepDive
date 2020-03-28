@extends('layouts.admin')
@section('content')
    <div class="add-new">
        <p><b>Додати новий відгук</b></p>
        <a href="{{route('feedback.create')}}" class="btn btn-success ">Новий відгук</a>
    </div>

    <div class="container-fluid">
        @foreach($feedbacks as $feedback)

            @if($loop->odd)

        <div class="row">
            <div class="col-5 m-auto">
                <img src="{{$feedback->img ?? 'https://intita.com/images/mainpage/intitaLogo.jpg'}}" width="100%">
            </div>

            <div class="col-1 m-auto">
                <p>{{$feedback->author}}</p>
            </div>
            <div class="col-4 m-auto">
                <p class="descr" id="p1">{{$feedback->describe}}</p>
            </div>
            <div class="col-2 m-auto edit-sec">
                <a href="{{route('feedback.edit',$feedback->id)}}" class="btn btn-outline-primary">Редагувати</a>
                <form action="{{route('feedback.destroy',$feedback->id)}} " method="post" enctype="multipart/form-data">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-outline-danger">Видалити</button>
                </form>
            </div>
        </div>

            @else

                <div class="row ">
                    <div class="col-2 m-auto edit-sec">
                        <a href="{{route('feedback.edit',$feedback->id)}}" class="btn btn-outline-primary">Редагувати</a>
                        <form action="{{route('feedback.destroy',$feedback->id)}} " method="post" enctype="multipart/form-data">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-outline-danger">Видалити</button>
                        </form>
                    </div>
                    <div class="col-4 m-auto">
                        <p class="descr" id="p1">{{$feedback->describe}}</p>
                    </div>
                    <div class="col-1 m-auto">
                        <p>{{$feedback->author}}</p>
                    </div>
                    <div class="col-5 m-auto">
                        <img src="{{$feedback->img ?? 'https://intita.com/images/mainpage/intitaLogo.jpg'}}" width="100%">
                    </div>
                </div>

                @endif
            @endforeach
    </div>
    @endsection
