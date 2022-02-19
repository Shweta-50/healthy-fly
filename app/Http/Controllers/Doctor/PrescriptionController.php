<?php

namespace App\Http\Controllers\Doctor;

use App\Http\Controllers\Controller;
use App\Models\PatientAppointment;
use App\Models\Prescription;

use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PrescriptionController extends Controller
{
    public function index($id){
        $doc_appt = PatientAppointment::find($id);
        Session::put('doc_name', $doc_appt->doc_name);
        Session::put('doc_specialities' , $doc_appt->doc_specialities);
        Session::put('p_id', $doc_appt->p_id);
        Session::put('pname', $doc_appt->pname);
        Session::put('address', $doc_appt->address);
        Session::put('phone', $doc_appt->phone);
        Session::put('gender', $doc_appt->gender);
        Session::put('id' , $doc_appt->id);
        Session::put('created_at', $doc_appt->created_at );
        Session::put('disease' , $doc_appt->disease);
       return view('Frontend.doctor.prescription',['doc_appt'=>$doc_appt  ]);

    }


    public function create(Request $request)
    {
        $pre = new Prescription();
        $pre->p_id = $request->p_id;
        $pre->doc_name = $request->doc_name;
        $pre->patient_appointment_id = $request->patient_appointment_id;
        $pre->name1 = $request->name1;
        $pre->quantity1 = $request->quantity1;
        $pre->days1 = $request->days1;
        $pre->time1 = $request->time1;
        $pre->name2 = $request->name2;
        $pre->quantity2 = $request->quantity2;
        $pre->days2 = $request->days2;
        $pre->time2 = $request->time2;
        $pre->name3 = $request->name3;
        $pre->quantity3 = $request->quantity3;
        $pre->days3 = $request->days3;
        $pre->time3 = $request->time3;
        $pre->name4 = $request->name4;
        $pre->quantity4 = $request->quantity4;
        $pre->days4 = $request->days4;
        $pre->time4 = $request->time4;
        $pre->name5 = $request->name5;
        $pre->quantity5 = $request->quantity5;
        $pre->days5 = $request->days5;
        $pre->time5 = $request->time5;
        $pre->description = $request->description;
        $pre->save();
        return redirect('/doctor/DoctorDashboard')->with('status', 'Prescription Added Successfully' );

    }




    public function show($id)
    {

        $invoice = DB::table('prescriptions')
        // ->join('patient_appointment','prescriptions.id','=','patient_appointment.id')
         ->where('prescriptions.id', $id)
          ->get();

    return view('Frontend.patient.prescription_invoice', ['invoice' => $invoice]);

    }




}
