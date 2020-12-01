<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;

use App\User;

class NewsController extends Controller
{
  public function index(Request $request) {
    $news = News::all();
    return view("news.index", ['news' => $news]);
  }

  public function add(Request $request) {
    return view("news.add");
  }

  public function products() {
    // lay du lieu san pham ra
    $data = \json_decode($this->_callApi("GET", "http://192.168.36.107/api/get-products"));
    // dua du lieu vao view
    return view("news.products", ["data" => $data]);
  }

  private function _callApi($method, $url) {
    $curl=curl_init($url);
    if ($method == "POST") {
      curl_setopt($curl,CURLOPT_POST, TRUE);
    }
    curl_setopt($curl,CURLOPT_RETURNTRANSFER, TRUE);
    curl_setopt($curl,CURLOPT_COOKIEJAR,      'cookie');
    curl_setopt($curl,CURLOPT_COOKIEFILE,     'tmp');
    curl_setopt($curl,CURLOPT_FOLLOWLOCATION, TRUE);
    $output= curl_exec($curl);
  }

  public function getProducts() {
    $data = [
      "May xay sinh to",
      "Quat dieu hoa",
      "Noi Com Dien",
      "May Hut Bui"
    ];
    return $data;
  }

  public function store(Request $request) {
    $cover = $request->file('cover');
    $extension = $cover->getClientOriginalExtension();
    $userId = 1;
    $filename = $userId . rand() . time() . '.' .$extension;
    Storage::disk('public')->put($filename,  File::get($cover));

    $news = new News();
    $news->img = 'storage/' . $filename;
    $news->title = $request->title;
    $news->c_title = $this->convert_vi_to_en($request->title);

    $news->content = $request->content;
    $news->c_content = $this->convert_vi_to_en($request->content);
    $news->save();
    return redirect('news');
  }

  public function detail(News $news) {
    $latest = News::limit(3)->get();
    return view("news.detail", ['news' => $news, 'latest' => $latest]);
  }

  public function delete(Request $request) {
    $news = News::find($request->id);
    $news->delete();
    die();
  }

  private function convert_vi_to_en($str) {
    $str = preg_replace("/(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ)/", "a", $str);
    $str = preg_replace("/(è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ)/", "e", $str);
    $str = preg_replace("/(ì|í|ị|ỉ|ĩ)/", "i", $str);
    $str = preg_replace("/(ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ)/", "o", $str);
    $str = preg_replace("/(ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ)/", "u", $str);
    $str = preg_replace("/(ỳ|ý|ỵ|ỷ|ỹ)/", "y", $str);
    $str = preg_replace("/(đ)/", "d", $str);
    $str = preg_replace("/(À|Á|Ạ|Ả|Ã|Â|Ầ|Ấ|Ậ|Ẩ|Ẫ|Ă|Ằ|Ắ|Ặ|Ẳ|Ẵ)/", "A", $str);
    $str = preg_replace("/(È|É|Ẹ|Ẻ|Ẽ|Ê|Ề|Ế|Ệ|Ể|Ễ)/", "E", $str);
    $str = preg_replace("/(Ì|Í|Ị|Ỉ|Ĩ)/", "I", $str);
    $str = preg_replace("/(Ò|Ó|Ọ|Ỏ|Õ|Ô|Ồ|Ố|Ộ|Ổ|Ỗ|Ơ|Ờ|Ớ|Ợ|Ở|Ỡ)/", "O", $str);
    $str = preg_replace("/(Ù|Ú|Ụ|Ủ|Ũ|Ư|Ừ|Ứ|Ự|Ử|Ữ)/", "U", $str);
    $str = preg_replace("/(Ỳ|Ý|Ỵ|Ỷ|Ỹ)/", "Y", $str);
    $str = preg_replace("/(Đ)/", "D", $str);
    return $str;
  }
}
