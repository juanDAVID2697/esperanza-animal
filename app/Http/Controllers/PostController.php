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

    public function edit(Post $post)
    {

        return view('publication.edit', compact('post'));
    }

    public function update(Request $request, $post)
    {
        $path = Storage::disk('public')->put('image', $request->file('picture'));
        $post = Post::findOrFail($post);

        $post->tittle = $request->input('tittle');
        $post->typePet = $request->input('typePet');
        $post->location = $request->input('location');
        $post->picture = $path;
        $post->description = $request->input('description');
        $post->user_id = Auth::id();
        $post->save();   //update

        return redirect('/home');
    }

    public function destroy(Post $post)
    {
        $post->delete();   //eliminar
        return back();
    }

    public function indexAdmin()
    {
        $posts = Post::all();
        return view('admin.posts.index', compact('posts'));
    }

    public function editAdmin(Post $post)
    {
        return view('admin.posts.edit', compact('post'));
    }

    public function updateAdmin(Request $request, $post)
    {
        $this->update($request, $post);
        return redirect()->back();
    }

}
