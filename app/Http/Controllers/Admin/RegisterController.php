<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Anggota;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class RegisterController extends Controller
{
    public function index()
    {
        return view('front.register');
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama'              => 'required|max:255',
            'tempat_lahir'      => 'required',
            'tgl_lahir'         => 'required',
            'nik'               => 'required|max:16|min:16|unique:anggota,nik',
            'email'             => 'required|email|unique:anggota,email',
            'nohp'              => 'required|numeric',
            'agama'             => 'required',
            'suku'              => 'required',
            'gender'            => 'required',
            'alamat'            => 'required|max:255',
            'ktp'               => 'required|image|mimes:jpeg,png,jpg|max:1024',
            'foto'              => 'required|image|mimes:jpeg,png,jpg|max:1024',
        ], [
            'nama.required'             => 'Nama harus diisi.',
            'tempat_lahir.required'     => 'Tempat Lahir harus diisi.',
            'tgl_lahir.required'        => 'Tanggal Lahir harus diisi.',
            'nik.required'              => 'NIK harus diisi.',
            'nik.numeric'               => 'NIK harus angka.',
            'nik.max'                   => 'NIK maksimal 16 digit.',
            'nik.min'                   => 'NIK minimal 16 digit.',
            'email.required'            => 'Email harus diisi.',
            'email.email'               => 'Penulisan email tidak benar.',
            'email.unique'              => 'Email sudah terdaftar.',
            'nohp.required'             => 'Nomor Handphone harus diisi.',
            'nohp.numeric'              => 'Nomor Handphone harus angka.',
            'agama.required'            => 'Agama harus dipilih.',
            'suku.required'             => 'Suku harus dipilih.',
            'alamat'                    => 'Alamat harus diisi.',
            'gender'                    => 'Jenis Kelamin Harus dipilih.',
            'ktp'                       => 'KTP harus diupload.',
            'ktp.image'                 => 'KTP harus gambar.',
            'ktp.mimes'                 => 'KTP harus jpeg,png,jpg.',
            'ktp.max'                   => 'KTP maksimal 1MB.',
            'foto'                      => 'Foto harus diupload.',
            'foto.image'                => 'Foto harus gambar.',
            'foto.mimes'                => 'Foto harus jpeg,png,jpg.',
            'foto.max'                  => 'Foto maksimal 1MB.',
        ]);
        $ktp = $request->file('ktp');
        if ($ktp != null) {
            $fileNameKtp = $ktp->hashName();
            $ktp->storeAs('public/foto-ktp/', $fileNameKtp);
        }
        $img = $request->file('foto');
        if ($img != null) {
            $fileName = $img->hashName();
            $img->storeAs('public/foto-anggota/', $fileName);
        }
        $validatedData['ktp'] = $fileNameKtp;
        $validatedData['foto'] = $fileName;
        $validatedData['status'] = 1;
        $anggota = Anggota::create($validatedData);

        Alert::success('Sukses', 'Register successfully.');

        return back();
    }
}
