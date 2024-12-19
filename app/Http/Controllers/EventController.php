<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        return view('pages.event');
    }

    public function detailevent(){
        return view('pages.detail-event');
    }


}
