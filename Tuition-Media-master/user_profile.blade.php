<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $req)
    {
        //
        $member=new Member;
        $member->firstName=$req->firstName;
        $member->lastName=$req->lastName;
        $member->gender=$req->gender;


        $member->unit=$req->unit;
        if($req->hasfile('profileImage'))
        {
            $file=$req->file('profileImage');
            $extention=$file->getClientOriginalExtension();
            $filename=time().'.'.$extention;
            $file->move('uploads/students/',$filename);
            $member->profileImage=$filename;
           // $req->profileImage=$filename;

        }
        //$member->profileImage=$req->profileImage;
        //$req->profileImage->store('Profile');

        //$member->signatureImage=$req->signatureImage;
        //$req->signatureImage->store('Profile');

        if($req->hasfile('signatureImage'))
        {
            $file=$req->file('signatureImage');
            $extention=$file->getClientOriginalExtension();
            $filename=time().'.'.$extention;
            $file->move('uploads/aplicants/',$filename);
            $member->signatureImage=$filename;
            //$req->signatureImage=$filename;
        }

        $member->email=$req->email;
        $member->phoneNo=$req->phoneNo;
        $member->password=$req->password;
        if($member->hscReg==$member->sscReg)
        {
           $member->save();
         return view('information')->with('req',$member);

       }
       else if($member->hscReg!=$member->sscReg)
       {
        return view('error');
       }

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
        //
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
