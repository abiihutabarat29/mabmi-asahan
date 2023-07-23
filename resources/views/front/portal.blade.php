<!DOCTYPE html>
<html lang="en-US">

<head>
    <title>Portal MABMI</title>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8;" />
    <meta http-equiv="cache-control" content="max-age=0" />
    <meta http-equiv="expires" content="0" />
    <meta name="description" content="bhh" itemprop="description" />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:type" content="article" />
    <meta property="og:site_name" content="" />
    <meta property="og:title" content="gvfgbg" />
    <meta property="og:image" content="rtvrtg" />
    <meta property="og:description" content="vrg" />
    <meta property="og:url" content="rgvr" />
    <meta property="og:image:type" content="image/jpeg" />
    <meta property="og:image:width" content="754" />
    <meta property="og:image:height" content="357" />
    <meta name="robots" content="index, follow" />
    <meta content="rtgvrt" itemprop="headline" />
    <meta name="keywords" content="rv" itemprop="keywords" />
    <meta name="thumbnailUrl" content="rvg" itemprop="thumbnailUrl" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="" />
    <meta name="twitter:site:id" content="" />
    <meta name="twitter:creator" content="" />
    <meta name="twitter:description" content="ukyum" />
    <meta name="twitter:image" content="" />
    <link rel="canonical" href="" />
    <link rel="shortcut icon" href="{{ asset('portal/images/logo-mabmi.png') }}">
    <link href='https://fonts.googleapis.com/css?family=Roboto:300,400,700,900&subset=cyrillic-ext' rel='stylesheet'
        type='text/css'>
    <link href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' rel='stylesheet'
        type='text/css'>
    <link rel="stylesheet" type="text/css" media="all" href="{{ asset('portal/css/style.css') }}" />
    <link rel="stylesheet" type="text/css" media="all" href="{{ asset('portal/css/override.css') }}" />
</head>
@include('front.layouts.head')

<body>
    <div class="wrap">
        <div id="main">
            <div class="inner fade-in">
                <header class="site-header"><br><br>
                    <h1 class="site-title"><img src="{{ asset('portal/images/logo-mabmi.png') }}" width="100"
                            height="50" alt="InTime" /></h1>
                </header>
                <section class="content">
                    <center style="color:#0c2e60; font-size : 20px">
                        <span style="font-weight: 900; letter-spacing: 10px">(MABMI)</span><br>
                        <span style="font-weight: 900; letter-spacing: 2px">MAJELIS ADAT BUDAYA MELAYU INDONESIA</span>
                    </center>
                    <br><br> <br><br> <br><br>
                    <div class="modal-toggle">
                        <a href="{{ route('front.index') }}" class="button button-contactForm btn_1"><span
                                class="fa fa-home"></span>
                            Website Utama</a>
                        <a href="{{ route('register.index') }}" class="button button-contactForm btn_1"><span
                                class="fa fa-edit"></span>
                            PENDAFTARAN</a>
                    </div> <br><br><br><br><br><br>
                    <div class="social">
                        <a href="#" target="_blank"><span class="fa fa-facebook" title="Facebook"></span></a>
                        <a href="#" target="_blank"><span class="fa fa-twitter" title="Twitter"></span></a>
                        <a href="#" target="_blank"><span class="fa fa-instagram"
                                title="Instagram"></span></a>
                        <a href="#" target="_blank"><span class="fa fa-youtube" title="YouTube"></span></a>
                    </div>
                    <p class="subtitle">Dikelola oleh Majelis Adat Budaya Melayu Indonesia. <br />
                        Copyright
                        &copy; {{ Date('Y') }} -
                        All Right Reserved.</p>
                </section>
            </div>
        </div>

        <div class="body-bg"></div>
        <div id="preload-content">
            <div class="preload-spinner">
            </div>
        </div>

        <script type="text/javascript" src="{{ asset('portal/js/modernizr.js') }}"></script>
        <script type="text/javascript" src="{{ asset('portal/js/particles.js') }}"></script>
        <script type="text/javascript" src="{{ asset('portal/js/jquery-1.11.3.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('portal/js/plugins.js') }}"></script>
        <script type="text/javascript" src="{{ asset('portal/js/scripts.js') }}"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                $.backstretch([window.location.origin + '/portal/images/landing-page-mabmi.png'], {
                    fade: 1000,
                    duration: 3000
                });

                $('ul.tabs li').click(function() {
                    var tab_id = $(this).attr('data-tab');

                    $('ul.tabs li').removeClass('current');
                    $('.tab-content').removeClass('current');

                    $(this).addClass('current');
                    $("#" + tab_id).addClass('current');
                });
            });
        </script>
</body>

</html>
