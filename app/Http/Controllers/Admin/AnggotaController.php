<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Anggota;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Yajra\Datatables\Datatables;

class AnggotaController extends Controller
{
    public function index(Request $request)
    {
        $menu = 'Daftar Anggota';
        if ($request->ajax()) {
            $data = Anggota::get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('registrasi', function ($data) {
                    return '<center>' . Carbon::parse($data->created_at)->translatedFormat('l, d F Y') . '</center>';
                })
                ->addColumn('status', function ($data) {
                    if ($data->status == 1) {
                        $status = '<center><span class="badge badge-warning text-white">belum diterima</span></center>';
                    } elseif ($data->status == 2) {
                        $status = '<center><span class="badge badge-success">diterima</span></center>';
                    } else {
                        $status = '<center><span class="badge badge-danger">ditolak</span></center>';
                    }
                    return $status;
                })
                ->addColumn('action', function ($row) {
                    if ($row->status == 1) {
                        $btn = '<center><a class="btn btn-primary btn-xs" href="' . route('anggota.verifikasi', Crypt::encryptString($row->id)) . '"><i class="fa fa-check-double"></i> Verifikasi</span></a></center>';
                    } else {
                        $btn = '<center><a class="btn btn-info btn-xs" href="' . route('anggota.detail', Crypt::encryptString($row->id)) . '"><i class="fa fa-user"></i> Profil</span></a></center>';
                    }
                    return $btn;
                })
                ->rawColumns(['registrasi', 'status', 'action'])
                ->make(true);
        }
        return view('admin.anggota.data', compact('menu'));
    }
    public function verifikasi($id)
    {
        $anggota = Anggota::find(Crypt::decryptString($id));
        $menu = 'Verifikasi Calon Anggota';
        return view('admin.anggota.verifikasi', compact('menu', 'anggota'));
    }
    public function terima($id)
    {
        $anggota = Anggota::find($id);
        $anggota->update(['status' => '2']);
        return response()->json(['success' => 'Anggota Berhasil diterima']);
    }
    public function detail($id)
    {
        $anggota = Anggota::find(Crypt::decryptString($id));
        $menu = 'Profil Anggota';
        return view('admin.anggota.detail', compact('menu', 'anggota'));
    }
}
