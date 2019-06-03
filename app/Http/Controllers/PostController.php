<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Post;
class PostController extends Controller
{
    public function createPost()
    {       
        return view('/publication/post');
    }

    public function storePost(Request $request){
        
        $post= Post::create([
            'user_id' =>Auth::id(),
            'tittle'=> $request->tittle,
            'typePet'=> $request->typePet,
            'location'=> $request->location,
            'picture'=>'hola',
            'description'=> $request->description,
        ]);

        return redirect()->back()->with('success', "El post: $post->tittle ya fue creado con exito.");
    }

}
