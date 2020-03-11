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


    <section class="posadochnaya">
        <div class="container">
            <div class="posadochnaya__inner">
                <h1 class="posadochnaya__title">{{ $stock->title }}</h1>

            </div>
        </div>
    </section>



    <script>
        $('.header').addClass('header-background')
    </script>

@endsection
