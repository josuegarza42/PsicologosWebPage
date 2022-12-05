<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Support\Facades\Cache;

class PostController extends Controller
{
    public function index()
    {

            $posts = Post::where('status', 2)->latest('id')->paginate(8);
   

        return view('posts.index', compact('posts'));
    }

  
}
