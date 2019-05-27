<?php

namespace App\Http\Controllers;

use App\SocialSecurity;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Functions;

class EntityController extends Controller
{
    public $functions;

    function __construct()
    {
        $this->functions = new Functions();
    }

    public function index()
    {
        $entities= SocialSecurity::all();

        return view('entities.index', compact('entities'));
    }

    public function loadTable()
    {
        if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
            $entities = SocialSecurity::select('id', 'business_name')->get();
            return view('entities.partials.table', compact('entities'));
        } else {
            return redirect()->route('dashboard');
        }
    }

    //public function create(){ }

    public function store(Request $request)
    {
        if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
            $validations = $this->validate($request, [
                'business_name' => 'required',
                'tradename' => 'required',
                'nit' => 'required',
                'type' => 'required',
            ]);
            if ($validations == true) {


                if (empty($request->input('phone'))) {
                    $phone = NULL;
                } else {
                    $phone = $request->input('phone');
                }
                if (empty($request->input('address'))) {
                    $address = NULL;
                } else {
                    $address = $request->input('address');
                }
                if (empty($request->input('email'))) {
                    $email = NULL;
                } else {
                    $email = $request->input('email');
                }

                $socSeg = new SocialSecurity();

                $socSeg->business_name = $request->input('business_name');
                $socSeg->tradename = $request->input('tradename');
                $socSeg->nit = $request->input('nit');
                $socSeg->address = $address;
                $socSeg->phone = $phone;
                $socSeg->email = $email;
                $socSeg->type = $request->input('type');
                if ($request->file('image') != '') {
                    $socSeg->image = $this->functions->upload($request->file('image'), 'logos-eps', $request->input('nit'));
                } else {
                    $socSeg->image = null;
                }
                if ($socSeg->save()) {
                    return response()->json(['success' => trans('translate.ok')]);
                } else {
                    return response()->json(['error' => trans('translate.failed')]);
                }

            } else {
                return response()->json(['error' => trans('translate.required')]);
            }
        }
    }

    public function show($id)
    {
        if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
            if (SocialSecurity::where('id', '=', $id)->count() > 0) {
                $entity = SocialSecurity::find($id);
                return response()->json($entity);
            } else {
                return redirect()->route('entities.index');
            }
        } else {
            return redirect()->route('dashboard');
        }

    }

    public function edit($id)
    {
        if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
            if (SocialSecurity::where('id', '=', $id)->count() > 0) {
                $entity = SocialSecurity::find($id);
                return response()->json($entity);
            } else {
                return redirect()->route('entities.index');
            }
        } else {
            return redirect()->route('dashboard');
        }
    }

    public function update(Request $request, $id)
    {
        $validations = $this->validate($request, [
            'business_name' => 'required',
            'tradename' => 'required',
            'nit' => 'required',
            'type' => 'required',
        ]);
        if ($validations == true) {
            if (empty($request->input('phone'))) {
                $phone = NULL;
            } else {
                $phone = $request->input('phone');
            }
            if (empty($request->input('address'))) {
                $address = NULL;
            } else {
                $address = $request->input('address');
            }
            if (empty($request->input('email'))) {
                $email = NULL;
            } else {
                $email = $request->input('email');
            }

            $socSeg = SocialSecurity::find($id);
            $socSeg->business_name = $request->input('business_name');
            $socSeg->tradename = $request->input('tradename');
            $socSeg->nit = $request->input('nit');
            $socSeg->address = $address;
            $socSeg->phone = $phone;
            $socSeg->email = $email;
            $socSeg->type = $request->input('type');
            if ($request->file('image') != '') {
                $socSeg->image = $this->functions->upload($request->file('image'), 'logos-eps', $request->input('nit'));
            }
            if ($socSeg->save()) {
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
        SocialSecurity::find($id)->delete();
        return back()->with('info', 'Eliminado correctamente');
    }
}
