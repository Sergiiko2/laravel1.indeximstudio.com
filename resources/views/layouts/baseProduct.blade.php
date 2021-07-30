<!doctype html>
<html lang="eng">
<head>
    @section('head')
        <meta charset="utf-8">
        <title>Magazine</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        <link rel="stylesheet" href="./style.css">
        <meta http-equiv="content-type">
    @show
</head>

<body>

@section('navBar')
    <div class="row">
        <div class="col-12">
            <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #689CD2;">
                <div class="container-fluid">
                    <a class="navbar-brand text-white" href="#">MGZ</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active btn btn-warning text-white" aria-current="page" href="https://laravel1.indeximstudio.com/test1#">Главная</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" aria-current="page" href="#">Новости</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" aria-current="page" href="https://laravel1.indeximstudio.com/products#">Товары</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" aria-current="page" href="#">Скидки</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" aria-current="page" href="#">Корзина</a>
                            </li>
                        </ul>
                        <ul class="nav justify-content-end">
                            <li class="nav-item">
                                <a class="nav-link text-white" aria-current="page" href="#">Информамация</a>
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
    <div class="col-2"><br>
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

@section('figure')

@show

@section('footerScripts')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
@show
</body>
</html>