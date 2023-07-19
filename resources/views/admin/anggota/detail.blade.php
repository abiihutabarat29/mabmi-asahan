@extends('admin.layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>{{ $menu }}</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active">{{ $menu }}</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="card">
            <div class="card-body">
                <div class="col-12 col-md-12 col-lg-8 order-2 order-md-1">
                    <div class="row">
                        <div class="col-12">
                            <div class="post">
                                <div class="col-md-12">
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <h5>
                                                Detail Profil
                                            </h5>
                                            <hr>
                                            <table>
                                                <tr>
                                                    <td style="width: 6%">
                                                        NIK
                                                    </td>
                                                    <td style="width: 1%">
                                                        :
                                                    </td>
                                                    <td style="width: 20%">
                                                        {{ $anggota->nik }}
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 6%">
                                                        Nama
                                                    </td>
                                                    <td style="width: 1%">
                                                        :
                                                    </td>
                                                    <td style="width: 20%">
                                                        {{ $anggota->nama }}
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 6%">
                                                        Tempat/Tgl Lahir
                                                    </td>
                                                    <td style="width: 1%">
                                                        :
                                                    </td>
                                                    <td style="width: 20%">
                                                        {{ $anggota->tempat_lahir }}, {{ $anggota->tgl_lahir }}
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 6%">
                                                        Jenis Kelamin
                                                    </td>
                                                    <td style="width: 1%">
                                                        :
                                                    </td>
                                                    <td style="width: 20%">
                                                        {{ $anggota->gender }}
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 6%">
                                                        Alamat
                                                    </td>
                                                    <td style="width: 1%">
                                                        :
                                                    </td>
                                                    <td style="width: 20%">
                                                        {{ $anggota->alamat }}
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 6%">
                                                        Agama
                                                    </td>
                                                    <td style="width: 1%">
                                                        :
                                                    </td>
                                                    <td style="width: 20%">
                                                        {{ $anggota->agama }}
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 6%">
                                                        Suku
                                                    </td>
                                                    <td style="width: 1%">
                                                        :
                                                    </td>
                                                    <td style="width: 20%">
                                                        {{ $anggota->suku }}
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 6%">
                                                        Nomor HP / WhatsApp
                                                    </td>
                                                    <td style="width: 1%">
                                                        :
                                                    </td>
                                                    <td style="width: 20%">
                                                        {{ $anggota->nohp }}
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 6%">
                                                        Email
                                                    </td>
                                                    <td style="width: 1%">
                                                        :
                                                    </td>
                                                    <td style="width: 20%">
                                                        {{ $anggota->email }}
                                                    </td>
                                                </tr>
                                            </table>
                                            <hr>
                                            <h5>
                                                Dokumen
                                            </h5>
                                            <table>
                                                <tr>
                                                    <td style="width:10%">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 4%">
                                                        Kartu Tanda Penduduk
                                                    </td>
                                                    <td style="width: 1%">
                                                        :
                                                    </td>
                                                    <td style="width: 20%">
                                                        <img src="{{ url('storage/foto-ktp/' . $anggota->ktp) }}"
                                                            alt="Image Profile" class="img-thumbnail rounded"
                                                            width="120px">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 4%">
                                                        Pas Photo
                                                    </td>
                                                    <td style="width: 1%">
                                                        :
                                                    </td>
                                                    <td style="width: 20%">
                                                        <img src="{{ url('storage/foto-anggota/' . $anggota->foto) }}"
                                                            alt="Image Profile" class="img-thumbnail rounded"
                                                            width="120px">
                                                    </td>
                                                </tr>
                                            </table>
                                            <hr>
                                        </div>
                                        <div class="card-footer">
                                            <a href="{{ route('anggota.index') }}"
                                                class="btn btn-secondary btn-sm text-white">
                                                Kembali</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
