<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Deep Dive</title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script src="https://kit.fontawesome.com/90ec0072fa.js" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<h1>ksssssssssssssssssssss</h1>
<button class="center" onclick="show('block')">Приєднатись</button>
<div id="gray" onclick="show('none')"></div>
<div id="popup">
    <div class="container-popup" style="background-image: url('public/img/popup.jpg');">
        <i class="fas fa-times close" onclick="show('none')"></i>
        <div class="form">
            <h2 class="h2 center">Реєстрація</h2>
            <form action="/" method="POST">
                {{ csrf_field() }}
                <div class="wrap-input">
                    <input id="name" class="input" name="name" type="text" placeholder="Ім'я">
                    <i class="fas fa-user icon"></i>
                </div>

                <div class="wrap-input">
                    <input id="surname" class="input" name="surname" type="text" placeholder="Прізвище">
                    <i class="fas fa-user icon"></i>
                </div>

                <div class="wrap-input">
                    <input id="email" class="input" name="email" type="email" placeholder="E-mail">
                    <i class="fas fa-envelope icon"></i>
                </div>

                <div class="wrap-input">
                    <input id="phone_number" class="input" name="phone_number" type="tel" placeholder="Номер телефону">
                    <i class="fas fa-phone-square-alt icon"></i>
                </div>

                <div class="wrap-input">
                    <input id="city" class="input" name="city" type="text" placeholder="Місто">
                    <i class="fas fa-map-marked-alt icon"></i>
                </div>

{{--                <div class="form-group">--}}
{{--                    <label>--}}
{{--                        {{ Form::checkbox('is_admin', 1, false, ['id' => 'is_admin']) }}--}}
{{--                        Is admin--}}
{{--                    </label>--}}
{{--                </div>--}}

                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Приєднатись</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    function show(state) {
        document.querySelector('#popup').style.display = state;
        document.querySelector('#gray').style.display = state;
    }
</script>

</body>
</html>

