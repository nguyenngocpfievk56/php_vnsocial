<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NewsController extends Controller
{
  public function index() {
    return view("news.index");
  }

  public function add() {
    return view("news.add");
  }

  public function store(Request $request) {
    echo "xin chao";
    die();
  }
}
