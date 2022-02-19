<?php

namespace App\Http\Controllers\Doctor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class DoctorListController extends Controller
{
    public function index()
    {
        $doctors = User::where('u_type', 'Doctor')->paginate(10);
        return view('Frontend.Doctor.doctor_list',['doctors' => $doctors]);
    }
}
