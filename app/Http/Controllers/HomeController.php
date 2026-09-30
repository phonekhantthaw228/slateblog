<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class HomeController extends Controller
{
    public function home() {
      
    $allPosts = Post::all();
    $featuredPost = $allPosts->first();
    $otherPosts = $allPosts->skip(1);
    return view('bloghome.index', compact('featuredPost', 'otherPosts'));
    }
}
