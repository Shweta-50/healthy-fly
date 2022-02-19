<?php

namespace App\Http\Controllers\Doctor;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Livewire\WithFileUploads;

class DoctorChangePasswordController extends Controller
{
    use WithFileUploads;
    public $name;
    public $email;
    public $password;
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
     */
    public function index()
    {

        $doctor = User::where('id', Auth::user()->id)->first();
        return view('Frontend.doctor.doctor_change_password', ['doctor' => $doctor]);
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
        $doctor = User::where('id', Auth::user()->id)->first();
        return view('Frontend.doctor.doctor_change_password', ['doctor' => $doctor]);
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
                // return redirect('doctor/doctor_change_password')->with('status', 'Password Changed Successfully');
                session()->flash('status', 'Password Changed Successfully');
            } else {
                return redirect()->back()->with('status', 'New Password and  Confirm Password not matched ');
            }
            return redirect('doctor/doctor_change_password')->with('status', 'Password Changed Successfully');
        } else {
            return redirect()->route('doctor.doctor_change_password')->with('status', 'Password does not change');
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
