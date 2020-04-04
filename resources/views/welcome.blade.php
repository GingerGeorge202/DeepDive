<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Deep Dive</title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
	<header class="Palatino" >
		<div id="head" class="container">
  <div class="row">

    <div class="col-sm">
      <img src="img/logo.png">
    </div>
    <div class="col-sm">
      <p><a href="#plan">Про курс</a></p>
    </div>
    <div class="col-sm">
      <p><a href="#galery">Галерея</a> </p>
    </div>
    <div class="col-sm">
      <p><a href="#feadback">Відгуки</a> </p>
    </div>
    <div class="col-md">
      <ul type="none" class="tel">
      	<li>+380 67 431 19 21</li>
      	<li>+380 73 209 97 43</li>
      </ul>
    </div>

  </div>
</div>
<div class="Palatino" id="header-text">

	<strong><div id="h1"> DEEP DIVE <span id="into">INTO</span> ENGLISH
	</div></strong>

	<div id="lvl_up">
    <p>
    	<strong>
		піднімемо ваш англійський
			<br>
		на один або два рівні
	    </strong>
	</p>
	</div>
	<div id="time" class="container">
  <div class="row">
    <div class="col-sm">
     <strong>3</strong>
     <p class="time">годин/день</p>
    </div>
    <div class="col-sm">
      <strong>5</strong>
     <p class="time">днів/тиждень</p>
    </div>
    <div class="col-sm">
       <strong>11</strong>
     <p class="time">тижнів</p>
    </div>
    <div class="col-sm">
       <strong>66</strong>
      <p class="time">днів</p>
    </div>
    <div class="col-sm">
       <strong>165</strong>
      <p class="time">годин</p>
     <p class="padding">інтенсивного вивчення</p>
     <p class="padding">англійської мови</p>
     <p class="padding">від IT-Академії</p>
    </div>

  </div>
</div>
<button class="Palatino" id="join" onclick="show('block')"><strong>ПРИЄДНАТИСЬ</strong> </button>

    <div id="gray" onclick="show('none')"></div>

    <div id="popup" style="background-image: url({{asset('img/popup.jpg')}});background-size: cover;
        background-position: center;">
        <div class="container-popup" >
            <i class="fas fa-times close" onclick="show('none')"></i>
            <div class="form">
                <h2 class="h2 center">Реєстрація</h2>
                <form id="signupForm" action="{{route('client.store')}}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="wrap-input">
                        <input id="name" class="input" name="name" type="text" placeholder="Ім'я" required>
                        <i class="fas fa-user icon"></i>
                    </div>

                    <div class="wrap-input">
                        <input id="surname" class="input" name="surname" type="text" placeholder="Прізвище" required>
                        <i class="fas fa-user icon"></i>
                    </div>

                    <div class="wrap-input">
                        <input id="email" class="input" name="email" type="email" placeholder="E-mail" required>
                        <i class="fas fa-envelope icon"></i>
                    </div>

                    <div class="wrap-input">
                        <input id="phone" class="input" name="phone" type="tel" placeholder="Номер телефону починаючи з +38" required>
                        <i class="fas fa-phone-square-alt icon"></i>
                    </div>

                    <div class="wrap-input">
                        <input id="city" class="input" name="city" type="text" placeholder="Місто" required>
                        <i class="fas fa-map-marked-alt icon"></i>
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Приєднатись</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
	</header>

	<div class="Palatino" id="plan">
        <p id="for">Заняття розраховані<br> для тих, хто планує:</p>
        <strong id="planinn">
		<div  class="container-fluid wrapper4 plan_in Palatino ">
  <div class="row">

      @foreach($courses as $course)

          @if($loop->odd)

              <div class="col-3 my-4 ml-auto text-center" id="img11">
                  <img class="lazyload" data-src="{{$course->img}}">
              </div>
              <div class="col-3 my-4 mr-auto" >
                  <br>
                  <p class="descr text-left" id="p1">{{$course->describe}}</p>
              </div>

          @else

              <div class="col-3 my-4 ml-auto text-center" id="img12">
                  <img class="lazyload" data-src="{{$course->img}}">
              </div>
              <div class="col-3 my-4 mr-auto text-left">
                  <br>
                  <p class="descr text-left"  id="p2">{{$course->describe}}</p>
              </div>

          @endif

      @endforeach

            </div>

    </div>
