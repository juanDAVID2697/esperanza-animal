<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function createPost()
    {       
        return view('/publication/post');
    }

}
