<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Anggota;

class FrontController extends Controller
{
    public function index()
    {
        return view('front.portal');
    }
    public function web()
    {
        $anggota =  Anggota::where('status', 2)->get();
        $jumlah_anggota =  Anggota::where('status', 2)->count();
        return view('front.index', compact('anggota', 'jumlah_anggota'));
    }
}
