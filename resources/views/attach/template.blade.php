@extends('layout')
@section('popap')

<form action="/" method="POST">
        {{ csrf_field() }}
    <div class="form-group">
        <input id="name" class="form-control" name="name" type="text" placeholder="Ім'я">
        <i class="fas fa-user"></i>
    </div>

    <div class="form-group">
        <input id="surname" class="form-control" name="surname" type="text" placeholder="Прізвище">
        <i class="fas fa-user"></i>
    </div>

    <div class="form-group">
        <input id="email" class="form-control" name="email" type="email" placeholder="E-mail">
        <i class="fas fa-envelope"></i>
    </div>

    <div class="form-group">
        <input id="phone_number" class="form-control" name="phone_number" type="text" placeholder="Номер телефону">
        <i class="fas fa-phone-square-alt"></i>
    </div>

    <div class="form-group">
        <input id="city" class="form-control" name="city" type="text" placeholder="Місто">
        <i class="fas fa-map-marked-alt"></i>
    </div>

{{--    <div class="form-group">--}}
{{--        <label>--}}
{{--            {{ Form::checkbox('is_admin', 1, false, ['id' => 'is_admin']) }}--}}
{{--            Is admin--}}
{{--        </label>--}}
{{--    </div>--}}

        <div class="text-center">
            <button type="submit" class="btn btn-primary">Приєднатись</button>
        </div>
</form>
@endsection

