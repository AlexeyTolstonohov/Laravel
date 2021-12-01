<?php

namespace App\Http\Controllers;

use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Posts;
use App\Models\Rubric;
use App\Models\Tag;

class TemplateController extends Controller
{
    public function index()
    {
        $post = Posts::all();
        return view('template', compact('post'));
    }

    public function post_loop_show()
    {
        $post = Posts::all();
        $title = 'title';
        return view('template', compact ('title', 'post'));
    }
}

?>
