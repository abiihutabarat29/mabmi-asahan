@include('front.layouts.head')

<body>
    @include('front.layouts.header')
    <!-- banner part start-->
    <section class="banner_part">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-xl-6">
                    <div class="banner_text">
                        <div class="banner_text_iner">
                            <h5>Organisasi</h5>
                            <h1>Majelis Adat Budaya Melayu Indonesia</h1>
                            <p>Mari Lestarikan Adat Budaya Melayu di Indonesia</p>
                            <a href="{{ route('register.index') }}" class="btn_2">DAFTAR KEANGGOTAAN</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner part start-->
    <!--::review_part start::-->
    <section class="testimonial_part mb-3">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-5">
                    <div class="section_tittle text-center">
                        <p>Sambutan</p>
                        <h2>Ketua MABMI</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="textimonial_iner owl-carousel">
                        <div class="testimonial_slider">
                            <div class="row">
                                <div class="col-lg-12 col-xl-8 col-sm-8 align-self-center">
                                    <div class="testimonial_slider_text">
                                        <p>Mari Lestarikan Adat Budaya Melayu</p>
                                        <h4>Tengku M. Husyairi, S.STP</h4>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-xl-2 col-sm-4">
                                    <div class="testimonial_slider_img">
                                        <img src="{{ asset('front/img/gambar-1.jpg') }}" class="card-img-top"
                                            alt="#" width="1000pt">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- member_counter counter start -->
    <section class="member_counter">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-3 col-sm-6">
                    <div class="single_member_counter">
                        <span class="counter">0</span>
                        <h4>Semua Anggota</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- member_counter counter end -->
    <!--::blog_part start::-->
    <section class="blog_part section_padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-5">
                    <div class="section_tittle text-center">
                        <p>Keanggotaan</p>
                        <h2>Anggota MABMI</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @if ($anggota->isEmpty())
                    <div class="row justify-content-center">
                        <div class="col-sm-12 col-lg-6 col-xl-4">
                            <div class="single-home-blog">
                                <div class="card">
                                    <p style="text-align: center">----Data Anggota Kosong----</p>
                                </div>
                            </div>
                        </div>
                    </div>
                @else
                    @foreach ($anggota as $item)
                        <div class="col-sm-6 col-lg-4 col-xl-4">
                            <div class="single-home-blog">
                                <div class="card">
                                    <img src="#" class="card-img-top" alt="blog">
                                    <div class="card-body">
                                        <a href="#" class="btn_4">Anggota</a>
                                        <a href="blog.html">
                                            <h5 class="card-title">Satria Ahmad Banjani</h5>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
                {{-- <div class="col-sm-6 col-lg-4 col-xl-4">
                    <div class="single-home-blog">
                        <div class="card">
                            <img src="#" class="card-img-top" alt="blog">
                            <div class="card-body">
                                <a href="#" class="btn_4">Anggota</a>
                                <a href="blog.html">
                                    <h5 class="card-title">Satria Ahmad Banjani</h5>
                                </a>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </section>
    <!--::blog_part end::-->
    @include('front.layouts.footer')
