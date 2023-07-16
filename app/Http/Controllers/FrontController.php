<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Anggota;

class FrontController extends Controller
{
    public function index()
    {
        $anggota =  Anggota::get();
        return view('front.index', compact('anggota'));
    }
}
