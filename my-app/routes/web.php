<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

// 1. Главная страница (именованный маршрут)
Route::get('/', [PageController::class, 'home'])->name('home');

// 2. Статическая страница «О нас»
Route::get('/about', [PageController::class, 'about']);

// 3. Маршрут с обязательным параметром
Route::get('/user/{id}', [PageController::class, 'showUser'])->whereNumber('id');

// 4. Маршрут с необязательным параметром и именем
Route::get('/hello/{name?}', [PageController::class, 'hello'])->name('hello');

// 5. Маршрут с двумя параметрами
Route::get('/posts/{post}/comments/{comment}', [PageController::class, 'comments']);

// 6. Именованный маршрут с параметром
Route::get('/posts/{id}', [PageController::class, 'showPost'])
    ->whereNumber('id')
    ->name('posts.show');