<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Casts\Json;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $slider = [
            [
                'mobileSrc' => 'https://img.pdrc.ru/euRqx4z0AHs74Tq2lZg8T0hu0Z3G5LweDxKb8YCHhcI//bG9jYWw6Ly8vbG9jYWwvdGVtcGxhdGVzL2F0Y19zaG9wX3YyL2Rpc3QvY2F0YWxvZy1iZy1tb2JpbGUuNDhjYWYyMDMuanBn.jpg',
                'desktopSrc' => 'https://img.pdrc.ru/f9cZxUmifEgDDKiUgBp9vPZEsO-CGQ8-yLTYTsqZV4g//bG9jYWw6Ly8vbG9jYWwvdGVtcGxhdGVzL2F0Y19zaG9wX3YyL2Rpc3QvY2F0YWxvZy1iZy4yMTYzN2Y5NC5qcGc.jpg',
                'alt' => 'PDR-инструмент №1 в России',
                'link' => '/catalog'
            ],
            [
                'mobileSrc' => 'https://img.pdrc.ru/AAC9W7oLxNlBXYbXJp1qmFCjkDj9QBUVmH-MuH_px2U//bG9jYWw6Ly8vbG9jYWwvdGVtcGxhdGVzL2F0Y19zaG9wX3YyL2Rpc3QvY29udHJhY3QtYmctbW9iaWxlLjM2NmUzOTY1LmpwZw.jpg',
                'desktopSrc' => 'https://img.pdrc.ru/7XqS7ut7DquSuauOvIfQFskJWEIU80m7ppodGxU6d14//bG9jYWw6Ly8vbG9jYWwvdGVtcGxhdGVzL2F0Y19zaG9wX3YyL2Rpc3QvY29udHJhY3QtYmcuYjE4MjIyYmQuanBn.jpg',
                'alt' => 'Субсидия до 350 000 ₽',
                'link' => '/catalog'
            ],
            [
                'mobileSrc' => 'https://img.pdrc.ru/XeH8CH0rna_zE5c1Q-SR_506QqENWixYhkacPUXDh5c//bG9jYWw6Ly8vbG9jYWwvdGVtcGxhdGVzL2F0Y19zaG9wX3YyL2Rpc3QvZWR1Y2F0aW9uMS1iZy1tb2JpbGUuMTYyYzQ5MTAuanBn.jpg',
                'desktopSrc' => 'https://img.pdrc.ru/Gkuww6OiVVPlDkKgQRq6UlNn9M6u1Jfw0gbWvOIHXko//bG9jYWw6Ly8vbG9jYWwvdGVtcGxhdGVzL2F0Y19zaG9wX3YyL2Rpc3QvZWR1Y2F0aW9uMS1iZy42ZTgwNThjNS5qcGc.jpg',
                'alt' => 'PDR-инструмент №1 в России',
                'link' => '/catalog'
            ]
        ];
        $categories = [
            [
                'href' => '/catalog',
                'name' => 'Готовые комплекты',
                'src' => 'https://img.pdrc.ru/CskM4RFtXG-OkcwoBPwP2IMTEeQUbhOtFi_zK_iwayA/resize:fill:480:270:0:0/bG9jYWw6Ly8vbG9jYWwvdGVtcGxhdGVzL2F0Y19zaG9wX3YyL2Rpc3Qva2l0cy40MTE4ZmNhMC5wbmc.jpg'
            ],
            [
                'href' => '/catalog',
                'name' => 'Лампы',
                'src' => 'https://img.pdrc.ru/Y2QE8ZQBodjsHF3vSGjAe02By0aPLAVTbeL88C4wJfA/resize:fill:480:270:0:0/bG9jYWw6Ly8vbG9jYWwvdGVtcGxhdGVzL2F0Y19zaG9wX3YyL2Rpc3QvbGFtcHMuZWY1OGMwYmIucG5n.jpg'
            ],
            [
                'href' => '/catalog',
                'name' => 'Крючки и насадки',
                'src' => 'https://img.pdrc.ru/DY2pQ2I58LZulzEeqR3l68K1b4SYtXA1iGCT0FAY4yI/resize:fill:480:270:0:0/bG9jYWw6Ly8vbG9jYWwvdGVtcGxhdGVzL2F0Y19zaG9wX3YyL2Rpc3QvaG9va3MuZjEzNGVlNjgucG5n.jpg'
            ],
            [
                'href' => '/catalog',
                'name' => 'Клеевая система',
                'src' => 'https://img.pdrc.ru/IXobpnsmhPX3SG56YVx0ubBaomdUfqeVlkId5HPWODg/resize:fill:480:270:0:0/bG9jYWw6Ly8vbG9jYWwvdGVtcGxhdGVzL2F0Y19zaG9wX3YyL2Rpc3QvZ2x1ZS5mMzg0MzU5ZS5wbmc.jpg'
            ],
            [
                'href' => '/catalog',
                'name' => 'Аксессуары',
                'src' => 'https://img.pdrc.ru/bUuQsVVt0RZ15eDzRzzn9YIJ01Y_rHA1Q5zETMUw3-o/resize:fill:480:270:0:0/bG9jYWw6Ly8vbG9jYWwvdGVtcGxhdGVzL2F0Y19zaG9wX3YyL2Rpc3QvYWNjZXNzb3JpZXMuOWRhYjYyYTQucG5n.jpg'
            ],
            [
                'href' => '/catalog',
                'name' => 'Социальный контракт',
                'src' => 'https://img.pdrc.ru/d-9QHBBJGDyZCQ4X5kmDgueYl5ife4mnGCS7t_FkyKY/resize:fill:480:270:0:0/bG9jYWw6Ly8vbG9jYWwvdGVtcGxhdGVzL2F0Y19zaG9wX3YyL2Rpc3QvY29udHJhY3QuZDk3YzcxYzcuanBn'
            ]
        ];
        $adv = [
            [
                'src' => 'https://pdrc.ru/local/templates/atc_shop_v2/dist/payment.68a45210.png',
                'desc' => 'Оплата заказа при получении'
            ],
            [
                'src' => 'https://pdrc.ru/local/templates/atc_shop_v2/dist/delivery.c75808e8.png',
                'desc' => 'Бесплатная доставка по всей России'
            ],
            [
                'src' => 'https://pdrc.ru/local/templates/atc_shop_v2/dist/credit.642600db.png',
                'desc' => 'Рассрочка и кредит'
            ],
            [
                'src' => 'https://pdrc.ru/local/templates/atc_shop_v2/dist/return.fb1f44fe.png',
                'desc' => 'Возврат и обмен'
            ],
            [
                'src' => 'https://pdrc.ru/local/templates/atc_shop_v2/dist/warranty.57284a5e.png',
                'desc' => 'Пожизненная гарантия'
            ],
        ];
        $reviews = [
            [
                'avatar' => 'https://pdrc.ru/upload/iblock/a2b/a2ba12ac7df067f739cc98a99c75b490.jpg',
                'name' => 'Новиков Дмитрий',
                'city' => 'Пенза, Ученик',
                'message' => 'Я прошёл обучение в октябре 2009 г. Остался доволен на сто процентов и не пожалел, что попал в PDR CENTER (Центр Автотехнологий). Мастер Селезнев Николай в 4-х дневный срок разъяснил всю технологию DOL (pdr), которую с успехом применяю по сегодняшний день.'
            ],
            [
                'avatar' => 'https://pdrc.ru/upload/iblock/208/20879b235fbd48be349cec125a710a6a.JPG',
                'name' => 'Автоэстетика',
                'city' => 'г. Санкт-Петербург, autoestetika.ru, Ученик',
                'message' => 'PDR CENER (Центр Автотехнологий) — это квалифицированный персонал с человеческим подходом к каждому. Это не пустые слова, а мое четко сложившееся мнение за все время пребывания там. Дружный коллектив, приятное отношение, чувствуешь себя частью команды. С каждым днем я все больше понимал, что не ошибся в выборе центра и теперь успешно применяю знания и инструмент фирмы NUSSLE SPEZIALWERKZEUGE (Германия)'
            ],
            [
                'avatar' => 'https://pdrc.ru/local/templates/atc_shop_v2/dist/photo-bg.77cb4932.svg',
                'name' => 'Александр Пеплов',
                'city' => 'Воронеж, Ученик',
                'message' => 'Подтверждаю всё вышесказанное Михаилом (кроме шашлыков -- нам не перепало :)) и присоединяюсь к благодарностям учителям.'
            ],
            [
                'avatar' => 'https://pdrc.ru/upload/iblock/fc6/fc6df98e47be5880c2f9e61f9d7a664d.jpg',
                'name' => 'Леденев Павел',
                'city' => 'Новороссийск,Ученик',
                'message' => 'Компания PDR CENTER (Центр Автотехнологий) оставила и продолжает оставлять только положительные эмоции. В феврале 2014 года отучился по 2-х недельному курсу и остался очень доволен. В компании отлажено почти все на 100%, а именно жилье, общепит, удачное расположение. Очень большой выбор инструмента, все очень качественное, стоит своих денег, хоть и хотелось бы подешевле.'
            ],
            [
                'avatar' => 'https://pdrc.ru/upload/iblock/540/54010fe43d0d3a4e3af3247700689de6.jpg',
                'name' => 'Урюпин Игорь, Урюпин Андрей',
                'city' => 'Тамбов, Ученик',
                'message' => 'Перед поездкой в Москву на обучение выбор был cделан в пользу компании «PDR CENTER» (Центр Автотехнологий), так как они являются официальным дистрибьютером компаний Nussle Spezialwerkzeuge на терретории РФ и мы не ошиблись в своём выборе. Дружный и профессиональный коллектив обучил всем навыкам работы по немецкой технологии ремонта вмятин без покраски.Был предоставлен очень широкий ряд оборудования для обучения.'
            ],
            [
                'avatar' => 'https://pdrc.ru/upload/iblock/c67/c67b9132bae17e5079a4e47efa273d7e.jpg',
                'name' => 'Козырев Максим',
                'city' => 'Курган, Ученик',
                'message' => 'Привет всем!!! Отучился в PDR CENTER (ЦАТ) в декабре 2010 г. Обучение заняло 7 дней!!! При нуле знаний и опыта в кузовном ремонте, я получил большои багаж знания и опыта всего коллектива центра! Считаю себя специалистом pdr хоть и начинающим, но все же!!! Огромное СПАСИБО всему коллективу!!! P.S: В Москве был первый раз, слышал ,что люди здесь относятся к иногородним с равнодушием. В PDR CENTER (Центре Автотехнологий) почувствовал участие с первой минуты и до сих пор поддерживаем отношения!!!'
            ],
        ];

        return view('home.index', compact('slider', 'categories', 'adv', 'reviews'));
    }
}
