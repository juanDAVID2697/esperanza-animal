<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Post;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    public function createPost()
    {
        return view('/publication/post');
    }

    public function storePost(Request $request)
    {

        //IMAGE
        $path = Storage::disk('public')->put('image', $request->file('picture'));

        $post = Post::create([
            'user_id' => Auth::id(),
            'tittle' => $request->tittle,
            'typePet' => $request->typePet,
            'location' => $request->location,
            'picture' => $path,
            'description' => $request->description,
        ]);

        return redirect()->back()->with('success', "El post: $post->tittle ya fue creado con exito.");
    }

    public function show(Post $post)
    {
        return view('publication.show', compact('post'));
    }

}
