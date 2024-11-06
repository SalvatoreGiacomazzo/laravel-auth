<?php

namespace App\Http\Controllers;

use App\Models\Wanted;

use Illuminate\Http\Request;

class WantedController extends Controller
{
    public function index()
    {
        $wantedList = Wanted::all();
        $wantedList = Wanted::paginate(10);
        return view('wanted.home', compact('wantedList'));
    }
    public function show($id)
    {

        $wanted = Wanted::findOrFail($id);


        return view('wanted.show', compact('wanted'));
    }
}
