<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class UserController extends Controller
{
    public function index()
    {
        $users = User::paginate(10);
return view('admin.users.index')->with(compact('users'));//listado
    }
    public function create()
    {
        return view('admin.users.create');//formulario
    }
    public function store(Request $request)
    {
        //registra un nuevo usuario
        // dd($request->all());
       $user = new User; 
       $user->name = $request->input('name');
       $user->lastName = $request->input('lastName');
       $user->phone = $request->input('phone');
       $user->email = $request->input('email');
       $user->password = $request->input('password');
       $user->save();

        return redirect ('/admin/users');
    }
    public function edit($id)
    {
     //   return "mostrar aqui el form de edicion para el producto con id $id";

        $user = User::find($id); 
        return view('admin.users.edit')->with(compact('user'));  //formulario
    }
    public function update(Request $request,$id)
    { 
        $user = User::find($id);
        $user->name = $request->input('name');
       $user->lastName = $request->input('lastName');
       $user->phone = $request->input('phone');
       $user->email = $request->input('email');
       $user->password = $request->input('password');
       $user->save();   //update

        return redirect ('/admin/users');
    }
    public function destroy(Request $request,$id)
    {
        $user = User::find($id);
        $user->name = $request->input('name');
        $user->lastName = $request->input('lastName');
        $user->phone = $request->input('phone');
        $user->email = $request->input('email');
        $user->password = $request->input('password');
        $user->delete();

        return back();
    }
    //
}
