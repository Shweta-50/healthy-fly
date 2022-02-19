<?php

namespace App\Http\Controllers;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Livewire\WithFileUploads;

class DoctorProfileController extends Controller
{
    use WithFileUploads;
    public $name;
    public $email;
    public $phone;
    public $address;
    public $dob;
    public $specilist;
    public $education;
    public $fees;
    public $gender;
    public $profile_photo;
    public $newimage;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     *

     */
    public function index()
    {
        $doctor = User::where('id', Auth::user()->id)->first();
        return view('Frontend.doctor.doctor_profile', ['doctor' => $doctor]);
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
        $doctor = User::where('id', Auth::user()->id)->first();
        return view('Frontend.doctor.doctor_profile', ['doctor' => $doctor]);
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
        $doctor = User::where('id', Auth::user()->id)->first();
        $doctor->name = $request->name;
        $doctor->email = $request->email;
        $doctor->phone = $request->phone;
        $doctor->address = $request->address;
        $doctor->dob = $request->dob;
        $doctor->specilist = $request->specilist;
        $doctor->education = $request->education;
        $doctor->fees = $request->fees;
        $doctor->gender = $request->gender;
        if ($request->hasfile('profile_photo')) {
            $file = $request->file('profile_photo');
            $extention = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extention;
            $file->move('uploads/Images/', $filename);
            $doctor->profile_photo = $filename;
        }
        $doctor->save();
        return redirect()->back()->with('status', 'Profile Updated Successfully 👍');
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
