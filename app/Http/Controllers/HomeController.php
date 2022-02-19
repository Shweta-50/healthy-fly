<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    public function index()
    {
        $patients = DB::table('patient_feedback')->get();
        $doctors = User::where('u_type', 'Doctor')->paginate(10);
        return view('Frontend.index', ['doctors' => $doctors, 'patients' =>  $patients]);
    }

    public function create(Request $request)
    {
        DB::table('contacts')->insert([
            'name' => $request->name,
            'email' => $request->email,
            'mobile' => $request->mobile,
            'address' => $request->address,
            'query' => $request->query,
        ]);

        return redirect(route('index'));
    }
}
