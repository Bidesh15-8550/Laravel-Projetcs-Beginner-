<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{
    function MyName($firstName, $MiddleName, $lastName){

       return view('DemoView',['firstkey'=>$firstName]); //associative array
    }
}
