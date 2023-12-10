<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('listings', [
        'heading' => 'latest Listings',
        'listings' => [
            [
                'id' => 1,
                'title' => 'Title 1',
                'description' => 'lorem ipsum dolor sit amet, consectetur adip incididunt ut labore et lore mauris e     justo. Lorem ipsum dolor sit amet et lore   lore   lore sit amet, consectetur adip incididunt ut labore'
            ],
            [
                'id' => 2,
                'title' => 'Title 1',
                'description' => 'lorem ipsum dolor sit amet, consectetur adip incididunt ut labore et lore mauris e     justo. Lorem ipsum dolor sit amet et lore   lore   lore sit amet, consectetur adip incididunt ut labore'
            ]
        ]]
    );
});


