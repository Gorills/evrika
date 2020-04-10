<!doctype html>
<html lang="ru">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>

    <link rel="stylesheet" href="{{ URL::asset('css/site.css') }}">
    <script src="https://kit.fontawesome.com/0af96d350a.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap&subset=cyrillic" rel="stylesheet">    <title>@yield('title')</title>
    <meta name="description" content="@yield('description')"/>
    <meta name="keywords" content="@yield('keywords')" />
    <link rel="canonical" href="@yield('canonical')"/>
    <meta property="og:locale" content="ru_RU" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="@yield('og:title')" />
    <meta property="og:description" content="@yield('og:description')" />
    <meta property="og:url" content="@yield('og:url')" />

    <meta name="theme-color" content="#356797">
    <meta property="og:site_name" content="" />
    <meta property="og:image" content="" />

    <meta name="twitter:card" content="summary" />
    <meta name="twitter:description" content="@yield('twitter:description')" />
    <meta name="twitter:title" content="@yield('twitter:title')" />


</head>
<body>

<div class="popup">
    <div class="container">

        <div class="popup__closer"></div>
        <div class="popup__inner">
            <a href="" class="popup__close"><i class="fas fa-times"></i></a>
            <p class="popup__title">Оставить заявку</p>

            <form class="form" action="">
                <label>Имя</label>
                <input  class="form__input" type="text" name="name">

                <label>Телефон</label>
                <input class="form__input" type="tel" name="tel" placeholder="+7 ___ ___ ___">

                <label>Сообщение</label>
                <textarea class="form__input" type="text" rows="7" name="msg"></textarea>

                <button type="submit" class="btn btn__accent">Отправить</button>

                <input name="type" type="hidden" value="{{ $type }}">
            </form>

        </div>
    </div>
</div>


<header class="header">
    <div class="header-closer">

    </div>
    <div class="container">
        <div class="header__inner">
{{--            <a class="header__logo-link" href="{{ url('/') }}">--}}
{{--                <img src="{{ asset('images/001.png') }}" alt="" class="header__logo">--}}
{{--            </a>--}}
            <nav class="header__nav">
                <a href="{{url('/')}}" class="header__link link-none">Главная</a>
                <a href="{{url('/kupit')}}" class="header__link">Купить</a>
                <a href="{{url('/prodat')}}" class="header__link">Продать</a>
                <a href="{{url('/ipoteka')}}" class="header__link">Ипотека</a>
                <a href="{{url('/kommercheskaya-nedvizhimost')}}" class="header__link">Коммерческая недвижимость</a>
                <a href="{{url('/yuridicheskie-uslugi')}}" class="header__link">Юридические услуги</a>
            </nav>



            <div class="header__social">
                <div class="header__social-item">
                    <a href="#" class="header__callback">
                        <p>8 (3822) 959-039</p>
                        <p>Обратный звонок</p>

                    </a>
                    <a href="#" class="header__social-icon social-icon-one">
                        <i class="fab fa-whatsapp"></i>
                    </a>
                    <a href="#" class="header__social-icon social-icon-two">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="#" class="header__social-icon social-icon-three">
                        <i class="fab fa-vk"></i>
                    </a>
                </div>

                <div class="toggle-menu" id="menu">
                    <div class="toggle-section">
                        <a href="#" class="menu-btn">
                            <span></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>


{{--        <div class="header-bottom">--}}
{{--            <div class="header-bottom__row">--}}
{{--                <div class="header-bottom__column">--}}
{{--                    <h3 class="header-bottom__title">Купить</h3>--}}
{{--                    <a href="#" class="header-bottom__link">Купить квартиру</a>--}}
{{--                    <a href="#" class="header-bottom__link">Квартира в новостройке</a>--}}
{{--                    <a href="#" class="header-bottom__link">Загородная недвижимость</a>--}}
{{--                    <a href="#" class="header-bottom__link">Дома</a>--}}

{{--                </div>--}}
{{--                <div class="header-bottom__column">--}}
{{--                    <h3 class="header-bottom__title">Продать</h3>--}}
{{--                    <a href="#" class="header-bottom__link">Купить квартиру</a>--}}
{{--                    <a href="#" class="header-bottom__link">Квартира в новостройке</a>--}}
{{--                    <a href="#" class="header-bottom__link">Загородная недвижимость</a>--}}
{{--                    <a href="#" class="header-bottom__link">Дома</a>--}}

{{--                </div>--}}
{{--                <div class="header-bottom__column">--}}
{{--                    <h3 class="header-bottom__title">Ипотека</h3>--}}
{{--                    <a href="#" class="header-bottom__link">Купить квартиру</a>--}}
{{--                    <a href="#" class="header-bottom__link">Квартира в новостройке</a>--}}
{{--                    <a href="#" class="header-bottom__link">Загородная недвижимость</a>--}}
{{--                    <a href="#" class="header-bottom__link">Дома</a>--}}

{{--                </div>--}}
{{--                <div class="header-bottom__column">--}}
{{--                    <h3 class="header-bottom__title">Коммерция</h3>--}}
{{--                    <a href="#" class="header-bottom__link">Купить квартиру</a>--}}
{{--                    <a href="#" class="header-bottom__link">Квартира в новостройке</a>--}}
{{--                    <a href="#" class="header-bottom__link">Загородная недвижимость</a>--}}
{{--                    <a href="#" class="header-bottom__link">Дома</a>--}}

