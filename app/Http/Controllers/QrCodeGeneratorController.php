<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\QrCodeGeneratorController;

class QrCodeGeneratorController extends Controller
{
    //
    public function index()
    {
        return view('qr-code');
    }
}
