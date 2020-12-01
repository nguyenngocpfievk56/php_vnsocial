<?php

namespace App\Http\Controllers;

use App\Models\Shop;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Mail\AuthCode;

class TestMailController extends Controller
{
  public function otp() {
    return view('otp');
  }

  public function checkOtp() {
    Mail::to("ngocemail@abc.com")->send(new AuthCode());
    echo "thuc hien gui mail";
  }
}
