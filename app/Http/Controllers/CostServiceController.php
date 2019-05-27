<?php

namespace App\Http\Controllers;

use App\CostService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CostServiceController extends Controller
{

    public function index()
    {
        $cosSer= CostService::all();
        return view('CostService.index',compact('cosSer'));
    }

    public function store(Request $request)
    {
        $validations = $this->validate($request, [
            'name' => 'required',
            'value' => 'required',
        ]);
        if ($validations == true) {
            $cosSer = CostService::create($request->all());
            if ($cosSer) {
                return response()->json(['success' => trans('translate.ok')]);
            } else {
                return response()->json(['error' => trans('translate.failed')]);
            }
        } else {
            return response()->json(['error' => trans('translate.required')]);
        }
    }


    public function edit($id)
    {
        if (CostService::where('id', '=', $id)->count() > 0) {
            $cosSer = CostService::find($id);
            return view('CostService.edit', compact('cosSer'));
        } else {
            return redirect()->route('CostService.index');
        }
    }

    public function update(Request $request, $id)
    {
        $validations = $this->validate($request, [
            'name' => 'required',
            'value' => 'required',
        ]);

        if ($validations == true) {
            $cosSer = CostService::find($id);
            $cosSer->update($request->all());
            if ($cosSer) {
                return response()->json(['success' => trans('translate.ok')]);
            } else {
                return response()->json(['error' => trans('translate.failed')]);
            }
        } else {
            return response()->json(['error' => trans('translate.required')]);
        }
    }

}
