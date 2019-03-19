<?php

namespace App\Http\Controllers;

use App\SocialSecurity;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class SocialSecurityController extends Controller
{

    public function index()
    {
        $socSeg= SocialSecurity::all();

        return view('socialSecurity.index',compact('socSeg'));
    }

    public function create()
    {
        return view('socialSecurity.create');
    }

    public function store(Request $request)
    {
        $validations = $this->validate($request, [
            //'legal_representative' => 'required',
            'business_name' => 'required',
            'tradename' => 'required',
            'nit' => 'required',
            'email' => 'required',
            'type' => 'required',
        ]);

        if ($validations == true) {
            if ($request->hasFile('file'))
            {
                $file=$request->file('file');
                $name=time().$file->getClientOriginalName();
                $file->move(public_path().'/images/',$name);
            }

            $socSeg=new SocialSecurity();

            $socSeg->business_name=$request->input('business_name');
            $socSeg->tradename=$request->input('business_name');
            $socSeg->nit=$request->input('business_name');
            $socSeg->address=$request->input('address');
            $socSeg->phone=$request->input('phone');
            $socSeg->email=$request->input('email');
            $socSeg->type=$request->input('type');
            $socSeg->image=$name;
            $socSeg->save();
            return response()->json(['success' => trans('translate.ok')]);
            //return redirect()->route('socialSecurity.index');
        } else {
            return response()->json(['error' => trans('translate.required')]);
        }
    }

    public function show($id)
    {
        if ($id != 1) {
            if (SocialSecurity::where('id', '=', $id)->count() > 0) {
                $socSeg = SocialSecurity::find($id);
                return view('socialSecurity.show', compact('socSeg'));
            }else{
                return redirect()->route('socialSecurity.index');
            }
        }
    }

    public function edit($id)
    {
        if (SocialSecurity::where('id', '=', $id)->count() > 0) {
            $socSeg = SocialSecurity::find($id);
            return view('socialSecurity.edit', compact('socSeg'));
        } else {
            return redirect()->route('socialSecurity.index');
        }
    }

    public function update(Request $request, $id)
    {
        $validations = $this->validate($request, [
            'business_name' => 'required',
            'tradename' => 'required',
            'nit' => 'required',
            'email' => 'required',
            'type' => 'required',
        ]);
        if ($validations == true) {
            $socSeg = SocialSecurity::find($id);
            $socSeg->update($request->all());
            if ($socSeg) {
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
