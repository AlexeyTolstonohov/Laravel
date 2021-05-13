<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MailController;

Route::get('/','App\Http\Controllers\PostController@index');
Route::get('/test','App\Http\Controllers\PostController@test');
Route::get('/admin','App\Http\Controllers\Adm\AdmController@index');
Route::get('/test2', 'App\Http\Controllers\HomeController@index');
Route::get('/db_show', 'App\Http\Controllers\HomeController@db_show_post');
Route::get('/newPost', 'App\Http\Controllers\HomeController@addPost');
Route::get('/getPost', 'App\Http\Controllers\HomeController@getPost');
Route::get('/get_number_post_and_title_Rubric', 'App\Http\Controllers\HomeController@get_number_post_and_title_Rubric');
Route::get('/get_posts_by_rubric', 'App\Http\Controllers\HomeController@get_posts_by_rubric');
Route::get('/find_tags', 'App\Http\Controllers\HomeController@find_tags');
Route::get('/find_posts_by_tag', 'App\Http\Controllers\HomeController@find_posts_by_tag');
Route::get('/index', 'App\Http\Controllers\TemplateController@index');
Route::get('/post_loop_show', 'App\Http\Controllers\TemplateController@post_loop_show');

Route::get('/create_post', 'App\Http\Controllers\PostController@create_post')->name('posts.create');
Route::post('/store', 'App\Http\Controllers\PostController@store')->name('posts.store');

Route::get('/show_session', 'App\Http\Controllers\HomeController@show_session');
Route::get('/put_in_session', 'App\Http\Controllers\HomeController@put_in_session');
Route::get('/get_from_session', 'App\Http\Controllers\HomeController@get_from_session');
Route::get('/pull_session', 'App\Http\Controllers\HomeController@pull_session');

Route::get('/show', 'App\Http\Controllers\SessionController@show');
Route::get('/put', 'App\Http\Controllers\SessionController@put');
Route::get('/get', 'App\Http\Controllers\SessionController@get');

Route::get('/accessSessionData', 'App\Http\Controllers\SessionController@accessSessionData');
Route::get('/storeSessionData', 'App\Http\Controllers\SessionController@storeSessionData');
Route::get('/deleteSessionData', 'App\Http\Controllers\SessionController@deleteSessionData');

Route::get('/setCookie', 'App\Http\Controllers\HomeController@setCookie'); // через request
Route::get('/getCookie', 'App\Http\Controllers\HomeController@getCookie');

Route::get('/setCookie2', 'App\Http\Controllers\HomeController@setCookie2'); // через response
Route::get('/getCookie2', 'App\Http\Controllers\HomeController@getCookie2');

Route::get('/setCookie3', 'App\Http\Controllers\HomeController@setCookie3');
Route::get('/getCookie3', 'App\Http\Controllers\HomeController@getCookie3'); // вариант 3

Route::get('/setCookie4', 'App\Http\Controllers\HomeController@setCookie4'); // вариант 4
Route::get('/getCookie4', 'App\Http\Controllers\HomeController@getCookie4');

Route::get('/putCache', 'App\Http\Controllers\HomeController@putCache'); // Кеш хранится в storage/framework/cache/data
Route::get('/getCache', 'App\Http\Controllers\HomeController@getCache'); // файл кеша удалится через 60 сек
Route::get('/putCacheForever', 'App\Http\Controllers\HomeController@putCacheForever'); //создаст файл кеша навсегда
Route::get('/checkCache', 'App\Http\Controllers\HomeController@checkCache'); // если кеш есть то выведет "кеш на 60 сек", иначе
//создаст новый файл кеша и выведет значение "Кеш был пуст"
Route::get('/forgetCache', 'App\Http\Controllers\HomeController@forgetCache'); //удаляет файл кеша , со значением "value2",
//этот файл мы создавали навсегда  путем  "putCacheForever"

Route::get('/sendMail', 'App\Http\Controllers\MailController@sendMail'); //https://www.youtube.com/watch?v=kWEvrHVg8kI

Route::get('/createUser', 'App\Http\Controllers\UserController@createUser')->name('register.createUser'); // в бразузере http://laravel.loc/createUser
Route::post('/storeUser', 'App\Http\Controllers\UserController@storeUser')->name('register.storeUser');

Route::get('/loginForm', 'App\Http\Controllers\UserController@loginForm')->name('loginForm');
Route::get('/login', 'App\Http\Controllers\UserController@login')->name('login');
Route::get('/logout', 'App\Http\Controllers\UserController@logout')->name('logout');





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
/*
Route::get('/', function () {
    return view('welcome');
});
*/
/*
Route::get('/', function () {
    return '<h1> Hello world</h1>';
});
*/
/*

Route::get('/', function () {
    $res = 2 + 3;
    $name = "name2";
    return view('home', compact('res', 'name'));
    //return view('home', ['res' => $res, 'name' => $name]);
});

Route::get('/about', function(){   //   слеш перед about не обязателен
    return '<h1>About page</h1>';
});


*/
/*  <form action="send-email" method="post">  чтобы работало надо 22 строку вставить эту в файле  contact.blade.php */
/*
Route::get('/contact', function(){
    return view('contact');
});

Route::post('/send-email', function(){
    if (!empty($_POST)){
        dump($_POST);
    }
    return 'send-email';
});
*/
/*
Route::match(['post', 'get'], 'contact2', function() {
    if (!empty($_POST)){
        dump($_POST);
    }
    return view('contact');
})->name('contact');
*/
/* именованный маршрут  добавляем в конце ->name('contact');
а в файле contact.blade.php   в строке 22   <form action="{{route('contact')}}" method="post">
именно эта часть {{route('contact')}} является  в своем роде переменной

мы в строке   ---- Route::match(['post', 'get'], 'contact2', function() {
    пишем Любое удобное, понятное имя вместо  'contact2'   и в файле contact.blade.php
    Оставляем  {{route('contact')}}.
    И всё будет работать.
*/

/*
Route::view('/test', 'test', ['test'=>'Test data']);   // Для статичных страниц (типа about) лучше передавать сразу вью
// так как мы не будем передавать обратно никаких данных, нету работы с БД

//Route::redirect('/about', '/contact2', 301);
Route::redirect('/contact', '/contact2', 302);
/* redirect();  параметры:
1) юрл С которого перемещаем
2) юрл В который перемещаем
Присваивает статус 302 - это дает нам понять что произошел редирект
статус 301 - это дает нам понять что страница перемещена на постоянной основе
*/
/*
Route::permanentRedirect ('/about', '/contact2');
// аналог записи  Route::redirect('/about', '/contact2', 301);

*/



/*
Route::prefix('admin')->group(function(){

    Route:: get('/post', function(){
        return "Post list";
    });


    Route:: get('/post/create', function(){
        return "Post create";
    });

    Route:: get('/post/{id?}/{slag?}', function($id, $slug = null){
        return "Edit Post $id";
    });

});
*/

