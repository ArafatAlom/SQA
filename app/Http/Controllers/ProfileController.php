<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;

class ProfileController extends Controller
{
    //function for inserting profile information
    function profileData(Request $req)
    {
        //variable for profile table in database
        $profile= new Profile;
        $profile->name=$req->name;
        $profile->user_id=$req->user_id;
        $profile->email=$req->email;
        $profile->gender=$req->gender;
        $profile->contact_no=$req->contact_no;
        $profile->address=$req->address;
        $profile->change_password=$req->change_password;
        $profile->old_password=$req->old_password;
        $profile->new_password=$req->new_password;
        $profile->confirm_password=$req->confirm_password;
        $profile->save();

        
        echo '<script>alert("Profile Update Succesfull!!!!!!!")</script>'; //inline javascript for alert
        
        return view('index');


    }
}

