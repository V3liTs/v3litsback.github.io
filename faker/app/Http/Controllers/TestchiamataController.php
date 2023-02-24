<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestchiamataController extends Controller
{
    public function index (Request $request)
    {
        return view ('lista.show'); 
    }
}
