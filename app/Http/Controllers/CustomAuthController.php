<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Mail\AuthCode;
use Carbon\Carbon;

use App\User;
use App\Models\Otp;

class CustomAuthController extends Controller
{
  public function login(Request $request) {
    return view('auth.login');
  }

  public function doLogout(Request $request) {
    $request->session()->forget('user');
    setcookie('_ngoc_token', null);
    return redirect('/');
  }

  public function doLogin(Request $request) {
    $email = $request->email;
    $password = Hash::make($request->password);
    $user = User::where('email', $email)->first();
    if ($user) {
      $otp = new Otp();
      $otp->otp = mt_rand(100000, 999999);
      $otp->user_id = $user->id;
      $otp->expire = Carbon::now()->addMinute(30);
      $otp->created_at = Carbon::now();
      $otp->updated_at = Carbon::now();
      $otp->save();

      Mail::to($user->email)->send(new AuthCode($user, $otp));
      $request->session()->put('current_otp_user_id', $user->id);
    }

    return redirect('/auth/otp');
  }

  public function sendOtp() {
    Mail::to("ngocemail@abc.com")->send(new AuthCode());
    echo "thuc hien gui mail";
  }

  public function authOtp() {
    return view('otp');
  }

  public function checkOtp(Request $request) {
    $userId = $request->session()->get('current_otp_user_id');
    if ($userId) {
      $otpObj = Otp::where('otp', $request->otp)->where('user_id', $userId)->first();
      if ($otpObj) {
        // login user
        // if ($request->remember) {
        //   $token = "adskfhaskdjhfkasdhfiqwhenfmsdkjghkajsdhfkdsajhfkjadshfkashdfkjasdhfasdf";
        //   $user->remember_token = $token;
        //   setcookie('_ngoc_token', $token);
        // }
        // $request->session()->put('user', $user);
      } else {
        // loi
      }
    } else {
      // loi
    }
    die();
  }
}
