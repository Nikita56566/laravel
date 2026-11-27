<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    // 1. Главная страница
    public function home()
    {
        return '<h1>Главная страница</h1>';
    }

    // 2. Страница «О нас»
    public function about()
    {
        return 'Страница о нашем проекте';
    }

    // 3. Страница пользователя
    public function showUser(string $id)
    {
        return 'Страница пользователя №' . $id;
    }

    // 4. Приветствие
    public function hello(string $name = 'гость')
    {
        return 'Привет, ' . $name . '!';
    }

    // 5. Комментарии к статье
    public function comments(string $post, string $comment)
    {
        return "Статья №{$post}, комментарий №{$comment}";
    }

    // 6. Просмотр статьи
    public function showPost(string $id)
    {
        return 'Просмотр статьи №' . $id;
    }
}