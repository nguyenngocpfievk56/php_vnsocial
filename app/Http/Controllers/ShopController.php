<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function postForm(Request $request){
        if($request->hasFile('file'))
        {
            $file = $request->file('file');
            if($file->getClientOriginalExtension('file') == "jpg" || $file->getClientOriginalExtension('file') == "png")
            {
                $filename = $file->getClientOriginalName('file');
                echo "đã lưu file:".$filename;
                $file->move('images', $filename);
            }
            else{
                echo "không được đăng tệp này";
            }
        }
        else{
            echo "chưa có file";
        }
    }
}
