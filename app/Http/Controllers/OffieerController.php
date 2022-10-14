<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OffieerController extends Controller
{
    //

    function offieer_profile(){

        return view('offieer.offieer_profile');
    }
    function offieer_record(){

        return view('offieer.offieer_record');
    }
}
