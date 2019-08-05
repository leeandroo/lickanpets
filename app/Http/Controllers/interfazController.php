<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;

class interfazController extends Controller
{
    public function get_landing_page()
    {
        return view('pages.landing');
    }
}
