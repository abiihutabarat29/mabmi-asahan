@extends('admin.layouts.app')

@section('content')
    @if (Auth::user()->role == 1)
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Selamat Datang
                            @if (Auth::user()->role == 1)
                                Administrator Mabmi
                            @endif
                        </h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item active">Dashboard
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    @endif
@endsection
