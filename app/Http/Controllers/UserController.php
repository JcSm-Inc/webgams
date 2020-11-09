<?php

namespace App\Http\Controllers;

use App\Http\Requests\ValidarUsuario;
use App\Models\User;
//use Caffeinated\Shinobi\Contracts\Role;
use Caffeinated\Shinobi\Models\Role;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $users=User::paginate(15);
        return view('roles_de_usuario.index',compact('users'));
    }
    public function show(User $user){
        return view('roles_de_usuario.show',compact('user'));
    }
    public function edit(User $user){
        $roles=Role::get();
        return view('roles_de_usuario.edit',compact('user','roles'));
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
