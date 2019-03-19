<?php

namespace App\Http\Controllers;

use App\Departament;
use App\Ips;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IpsController extends Controller
{

    public function index()
    {
        $ips = Ips::all();
        $departaments = Departament::all();

        return view('ips.index',compact('ips', 'departaments'));
    }

    public function create()
    {
//        $departaments = Departament::all();
//        return view('ips.create', compact( 'departaments'));
    }

    public function store(Request $request)
    {
        $validations = $this->validate($request, [
            'business_name' => 'required',
            'tradename' => 'required',
            'nit' => 'required',
            'email' => 'required',
            'municipality_id' => 'required',
        ]);
        if ($validations == true) {
            $ips = Ips::create($request->all());
            if ($ips) {
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
            if (Ips::where('id', '=', $id)->count() > 0) {
                $ips = Ips::find($id);
                return view('ips.show', compact('ips'));
            }else{
                return redirect()->route('ips.index');
            }
        }
    }

    public function edit($id)
    {
        $departaments = Departament::all();
        if (Ips::where('id', '=', $id)->count() > 0) {
            $ips = Ips::find($id);
            return view('ips.edit', compact('ips','departaments'));
        } else {
            return redirect()->route('ips.index');
        }
    }

    public function update(Request $request, $id)
    {
        $validations = $this->validate($request, [
            'business_name' => 'required',
            'tradename' => 'required',
            'nit' => 'required',
            'email' => 'required',
            'municipality_id' => 'required',
        ]);
        if ($validations == true) {
            $ips = Ips::find($id);
            $ips->update($request->all());
            if ($ips) {
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
        Ips::find($id)->delete();
        return back()->with('info', 'Eliminado correctamente');
    }
}
