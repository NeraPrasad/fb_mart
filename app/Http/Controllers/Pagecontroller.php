<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Pagecontroller extends Controller
{
    public function indexorderReq(){
        return view('orderReq');
    }
}
