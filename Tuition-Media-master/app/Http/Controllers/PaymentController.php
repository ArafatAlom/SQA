<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payment;

class PaymentController extends Controller
{
    //function for inserting payment information
    function payData(Request $req)
    {
        //variable for payment table in databse
        $payment= new Payment;
        $payment->name=$req->name;
        $payment->email=$req->email;
        $payment->address=$req->address;
        $payment->teacher_id=$req->teacher_id;
        $payment->gateway=$req->gateway;
        $payment->pay_no=$req->pay_no;
        $payment->trnx=$req->trnx;
        $payment->amount=$req->amount;
        $payment->save();

        
        echo '<script>alert("Payment Succesfull!!!!!!!")</script>'; //inline javascript for alert
        
        return view('index');


    }
}