</strong>
    </div>

	<div id="galery">
    <div class="container Palatino" id="gal_top">
  <div class="row">
    <div class="col-md-6" >
      <p id="gal_head" > Заняття проходять в цікавій формі<br>як в аудиторії, так і поза її межами</p>
    </div>
    <div class="col-md-6">
      <p> </p>
    </div>
  </div>
</div>
		<div class="wrapper">
        <div class="slides">
            @foreach ($sliderImages as $image)
                <div class="slide">
                    <img class="lazyload" data-src="{{asset($image->pathImage)}}" alt="{{$image->title}}" src="">
                </div>
{{--            <div class="slide">--}}
{{--                <img src="">--}}
{{--            </div>--}}
            @endforeach
        </div>
        <div class="buttons-block">
            <div id="left-button"><img class="lazyload" data-src="img/left.png"></div>
            <div id="right-button"><img class="lazyload" data-src="img/right.png"></div>
        </div>
    </div>
	</div>
	<div id="feadback" class="Palatino">
    <div id="feadhead"><strong> Відгуки<br>наших випусників</strong></div>
    <div class="container feadmargin">

      @foreach($feedbacks as $feedback)

          @if($loop->odd)

                <div class="row" id="row1">
                  <div class="active1">
                      <img class="lazyload" width="300" height="255" data-src="{{$feedback->img ?? 'https://intita.com/images/mainpage/intitaLogo.jpg' }}">

                      <div class="col-1 m-auto">
                  </div>
                  <p><h2 style = "color:#7722aa">{{$feedback->author}}</h2></p>
                  </div>
                  <div class="col-4 m-auto">
                      <p class="descr" id="p1"><em>{{$feedback->describe}}</em></p>

                  </div>
              </div>

          @else

              <div class="row ">
                  <div class="col-4 m-auto">
                      <p class="descr" id="p1"><em>{{$feedback->describe}}</em></p>

                  </div>
                  <div class="col-5 ml-auto">
                      <div class="active1">
                      <img width="300" height="255" class="lazyload" data-src="{{$feedback->img ?? 'https://intita.com/images/mainpage/intitaLogo.jpg'}}">
                      <div class="col-1 m-auto">
                      </div>
                            <p><h2 style = "color:#7722aa">{{$feedback->author}}</h2></p>
                      </div>
                  </div>
              </div>

          @endif
      @endforeach
</div>

	</div>
	<div id="map">
        <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2604.9904471872496!2d28.45921983128042!3d49.238670321661786!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x472d5c4fe6a7db9f%3A0x685951899cd46c2a!2sVinnytsia%20IT%20Academy!5e0!3m2!1suk!2sua!4v1585905383089!5m2!1suk!2sua"
                    width="100%" height="357" frameborder="0" style="border:0; margin-bottom: -5px;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            <img class="white-bg lazyload" data-src="img/white.png" alt="white" width="100%">
        </div>
    </div>

	<footer id="foot" class="Palatino">
		<div class="container Palatino">
  <div class="row">
    <div class="col-md-" id="ref">

     <p> Адреса: провулок Цегельний, 12</p>
    </div>
    <div class="col-sm">
      <p> </p>
    </div>
    <div class="col-md-">
     <p id="tel2"> Телефон: +38 067 431 19 21</p>
    </div>
    <div class="col-sm">
      <p> </p>
    </div>
    <div class="col-sm" >
      <p id="mail">info@intita.com</p>
    </div>
    <div class="col-sm-4"id="ref">
      <p> </p>
    </div>
    <div class="col-md-" id="media" >
      <a href="#" class="social"> <img class="lazyload" data-src="img/inst.png"></a>
      <a href="#" > <img class="lazyload" data-src="img/FB.png"></a>
    </div>
    <div class="col-sm">
      <p> </p>
    </div>

  </div>
</div>
	</footer>
  <script >
    function show(state) {
        document.querySelector('#popup').style.display = state;
        document.querySelector('#gray').style.display = state;
    }
  </script>
    <script
        src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
        crossorigin="anonymous">
    </script>
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.10/jquery.lazy.min.js"></script>
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.10/jquery.lazy.plugins.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
    <script src="https://kit.fontawesome.com/90ec0072fa.js" crossorigin="anonymous"></script>

    <script src="{{asset('js/signup-form.js')}}"></script>
    <script src="{{asset('js/slider.js')}}"></script>
    <script>
        $(function() {
            $("img.lazyload").Lazy();
        });
    </script>
</body>
</html>
