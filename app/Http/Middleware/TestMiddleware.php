<?php

namespace App\Http\Middleware;

use Closure;
use App\User;

class TestMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        // $request->name = "HONG";

        $currentUser = $request->session()->get('user');
        if (!$currentUser) {
            $token = !empty($_COOKIE['_ngoc_token']) ? $_COOKIE['_ngoc_token'] : null;
            if ($token) {
                $currentUser = User::where("remember_token", $token)->first();
                if ($currentUser) {
                    if (empty($request->session()->get('checkedOtp'))) {
                        return redirect("/login");
                    }
                    $request->session()->put('user', $currentUser);
                } else {
                    return redirect("/login");
                }
            } else {
                return redirect("/login");
            }
        }
        $username = $currentUser ? $currentUser->name : null;
        $request->username = $username;

        $reponse = $next($request); //->   nhay vao controller va nhan ve response

        // $reponse->setContent("ngoc xin chao cac ban");

        return $reponse;
    }
}
