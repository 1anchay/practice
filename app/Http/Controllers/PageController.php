<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
public function about()
{
    return view('onas');
}

public function policy()
{
    return view('politika');
}
public function agreement()
{
    return view('agreement');
}
}
