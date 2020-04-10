@extends('layouts.custom')


@section('title', $stock->meta_title . ' | Роснедвижимость')
@section('description', $stock->meta_description)
@section('keywords', '')
@section('canonical', '')
@section('og:title', $stock->meta_description)
@section('og:description', $stock->meta_title . '| Роснедвижимость')
@section('og:url', '')
@section('twitter:description', $stock->meta_description)
@section('twitter:title', $stock->meta_title . '| Роснедвижимость')

@section('content')
    @component('components.breadcrumbs')
        @slot('parent') Главная @endslot
        @slot('active') {{ $stock->title }} @endslot
    @endcomponent

    <?php $type = $stock->title ?>

    <section class="posadochnaya">
        <div class="container">
            <div class="posadochnaya__inner">
                <h1 class="posadochnaya__title">{{ $stock->title }}</h1>
                <p class="posadochnaya__short-description">{{ $stock->description }}</p>
                <p class="posadochnaya__description">{{ $stock->full_description }}</p>
            </div>
        </div>
        <a href="#" class="btn btn__accent posadochnaya__btn">Оставить заявку!</a>
        <img class="posadochnaya__img" src="{{ Storage::url($stock->image) }}" alt="{{ $stock->title }}">



    </section>







    <script>

        // $('.header').addClass('header-background');

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
