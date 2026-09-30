<?php

namespace App\Http\Controllers;
use App\Models\Post;

use Illuminate\Http\Request;

class PostsController extends Controller
{
        public function postIndividual($id){
            $post = Post::find($id);
            return view('blogpost.post',compact('post'));
        }
}
