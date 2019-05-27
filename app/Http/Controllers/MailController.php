<?php

namespace App\Http\Controllers;

use App\Mail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MailController extends Controller
{
    public function index()
    {
        $email = Mail::all();

        return view('mail.index',compact('email'));
    }

    public function create()
    {
    }

    public function store(Request $request)
    {
        $validations = $this->validate($request, [
            'name_send' => 'required',
            'email_send' => 'required',
        ]);
        if ($validations == true) {
            $email = Mail::create($request->all());
            if ($email) {
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
            if (Mail::where('id', '=', $id)->count() > 0) {
                $email = Mail::find($id);
                return view('mail.show', compact('email'));
            }else{
                return redirect()->route('ips.index');
            }
        }
    }

    public function edit($id)
    {
        if (Mail::where('id', '=', $id)->count() > 0) {
            $email = Mail::find($id);
            return view('mail.edit', compact('email'));
        } else {
            return redirect()->route('mail.index');
        }
    }

    public function update(Request $request, $id)
    {
        $validations = $this->validate($request, [
            'name_send' => 'required',
            'email_send' => 'required|email',
        ]);
        if ($validations == true) {
            $email = Mail::find($id);
            $email->update($request->all());
            if ($email) {
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
        Mail::find($id)->delete();
        return back()->with('info', 'Eliminado correctamente');
    }
}
