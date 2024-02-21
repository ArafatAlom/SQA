<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RequestMake;

class RequestController extends Controller
{
    // Function to add data from the request
    function addData(Request $req){
        // Create a new instance of the RequestMake model
        $data = new RequestMake;

        // Assign values from the request to the model properties
        $data->gmail = $req->gmail;
        $data->private_or_batch = $req->private_or_batch;
        $data->subject = $req->subject;
        $data->no_of_student = $req->no_of_student;
        $data->address = $req->address;
        $data->phone_no = $req->phone_no;
        $data->teacher_id = $req->teacher_id;
        $data->opinion = $req->opinion;

        // Save the data to the database
        $data->save();

        // Return view for index page after data is saved
        return view("index");
    }
}

