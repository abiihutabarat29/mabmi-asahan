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
                                                        @if ($anggota->gender == 'L')
                                                            Laki-laki
                                                        @elseif ($anggota->gender == 'P')
                                                            Perempuan
                                                        @endif
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
                                            <button id="konfirmasi" type="button" data-toggle="modal"
                                                class="btn btn-success btn-sm text-white"><i class="fa fa-check"></i>
                                                Terima</button>
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
@section('modal')
    {{-- Modal Terima --}}
    <div class="modal fade" id="ajaxModelkonfirm">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="modal-title" id="modelHeadingKonfirm">
                        </h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                </div>
                <form id="konfirmForm" name="konfirmForm" class="form-horizontal">
                    @csrf
                    <div class="modal-body">
                        <center>
                            <h6 class="text-muted">::KEPUTUSAN INI TIDAK DAPAT DIUBAH KEMBALI::</h6>
                            <br>
                        </center>
                        <center>
                            <h6>Apakah Profil dari <span class="text-danger">{{ $anggota->nama }} </span>sudah sesuai
                                dengan ketentuan ?</h6>
                        </center>
                        <input type="hidden" id="anggota_id" name="anggota_id" value="{{ $anggota->id }}">
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Kembali</button>
                        <button type="submit" class="btn btn-primary btn-sm text-white" id="konfirmBtn"><i
                                class="fa fa-check"></i>
                            Konfirmasi</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        $(function() {
            $.ajaxSetup({
                headers: {
                    "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
                },
            });
            $("#konfirmasi").click(function() {
                $("#konfirmForm").trigger("reset");
                $("#modelHeadingKonfirm").html("Konfirmasi");
                $("#ajaxModelkonfirm").modal("show");
            });
            $("#konfirmBtn").click(function(e) {
                e.preventDefault();
                $(this).html(
                    "<span class='spinner-border spinner-border-sm'></span><span class='visually-hidden'><i> memproses...</i></span>"
                );
                var anggota_id = $("#anggota_id").val();
                $.ajax({
                    data: $("#konfirmForm").serialize(),
                    url: "{{ url('daftar-anggota/terima') }}" + "/" + anggota_id,
                    type: "POST",
                    dataType: "json",
                    success: function(data) {
                        if (data.errors) {
                            $('.alert-danger').html('');
                            $.each(data.errors, function(key, value) {
                                $('.alert-danger').show();
                                $('.alert-danger').append('<strong><li>' +
                                    value +
                                    '</li></strong>');
                                $(".alert-danger").fadeOut(5000);
                                $("#konfirmBtn").html(
                                    "<i class='fa fa-check'></i> Konfirmasi");
                            });
                        } else {
                            alertSuccess(data.success);
                            $("#konfirmBtn").html(
                                "<i class='fa fa-check'></i> Konfirmasi");
                            $('#ajaxModelkonfirm').modal('hide');
                            setTimeout(() => {
                                window.location.href = "{{ url('/daftar-anggota') }}"
                            }, 1500);
                        }
                    },
                });
            });
        });
    </script>
@endsection
