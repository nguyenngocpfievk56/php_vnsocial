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
    $news->img = "https://www.google.com/url?sa=i&url=https%3A%2F%2Fthuthuatnhanh.com%2Fhinh-anh-thien-nhien-phong-canh-dep%2F&psig=AOvVaw3X74G51xFWmyuLVt1zuxjZ&ust=1592661953959000&source=images&cd=vfe&ved=0CAIQjRxqFwoTCOCJr6KGjuoCFQAAAAAdAAAAABAD";
    $news->title = $request->title;
    $news->content = $request->content;
    $news->save();
    die();
  }

  public function detail(Request $request, News $id, News $id2) {
    echo '<pre>';
    print_r($request->id->img);
    echo '</pre>';
    die();
  }

  public function delete(Request $request) {
    $news = News::find($request->id);
    $news->delete();
    die();
  }
}
