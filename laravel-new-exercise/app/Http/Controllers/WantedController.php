<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WantedController extends Controller
{
    public function index()
    {

        return view('wanted.home');
    }
}
