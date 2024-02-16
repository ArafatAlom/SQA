<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RequestMake;

class RequestController extends Controller
{
   function addData(Request $req ){
       $data = new RequestMake ;

       $data->gmail = $req->gmail ;
       $data->private_or_batch = $req->private_or_batch ;
       $data->subject = $req->subject ;
       $data->no_of_student = $req->no_of_student ;
       $data->address = $req->address ;
       $data->phone_no = $req->phone_no ;
       $data->teacher_id = $req->teacher_id ;
       $data->opinion = $req->opinion ;

       $data->save( ) ;

       return view("index");
   }
}
