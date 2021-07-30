@extends('layouts.base')

@section('header')
    <div class="col-sm-10 col-md-10 col-lg-11"><br>
        <div class="p-3 mb-2 bg-secondary text-white">
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <h1 class="text-center">Главная</h1>
                    <div class="carousel-item active">
                        <img src="https://www.interkassa.com/resource/uploads/blog%20new/20_pr.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="https://www.interkassa.com/resource/uploads/blog%20new/20_pr.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="https://www.interkassa.com/resource/uploads/blog%20new/20_pr.jpg" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"  data-bs-slide="prev">
                    <span class="carousel-control-prev-icon " aria-hidden="true"></span>
                    <span class="visually-hidden">Предыдущий</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"  data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Следующий</span>
                </button>
            </div>
        </div>
    </div>
@endsection
