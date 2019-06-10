<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class postAdminController extends Controller
{
    public function index()
    {
        return view('admin.welcome');//listado
    }

    public function show(Posts $posts)
    {
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


    //
}
