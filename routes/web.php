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
    $posts = [
        [
            'title' => 'First Post',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam repudiandae atque reprehenderit dignissimos. Quis tempore doloribus quasi. Error, amet laudantium tempora quod saepe repudiandae dolorum! Enim id animi dolorum voluptas?',
        ],
        [
            'title' => 'Second Post',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam repudiandae atque reprehenderit dignissimos. Quis tempore doloribus quasi. Error, amet laudantium tempora quod saepe repudiandae dolorum! Enim id animi dolorum voluptas?',
        ],
        [
            'title' => 'Third Post',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam repudiandae atque reprehenderit dignissimos. Quis tempore doloribus quasi. Error, amet laudantium tempora quod saepe repudiandae dolorum! Enim id animi dolorum voluptas?',
        ],
        [
            'title' => 'Fourth Post',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam repudiandae atque reprehenderit dignissimos. Quis tempore doloribus quasi. Error, amet laudantium tempora quod saepe repudiandae dolorum! Enim id animi dolorum voluptas?',
        ],
        [
            'title' => 'Fifth Post',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam repudiandae atque reprehenderit dignissimos. Quis tempore doloribus quasi. Error, amet laudantium tempora quod saepe repudiandae dolorum! Enim id animi dolorum voluptas?',
        ]
    ];
    return view('welcome', compact('posts'));
});
Route::get('blog', function () {
    return view('blog');
});
Route::get('about-us', function () {
    return view('about');
});
Route::get('contact-us', function () {
    return view('contact');
});
