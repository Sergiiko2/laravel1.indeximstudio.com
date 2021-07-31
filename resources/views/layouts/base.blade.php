<!doctype html>
<html lang="eng">
<head>

    @section('head')
        <meta charset="utf-8">
        <title>Magazine</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
              integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6"
              crossorigin="anonymous">
        <link type="text/css" rel="stylesheet" href="{{ asset("./css/main.css") }}">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
        <meta http-equiv="content-type">
    @endsection
    @yield('head')

</head>
<body>

<style type="text/css">
    div {}
    div.1 div.2 {}
    div#1 div.2 {}
    #1 .2 {}
    div.1 div.2 span {}
    div.1 div.2 > span {}

    div ,
    div.1 div.2,
    div#1 div.2 ,
    #1 .2 ,
    div.1 div.2 span ,
    div.1 div.2 > span {}

</style>












<div id="1" class="1">

    <div class="2">
        <span>1</span>
        <span>2</span>

        <div class="3">
            <span>3</span>
            <span>4</span>
        </div>

        <span>12</span>

    </div>
    <span class="2">1</span>

    <div class="4">
        <span>5</span>
        <span>6</span>

    </div>

    <span>7</span>
    <span>8</span>

</div>

<span>9</span>
<span>10</span>


@section('navBar')
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12">
            <nav class="navbar navbar-expand-lg navbar-light" id="bg">
                <div class="container-fluid">
                    <a class="navbar-brand text-white" href="{{ route('test1') }}">MGZ</a>
                    <button class="navbar-toggler " type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <a class="nav-link text-white btnBase2 @if(request()->routeIs('test1')) active btn btn-warning @endif"
                       aria-current="page" href="{{ route('test1') }}">Главная2 </a>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-1">
                            <li class="nav-item">
                                <a class="nav-link text-white btnBase @if(request()->routeIs('test1')) active btn btn-warning @endif"
                                   aria-current="page" href="{{ route('test1') }}">Главная </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link text-white dropdown-toggle @if (request()->routeIs('news.')) active btn btn-warning @endif"
                                   data-bs-toggle="dropdown" href="{{ route('news.') }}" role="button"
                                   aria-current="page" aria-expanded="false">Новости</a>
                                <ul class="dropdown-menu" id="dmenu">
                                    <div class="dropdown dropright">
                                        <a class=" dropdown-item dropdown-toggle  @if (request()->routeIs('news.krep'))  active  @endif"
                                           href="#" data-toggle="dropdown" aria-expanded="false">Кріплення </a>
                                        <div class="dropdown-menu" id="menu">
                                            <li>
                                                <a class="dropdown-item @if(request()->routeIs('news.krep.fasteningForWiring') ? 'active' : '') active btn btn-warning @endif"
                                                   href="{{ route('news.krep.fasteningForWiring') }}">Кріплення для
                                                    електропроводки</a></li>
                                            <li>
                                                <a class="dropdown-item @if(request()->routeIs('news.krep.windowMount') ? 'active' : '') active btn btn-warning @endif"
                                                   href="{{ route('news.krep.windowMount') }}">Кріплення віконне</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item @if(request()->routeIs('news.krep.rivets') ? 'active' : '') active btn btn-warning @endif"
                                                   href="{{ route('news.krep.rivets') }}">Заклепки</a></li>
                                            <li>
                                                <a class="dropdown-item @if(request()->routeIs('news.krep.fasteningForLining') ? 'active' : '') active btn btn-warning @endif"
                                                   href="{{ route('news.krep.fasteningForLining') }}">Кріплення для
                                                    вагонки</a></li>
                                            <li>
                                                <a class="dropdown-item @if(request()->routeIs('news.krep.fasteningOfGypsumCardboard') ? 'active' : '') active btn btn-warning @endif"
                                                   href="{{ route('news.krep.fasteningOfGypsumCardboard') }}">Кріплення
                                                    для гупсокартону</a></li>
                                            <li>
                                                <a class="dropdown-item @if(request()->routeIs('news.krep.plumbingFasteners') ? 'active' : '') active btn btn-warning @endif"
                                                   href="{{ route('news.krep.plumbingFasteners') }}">Кріплення
                                                    сантехнічні</a></li>
                                            <li>
                                                <a class="dropdown-item @if(request()->routeIs('news.krep.clamps') ? 'active' : '') active btn btn-warning @endif"
                                                   href="{{ route('news.krep.clamps') }}">Хомути</a>
                                            <li>
                                                <a class="dropdown-item @if(request()->routeIs('news.krep.joinersFastening') ? 'active' : '') active btn btn-warning @endif"
                                                   href="{{ route('news.krep.joinersFastening') }}">Столярне
                                                    кріплення</a></li>
                                        </div>
                                    </div>
                                    <li>
                                        <a class="dropdown-item @if(request()->routeIs('news.dowelFastening') ? 'active' : '') active btn btn-warning @endif"
                                           href="{{ route('news.dowelFastening') }}">Дюбельне кріплення</a></li>
                                    <li>
                                        <a class="dropdown-item @if(request()->routeIs('news.screws') ? 'active' : '') active btn btn-warning @endif"
                                           href="{{ route('news.screws') }}">Шурупи та саморізи</a></li>
                                    <li>
                                        <a class="dropdown-item @if(request()->routeIs('news.anchorFastening') ? 'active' : '') active btn btn-warning @endif"
                                           href="{{ route('news.anchorFastening') }}">Анкерне кріплення</a></li>
                                    <li>
                                        <a class="dropdown-item @if(request()->routeIs('news.metricProducts') ? 'active' : '') active btn btn-warning @endif"
                                           href="{{ route('news.metricProducts') }}">Метричні вироби </a></li>
                                    <li>
                                        <a class="dropdown-item @if(request()->routeIs('news.rigging') ? 'active' : '') active btn btn-warning @endif"
                                           href="{{ route('news.rigging') }}">Такелаж</a></li>
                                </ul>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link text-white @if(request()->routeIs('products')) active btn btn-warning @endif"
                                   aria-current="page" href="{{ route('products') }}">Товары</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white @if(request()->routeIs('discounts')) active btn btn-warning @endif"
                                   aria-current="page" href="{{ route('discounts') }}">Скидки</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white @if(request()->routeIs('basket')) active btn btn-warning @endif"
                                   aria-current="page" href="{{ route('basket') }}">Корзина</a>
                            </li>
                        </ul>

                        <ul class="nav justify-content-end">
                            <li class="nav-item">
                                <a class="nav-link text-white @if(request()->routeIs('information')) active btn btn-warning @endif"
                                   aria-current="page" href="{{ route('information') }}">Информамация</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="#">Войти</a>
                            </li>
                        </ul>

                    </div>
                </div>
            </nav>
        </div>
        @show


        @section('navItem')
            <div class="col-sm-2 col-md-2 col-lg-1"><br>
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link text-dark" aria-current="page" href="#">Доставка</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="#">Оплата</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="#">Кредит</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="#">Закладки</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="#">Возврат</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="#">Гарантии</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="#">Подарки</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="#">Сертификаты</a>
                    </li>
                </ul>
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Контакты</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Помощь</a>
                    </li>
                </ul>
            </div>
        @show

        @section('header')

        @show

        @section('footerScripts')
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
                    integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
                    crossorigin="anonymous"></script>
            <script src="/js/script.js"></script>
@show
</body>
</html>
