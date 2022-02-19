<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payment;
use App\Models\User;
use App\Models\PatientAppointment;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Razorpay\Api\Api;
use Illuminate\Support\Facades\DB;

//RAZORPAY_KEY=rzp_test_vgXUbtHRVFIrY6
//RAZORPAY_SECRET=F9juKGYTGknoUa3W9SbqtC0i

class MainController extends Controller
{
    public function index()
    {
        return view('payment');
    }

    public function success()
    {

        return view('success');
    }

    public function payment(Request $request)
    {

        $name = $request->input('pname');
        $email = $request->input('email');
        $phone = $request->input('phone');
        $amount = $request->input('amount');
        $doc_id = $request->input('doc_id');
        $doc_name = $request->input('doc_name');


        $api = new Api('rzp_test_vgXUbtHRVFIrY6', 'F9juKGYTGknoUa3W9SbqtC0i');
        $order  = $api->order->create(array('receipt' => '123', 'amount' => $amount * 100, 'currency' => 'INR')); // Creates order
        $orderId = $order['id'];

        $user_pay = new Payment();

        $user_pay->pid = Auth::user()->id;
        $user_pay->pname = $name;
        $user_pay->email = $email;
        $user_pay->phone = $phone;
        $user_pay->amount = $amount;
        $user_pay->doc_id = $doc_id;
        $user_pay->doc_name = $doc_name;

        $user_pay->payment_id = $orderId;
        $user_pay->save();

        // $data = array(
        //    'order_id' => $orderId,
        //   'amount' => $amount
        //);
        Session::put('order_id', $orderId);
        Session::put('amount', $amount);
        return redirect('/user');
    }

    public function pay(Request $request)
    {
        $data = $request->all();
        $user = Payment::where('payment_id', $data['razorpay_order_id'])->first();
        $user->payment_done = true;
        $user->razorpay_id = $data['razorpay_payment_id'];

        $api = new Api('rzp_test_vgXUbtHRVFIrY6', 'F9juKGYTGknoUa3W9SbqtC0i');
        try {
            $attributes = array(
                'razorpay_signature' => $data['razorpay_signature'],
                'razorpay_payment_id' => $data['razorpay_payment_id'],
                'razorpay_order_id' => $data['razorpay_order_id']
            );
            $order = $api->utility->verifyPaymentSignature($attributes);
            $success = true;
        } catch (SignatureVerificationError $e) {
            $succes = false;
        }


        if ($success) {
            $user->save();

            return redirect('/success');
        } else {

            return redirect()->route('error');
        }
    }

    public function error()
    {
        return view('error');
    }
}
