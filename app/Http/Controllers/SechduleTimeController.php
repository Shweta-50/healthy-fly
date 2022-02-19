<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SechduleTimeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function sechduleTiming()
    {
        $doctor_schedule = DB::table('doctor_schedule')->get();
        return view('Frontend.doctor.schedule-timings', ['doctor_schedule' => $doctor_schedule]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        DB::table('doctor_schedule')->insert([
            'doct_id' => $request->doct_id,
            'date' => $request->cal,
            'day' => $request->scheduleday,
            'start_time' => $request->starttime,
            'end_time' => $request->endtime,
            'availability' => $request->bookavail,

        ]);
        return redirect(route('schedule_timing'))->with('status', 'Schedule Added Successfully');
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $doctor_schedule = DB::table('doctor_schedule')->find($id);
        return view('Frontend.doctor.ScheduleEditForm', ['doctor_schedule' => $doctor_schedule]);
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

        DB::table('doctor_schedule')->where('id', $id)->update([
            'doct_id' => $request->doct_id,
            'date' => $request->cal,
            'day' => $request->scheduleday,
            'start_time' => $request->starttime,
            'end_time' => $request->endtime,
            'availability' => $request->bookavail,

        ]);
        return redirect(route('schedule_timing'))->with('status', 'Schedule Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('doctor_schedule')->where('id', $id)->delete();
        return redirect(route('schedule_timing'))->with('status', 'Schedule Deleted Successfully');
    }
}
