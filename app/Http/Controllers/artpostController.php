<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class artpostController extends Controller
{
    public function index()
    {
        return view('artpost');
    }
}
