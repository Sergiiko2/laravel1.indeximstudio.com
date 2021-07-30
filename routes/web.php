<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/test1', function () {
    return view('test1');
})->name('test1');
Route::get('/product', function () {
    return view('product');
})->name('product');
Route::get('/products', function () {
    return view('products');
})->name('products');

Route::get('/basket', function () {
    return view('basket');
})->name('basket');
Route::get('/discounts', function () {
    return view('discounts');
})->name('discounts');
Route::get('/information', function () {
    return view('information');
})->name('information');





Route::group(['prefix' => 'news1', 'as' => 'news.'], function (){
    Route::get('/', function () {
        return view('news');
    })->name('');
    Route::get('/rigging', function () {
        return view('rigging');
    })->name('rigging');
    Route::get('/metricProducts', function () {
        return view('metricProducts');
    })->name('metricProducts');
    Route::get('/anchorFastening', function () {
        return view('anchorFastening');
    })->name('anchorFastening');
    Route::get('/screws', function () {
        return view('screws');
    })->name('screws');
    Route::get('/dowelFastening', function () {
        return view('dowelFastening');
    })->name('dowelFastening');


    Route::group(['prefix' => 'krep', 'as' => 'krep.'], function (){
        Route::get('/', function () {
            return view('krep');
        })->name('');
    Route::get('/fasteningForWiring', function () {
        return view('fasteningForWiring');
    })->name('fasteningForWiring');
    Route::get('/windowMount', function () {
        return view('windowMount');
    })->name('windowMount');
    Route::get('/rivets', function () {
        return view('rivets');
    })->name('rivets');
    Route::get('/fasteningForLining', function () {
        return view('fasteningForLining');
    })->name('fasteningForLining');
    Route::get('/fasteningOfGypsumCardboard', function () {
        return view('fasteningOfGypsumCardboard');
    })->name('fasteningOfGypsumCardboard');
    Route::get('/plumbingFasteners', function () {
        return view('plumbingFasteners');
    })->name('plumbingFasteners');
    Route::get('/clamps', function () {
        return view('clamps');
    })->name('clamps');
    Route::get('/joinersFastening', function () {
        return view('joinersFastening');
    })->name('joinersFastening');


    });
});

