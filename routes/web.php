<?php

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
    return view('news.index', [
        'name' => 'Blog do TreinaWeb',
        'slug' => 'Laravel Blade',
        'description' => 'Tudo sobre Tecnologia',
        'posts' => [
            [
                'subject' => 'Novidades do PHP 7.2',
                'content' => 'Conheça as novidades do php...',
                'author' => 'João Paulo Queiroz',
                'date' => '26 de julho, 2018',
                'category' => 'php'
            ],

            [
                'subject' => 'Novidades do C#',
                'content' => 'Conheça as novidades do C#...',
                'author' => 'Roberto da Silva Solza',
                'date' => '26 de julho, 2018',
                'category' => 'c#'
            ],

            [
                'subject' => 'Novidades do Java',
                'content' => 'Conheça as novidades do Java...',
                'author' => 'Deitel',
                'date' => '26 de Setembro, 2018',
                'category' => 'java'
            ]
        ]
    ]);
});

Route::get('/posts', function () {
    return view('post.single', [
        'name' => 'Blog do TreinaWeb',
        'slug' => 'Laravel Blade',
        'description' => 'Tudo sobre Tecnologia'
        ]);
});
