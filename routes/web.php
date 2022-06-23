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
    $data = [
        'name' => 'Francesco',
        'lastname' => 'Partipilo',
        'results' => [
            [
                'city' => 'Bari',
                'abbreviation' => 'BA',
                'capoluogo' => true,
            ],
            [
                'city' => 'Brindisi',
                'abbreviation' => 'BR',
                'capoluogo' => false,
            ],
            [
                'city' => 'Taranto',
                'abbreviation' => 'TA',
                'capoluogo' => false,
            ],
            [
                'city' => 'Lecce',
                'abbreviation' => 'LE',
                'capoluogo' => false,
            ],
            [
                'city' => 'Foggia',
                'abbreviation' => 'FG',
                'capoluogo' => false,
            ],
            [
                'city' => 'Barletta-Andria-Trani',
                'abbreviation' => 'BAT',
                'capoluogo' => false,
            ],
        ],
    ];
    return view('home', $data);
})->name('home');

Route::get('/about-us', function() {
    return view('about');
})->name('about');

Route::get('/tickets', function() {
    return view('ticket');
})->name('ticket');

Route::get('/activities', function() {
    return view('activity');
})->name('activity');

