<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>14410100136 - UTS</title>

        <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap-theme.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/sticky-footer-navbar.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/sweetalert2.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap-theme.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/datepicker.css') }}">

        <style type="text/css">
            h1 { margin-bottom: 40px; }
            label { cursor: hand; cursor: pointer; }
        </style>

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="/"><span class="glyphicon glyphicon-home"></span></a>
                </div>
                <div id="navbar" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="/category"><span class="glyphicon glyphicon-th-list"></span> Kategori</a></li>
                        <li><a href="/product"><span class="glyphicon glyphicon-th-list"></span> Produk</a></li>
                        <li><a href="/employee"><span class="glyphicon glyphicon-th-list"></span> Karyawan</a></li>
                        <li><a href="/supplier"><span class="glyphicon glyphicon-th-list"></span> Pemasok</a></li>
                        <li><a href="/customer"><span class="glyphicon glyphicon-th-list"></span> Pelanggan</a></li>
                        <li><a href="/shipper"><span class="glyphicon glyphicon-th-list"></span> Kurir</a></li>
                        <li><a href="/order"><span class="glyphicon glyphicon-th-list"></span> Pemesanan</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container">
            @if (session('pesan_sukses'))
                @include('_alert.success')
            @endif

            @if (session('pesan_gagal'))
                @include('_alert.failed')
            @endif

            @yield('konten')
        </div>

        <footer class="footer">
            <div class="container">
                <p class="text-muted">&copy; 2016. R.P. Mohammad Bagus Santoso.</p>
            </div>
        </footer>

        <script type="text/javascript" src="{{ asset('js/goback.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/bootstrap.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/jquery-2.2.3.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/npm.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/sweetalert2.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/common.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/bootstrap-datepicker.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/bootstrap-datepicker.id.js') }}"></script>
        <script type='text/javascript'>//<![CDATA[
        $(window).load(function(){
            $(".date-picker").datepicker();
        });//]]>
    </script>
    </body>
</html>
