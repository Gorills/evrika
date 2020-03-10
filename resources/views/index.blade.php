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


<div class="slick">



    @foreach($stocks as $stock)
        <div class="slider">
            <div class="slider__bcg">
                <img class="slider__image" src="{{ Storage::url($stock->image) }}" alt="">
                <div class="slider__inner">
                    <h2 class="slider__title">{{ $stock->title }}</h2>
                    <div class="slider__text">{{ $stock->description }}</div>
                    <a href="#" class="slider__btn btn btn__accent">Подробнее</a>
                </div>
            </div>
        </div>
    @endforeach
        <div class="slider">
            <div class="slider__bcg">
                <img class="slider__image" src="{{ asset('images/uslugi/slide-1.jpg') }}" alt="">
                <div class="slider__inner">
                    <h2 class="slider__title">Стандартный слайд</h2>
                    <div class="slider__text">Стандартное описание</div>
                    <a href="#" class="slider__btn btn btn__accent">Подробнее</a>
                </div>
            </div>
        </div>

</div>


<div class="callback">
    <div class="container">
        <div class="callback__inner">
            <div class="callback__left">
                <p class="callback__title">Получите консультацию бесплатно!</p>
                <div class="callback__phone">
                    <a href="tel:+73822650606" class="callback__link">+7 (3822) 650-606</a>
                    <a href="tel:+73822203050" class="callback__link">+7 (3822) 203-050</a>
                    <a href="tel:+38226183050" class="callback__link">+7 (901) 618 30-50</a>
                </div>
            </div>
            <div class="callback__middle">

                    <p class="callback-faq__title">Частые вопросы</p>
                    <div class="callback-faq__list">
                        <div class="callback-faq__item">
                            <i class="fas fa-ruble-sign"></i>
                            <span class="callback-faq__name">Как получить ипотеку без регистрации?</span>
                        </div>
                        <div class="callback-faq__item">
                            <i class="fas fa-building"></i>
                            <span class="callback-faq__name">Хочу купить, что делать?</span>
                        </div>
                        <div class="callback-faq__item">
                            <i class="fas fa-percent"></i>
                            <span class="callback-faq__name">Какую комиссию вы берете?</span>
                        </div>
                    </div>
            </div>

            <div class="callback__right">
                <p>На какой номер позвонить?</p>
                <form class="callback__form" action="#">
                    <input class="callback__input" type="tel" required placeholder="+7 ___ ___ ___">
                    <button type="submit" class="callback__btn btn btn__accent effect2">Позвоните мне!</button>

                </form>
                <p class="callback__personal">Отправляя заявку, вы соглашаетесь на обработку ваших <a href="#">персональных данных</a></p>
            </div>


        </div>
    </div>
</div>

<section class="uslugi">
    <div class="container">
        <div class="uslugi__inner">
            <a href="#" class="uslugi__item item-one">
                <img src="{{ asset('images/uslugi/slide-1.jpg') }}" alt="" class="uslugi__img">
                <h4 class="uslugi__title">Юридические услуги</h4>
                <p class="uslugi__info">Надпись</p>
            </a>
            <a href="#" class="uslugi__item item-two">
                <img src="{{ asset('images/uslugi/slide-1.jpg') }}" alt="" class="uslugi__img">
                <h4 class="uslugi__title">Покупка</h4>
                <p class="uslugi__info">Надпись</p>
            </a>
            <a href="#" class="uslugi__item item-three">
                <img src="{{ asset('images/uslugi/slide-1.jpg') }}" alt="" class="uslugi__img">
                <h4 class="uslugi__title">Продажа</h4>
                <p class="uslugi__info">Надпись</p>
            </a>
            <a href="#" class="uslugi__item item-for">
                <img src="{{ asset('images/uslugi/slide-1.jpg') }}" alt="" class="uslugi__img">
                <h4 class="uslugi__title">Новостройки</h4>
                <p class="uslugi__info">Надпись</p>
            </a>
            <a href="#" class="uslugi__item item-five">
                <img src="{{ asset('images/uslugi/slide-1.jpg') }}" alt="" class="uslugi__img">
                <h4 class="uslugi__title">Ипотека</h4>
                <p class="uslugi__info">Надпись</p>
            </a>
            <a href="#" class="uslugi__item item-six">
                <img src="{{ asset('images/uslugi/slide-1.jpg') }}" alt="" class="uslugi__img">
                <h4 class="uslugi__title">Коммерческая недвижимость</h4>
                <p class="uslugi__info">Надпись</p>
            </a>


        </div>
    </div>
