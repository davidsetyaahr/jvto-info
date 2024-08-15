<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RedirectController extends Controller
{
    function index(){
        $data['url'] = "https://javavolcano-touroperator.com/";
        return view('redirect',$data);
    }
}
