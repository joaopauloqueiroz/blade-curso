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
Route::get('/posts', function () {
    return view('post.single', [
        'name' => 'Blog do TreinaWeb',
        'slug' => 'Laravel Blade',
        'description' => 'Tudo sobre Tecnologia'
        ]);
});

Route::get('/contato', function () {
    return view('contact.index');
});

Route::get('/{lang?}', function ($lang='pt-BR') {
    App::setLocale($lang);

    return view('news.index', [
        'name' => 'Blog do TreinaWeb',
        'slug' => 'Laravel Blade',
        'description' => 'Tudo sobre Tecnologia',
        'posts' => [
            [
                'subject' => 'Novidades do PHP 7.2',
                'content' => 'Conheça as novidades do php...',
                'author' => 'João Paulo Queiroz',
                'date' => '2018-07-26',
                'category' => 'php',
                'type' => 'video'
            ],

            [
                'subject' => 'Novidades do C#',
                'content' => 'Conheça as novidades do C#...',
                'author' => 'Roberto da Silva Solza',
                'date' => '2018-07-26',
                'category' => 'c#',
                'type' => ''
            ],

            [
                'subject' => 'Novidades do Java',
                'content' => 'Conheça as novidades do Java...',
                'author' => 'Deitel',
                'date' => '2018-11-26',
                'category' => 'java',
                'type' => 'nota'
            ]
        ]
    ]);
});
