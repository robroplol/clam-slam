<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\BandMember;


class MainController extends Controller
{
    public function index()
    {
        $bandmembers = Bandmember::all();
        return view('welcome', ['bandmembers' => $bandmembers]);
    }
}
