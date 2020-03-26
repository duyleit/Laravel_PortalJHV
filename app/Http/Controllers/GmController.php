<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GmController extends Controller
{
    public function index()
    {
        return view('gm.index');
    }
}
