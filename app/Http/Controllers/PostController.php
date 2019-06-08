<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{

    public function index()
    {
        $posts = Post::all();

        return view('ViewPost', compact('posts'));
    }

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

        return redirect()->back()->with('success', "El post $post->tittle ya fue creado con exito.");
    }

    public function show($post)
    {
        $post = Post::findOrFail($post);

        return view('publication.show', compact('post'));
    }

    public function update(Request $request, $id)
    {
        $path = Storage::disk('public')->put('image', $request->file('picture'));
        $post = Post::find($id);

        $post->tittle = $request->input('tittle');
        $post->typePet = $request->input('typePet');
        $post->location = $request->input('location');
        $post->picture = $path;
        $post->description = $request->input('ndescriptioname');
        $post->save();   //update

        return redirect('/publication/post');
    }

    public function destroy(Request $request, $id)
    {

        $post = Post::find($id);
        $post->delete();   //eliminar
        return back();
    }

}
