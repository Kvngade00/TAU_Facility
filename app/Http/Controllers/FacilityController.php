<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FacilityController extends Controller
{

    public function index()
    {
        return view('hostel');
    }

    public function maleHostel()
    {
        return view('malehostel');
    }

    public function femaleHostel()
    {
        return view('femalehostel');
    }

    public function faculty()
    {
        return view('faculty');
    }

    public function cafeteria()
    {
        return view('cafeteria');
    }

    public function schoolClinic()
    {
        return view('schoolclinic');
    }
}
