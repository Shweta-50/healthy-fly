<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\DB;
use App\Models\PatientAppointment;
use App\Models\Payment;
use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminDashboardController extends Controller
{
    public function render()
    {
        $total_Doctor = User::where('u_type', 'Doctor')->count();
        $total_Patient = User::where('u_type', 'Patient')->count();
        $total_appointment = PatientAppointment::all()->count();
        $total_revenue = DB::table('payments')->sum('amount');
        $doctors = User::where('u_type', 'Doctor')->get();
        $patients = PatientAppointment::all();
        $appointments = PatientAppointment::all();


        return view('Frontend.admin.dashboard', ['total_Doctor' => $total_Doctor, 'total_Patient' => $total_Patient, 'total_appointment' => $total_appointment, 'doctors' => $doctors, 'patients' => $patients, 'appointments' => $appointments, 'total_revenue' => $total_revenue]);
    }
}
