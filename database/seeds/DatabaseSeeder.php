<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $feedbacks = [
                ['img' =>'img/face1.PNG','author'=>"Юлія Левченко",'describe'=>"У мене давно було бажання відвідувати цей курс, тому, коли розпочався набір, без вагань вирішила, що треба йти. Основною зміною після курсу є те, що я почала не боятись розмовляти і гадаю, що кожному учаснику вдалося подолати мовний бар'єр. Зараз змінила роботу і кожен день практикую набуті під час курсу знання. Дякую всім викладачам. Було круто, корисно, інколи весело і дійсно ефективно."],
                ['img' =>'img/face2.png','author'=>"Ігор Баранюк",'describe'=>"Якщо тобі потрібно прокачати свій англійський в короткі строки - цей курс саме те. Але це не означає, що тобі потрібн лише відвідувати пари, витрачаючи на це три години на день, та вже після закінчення курсу ти будеш комфортно розуміти англомовного співрозмовника. Ні, так воно не працює. Як мінімум, тобі потрібно не лінитися і повторювати матеріал вдома." ],
                ['img' =>'img/face3.png','author'=>"Юлія Підкопаєва",'describe'=>"Я задоволена тим, що було багато граматики, а також дуже задововолена роботою викладачів. В кожної з них свої підходи та методи, що також є плюсом, адже ти не звикаєш до однієї манери викладання. Піри з носіями мови давали впевненість в тому, що  принципі, тебе розуміють краще, ніж ти собі думав. Завдяки цьому курсу, англійської в моєму житті стало більше, я почала нею говорити вдома та думати про якісь звичні для мене речі. Якщо про рівень, то він однозначно підвищився і я це відчуваю. Рекомендую всім без винятку...." ],
        ];
        DB::table('feedbacks')->insert($feedbacks);

        $courses=[
            ['img'=>'img/plan1.png','describe'=>"Змінити роботу на кращу - де English - Must Have"],
            ['img'=>'img/plan2.png','describe'=>"релокацію за кордон"],
            ['img'=>'img/plan3.png','describe'=>"пройти співбесідув компанію з іноземним капіталом"],
            ['img'=>'img/plan4.png','describe'=>"cтрімкий кар'єрний ріст"],
            ['img'=>'img/plan5.png','describe'=>"навчання за кордоном"],
            ['img'=>'img/plan6.png','describe'=>"спілкування з англомовним клієнтом чи Native Speaker"],
        ];
        DB::table('courses')->insert($courses);

        $images=[
            ['title'=>'1','pathImage'=>'img/gal1.png'],
            ['title'=>'2','pathImage'=>'img/gal2.png'],
            ['title'=>'3','pathImage'=>'img/gal3.png'],
            ['title'=>'4','pathImage'=>'img/gal4.png'],
            ['title'=>'5','pathImage'=>'img/gal5.png'],
            ['title'=>'6','pathImage'=>'img/gal6.png'],
        ];
        DB::table('image_gallery')->insert($images);
    }
}
