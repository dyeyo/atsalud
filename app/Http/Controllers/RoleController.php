<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Caffeinated\Shinobi\Models\Role;
use Caffeinated\Shinobi\Models\Permission;

class RoleController extends Controller
{
    public function index()
    {
        $roles = Role::paginate();
        dd($roles);
        return view('roles.index', compact('roles'));
    }

    public function create()
    {
        $permissions = Permission::get();
        return view('roles.create', compact('permissions'));
    }

    public function store(Request $request)
    {
        $role = Role::create($request->all());
        $role->permissions()->sync($request->get('permissions'));
        return redirect()->route('roles.edit', $role->id)
            ->with('info', 'Rol guardado con éxito');
    }

    public function show($id)
    {
        $role = Role::find($id);
        return view('roles.show', compact('role'));
    }

    public function edit($id)
    {
        $role = Role::find($id);
        $permissions = Permission::get();
        return view('roles.edit', compact('role', 'permissions'));
    }

    public function update(Request $request, $id)
    {
        $role = Role::find($id);
        $role->update($request->all());
        $role->permissions()->sync($request->get('permissions'));
        return redirect()->route('roles.edit', $role->id)
            ->with('info', 'Rol guardado con éxito');
    }

    public function destroy($id)
    {
        $role = Role::find($id)->delete();
        return back()->with('info', 'Eliminado correctamente');
    }
}
