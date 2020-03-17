@extends('layouts.admin')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-5 m-auto">
                <img src="{{$feedbacks[0]->img  ?? 'img/face1.PNG'}}">
            </div>
            <div class="col-1 m-auto">
                <p>{{$feedbacks[0]->author ?? ''}}</p>
            </div>
            <div class="col-4 m-auto">
                <p class="descr" id="p1">{{$feedbacks[0]->describe  ?? "У мене давно було бажання відвідувати цей курс, тому, коли розпочався набір, без вагань вирішила, що треба йти. Основною зміною після курсу є те, що я почала не боятись розмовляти і гадаю, що кожному учаснику вдалося подолати мовний бар'єр. Зараз змінила роботу і кожен день практикую набуті під час курсу знання. Дякую всім викладачам. Було круто, корисно, інколи весело і дійсно ефективно."}}</p>
            </div>
            <div class="col-2 m-auto">
                <a href="{{route('feedback.edit',$feedbacks[0]->id)}}" class="btn btn-outline-primary m-auto">Редагувати</a>
            </div>
        </div>
        <div class="row ">
            <div class="col-5 m-auto">
                <img src="{{$feedbacks[1]->img  ?? 'img/face2.PNG'}}">
            </div>
            <div class="col-1 m-auto">
                <p>{{$feedbacks[1]->author}}</p>
            </div>
            <div class="col-4 m-auto">
                <p class="descr" id="p1">{{$feedbacks[1]->describe  ?? "Якщо тобі потрібно прокачати свій англійський в короткі строки - цей курс саме те. Але це не означає, що тобі потрібн лише відвідувати пари, витрачаючи на це три години на день, та вже після закінчення курсу ти будеш комфортно розуміти англомовного співрозмовника. Ні, так воно не працює. Як мінімум, тобі потрібно не лінитися і повторювати матеріал вдома."}}</p>
            </div>
            <div class="col-2 m-auto">
                <a href="{{route('feedback.edit',$feedbacks[1]->id)}}" class="btn btn-outline-primary m-auto">Редагувати</a>
            </div>
        </div>
        <div class="row">
            <div class="col-5 m-auto">
                <img src="{{$feedbacks[2]->img  ?? 'img/face3.PNG'}}">
            </div>
            <div class="col-1 m-auto">
                <p>{{$feedbacks[2]->author}}</p>
            </div>
            <div class="col-4 m-auto">
                <p class="descr" id="p1">{{$feedbacks[2]->describe  ?? "Я задоволена тим, що було багато граматики, а також дуже задововолена роботою викладачів. В кожної з них свої підходи та методи, що також є плюсом, адже ти не звикаєш до однієї манери викладання. Піри з носіями мови давали впевненість в тому, що  принципі, тебе розуміють краще, ніж ти собі думав. Завдяки цьому курсу, англійської в моєму житті стало більше, я почала нею говорити вдома та думати про якісь звичні для мене речі. Якщо про рівень, то він однозначно підвищився і я це відчуваю. Рекомендую всім без винятку...."}}</p>
            </div>
            <div class="col-2 m-auto">
                <a href="{{route('feedback.edit',$feedbacks[2]->id)}}" class="btn btn-outline-primary m-auto">Редагувати</a>
            </div>
        </div>
    </div>
    @endsection
