<?php

namespace App\Http\Controllers;

use App\Affiliation;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AffiliationController extends Controller
{
    public function index()
    {
       $affiliation=Affiliation::all();
       return view('affiliation.index2',compact('affiliation'));
    }

    public function create()
    {
        $users= User::all();
        return view('affiliation.create', compact( 'users'));
    }

    public function store(Request $request)
    {
        $validations = $this->validate($request, [
            'application_date' => 'required',
            'type_procedure' => 'required',
            'affiliation_type' => 'required',
            'affiliation_subtype' => 'required',
            'regime' => 'required',
            'affiliated_type' => 'required',
            'contributing_type' => 'required',
            'code' => 'required',
            'user_id' => 'required',
            'status' => 'required',
        ]);
        if ($validations == true) {
            $affiliation = Affiliation::create($request->all());
            if ($affiliation) {
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
        if ($id >= 1) {
            if (Affiliation::where('id', '=', $id)->count() > 0) {
                $affiliation = Affiliation::find($id);
                return view('affiliation.show', compact('affiliation'));
            }else{
                return redirect()->route('affiliation.index');
            }
        }
    }


    public function edit($id)
    {
        $user= User::all();
        if (Affiliation::where('id', '=', $id)->count() > 0) {
            $affiliation = Affiliation::find($id);
            return view('affiliation.edit', compact('affiliation','user'));
        } else {
            return redirect()->route('affiliation.index');
        }
    }


    public function update(Request $request, $id)
    {
        $validations = $this->validate($request, [
            'application_date' => 'required',
            'type_procedure' => 'required',
            'affiliation_type' => 'required',
            'affiliation_subtype' => 'required',
            'regime' => 'required',
            'affiliated_type' => 'required',
            'contributing_type' => 'required',
            'code' => 'required',
            'user_id' => 'required',
            'status' => 'required',
        ]);
        if ($validations == true) {
            $affiliation = Affiliation::find($id);
            $affiliation->update($request->all());
            if ($affiliation) {
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
        Affiliation::find($id)->delete();
        return back()->with('info', 'Eliminado correctamente');
    }
}
