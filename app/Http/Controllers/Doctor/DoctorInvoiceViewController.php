<?php

namespace App\Http\Controllers\Doctor;

use App\Http\Controllers\Controller;
use App\Models\Payment;
use CreatePaymentsTable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DoctorInvoiceViewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
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
        $invoice = Payment::where('id', $id)->first();
        $invoice_pname = $invoice->pname;
        $invoice_email = $invoice->email;
        $invoice_doc_name = $invoice->doc_name;
        $invoice_payment_id = $invoice->payment_id;
        $invoice_created_at = $invoice->created_at;
        $invoice_amount = $invoice->amount;
        return view('Frontend.doctor.doct_invoice_view', ['invoice_pname' => $invoice_pname, 'invoice_email' => $invoice_email, 'invoice_payment_id' => $invoice_payment_id, 'invoice_doc_name' => $invoice_doc_name, 'invoice_created_at' => $invoice_created_at, 'invoice_amount' => $invoice_amount]);
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
