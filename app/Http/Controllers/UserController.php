<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //

    function user_profile(){

        return view('user.user_profile');
    }
}
