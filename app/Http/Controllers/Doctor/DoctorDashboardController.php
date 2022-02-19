<?php

namespace App\Http\Controllers\Doctor;

use App\Http\Controllers\Controller;
use App\Models\PatientAppointment;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class DoctorDashboardController extends Controller
{
    public function render()
    {
        $total_Doctor = PatientAppointment::where('doc_id', Auth::user()->id)->count();
        $total_appointment = PatientAppointment::where('doc_id', Auth::user()->id)->count();
        $total_earning = PatientAppointment::where('doc_id', Auth::user()->id)->sum('fees');
        $patients = PatientAppointment::where('doc_id', Auth::user()->id)->get();
        return view('Frontend.doctor.dashboard', ['total_Doctor' => $total_Doctor, 'total_appointment' => $total_appointment, 'patients' => $patients, 'total_earning' =>  $total_earning]);
    }

    public function destroy($id)
    {
        DB::table('patient_appointment')->where('id', $id)->delete();
        return redirect()->back()->with('status', 'Appointment Completed ✅');
    }
}
