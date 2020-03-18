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
        @slot('active') Покупка @endslot
    @endcomponent

    <?php $type = 'Заявка по покупке'; ?>

    <section class="ipoteka">

        <div class="container">
            <div class="ipoteka__inner">
                <div class="ipoteka__left">
                    <h1 class="ipoteka__title">Ипотека с нами дешевле!</h1>
                    <p class="ipoteka__text">Lorem ipsum dolor sit <span class="ipoteka__text_accent">0,7%</span> commodi earum perspiciatis. Reiciendis.</p>
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
