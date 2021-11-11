<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Roomaster;

class RoomasterController extends Controller
{
    public function index()
    {
        $roomasters = Roomaster::all();

        return view('roomaster.index',['roomasters' => $roomasters]);
    }
}
