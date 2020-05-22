<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Post extends Controller
{
    public function index(Request $request) {
        $a = $request->stn;
        $b = $request->sth;
        $c = $a + $b;
        return view('post', [ "stn" => $a, "sth" => $b, "t2s" => $c ]);
    }
}
