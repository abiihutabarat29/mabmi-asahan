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
                        $status = '<center><span class="badge badge-warning text-white">konfirmasi</span></center>';
                    } elseif ($data->status == 2) {
                        $status = '<center><span class="badge badge-success">diterima</span></center>';
                    } else {
                        $status = '<center><span class="badge badge-danger">ditolak</span></center>';
                    }
                    return $status;
                })
                ->addColumn('action', function ($row) {
                    $btn = '<a href="javascript:void(0)" data-toggle="tooltip"  data-id="' . $row->id . '" data-original-title="Edit" class="edit btn btn-primary btn-xs editRematri"><i class="fas fa-edit"></i></a>';
                    $btn = $btn . ' <a href="javascript:void(0)" data-toggle="tooltip"  data-id="' . $row->id . '" data-original-title="Delete" class="btn btn-danger btn-xs mr-1 deleteRematri"><i class="fas fa-trash"></i></a>';
                    return $btn;
                })
                ->rawColumns(['registrasi', 'status', 'action'])
                ->make(true);
        }
        return view('admin.anggota.data', compact('menu'));
    }
}
