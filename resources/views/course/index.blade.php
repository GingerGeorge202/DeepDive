@extends('layouts.admin')
@section('content')
    <div>
        <div class="col-sm-2">
            <img src="{{$courses[0]->img  ?? 'img/plan1.png'}}">
        </div>
        <p class="descr" id="p1">{{$courses[0]->describe  ?? "Змінити роботу на кращу - де English - Must Have"}}</p>
        <a href="{{route('course.edit',$courses[0]->id)}}" class="btn btn-outline-primary">Редагувати</a>
    </div>

    <div>
        <div class="col-sm-2">
            <img src="{{$courses[1]->img  ?? 'img/plan2.png'}}">
        </div>
        <p class="descr" id="p1">{{$courses[1]->describe  ?? "релокацію за кордон"}}</p>
        <a href="{{route('course.edit',$courses[1]->id)}}" class="btn btn-outline-primary">Редагувати</a>
    </div>

    <div>
        <div class="col-sm-2">
            <img src="{{$courses[2]->img  ?? 'img/plan3.png'}}">
        </div>
        <p class="descr" id="p1">{{$courses[2]->describe  ?? "пройти співбесіду в компанію з іноземним капіталом"}}</p>
        <a href="{{route('course.edit',$courses[2]->id)}}" class="btn btn-outline-primary">Редагувати</a>
    </div>

    <div>
        <div class="col-sm-2">
            <img src="{{$courses[3]->img  ?? 'img/plan4.png'}}">
        </div>
        <p class="descr" id="p1">{{$courses[3]->describe  ?? "стрімкий кар'єрний ріст"}}</p>
        <a href="{{route('course.edit',$courses[3]->id)}}" class="btn btn-outline-primary">Редагувати</a>
    </div>

    <div>
        <div class="col-sm-2">
            <img src="{{$courses[4]->img  ?? 'img/plan5.png'}}">
        </div>
        <p class="descr" id="p1">{{$courses[4]->describe  ?? "навчання за кордоном"}}</p>
        <a href="{{route('course.edit',$courses[4]->id)}}" class="btn btn-outline-primary">Редагувати</a>
    </div>

        <div>
            <div class="col-sm-2">
                <img src="{{$courses[5]->img  ?? 'img/plan6.png'}}">
            </div>
            <p class="descr" id="p1">{{$courses[5]->describe  ?? "спілкування з англомовним клієнтом чи Native Speaker"}}</p>
            <a href="{{route('course.edit',$courses[5]->id)}}" class="btn btn-outline-primary">Редагувати</a>
        </div>

    @endsection
