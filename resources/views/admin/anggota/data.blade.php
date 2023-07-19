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
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped data-table">
                                <thead>
                                    <tr>
                                        <th style="width:5%">No</th>
                                        <th style="width:10%">NIK</th>
                                        <th>Nama</th>
                                        <th class="text-center" style="width:17%">Registrasi</th>
                                        <th class="text-center" style="width:8%">Status</th>
                                        <th class="text-center" style="width: 10%">Action</th>
                                    </tr>
                                </thead>
                                <tbody></tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('script')
    <script>
        $(function() {
            $.ajaxSetup({
                headers: {
                    "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
                },
            });

            var table = $(".data-table").DataTable({
                processing: true,
                serverSide: true,
                responsive: true,
                pageLength: 10,
                lengthMenu: [10, 50, 100, 200, 500],
                lengthChange: true,
                autoWidth: false,
                ajax: "{{ route('anggota.index') }}",
                columns: [{
                        data: "DT_RowIndex",
                        name: "DT_RowIndex",
                    },
                    {
                        data: "nik",
                        name: "nik",
                    },
                    {
                        data: "nama",
                        name: "nama",
                    },
                    {
                        data: "registrasi",
                        name: "registrasi",
                    },
                    {
                        data: "status",
                        name: "status",
                    },
                    {
                        data: "action",
                        name: "action",
                        orderable: false,
                        searchable: false,
                    },
                ],
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
                var spj_id = $("#spj_id").val();
                $.ajax({
                    data: $("#konfirmForm").serialize(),
                    url: "{{ url('daftar-anggota/terima') }}" + "/" + spj_id,
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
                            window.location.href = "{{ url('/daftar-anggota') }}"
                        }
                    },
                });
            });
        });
    </script>
@endsection
