<?php

    namespace App\Http\Controllers;

    use Illuminate\Http\Request;
    use Caffeinated\Shinobi\Models\Role;
    use Caffeinated\Shinobi\Models\Permission;

    class RoleController extends Controller
    {
        public function index()
        {
            $roles = Role::all();
            //dd($roles);
            return view('roles.index', compact('roles'));
        }

        public function create()
        {
            $permissions = Permission::get();
            return view('roles.create', compact('permissions'));
        }

        public function store(Request $request)
        {
            $validations = $this->validate($request, [
                'name' => 'required',
                'slug' => 'required',
            ]);
            if ($validations == true) {
                $role = Role::create($request->all());
                $role->permissions()->sync($request->get('permissions'));
                if ($role) {
                    return response()->json(['success' => trans('translate.ok')]);
                } else {
                    return response()->json(['error' => trans('translate.failed')]);
                }
            } else {
                return response()->json(['error' => trans('translate.required')]);
            }
        }

        public function show($id)
        {
            if ($id != 1) {
                if (Role::where('id', '=', $id)->count() > 0) {
                    $role = Role::find($id);
                    $permissions = Permission::get();
                    return view('roles.show', compact('role', 'permissions'));
                }else{
                    return redirect()->route('roles.index');
                }
            } else {
                return redirect()->route('roles.index');
            }

        }

        public function edit($id)
        {
            if (Role::where('id', '=', $id)->count() > 0) {
                $role = Role::find($id);
                $permissions = Permission::get();
                return view('roles.edit', compact('role', 'permissions'));
            } else {
                return redirect()->route('roles.index');
            }
        }

        public function update(Request $request, $id)
        {
            $validations = $this->validate($request, [
                'name' => 'required',
                'slug' => 'required',
            ]);
            if ($validations == true) {
                $role = Role::find($id);
                $role->update($request->all());
                $role->permissions()->sync($request->get('permissions'));
                if ($role) {
                    return response()->json(['success' => trans('translate.ok')]);
                } else {
                    return response()->json(['error' => trans('translate.failed')]);
                }
            } else {
                return response()->json(['error' => trans('translate.required')]);
            }
        }

        public function destroy($id)
        {
            Role::find($id)->delete();
            return back()->with('info', 'Eliminado correctamente');
        }
    }
