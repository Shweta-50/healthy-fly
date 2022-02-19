<?php

namespace App\Http\Controllers\Patient;

use App\Http\Controllers\Controller;
use App\Models\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PatientInvoiceViewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $invoices = Payment::where('pid', Auth::user()->id)->get();
        // return view('Frontend.patient.invoice_view', ['invoices' => $invoices]);
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
        $invoice_amount = $invoice->amount;
        $invoice_created_at = $invoice->created_at;
        return view('Frontend.patient.invoice_view', ['invoice_pname' => $invoice_pname, 'invoice_email' => $invoice_email, 'invoice_payment_id' => $invoice_payment_id, 'invoice_doc_name' => $invoice_doc_name, 'invoice_amount' => $invoice_amount, 'invoice_created_at' => $invoice_created_at]);
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
