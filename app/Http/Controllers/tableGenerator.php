<?php

namespace App\Http\Controllers;
use App\Models\registration;

use Illuminate\Http\Request;

class tableGenerator extends Controller
{
    function getData(){

        $allUser=registration::get()->all();

        return view('home.home',['data'=>$allUser]);
    }
}
