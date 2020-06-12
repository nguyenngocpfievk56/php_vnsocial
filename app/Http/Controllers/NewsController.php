<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\News;

class NewsController extends Controller
{
  public function index() {
    $news = News::all();
    return view("news.index", ['news' => $news]);
  }

  public function add() {
    return view("news.add");
  }

  public function store(Request $request) {
    $news = new News();
    $news->title = $request->title;
    $news->content = $request->content;
    $news->save();
    die();
  }
}
