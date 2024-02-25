<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payment;

/**
 * PaymentController Class
 *
 * @package App\Http\Controllers
 */
class PaymentController extends Controller
{
    /**
     * Store payment information in the database.
     *
     * @param  Request  $req
     * @return \Illuminate\View\View
     */
    function payData(Request $req)
    {
        // Instantiate Payment model
        $payment = new Payment;

        // Assign values from request to the Payment model properties
        $payment->name = $req->name;
        $payment->email = $req->email;
        $payment->address = $req->address;
        $payment->teacher_id = $req->teacher_id;
        $payment->gateway = $req->gateway;
        $payment->pay_no = $req->pay_no;
        $payment->trnx = $req->trnx;
        $payment->amount = $req->amount;

        // Save the payment information
        $payment->save();

        // Display success alert using inline JavaScript
        echo '<script>alert("Payment Successful!")</script>';

        // Redirect to the index view
        return view('index');
    }
}
