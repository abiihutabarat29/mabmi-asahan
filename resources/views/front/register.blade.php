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
                                        onblur="this.placeholder = 'Masukkan NIK'" placeholder='Masukkan NIK'>
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
                                        onblur="this.placeholder = 'Masukkan Nama'" placeholder='Masukkan Nama'>
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
                                        placeholder='Tempat Lahir'></textarea>
                                    @error('tempat_lahir')
                                        <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <label for="">Tanggal Lahir <span class="text-danger">*</span></label>
                                <div class="form-group">
                                    <input class="form-control  @error('tgl_lahir') is-invalid @enderror"
                                        name="tgl_lahir" id="tgl_lahir" type="date">
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
                                        placeholder='Alamat Lengkap'></textarea>
                                    @error('alamat')
                                        <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <label>Jenis Kelamin <span class="text-danger">*</span></label>
                                <div class="form-group">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="gender" id="gender1">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            Laki-laki
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="gender" id="gender2">
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
                                        <option value="Islam">Islam</option>
                                        <option value="Kristen Protestan">Kristen Protestan</option>
                                        <option value="Kristen Katholik">Kristen Katholik</option>
                                        <option value="Hindu">Hindu</option>
                                        <option value="Budha">Budha</option>
                                        <option value="Konghucu">Konghucu</option>
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
                                        <option value="Jawa">Jawa</option>
                                        <option value="Sunda">Sunda</option>
                                        <option value="Batak">Batak</option>
                                        <option value="Melayu">Melayu</option>
                                        <option value="Minangkabau">Minangkabau</option>
                                        <option value="Betawi">Betawi</option>
                                        <option value="Dayak">Dayak</option>
                                        <option value="Aceh">Aceh</option>
                                        <option value="Bali">Bali</option>
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
                                        onblur="this.placeholder = 'Masukkan Nomor'" placeholder='Masukkan Nomor'>
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
                                        onblur="this.placeholder = 'Masukkan Email'" placeholder='Masukkan Email'>
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
    </section>
    @include('front.layouts.footer')
