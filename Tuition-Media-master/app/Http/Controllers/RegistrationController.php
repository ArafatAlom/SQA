<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Registration;

class RegistrationController extends Controller
{
    //function for inserting registration details in the database
    function registrationData(Request $req)
    {
        //variable for registrations table in databse

        $registration= new Registration;
        $registration->user_type=$req->user_type;
        $registration->f_name=$req->f_name;
        $registration->l_name=$req->l_name;
        $registration->email=$req->email;
        $registration->password=$req->password;
        $registration->c_password=$req->c_password;
        $registration->gender=$req->gender;
        $registration->phone_no=$req->phone_no;
        $registration->institution=$req->institution;
        $registration->address=$req->address;

        //checking 'password' and 'confirm password' is equal or not
        if($registration->password==$registration->c_password){
            $registration->save();
            echo '<script>alert("Registration Succesfull!!!!!!!")</script>';//inline javascript with php
            return  view('index');
        }
        else{
            echo '<script>alert("Password does not match!!!!!!!")</script>';//inline javascript with php
            return  view('register');
        }
    }
}
