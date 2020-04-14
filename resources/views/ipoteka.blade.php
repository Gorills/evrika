@extends('layouts.custom')


@section('title', 'Главная')
@section('description', '')
@section('keywords', '')
@section('canonical', '')
@section('og:title', '')
@section('og:description', '')
@section('og:url', '')
@section('twitter:description', '')
@section('twitter:title', '')

@section('content')

    @component('components.breadcrumbs')
        @slot('parent') Главная @endslot
        @slot('active') Ипотека @endslot
    @endcomponent

    <?php $type = 'Заявка по ипотеке'; ?>

    <section class="ipoteka">

        <div class="container">
            <div class="ipoteka__inner">
                <div class="ipoteka__left">
                    <h1 class="ipoteka__title">Ипотека с нами дешевле!</h1>
                    <p class="ipoteka__text">Ипотека от <span class="ipoteka__text_accent">2,7%</span></p>
                    <p class="ipoteka__text">Без первоначального взноса</p>
                    <p class="ipoteka__text">Одобрение за <span class="ipoteka__text_accent">3</span> часа</p>
                </div>
                <div class="ipoteka__right">
                    <h2 class="ipoteka__right_title">Оставьте заявку</h2>
                    <p class="ipoteka__right_text">Мы определим, какие дополнительные выгоды от банков и страховых компаний вы можете получить</p>
                    <form action="#" class="ipoteka__form">
                        <input type="text" class="ipoteka__input" placeholder="Имя">
                        <input type="tel" class="ipoteka__input" placeholder="+7 ___ ___ ___">
                        <input name="type" type="hidden" value="{{ $type }}">
                        <div class="ipoteka__btn-block">
                            <button class="ipoteka__btn btn btn__accent">Отправить</button>
                            <p class="ipoteka__min-text">Отправляя заявку, вы соглашаетесь на обработку ваших <a href="{{ url('/personal') }}" class="ipoteka__link">персональных данных</a>.</p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <img class="ipoteka__img" src="{{ asset('images/poteka-background.jpg') }}" alt="">
    </section>

    <div class="partners">
        <div class="container">
            <div class="partners__inner">
                <h2 class="partners__titile">Помощь в получении ипотеки от банков-партнеров:</h2>
                <p class="partners__text">Специальные условия банков для клиентов Компании «ИНКОМ-НЕДВИЖИМОСТЬ». Уважаемые клиенты, обращаясь к нам для
                    решения своего жилищного вопроса, вы имеете возможность получить более привлекательные (и более выгодные) условия по ипотечному кредитованию</p>

            <div class="partners__grid">

                <a href="#" class="partners__item partners-one">
                    <img src="{{ asset('images/partners/vtb_logo_ru.png') }}" alt="" class="partners__img">
                    <div class="partners__text-mini">Лицензия № 1000 от 08.07.2015г.</div>

                    <div class="partners__hidden hidden-one">
                        <p class="partners__hidden-text">Банк ВТБ предоставляет преференцию (скидку по процентной ставке на весь срок кредитования)
                            нашим клиентам в размере 0,3% на приобретение жилья на вторичном и первичном рынке с
                            использованием ипотечного кредита банка.</p>
                        <p class="partners__hidden-link">Сайт банка</p>
                    </div>
                </a>
                <a href="#" class="partners__item partners-two">
                    <img src="{{ asset('images/partners/2.jpg') }}" alt="" class="partners__img">
                    <div class="partners__text-mini">Лицензия № 1000 от 08.07.2015г.</div>

                    <div class="partners__hidden hidden-two">
                        <p class="partners__hidden-text">Банк ВТБ предоставляет преференцию (скидку по процентной ставке на весь срок кредитования)
                            нашим клиентам в размере 0,3% на приобретение жилья на вторичном и первичном рынке с
                            использованием ипотечного кредита банка.</p>
                        <p class="partners__hidden-link">Сайт банка</p>
                    </div>
                </a>
                <a href="#" class="partners__item partners-three">
                    <img src="{{ asset('images/partners/3.png') }}" alt="" class="partners__img">
                    <div class="partners__text-mini">Лицензия № 1000 от 08.07.2015г.</div>

                    <div class="partners__hidden hidden-three">
                        <p class="partners__hidden-text">Банк ВТБ предоставляет преференцию (скидку по процентной ставке на весь срок кредитования)
                            нашим клиентам в размере 0,3% на приобретение жилья на вторичном и первичном рынке с
                            использованием ипотечного кредита банка.</p>
                        <p class="partners__hidden-link">Сайт банка</p>
                    </div>
                </a>
                <a href="#" class="partners__item partners-for">
                    <img src="{{ asset('images/partners/4.png') }}" alt="" class="partners__img">
                    <div class="partners__text-mini">Лицензия № 1000 от 08.07.2015г.</div>

                    <div class="partners__hidden hidden-for">
                        <p class="partners__hidden-text">Банк ВТБ предоставляет преференцию (скидку по процентной ставке на весь срок кредитования)
                            нашим клиентам в размере 0,3% на приобретение жилья на вторичном и первичном рынке с
                            использованием ипотечного кредита банка.</p>
                        <p class="partners__hidden-link">Сайт банка</p>
                    </div>
                </a>
                <a href="#" class="partners__item partners-five">
                    <img src="{{ asset('images/partners/5.png') }}" alt="" class="partners__img">
                    <div class="partners__text-mini">Лицензия № 1000 от 08.07.2015г.</div>

                    <div class="partners__hidden hidden-five">
                        <p class="partners__hidden-text">Банк ВТБ предоставляет преференцию (скидку по процентной ставке на весь срок кредитования)
                            нашим клиентам в размере 0,3% на приобретение жилья на вторичном и первичном рынке с
                            использованием ипотечного кредита банка.</p>
                        <p class="partners__hidden-link">Сайт банка</p>
                    </div>
                </a>



            </div>

            </div>
        </div>
    </div>





    <section class="podrobnee">
        <div class="container">
            <div class="podrobnee__inner">
                <div id="sdacha" class="podrobnee__item">
                    <h3 class="podrobnee__title">Под сдачу</h3>
                    <p class="podrobnee__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus, dignissimos dolores expedita facilis in laborum mollitia necessitatibus neque quidem vero. Aperiam cum excepturi inventore nisi praesentium quaerat similique sint soluta?</p>
                    <p class="podrobnee__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus, dignissimos dolores expedita facilis in laborum mollitia necessitatibus neque quidem vero. Aperiam cum excepturi inventore nisi praesentium quaerat similique sint soluta?</p>
                    <p class="podrobnee__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus, dignissimos dolores expedita facilis in laborum mollitia necessitatibus neque quidem vero. Aperiam cum excepturi inventore nisi praesentium quaerat similique sint soluta?</p>
                    <div class="podrobnee__wrapper">
                        <a href="#" class="podrobnee__btn btn btn__accent">Заказать консультацию</a>
                    </div>
                </div>
                <div id="myself" class="podrobnee__item">
                    <h3 class="podrobnee__title">Для себя</h3>
                    <p class="podrobnee__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus, dignissimos dolores expedita facilis in laborum mollitia necessitatibus neque quidem vero. Aperiam cum excepturi inventore nisi praesentium quaerat similique sint soluta?</p>
                    <p class="podrobnee__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus, dignissimos dolores expedita facilis in laborum mollitia necessitatibus neque quidem vero. Aperiam cum excepturi inventore nisi praesentium quaerat similique sint soluta?</p>
                    <div class="podrobnee__wrapper">
                        <a href="#" class="podrobnee__btn btn btn__accent">Заказать консультацию</a>
                    </div>
                </div>
                <div id="matkap" class="podrobnee__item">
                    <h3 class="podrobnee__title">Под сдачу</h3>
                    <p class="podrobnee__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus, dignissimos dolores expedita facilis in laborum mollitia necessitatibus neque quidem vero. Aperiam cum excepturi inventore nisi praesentium quaerat similique sint soluta?</p>
                    <p class="podrobnee__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus, dignissimos dolores expedita facilis in laborum mollitia necessitatibus neque quidem vero. Aperiam cum excepturi inventore nisi praesentium quaerat similique sint soluta?</p>
                    <div class="podrobnee__wrapper">
                        <a href="#" class="podrobnee__btn btn btn__accent">Заказать консультацию</a>
                    </div>
                </div>
                <div id="zagorod" class="podrobnee__item">
                    <h3 class="podrobnee__title">Под сдачу</h3>
                    <p class="podrobnee__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus, dignissimos dolores expedita facilis in laborum mollitia necessitatibus neque quidem vero. Aperiam cum excepturi inventore nisi praesentium quaerat similique sint soluta?</p>
                    <p class="podrobnee__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus, dignissimos dolores expedita facilis in laborum mollitia necessitatibus neque quidem vero. Aperiam cum excepturi inventore nisi praesentium quaerat similique sint soluta?</p>
                    <div class="podrobnee__wrapper">
                        <a href="#" class="podrobnee__btn btn btn__accent">Заказать консультацию</a>
                    </div>
                </div>
                <div id="bankrot" class="podrobnee__item">
                    <h3 class="podrobnee__title">Под сдачу</h3>
                    <p class="podrobnee__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus, dignissimos dolores expedita facilis in laborum mollitia necessitatibus neque quidem vero. Aperiam cum excepturi inventore nisi praesentium quaerat similique sint soluta?</p>
                    <p class="podrobnee__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus, dignissimos dolores expedita facilis in laborum mollitia necessitatibus neque quidem vero. Aperiam cum excepturi inventore nisi praesentium quaerat similique sint soluta?</p>
                    <div class="podrobnee__wrapper">
                        <a href="#" class="podrobnee__btn btn btn__accent">Заказать консультацию</a>
                    </div>
                </div>
            </div>
        </div>
    </section>









    <script>
        function windowSize(){
            if ($(window).width() <= '992'){
                $('.header').removeClass('header-background');
            } else {
                $('.header').addClass('header-background');
            }
        }

        $(window).on('load resize',windowSize);
    </script>

@endsection
