<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class testController extends Controller
{
    //
    public function test(){
        return view("welcome");
    }

    public function qwerty($id){
        return view("qwerty")->with("id",$id);
        return view("qwerty",compact("id"));
    }
}
