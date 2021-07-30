@extends('layouts.base')

@section('header')

    <div class="container">
        <div class="row">
            <div class="col-6 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                <label class="form-label">Контактные данные</label>
                <div class="input-group mb-3">

                    <input type="text" class="form-control" placeholder="Введите ваше имя" aria-label="Username" aria-describedby="basic-addon1">
                </div>

                <div class="input-group mb-3">

                    <input type="text" class="form-control" placeholder="Введите вашу фамилию" aria-label="Last-name" aria-describedby="basic-addon1">
                </div>

                <div class="input-group mb-3">

                    <input type="text" class="form-control" placeholder="Введите номер телефона" aria-label="Number" aria-describedby="basic-addon1">
                </div>

                <div class="col-8">
                    <label for="inputAddress2" class="form-label">Страна</label>
                    <input type="text" class="form-control" id="inputAddress2" placeholder="...">
                </div>
                <div class="col-md-4">
                    <label for="inputState" class="form-label">Город</label>
                    <select id="inputState" class="form-select">
                        <option selected>...</option>
                        <option>...</option>
                    </select>
                </div>
                <div class="col-md-8">
                    <label for="inputZip" class="form-label">Адресс</label>
                    <input type="text" class="form-control" id="inputZip">
                </div>

                <div class="mb-3">
                </div>
            </div>


            <div class="col-6 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                <label class="form-label">Оплата</label>

                <div class="row g-2">
                    <div class="col-md">
                        <div class="form-floating">
                            <input type="email" class="form-control" id="floatingInputGrid" placeholder="name@example.com" value="example@example.com">
                            <label for="floatingInputGrid">Введите ваш адресс електроной почты</label>
                        </div>

                    </div>
                    <label class="form-label"></label>
                    <div class="col-md">
                        <div class="form-floating">
                            <select class="form-select" id="floatingSelectGrid" aria-label="Floating label select example">
                                <option selected>MasterCard</option>
                                <option value="1">Visa</option>
                                <option value="2">Qivi</option>
                                <option value="3">WebMoney</option>
                            </select>
                            <label for="floatingSelectGrid">Выбирите один из вариантов</label>

                            <div class="col-6 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                                <label class="form-label"></label>
                            </div>

                            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                <label class="form-label">Выбирите способов доставки</label>
                            </div>
                            <div>
                                <label>
                                    <input type="radio" name="fb" value="small" />
                                    <img src="https://static.novaposhta.ua/sitecard/misc/img/NP_logo.png" width=100 height=100">
                                </label>


                                <label>
                                    <input type="radio" name="fb" value="small" />
                                    <img src="https://www.ukrposhta.ua/design/web/images/og-logo.png" width=100 height=100">
                                </label>


                                <label>
                                    <input type="radio" name="fb" value="small" />
                                    <img src="https://aga25.ru/upload/medialibrary/4a8/4a81bc5a8e9def4476a8213488e073c7.png" width=100 height=100">
                                </label>
                            </div>

                            <div class="mb-3">
                            </div>
                            <button type="button" class="btn btn-primary">Оформить заказ</button>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <p>
@endsection