{{--                </div>--}}

{{--            </div>--}}
        </div>

</header>





@yield('content')
<footer class="footer">
    <div class="container">
        <div class="footer__inner">
            <div class="footer__column">
                <p class="footer__phone">8 (3822) 650-606</p>
                <a href="mailto:mail@mail.ru" class="footer__mail">mail@mail.ru</a>
                <div class="footer__social">
                    <a href="#"><i class="footer__icon fab fa-vk"></i></a>
                    <a href="#"><i class="footer__icon fab fa-whatsapp"></i></a>
                    <a href="#"><i class="footer__icon fab fa-instagram"></i></a>
                </div>
                <p class="footer__text">© ООО «Эврика»,
                    1996— 2020</p>
                <p class="footer__text">Все права защищены</p>

                <a href="#" class="footer__razrab">Разработка сайта: Gagarin</a>
            </div>
            <div class="footer__column">
                <p class="footer__title">Каталог</p>
                <a href="#" class="footer__link">Купить</a>
                <a href="#" class="footer__link">Продать</a>
                <a href="#" class="footer__link">Ипотека</a>
                <a href="#" class="footer__link">Новостройки</a>
                <a href="#" class="footer__link">Юридические услуги</a>

            </div>
            <div class="footer__column">
                <p class="footer__title">О нас</p>
                <a href="#" class="footer__link">Купить</a>
                <a href="#" class="footer__link">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt, repellat.</a>
                <p class="footer__title footer__mt">Ипотека</p>
                <a href="#" class="footer__link">Условия ипотеки</a>
            </div>
            <div class="footer__column">
                <a href="#" class="footer__title">Услуги</a>
                <a href="#" class="footer__title">Вакансии</a>

            </div>

        </div>
{{--        <a class="footer__logo-link" href="{{ url('/') }}"><img class="footer__logo" src="{{ asset('images/001.png') }}" alt=""></a>--}}
    </div>
</footer>



<script>
    $(".menu-btn").click(function(e) {
        e.preventDefault();
        $(this).toggleClass('menu-btn_active');
        $(".header-bottom").toggleClass('header-bottom_active');
        $(".header").toggleClass('header-mobile-active');
        $(".header-closer").toggleClass('header-closer_active');

    })
    $(".header__link").click(function(e) {
        // e.preventDefault();
        $(".menu-btn").removeClass("menu-btn_active");
        $(".header").removeClass("header_active");
        $(".header-closer").removeClass('header-closer_active');
    })
    $(".header-closer").click(function(e) {
        // e.preventDefault();
        $('.menu-btn').toggleClass('menu-btn_active');
        $(".header-bottom").toggleClass('header-bottom_active');
        $(".header").toggleClass('header-mobile-active');
        $(".header-closer").toggleClass('header-closer_active');
    })

    $(".header__callback").click(function(e) {
        e.preventDefault();
        $(".popup").toggleClass('popup_active');

    })

    $(".urist__item-btn").click(function(e) {
        e.preventDefault();
        $(".popup").toggleClass('popup_active');

    })
    $(".posadochnaya__btn").click(function(e) {
        e.preventDefault();
        $(".popup").toggleClass('popup_active');

    })

    $(".popup__close").click(function(e) {
        e.preventDefault();
        $(".popup").removeClass('popup_active');

    })
    $(".popup__closer").click(function(e) {
        // e.preventDefault();
        $(".popup").removeClass('popup_active');

    })





    $(window).scroll(function() {
        var height = $(window).scrollTop();
        /*Если сделали скролл на 100px задаём новый класс для header*/
        if(height > 500){
            $('header').addClass('header_fixed');
        } else{
            /*Если меньше 100px удаляем класс для header*/
            $('header').removeClass('header_fixed');
        }
    });

    $("body").on('click', '[href*="#"]', function(e){
        var fixed_offset = 60;
        $('html,body').stop().animate({ scrollTop: $(this.hash).offset().top - fixed_offset }, 1000);
        e.preventDefault();
    });

    // Активная ссылка для header в зависимости от url
    jQuery(document).ready(function($) {
        var url=document.location.href;
        $.each($(".header__link"),function(){
            if(this.href==url){
                $(this).addClass('header__link_active');
            }
        });
    });








</script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<style src="{{ URL::asset('js/app.js') }}"></style>
<script>
    $('.slick').slick({
        infinite: true,
        speed: 500,
        slidesToShow: 1,
        adaptiveHeight: true,
        autoplay: true,
        pauseOnFocus: false,
        pauseOnHover: false,
        pauseOnDotsHover: false,
        dots: true,
        prevArrow: "<i class=\"fas fa-angle-left prev\"></i>",
        nextArrow: "<i class=\"fas fa-angle-right next\"></i>",

    });
    $('.clients__slider').slick({
        infinite: true,
        speed: 300,
        slidesToShow: 1,
        adaptiveHeight: true,
        autoplay: true,
        pauseOnFocus: false,
        arrows: true,

    });


</script>
</body>
</html>
