<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reserve;

class ReserveController extends Controller
{
    public function index()
    {
        $reserves = Reserve::all();

        return view('reserve.index',['reserves' => $reserves]);
    }

}
