<?php

namespace App\Http\Controllers;
use App\Models\AdminModel;
use Illuminate\Http\Request;

class perusahaan extends Controller
{
    public function __construct() 
    {
        $this->middleware('auth');
    }

    public function input(){
        return view('inputlowongan');
    }
}
