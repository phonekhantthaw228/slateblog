<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
        public function postIndividual($id){
            return view('blogpost.post');
        }
}
