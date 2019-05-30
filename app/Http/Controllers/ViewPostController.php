<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewPostController extends Controller
{
    
    public function index()
    {
        return view('ViewPost');
    }
}