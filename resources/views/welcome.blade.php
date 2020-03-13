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
    <div id="popup">
        <div class="container-popup" style="background-image: url="{{asset('public/img/popup.jpg')}}" >
            <i class="fas fa-times close" onclick="show('none')"></i>
            <div class="form">
                <h2 class="h2 center">Реєстрація</h2>
                <form id="signupForm" action="/" method="POST">
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
                        <input id="phone" class="input" name="phone" type="tel" placeholder="Номер телефону" required>
                        <i class="fas fa-phone-square-alt icon"></i>
                    </div>

                    <div class="wrap-input">
                        <input id="city" class="input" name="city" type="text" placeholder="Місто" required>
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

	</header>

	<div class="Palatino" id="plan">
		<p id="for">Заняття розраховані<br> для тих, хто планує:</p>
<strong id="planinn">
		<div  class="container plan_in Palatino">
  <div class="row">
<div class="col-sm">
       <p> </p>
    </div>
    <div class="col-sm-2">
      <img src="img/plan1.png">
    </div>
    <div class="col-md-" >
    	<br>
     <p class="descr" id="p1"> Змінити роботу на кращу -<br> де English - Must Have</p>
    </div>
    <div class="col-sm">
       <p> </p>
    </div>
    <div class="col-sm void">
       <p> </p>
    </div>
    <div class="col-sm-2">
      <img src="img/plan2.png">
    </div>
    <div class="col-md-">
    	<br>
     <p class="descr" id="p2">релокацію за кордон</p>
    </div>
    <div class="col-sm void">
       <p> </p>
    </div>
  </div>

  <div class="row plan_in second">

    <div class="col-sm">
       <p> </p>
    </div>
    <div class="col-sm-2 " id="img21">
      <img src="img/plan3.png">
    </div>
    <div class="col-md-" >
    	<br>
     <p class="descr" id="p3">пройти співбесіду<br>в компанію з іноземним капіталом</p>
    </div>
    <div class="col-sm">
       <p> </p>
    </div>
    <div class="col-sm">
       <p> </p>
    </div>
    <div class="col-sm-2 " id="img22">
      <img src="img/plan4.png">
    </div>
    <div class="col-md-" >
    	<br>
     <p class="descr">стрімкий кар'єрний ріст</p>
    </div>
    <div class="col-sm void">
       <p> </p>
    </div>
  </div>

  <div class="row plan_in "  id="third" >
<div class="col-sm " >
       <p> </p>
    </div>
    <div class="col-sm-2 " id="img31">
      <img src="img/plan5.png">
    </div>
    <div class="col-md-" >
    	<br> <p class="descr">навчання за кордоном </p>


    </div>

    <div class="col-sm">
       <p> </p>
    </div>
    <div class="col-sm-2">
       <p> </p>
    </div>

    <div class="col-sm-2 " id="img32">
      <img src="img/plan6.png">
    </div>
    <div class="col-md-">
    	<br>
     <p class="descr" id="last_descr"> спілкування з англомовним<br> клієнтом чи Native Speaker</p>
    </div>
    <div class="col-sm void">
       <p> </p>
    </div>
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
           <div class="slide"><img src="img/gal1.png" alt="#"></div>
           <div class="slide"><img src="img/gal2.png" alt="#"></div>
           <div class="slide"><img src="img/gal3.png" alt="#"></div>
           <div class="slide"><img src="img/gal4.png" alt="#"></div>
           <div class="slide"><img src="img/gal5.png" alt="#"></div>
           <div class="slide"><img src="img/gal6.png"  alt="#"></div>
           <div class="slide"><img src="img/images.jpg"alt="#"></div>
            <div class="slide"><img src="img/hh.jpg"  alt="#"></div>
            <div class="slide"><img src="img/gg.jpg" alt="#"></div>
            <div class="slide"><img src="img/kpk10.JPG"  alt="#"></div>
            <div class="slide"><img src="img/ff.jpg"  alt="#"></div>
            <div class="slide"><img src="img/images.jpg" alt="#"></div>
        </div>
        <div class="buttons-block">
            <div id="left-button"><img src="img/left.png"></div>
            <div id="right-button"><img src="img/right.png"></div>
        </div>
    </div>
	</div>
	<div id="feadback" class="Palatino">
    <div id="feadhead"><strong> Відгуки<br>наших випусників</strong></div>
    <div class="container feadmargin">
  <div class="row" id="row1">
    <div class="col-sm face" id="face1">
      <img  src="img/face1.PNG">
    </div>
    <div class="col about">
      <p ><em>
      У мене давно було бажання відвідувати цей курс, тому, коли розпочався набір, без вагань вирішила, що треба йти. Основною зміною після курсу є те, що я почала не боятись розмовляти і гадаю, що кожному учаснику вдалося подолати мовний бар'єр. Зараз змінила роботу і кожен день практикую набуті під час курсу знання. Дякую всім викладачам. Було круто, корисно, інколи весело і дійсно ефективно.
    </em></p>
    </div>


  </div>
</div>
     <div class="container ">
  <div class="row" id="row2">
   <div class="col-sm">
     <p></p>
   </div>
    <div class="col-sm-4 about2">
     <p><em>
      Якщо тобі потрібно прокачати свій англійський в короткі строки - цей курс саме те. Але це не означає, що тобі потрібн лише відвідувати пари, витрачаючи на це три години на день, та вже після закінчення курсу ти будеш комфортно розуміти англомовного співрозмовника. Ні, так воно не працює. Як мінімум, тобі потрібно не лінитися і повторювати матеріал вдома.
    </em></p>
    </div>
    <div class="col-sm face">
      <img  src="img/face2.PNG">

    </div>


  </div>
</div>
    <div class="container feadmargin">
  <div class="row" id="row3">
    <div class="col-sm face" id="face3">
      <img id="img3"  src="img/face3.PNG">
    </div>
    <div class="col-sm about3">
      <p><em>
    Я задоволена тим, що було багато граматики, а також дуже задововолена роботою викладачів. В кожної з них свої підходи та методи, що також є плюсом, адже ти не звикаєш до однієї манери викладання. Піри з носіями мови давали впевненість в тому, що  принципі, тебе розуміють краще, ніж ти собі думав. Завдяки цьому курсу, англійської в моєму житті стало більше, я почала нею говорити вдома та думати про якісь звичні для мене речі. Якщо про рівень, то він однозначно підвищився і я це відчуваю. Рекомендую всім без винятку....</em></p>
    </div>


  </div>
</div>

	</div>
	<div id="map">

	</div>

	<footer id="foot" class="Palatino">
		<div class="container Palatino">
  <div class="row">
    <div class="col-md-" id="ref">

     <p> Адреса: вул. Миколи Ващука, 20 а</p>
    </div>
    <div class="col-sm">
      <p> </p>
    </div>
    <div class="col-md-">
     <p id="tel2"> Телефон: +38067 431 19 21</p>
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
      <a href="#" class="social"> <img src="img/inst.png"></a>
      <a href="#" > <img src="img/FB.png"></a>
    </div>
    <div class="col-sm">
      <p> </p>
    </div>

  </div>
</div>
	</footer>
    <script src="{{asset('js/slider.js')}}"></script>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
    <script src="{{asset('js/signup-form.js')}}"></script>
</body>
</html>