</section>



<section class="about" id="about">
    <div class="container">
        <div class="about__inner">
            <div class="about__item">
                <h3 class="about__title">Заголовок для сео текста</h3>
                <p class="about__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores
                    aspernatur doloribus et eveniet maxime, modi nobis numquam odio omnis pariatur placeat quas
                    reiciendis repellendus, rerum sequi sunt unde voluptas voluptatem?</p>

                <ul class="about__list">
                    <li class="about__list_item">1</li>
                    <li class="about__list_item">2</li>
                    <li class="about__list_item">3</li>
                    <li class="about__list_item">4</li>
                    <li class="about__list_item">5</li>
                </ul>



                <p class="about__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores
                    aspernatur doloribus et eveniet maxime, modi nobis numquam odio omnis pariatur placeat quas
                    reiciendis repellendus, rerum sequi sunt unde voluptas voluptatem?</p>


                <p class="about__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores
                    aspernatur doloribus et eveniet maxime, modi nobis numquam odio omnis pariatur placeat quas
                    reiciendis repellendus, rerum sequi sunt unde voluptas voluptatem?</p>

                <div class="about__info">
                    <h4 class="about__h4">Заголовок</h4>
                    <p class="about__contacts">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi, quibusdam!</p>
                    <p class="about__phone">89528984601</p>
                </div>

            </div>
            <div class="about__item">
                <h3 class="about__title">Заголовок для сео текста</h3>
                <p class="about__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores
                    aspernatur doloribus et eveniet maxime, modi nobis numquam odio omnis pariatur placeat quas
                    reiciendis repellendus, rerum sequi sunt unde voluptas voluptatem?</p>

                <p class="about__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores
                    aspernatur doloribus et eveniet maxime, modi nobis numquam odio omnis pariatur placeat quas
                    reiciendis repellendus, rerum sequi sunt unde voluptas voluptatem?</p>

                <ul class="about__list">
                    <li class="about__list_item">1</li>
                    <li class="about__list_item">2</li>
                    <li class="about__list_item">3</li>
                    <li class="about__list_item">4</li>
                    <li class="about__list_item">5</li>
                </ul>
                <p class="about__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores
                    aspernatur doloribus et eveniet maxime, modi nobis numquam odio omnis pariatur placeat quas
                    reiciendis repellendus, rerum sequi sunt unde voluptas voluptatem?</p>

                <p class="about__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores
                    aspernatur doloribus et eveniet maxime, modi nobis numquam odio omnis pariatur placeat quas
                    reiciendis repellendus, rerum sequi sunt unde voluptas voluptatem?</p>
                <p class="about__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores
                    aspernatur doloribus et eveniet maxime, modi nobis numquam odio omnis pariatur placeat quas
                    reiciendis repellendus, rerum sequi sunt unde voluptas voluptatem?</p>

            </div>
        </div>
    </div>
</section>

