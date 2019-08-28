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
    public function get_user_profile()
    {
        $detalle_user = DB::table('detalle_user')->where('detalle_user.iduser', '=', Auth::user()->iduser)->first();
        return view('pages.profile.user', compact('detalle_user'));
    }
}
