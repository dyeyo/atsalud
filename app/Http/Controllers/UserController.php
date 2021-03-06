<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Caffeinated\Shinobi\Models\Role;
use App\User;
use Caffeinated\Shinobi\Models\Permission;
use App\Departament;

class UserController extends Controller
{
   
    public function index()
    {
        $users = User::queryusers();

        return view('users.index',compact('users'));
    }
    public function create (Request $request)
    {
        $permissions = Permission::get();
        $departaments = Departament::all();
        return view('users.create', compact('permissions', 'departaments'));
    }
    public function show(User $user)
    {
        return view('users.show',compact('user'));
    }
    public function edit(User $user)
    {
        $roles=Role::get();
        return view('users.edit',compact('user','roles'));
    }

    public function update(Request $request, User $user)
    {
        /**PRIMERO ACTUALIZAMOS EL USUARIO*/
        $user->update($request->all());
        /**AHORA EL ROL*/
        $user->roles()->sync($request->get('roles'));
        return redirect()->route('users.edit',$user->id)
            ->with('info','Usuario Editado con Exito');

    }

    public function destroy(User $user)
    {
        $user->delete();
        return back()->with('info','Usuario Eliminado con Exito');
    }
}
