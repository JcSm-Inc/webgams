<?php

namespace App\Http\Controllers;

use App\Http\Requests\ValidarUsuario;
use App\Models\User;
use Caffeinated\Shinobi\Contracts\Role;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $user=User::paginate(15);
        return view('users.index',compact('user'));
    }
    public function show(User $user){
        return view('users.show',compact('user'));
    }
    public function edit(User $user){
        $roles=Role::get();
        return view('users.edit',compact('user','roles'));
    }
    public function update(ValidarUsuario $user,Request $request){
        $user->update($user->all());

        $user->roles()->sync($request->get('roles'));

        return redirect()->route('users.edit',$user->id)->with('info','Usuario Actualizado con exito');
    }
    public function destroy(User $user){
        $user->delete();
        return back()->with('info','Eliminado Correctamente');
    }
}
