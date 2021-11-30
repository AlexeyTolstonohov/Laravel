<?php

namespace App\Http\Controllers;
use App\Models\Posts;
use Illuminate\Http\Request;
use App\Models\Rubric;
use App\Models\Tag;

class PostController extends Controller
{
    public function index()
    {
        return 'Hello World Contoller';
    }

    public function test()
    {
        return __METHOD__;
    }

    public function create_post()
    {
        $post = Posts::all();;
        $title = 'Create Post';
        return view('create', compact('post','title'));
    }

    public function store(Request $request)
    {
        return redirect()->route('home');
    }
}
?>
