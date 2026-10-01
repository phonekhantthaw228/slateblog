<?php

namespace App\Http\Controllers;
use App\Models\Post;
use App\Models\Category;

use Illuminate\Http\Request;


class PostsController extends Controller
{
      public function postIndividual($id){
    $categories = Category::all();
    $post = Post::find($id);
    
    
    $related_posts = Post::where('category_id', $post->category_id)
                         ->where('id', '!=', $id)
                         ->orderBy('id', 'DESC')
                         ->limit(4)
                         ->get();
                         
    
    return view('blogpost.post', compact('post', 'categories', 'related_posts'));
}
}
