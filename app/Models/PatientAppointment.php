<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PatientAppointment extends Model
{
    use HasFactory;
    protected $table = "patient_appointment";
    protected $fillable = [
        'p_id',
        'profile_photo',
        'pname',
        'email',
        'phone',
        'address',
        'gender',
        'apoint_date',
        'apoint_day',
        'apoint_time',
        'disease',
        'disease_desc',
        'document',
        'doc_id',
        'doc_name',
        'fees',


    ];
    public function prescription(){
        return $this->hasOne('App\Models\Prescription');
    }
}
