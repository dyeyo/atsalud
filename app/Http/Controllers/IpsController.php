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

        return view('ips.index', compact('ips', 'departaments'));
    }

    public function loadTable($id)
    {
        if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
            $ips = Ips::where('municipality_id', $id)->select('id', 'business_name')->get();
            return view('ips.partials.table', compact('ips'));
        } else {
            return redirect()->route('dashboard');
        }
    }

    //public function create() {}

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
        if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
            if (Ips::where('id', '=', $id)->count() > 0) {
                $ips = Ips::find($id);
                $ips->municipality;
                $ips->municipality->departament;
                return response()->json($ips);
            } else {
                return redirect()->route('ips.index');
            }
        } else {
            return redirect()->route('dashboard');
        }
    }

    public function edit($id)
    {
        if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
            if (Ips::where('id', '=', $id)->count() > 0) {
                $ips = Ips::find($id);
                $ips->municipality;
                $ips->municipality->departament;
                return response()->json($ips);
            } else {
                return redirect()->route('ips.index');
            }
        } else {
            return redirect()->route('dashboard');
        }
    }

    public function update(Request $request, $id)
    {
        if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
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
        } else {
            return redirect()->route('dashboard');
        }
    }

    public
    function destroy($id)
    {
        Ips::find($id)->delete();
        return back()->with('info', 'Eliminado correctamente');
    }
}
