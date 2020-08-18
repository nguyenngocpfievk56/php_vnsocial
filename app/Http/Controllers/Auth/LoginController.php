<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use App\User;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function redirectToProvider()
    {
        return Socialite::driver('facebook')->redirect();
    }

    public function handleProviderCallback()
    {
        $user = Socialite::driver('facebook')->user();

        $userInfo = User::where('facebook_id', $user->id)->first();
        $randomPassword = "12312sdafasfkjashfskdf9873453532erwerwe52345435";

        if (!$userInfo) {
            $userInfo = new User();
            $userInfo->name = $user->name;
            $userInfo->email = $user->email;
            $userInfo->password = Hash::make($randomPassword);
            $userInfo->facebook_id = $user->id;
            $userInfo->facebook_access_token = $user->token;
            $userInfo->avatar = $user->avatar;
        } else {
            $userInfo->name = $user->name;
            $userInfo->email = $user->email;
            $userInfo->facebook_access_token = $user->token;
            $userInfo->avatar = $user->avatar;
        }

        $userInfo->save();

        if (Auth::attempt(['email' => $userInfo->email, 'password' => $randomPassword])) {
            return redirect('/');
        }
    }
}
