<?php

namespace App\Http\Controllers\Patient;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ChangePasswordController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $patient = User::where('id', Auth::user()->id)->first();
        return view('Frontend.patient.change-password', ['patient' => $patient]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $patient = User::where('id', Auth::user()->id)->first();
        return view('Frontend.patient.change-password', ['patient' => $patient]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if (Hash::check($request->current_password, Auth::user()->password)) {

            if ($request->new_password === $request->confirm_password) {
                $user = User::findOrFail(Auth::user()->id);
                $user->password = Hash::make($request->new_password);
                $user->save();
                
                session()->flash('status', 'Password Changed Successfully..');
            } else {
                return redirect()->back()->with('status', 'New Password and  Confirm Password not matched ');
            }
            return redirect('patient/change-password')->with('status', 'Password Changed Successfully');
        } else {
            return redirect('patient/change-password')->with('status', 'Password did not change');
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
