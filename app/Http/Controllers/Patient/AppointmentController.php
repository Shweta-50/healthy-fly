<?php

namespace App\Http\Controllers\Patient;

use App\Http\Controllers\Controller;
use App\Models\DoctorSchedule;
use App\Models\PatientAppointment;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class AppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function appointment($id)
    {
        $doctor = User::find($id);
        // $doc_name=$doctor->name;
        Session::put('doc_id', $doctor->id);
        Session::put('doc_name', $doctor->name);
        Session::put('doc_address', $doctor->address);
        Session::put('doc_profile_photo', $doctor->profile_photo);
        Session::put('doc_fees', $doctor->fees);
        Session::put('doc_specilist', $doctor->specilist);
        $doctor_schedule = DB::table('doctor_schedule')->where('doct_id', $id)->get();

        // $doc_appt = PatientAppointment::find($id);
        // Session::put('doc_apoint', $doc_appt->apoint_date);
        // Session::put('doc_apoint_time', $doc_appt->apoint_time);
        // Session::put('doc_apoint_fees', $doc_appt->fees);

        //Session::put('doc_id', $doc_appt->doc_id);

        // $doctor_schedule = DoctorSchedule::where('doct_id', 2);
        $doctor_schedule = DB::table('doctor_schedule')->where('doct_id', $id)->get();
        // Session::put('doc_date',$doctor_schedule->date);
        //Session::put('doc_time',$doctor_schedule->start_time);

        //$doc_appt =DB::table('patient_appointment')->where('id', $id)->get();

        return view('Frontend.patient.appointment', ['doctor' => $doctor,  'doctor_schedule' => $doctor_schedule]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',

            'email' => 'required|email',
            'phone' => 'required',
            'address' => 'required',
            'gender' => 'required',
            'disease' => 'required',
            'msg' => 'required',

        ], [
            'name.required' => 'Name is required',
            'phone.required' => 'Mobile No. is required',
            'address.required' => 'Address is required',
            'gender.required' => 'Gender is required',
            'disease.required' => 'Disease is required',
            'msg.required' => 'Disease Description is required',


        ]);



        $appointments = new PatientAppointment();
        $appointments->p_id = $request->input('pid');
        $appointments->profile_photo = $request->input('profile');
        $appointments->pname = $request->input('name');
        $appointments->email = $request->input('email');
        $appointments->phone = $request->input('phone');
        $appointments->address = $request->input('address');
        $appointments->gender = $request->input('gender');
        $appointments->apoint_date = $request->input('date');
        $appointments->apoint_day = $request->input('day');
        $appointments->apoint_time = $request->input('start_time');
        $appointments->disease = $request->input('disease');
        $appointments->disease_desc = $request->input('msg');
        $appointments->document = $request->input('data');
        if ($request->hasfile('data')) {
            $file = $request->file('data');
            $extention = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extention;
            $file->move('uploads/documents/', $filename);
            $appointments->document = $filename;
        }
        $appointments->doc_id = $request->input('d_id');
        $appointments->doc_name = $request->input('d_name');
        $appointments->doc_profile = $request->input('d_profile');
        $appointments->doc_specialities = $request->input('d_specialities');
        $appointments->fees = $request->input('fees');
        $appointments->save();
        return redirect('/user')->with('status', 'Appointment Booked Successfully 👍');
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
        // $doc_appt = PatientAppointment::find($id);
        // Session::put('doc_apoint', $doc_appt->apoint_date);
        // Session::put('doc_apoint_time', $doc_appt->apoint_time);
        // Session::put('doc_apoint_fees', $doc_appt->fees);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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
