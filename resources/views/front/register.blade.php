@include('front.layouts.head')

<body>
    @include('front.layouts.header')

    <!-- breadcrumb start-->
    <section class="breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner text-center">
                        <div class="breadcrumb_iner_item">
                            <h2>Pendaftaran</h2>
                            <p>Daftarkan diri kamu sekarang !</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb start-->

    <!-- ================ contact section start ================= -->
    <section class="contact-section section_padding">
        <div class="container">
            <div class="card p-3">
                <div class="row">
                    <div class="col-12">
                        <h2 class="contact-title">Formulir Pendaftaran</h2>
                        <hr>
                    </div>
                    <div class="col-lg-8">
                        <form class="form-contact contact_form" action="{{ route('register.store') }}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="col-sm-12">
                                <label for="">NIK <span class="text-danger">*</span></label>
                                <div class="form-group">
                                    <input class="form-control  @error('nik') is-invalid @enderror" name="nik"
                                        id="nik" type="text" onfocus="this.placeholder = ''"
                                        onblur="this.placeholder = 'Masukkan NIK'" placeholder='Masukkan NIK'
                                        value="{{ old('nik') }}">
                                    @error('nik')
                                        <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <label for="">Nama <span class="text-danger">*</span></label>
                                <div class="form-group">
                                    <input class="form-control  @error('nama') is-invalid @enderror" name="nama"
                                        id="nama" type="text" onfocus="this.placeholder = ''"
                                        onblur="this.placeholder = 'Masukkan Nama'" placeholder='Masukkan Nama'
                                        value="{{ old('nama') }}">
                                    @error('nama')
                                        <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <label for="">Tempat Lahir <span class="text-danger">*</span></label>
                                <div class="form-group">
                                    <textarea class="form-control w-100  @error('tempat_lahir') is-invalid @enderror" name="tempat_lahir" id="tempat_lahir"
                                        cols="15" rows="3" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Tempat Lahir'"
                                        placeholder='Tempat Lahir'>{{ old('tempat_lahir') }}</textarea>
                                    @error('tempat_lahir')
                                        <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <label for="">Tanggal Lahir <span class="text-danger">*</span></label>
                                <div class="form-group">
                                    <input class="form-control  @error('tgl_lahir') is-invalid @enderror"
                                        name="tgl_lahir" id="tgl_lahir" type="date" value="{{ old('tgl_lahir') }}">
                                    @error('tgl_lahir')
                                        <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <label for="">Alamat Lengkap <span class="text-danger">*</span></label>
                                <div class="form-group">
                                    <textarea class="form-control w-100  @error('alamat') is-invalid @enderror" name="alamat" id="alamat" cols="15"
                                        rows="3" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Alamat Lengkap'"
                                        placeholder='Alamat Lengkap'>{{ old('alamat') }}</textarea>
                                    @error('alamat')
                                        <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <label>Jenis Kelamin <span class="text-danger">*</span></label>
                                <div class="form-group">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="gender" id="gender1"
                                            value="L" {{ old('gender') == 'L' ? 'checked' : '' }}>
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            Laki-laki
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="gender" id="gender2"
                                            value="P" {{ old('gender') == 'P' ? 'checked' : '' }}>
                                        <label class="form-check-label" for="flexRadioDefault2">
                                            Perempuan
                                        </label>
                                    </div>
                                    @error('gender')
                                        <small class="text-danger"><strong>{{ $message }}</strong></small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <label>Agama <span class="text-danger">*</span></label>
                                <div class="form-group">
                                    <select name="agama" id="agama"
                                        class="form-control select2bs4  @error('agama') is-invalid @enderror"
                                        style="width: 100%;">
                                        <option>::Pilih Agama::</option>
                                        <option value="Islam" {{ old('agama') == 'Islam' ? 'selected' : '' }}>
                                            Islam</option>
                                        <option value="Kristen Protestan"
                                            {{ old('agama') == 'Kristen Protestan' ? 'selected' : '' }}>
                                            Kristen
                                            Protestan
                                        </option>
                                        <option value="Kristen Katholik"
                                            {{ old('agama') == 'Kristen Katholik' ? 'selected' : '' }}>
                                            Kristen Katholik
                                        </option>
                                        <option value="Hindu" {{ old('agama') == 'Hindu' ? 'selected' : '' }}>Hindu
                                        </option>
                                        <option value="Budha" {{ old('agama') == 'Budha' ? 'selected' : '' }}>Budha
                                        </option>
                                        <option value="Budha" {{ old('agama') == 'Konghucu' ? 'selected' : '' }}>
                                            Konghucu
                                        </option>
                                    </select>
                                    @error('agama')
                                        <small class="text-danger"><strong>{{ $message }}</strong></small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <label>Suku <span class="text-danger">*</span></label>
                                <div class="form-group">
                                    <select name="suku" id="suku"
                                        class="form-control select2bs4  @error('suku') is-invalid @enderror"
                                        style="width: 100%;">
                                        <option>::Pilih Suku::</option>
                                        <option value="Jawa" {{ old('suku') == 'Jawa' ? 'selected' : '' }}>
                                            Jawa</option>
                                        <option value="Sunda" {{ old('suku') == 'Sunda' ? 'selected' : '' }}>
                                            Sunda</option>
                                        <option value="Batak" {{ old('suku') == 'Batak' ? 'selected' : '' }}>
                                            Batak</option>
                                        <option value="Melayu" {{ old('suku') == 'Melayu' ? 'selected' : '' }}>
                                            Melayu</option>
                                        <option value="Minangkabau"
                                            {{ old('suku') == 'Minangkabau' ? 'selected' : '' }}>
                                            Minangkabau</option>
                                        <option value="Betawi" {{ old('suku') == 'Betawi' ? 'selected' : '' }}>
                                            Betawi</option>
                                        <option value="Dayak" {{ old('suku') == 'Dayak' ? 'selected' : '' }}>
                                            Dayak</option>
                                        <option value="Aceh" {{ old('suku') == 'Aceh' ? 'selected' : '' }}>
                                            Aceh</option>
                                        <option value="Bali" {{ old('suku') == 'Bali' ? 'selected' : '' }}>
                                            Bali</option>
                                    </select>
                                    @error('suku')
                                        <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <label>No HP/WhatsApp <span class="text-danger">*</span></label>
                                <div class="form-group">
                                    <input class="form-control  @error('nohp') is-invalid @enderror" name="nohp"
                                        id="nohp" type="number" onfocus="this.placeholder = ''"
                                        onblur="this.placeholder = 'Masukkan Nomor'" placeholder='Masukkan Nomor'
                                        value="{{ old('nohp') }}">
                                    @error('nohp')
                                        <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <label>Email Aktif <span class="text-danger">*</span></label>
                                <div class="form-group">
                                    <input class="form-control  @error('email') is-invalid @enderror" name="email"
                                        id="email" type="email" onfocus="this.placeholder = ''"
                                        onblur="this.placeholder = 'Masukkan Email'" placeholder='Masukkan Email'
                                        value="{{ old('email') }}">
                                    @error('email')
                                        <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <div class="mb-3">
                                        <label for="formFile" class="form-label">Scan KTP <span
                                                class="text-danger">*</span></label>
                                        <input class="form-control  @error('ktp') is-invalid @enderror" type="file"
                                            name="ktp" id="ktp" accept="image/jpeg">
                                        @error('ktp')
                                            <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                                        @enderror
                                        <small><i>*Scan KTP maksimal 1MB dan berekstensi jpeg, jpg, png.</i></small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <div class="mb-3">
                                        <label for="formFile" class="form-label">Pas Photo <span
                                                class="text-danger">*</span></label>
                                        <input class="form-control  @error('foto') is-invalid @enderror"
                                            type="file" name="foto" id="foto" accept="image/jpeg">
                                        @error('foto')
                                            <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                                        @enderror
                                        <small><i>*Pas Photo maksimal 1MB dan berekstensi jpeg, jpg, png.</i></small>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <button type="submit" class="button button-contactForm btn_1">Kirim
                                    Permintaan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @include('front.layouts.footer')
    </section>
