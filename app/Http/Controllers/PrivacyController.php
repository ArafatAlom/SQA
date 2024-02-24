<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RequestMake;

class PrivacyController extends Controller
{
   function addData(Request $req ){
       $data = new RequestMake;

       // Save the data to the database
       $data->save();

       // Redirect to the specified view (assuming it's named index)
       return view("index");
   }
}