<section class="clients">
    <div class="container">
        <div class="clients__inner">
            <div class="clients__left">
                <h4 class="clients__title">Клиенты о нас</h4>
                <p class="clients__text">Мы заботимся о своей репутации, поэтому публикуем все отзывы без
                    редактуры и коррекции и отвечаем на каждый отзыв индивидуально.
                </p>
                <a href="#" class="btn btn__accent">Оставить отзыв</a>
            </div>


            <div class="clients__right">
                <p class="clients__name">Иванов Иван Иванович</p>
                <p class="clients__clients">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque hic illo inventore, labore odio pariatur rerum soluta veniam! Atque deserunt dicta illo laborum mollitia quos suscipit. Doloribus nostrum quae voluptatum.</p>
                <p class="clients__date">25.05.2019г</p>
            </div>
        </div>
    </div>
</section>




{{--    <section class="catalog" id="catalog">--}}
{{--        <div class="container">--}}
{{--            <div class="catalog__inner">--}}
{{--                --}}{{--            <h2 class="catalog__title">Каталог</h2>--}}
{{--                <div class="catalog__grid">--}}



{{--                @foreach($categories as $category)--}}
{{--                    <a href="{{ url("/$category->slug") }}" class="catalog__item">--}}
{{--                        <div class="catalog__img-block">--}}
{{--                            <img src="{{ Storage::url($category->image) }}" alt="" class="catalog__img">--}}
{{--                        </div>--}}

{{--                        <div class="catalog__text-block">--}}
{{--                            <h3 class="catalog__item-title">{{ $category->title }}</h3>--}}
{{--                            <p class="catalog__item-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad bquam pariatur perspiciatis porro quia quibusdam quod, reiciendis sunt unde vero!</p>--}}
{{--                            <p class="catalog__btn btn btn__accent">Подробнее</p>--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                    @endforeach--}}




{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}


{{--    <section class="section" id="about">--}}
{{--        <div class="container">--}}
{{--            <div class="section__inner">--}}
{{--                <h2 class="section__title">О компании</h2>--}}
{{--                <p class="section__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis culpa doloremque error eveniet expedita explicabo facere id, ipsa magnam minus molestias natus numquam officia provident recusandae suscipit, tempora totam voluptas!</p>--}}
{{--                <p class="section__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis culpa doloremque error eveniet expedita explicabo facere id, ipsa magnam minus molestias natus numquam officia provident recusandae suscipit, tempora totam voluptas!</p>--}}
{{--                <p class="section__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis culpa doloremque error eveniet expedita explicabo facere id, ipsa magnam minus molestias natus numquam officia provident recusandae suscipit, tempora totam voluptas!</p>--}}

{{--                <div class="works" id="works">--}}
{{--                    <h3 class="works__title">Наши работы</h3>--}}
{{--                    <div class="works__grid">--}}


{{--                    @foreach($works as $work)--}}
{{--                        <div class="works__item">--}}
{{--                            <div class="works__img-wrapper">--}}
{{--                                <img class="works__img" src="{{ Storage::url($work->image) }}" alt="">--}}
{{--                            </div>--}}
{{--                            <h4 class="works__item-title">{{ $work->title }}</h4>--}}
{{--                            <p class="works__item-text">{{ $work->description }}</p>--}}
{{--                        </div>--}}
{{--                    @endforeach--}}



{{--                    </div>--}}
{{--                    {{ $works->links() }}--}}
{{--                    <div class="works__btn">--}}
{{--                        <a class="btn btn__accent" href="{{ url('/works') }}">Все работы</a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="works">--}}
{{--                    <h3 class="works__title">Новости компании</h3>--}}
{{--                    <div class="works__grid">--}}


{{--                        @foreach($events as $event)--}}
{{--                            <div class="works__item">--}}
{{--                                <div class="works__img-wrapper">--}}
{{--                                    <img class="works__img" src="{{ Storage::url($event->image) }}" alt="">--}}
{{--                                </div>--}}
{{--                                <h4 class="works__item-title">{{ $event->title }}</h4>--}}
{{--                                <p class="works__item-text">{{ $event->description }}</p>--}}
{{--                            </div>--}}
{{--                        @endforeach--}}



{{--                    </div>--}}
{{--                                        {{ $events->links() }}--}}

{{--                </div>--}}


{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}








@endsection
