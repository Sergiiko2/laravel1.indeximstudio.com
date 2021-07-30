@extends('layouts.base')



@section('header')
    {{-- ключ-тайтл, значение-прайс  --}}

    @php
    $products = [
        ['title' => 'Товар 1' , 'price' => 2100,],
        ['title' => 'Товар 2' , 'price' => 2200,],
        ['title' => 'Товар 3' , 'price' => 2300,],
        ['title' => 'Товар 4' , 'price' => 2400,],
    ];
    @endphp



    @foreach ($products as $product)

        @include('productsss',  ['title' =>  $product['title'], 'price' => $product['price']])
    @endforeach

@endsection