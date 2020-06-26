<?php

namespace App\Http\Controllers;

use App\Models\Shop;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ShopController extends Controller
{
    protected $shop;

    public function __construct(Shop $shop)
    {
        $this->shop = $shop;
    }
    public function index(){
        $shops = Shop::get();
        return view('shop/index',['shops'=>$shops]);
    }

    public function detail($id){
        $shop = $this->shop->whereId($id)->first();
        return view('shop/detail', compact('shop'));
    }

    public function create(){
        return view('shop.create');
    }

//    public function store(Request $request){
//        $data = $request->only([
//            'name',
//            'price',
//            'description'
//        ]);
//        $data['user_id'] = Auth::user()->id;
//        $this->shop->create($data);
//        return view('shop.index');
//    }
}
