<?php

namespace App\Http\Controllers;

use App\Models\Donatur;
use Illuminate\Http\Request;

class DonaturController extends Controller
{
    public function index(){
        $donatur = Donatur::all();
        // dd($donatur);
        return view('donatur.daftar-donatur', compact('donatur'));
    }


}
