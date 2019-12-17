<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class TestController extends Controller
{
    //
    public function samlee(Request $request)
    {
        $res = [];
        foreach($request->all() as $key => $val){
            if(is_numeric($val))
            {
                $res[$key] = $val * 2;
            } else {
                $res[$key] = $val . '----'.$val;
            }
        }
        return response()->json($res);
    }
}
