<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
class ViewPostController extends Controller
{
    
    public function index()
    {
        $posts= Post::all();

        return view('ViewPost', compact('posts'));
    }

    public function editPost($id){
        $posts = Post::find($id);
        return view('EditPost', compact('posts'));
    }




}