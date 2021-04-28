<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ewbController extends Controller
{
    public function index()
    {
        return view('website.home');
    }
}
