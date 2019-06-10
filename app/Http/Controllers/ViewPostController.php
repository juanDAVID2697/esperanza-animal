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


    
    public function editPost(Request $request, $id){
        
        $post= Post::find($id);

        $post->tittle= $request->tittle;
        $post->typePet= $request->typePet;
        $post->location= $request->location;
        $post->picture= $request->picture;
        $post->description= $request->description;

        $post->save();
        return redirect()->back()->with('successs',"El post: $post->tittle se ha actualizado con exito");
    }
     
        
      //  $posts = Post::findOrFail($user_id);
      //  $post->tittle= $request->tittle;
      //  $post->typePet= $request->typePet;
      //  $post->location= $request->location;
      //  $post->picture= $request->picture;
      //  $post->description= $request->description;
      //  $post->save();
      //  return view('EditPost', compact('posts'));
    }




