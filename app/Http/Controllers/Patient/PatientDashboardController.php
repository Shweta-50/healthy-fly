<?php

namespace App\Http\Controllers\Patient;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PatientAppointment;
use App\Models\Payment;
use App\Models\Prescription;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PatientDashboardController extends Controller
{
    public function render()
    {
        return view('Frontend.patient.dashboard');
    }

    public function index()
    {



        $patient = PatientAppointment::where('p_id', (Auth::user()->id))->get();
        $presc = DB::table('prescriptions')
         ->where('prescriptions.p_id',Auth::user()->id)
         ->get();

        // $presc =Prescription::where('patient_appointment_id',Auth::user()->id)->get();
            // $status = Payment::where('email', (Auth::user()->email))->get();
        return view('Frontend.patient.patient-profile-dashboard', ['patient' => $patient , 'presc' => $presc]);
    }



    // public function show($id)
    // {
    //     $invoice = Payment::where('pid', $id)->get();
    //     $invoice_pname = $invoice->pname;
    //     $invoice_email = $invoice->email;
    //     $invoice_doc_name = $invoice->doc_name;
    //     $invoice_payment_id = $invoice->payment_id;
    //     return view('Frontend.patient.patient_invoice', ['invoice_pname' => $invoice_pname, 'invoice_email' => $invoice_email, 'invoice_payment_id' => $invoice_payment_id, 'invoice_doc_name' => $invoice_doc_name]);
    // }
}
