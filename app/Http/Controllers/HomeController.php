<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;

class HomeController extends Controller
{
    public function home() {
      
        $categories = Category::all();

    $featuredPost = Post::first();
    $otherPosts = Post::where('id', '!=', $featuredPost->id)->paginate(4);
    return view('bloghome.index', compact('featuredPost', 'otherPosts','categories'));
    }


}
