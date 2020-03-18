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
        @slot('active') О нас @endslot
    @endcomponent

    <?php $type = 'Заявка со страницы О нас'; ?>












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
