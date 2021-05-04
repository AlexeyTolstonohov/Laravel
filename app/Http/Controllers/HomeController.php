<?php

namespace App\Http\Controllers;

use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Posts;
use App\Models\Rubric;
use App\Models\Tag;
use Illuminate\Support\Facades\Cookie;
use SebastianBergmann\Template\Template;
use Illuminate\Http\Response;

class HomeController extends Controller{
    public function index(){
         dump($_ENV['DB_DATABASE']);
         dump(config('app.timezone'));
         dump(config('database.connections.mysql.database'));
         dump($_ENV);
         return "hello";
    }  //вывод настроек ларавел, название базы данных, часовой пояс, соединение, настройки

    public function test(){
        return __METHOD__;
    }

    public function db_show_post(){
       // $posts = DB::select("SELECT * FROM users");
        $data = DB::table("country")->limit(5)->get();
        dd($data);
        return view('home', ['res'=>5, 'name'=> 'John']);
    }  //вывод стран - максмимум пять результатов


    public function addPost(){
        $post = new Posts();
        $post->title = 'Статья 1';
        $post->content = 'текст статьи 1';
        $post->rubric_id = 4;
        $post->save();

        return view('home', ['res'=>5, 'name'=> 'John']);
    } //добавление поста


    public function getPost(){
        $post = Posts::find(1);
        dump($post);
    } //вывод поста
    public function get_number_post_and_title_Rubric(){
        $post = Posts::find(3);
        dump($post->title, $post->rubric->title);
    } //Вывод поста номер три (его заголовка) и заголовка рубрики которая с ним связана

    public function get_posts_by_rubric(){
        $rubric = Rubric::find(4);
        dump($rubric->posts);
    } //вывод постов по рубрике один пост в одной рубрике

    public function find_tags(){
        $post = Posts::find(1);
        dump($post->title);
        foreach ($post->tags as $tag){
            dump($tag->title);
        }
    } //вывод тегов связанных с постом

    public function find_posts_by_tag(){
        $tag = Tag::find(2);
        dump($tag->title);
        foreach ($tag->posts as $post){
            dump($post->title);
        }
    } //вывод постов по тегу

    public function show_session(Request $request){

        dump($request->all());
        dump(session()->all());

    } //вывод данных сессии

    public function put_in_session(Request $request){

        $request->session()->put('test', 'Test value');
        //session(['test'=>'Test Value']);  то же самое что и строка выше, вставляем в массив
        //значение 'Test value' , по ключу 'test'
        session(['cart'=>[
            ['id' => 1, 'title' => 'Product 1'],
            ['id' => 2, 'title' => 'Product 2'],
            ]]);

        //добавляем массив карт, указываем айди, и добавляем два значения в поле тайтл
        dump(session()->all());

    } //вывод данных сессии

    public function get_from_session(Request $request){
        //dump(session()->get('test'));
        $value = $request->session()->get('test');
        //  dump(session('cart')[1]['title']);
        dump(session()->all());
    } // выводим данные по ключам тест, и из массива карт, айди 1, поле тайтл

    public function pull_session(Request $request){
        dump($request->session()->pull('test'));
        dump(session()->all());
    }// чтение и удаление данных из сессии


    // вариант 1 через реквест  по видеокурсу
    public function setCookie(Request $request){
        dump(Cookie::queue('test', 'Test cookie', 60));
    } // создание cookie

    public function getCookie(Request $request){
        dump(Cookie::get('test'));
        dump($request->cookie('test'));
    } // чтение cookie





    // вариант 2 через респонс
    public function setCookie2(Response $response){
    $response = new Response('Hello World');
    $response->withCookie(cookie('test', 'Test cookie', 1));
    $response->withCookie(cookie()->forever('name', 'value'));
    dump($response);
    //dump($response->withCookie(cookie()->forever('test', 'myCookie')));
    }

    public function getCookie2(Request $request){
    dump($request->cookie('test'));
    dump($request->cookie('name'));
    }




    // вариант 3 через респонс
    public function setCookie3(Request $request) {
        $minutes = 10;
        $response = new Response('Hello World');
        $response->withCookie(cookie('name', 'virat', $minutes));
        return $response;
    }

    public function getCookie3(Request $request){
        $value = $request->cookie('name');
        dump($value = $request->cookie('name'));
        echo $value;
    }  // https://tony-stark.medium.com/laravel-8-cookie-usage-tutorial-with-the-code-example-2020-ee3b71f70ba7




    // вариант 4
    public function setCookie4(Request $request){
        $cookie = Cookie::make('name', 'value', 120);
    }

    public function getCookie4(Request $request){
        $val = Cookie::get('cookieName');
        echo $val;
        dump($val);
        dump($val = Cookie::get('cookieName'));
    }//https://www.nicesnippets.com/blog/laravel-cookies-set-get-delete-cookies
}
?>

