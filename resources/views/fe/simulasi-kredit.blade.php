<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" id="bootstrap-css" href="{{ asset('fe/css/bootstrap.css') }}" type="text/css" media="all" />
    <link rel="stylesheet" id="awesome-font-css" href="{{ asset('fe/css/font-awesome.css') }}" type="text/css"
        media="all" />
    <link rel="stylesheet" id="ionicon-font-css" href="{{ asset('fe/css/ionicon.css') }}" type="text/css" media="all" />
    <link rel="stylesheet" id="royal-preload-css" href="{{ asset('fe/css/royal-preload.css') }}" type="text/css"
        media="all" />
    <link rel="stylesheet" id="slick-slider-css" href="{{ asset('fe/css/slick.css') }}" type="text/css" media="all" />
    <link rel="stylesheet" id="slick-theme-css" href="{{ asset('fe/css/slick-theme.css') }}" type="text/css"
        media="all" />
    <link rel="stylesheet" id="consultax-style-css" href="{{ asset('fe/style.css') }}" type="text/css" media="all" />

    <link rel="shortcut icon" href="{{ asset('/images/favicon.png') }}" />
    <style>
        table {
            border-collapse: collapse;
            border-spacing: 0;
            width: 100%;
            border: 1px solid #ddd;
        }

        th,
        td {
            text-align: center;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2
        }
    </style>
</head>

<body class="royal_preloader">
    <div id="page" class="site">
        <!-- Header V-->
        {{-- @include('component.header') --}}

        <div id="content" class="site-content custom-margin">
            {{-- Gambar diatas --}}
            <div class="simulasi-header">
                <div class="container">
                    <div class="breadc-box no-line">
                        <div class="row">
                            <div class="col-md-6">
                                <h1 class="page-title">Simulasi Kredit</h1>
                            </div>
                            <div class="col-md-6 mobile-left text-right">
                                <ul id="breadcrumbs" class="breadcrumbs none-style">
                                    {{-- <li><a href="{{ route('home') }}">Home</a></li> --}}
                                    <li class="active">Simulasi Kredit</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Main Content --}}
            <div class="entry-content">
                <div class="container">
                    <div class="boxed-content">
                        {{-- Inputan Pinjaman --}}
                        <section class="wpb_row row-fluid section-padd bg-second row-has-fill">
                            <div class="container">
                                <div class="row">
                                    <div class="wpb_column column_container col-sm-12">
                                        <div class="column-inner">
                                            <div class="wpb_wrapper">
                                                <h2 class="custom_heading text-light">Simulasi Kredit Standar</h2>
                                                <div class="wpb_text_column wpb_content_element text-light">
                                                    <div class="wpb_wrapper">
                                                        <p>
                                                            Simulasi ini untuk memudahkan calon kreditur mengetahui
                                                            besaran
                                                            angsuran per-bulan yang harus dibayarkan dan besarannya
                                                            sudah sesuai
                                                            aturan bunga yang ditetapkan perusahaan per tanggal 01
                                                            Januari 2021.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="wpb_column column_container col-sm-12">
                                        <div class="column-inner">
                                            <div class="wpb_wrapper">
                                                <div role="form" class="wpcf7" id="wpcf7-f1626-p1530-o1" lang="en-US"
                                                    dir="ltr">
                                                    <div class="screen-reader-response"></div>
                                                    <form id="simulasiKredit" method="post" class="wpcf7-form">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <span class="wpcf7-form-control-wrap your-name">
                                                                    <h5 class="text-light">Jumlah Pinjaman</h5>
                                                                    <input type="number" id="jumlahKredit"
                                                                        name="jumlahKredit" size="40" class="
                                                                            wpcf7-form-control
                                                                            wpcf7-text
                                                                            wpcf7-validates-as-required
                                                                        " required="" aria-invalid="false"
                                                                        value="50000000"
                                                                        placeholder="Contoh : 50.000.000" />
                                                                </span>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <span class="wpcf7-form-control-wrap your-service">
                                                                    <h5 class="text-light">Lama Pinjaman</h5>
                                                                    <select id="jangkaWaktu" name="jangkaWaktu"
                                                                        class="wpcf7-form-control wpcf7-select"
                                                                        aria-invalid="false">
                                                                        <option value="12">1 Tahun</option>
                                                                        <option value="24">2 Tahun</option>
                                                                        <option value="36">3 Tahun</option>
                                                                        <option value="48">4 Tahun</option>
                                                                        <option value="60">5 Tahun</option>
                                                                    </select>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <p>
                                                            <button id="btnHitung" type="submit"
                                                                class="wpcf7-form-control wpcf7-submit btn">Hitung</button>
                                                            <button id="btnUlangi" type="submit"
                                                                class="wpcf7-form-control wpcf7-submit btn">Ulangi</button>
                                                            {{-- <input type="submit" value="SUBMIT"
                                                                class="wpcf7-form-control wpcf7-submit btn" /> --}}
                                                            {{-- <input type="submit" value="ULANGI"
                                                                class="wpcf7-form-control wpcf7-submit btn" /> --}}
                                                        </p>
                                                        <div class="wpcf7-response-output wpcf7-display-none"></div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <aside>
                            {{-- Tabel simulasi Pinjaman --}}
                            <section class="wpb_row row-fluid section-padd bg-light row-has-fill">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-12" style="margin-bottom: 30px">
                                            <h2 class="custom-heading text-center">Simulasi Pinjaman Anda</h2>
                                        </div>
                                        <div class="col-12" style="margin-left: 30px">
                                            <div class="col-12">
                                                Jumlah Pinjaman
                                                <span style="margin-left:83px">: </span>
                                                <span id="resultTotalPinjaman" style="font-weight: bold">:</span>
                                            </div>
                                            <div class="col-12">
                                                Lama Pinjaman
                                                <span style="margin-left:93px">: </span>
                                                <span id="resultLamaPinjaman" style="font-weight: bold">:</span>
                                            </div>
                                            <div class="col-12">
                                                Bunga per Bulan
                                                <span style="margin-left:85px">: </span>
                                                <span id="resultBungaPertahun" style="font-weight: bold">:</span>
                                            </div>
                                            <div class="col-12">
                                                Angsuran Pokok Per Bulan
                                                <span style="margin-left:20px">: </span>
                                                <span id="resultAngPokokBulan" style="font-weight: bold">:</span>
                                            </div>
                                            <div class="col-12">
                                                Angsuran Bunga Per Bulan
                                                <span style="margin-left:19px">: </span>
                                                <span id="resultAngBungaBulan" style="font-weight: bold">:</span>
                                            </div>
                                            <div class="col-12">
                                                Total Angsuran Per Bulan
                                                <span style="margin-left:28px">: </span>
                                                <span id="resultAngBulan" style="font-weight: bold">:</span>
                                            </div>
                                        </div>
                                        <div class="wpb_column column_container col-sm-12" style="margin-top: 30px">
                                            <div style="overflow-x:auto;">
                                                <table id="tableAngsuran" style="margin-left:auto;margin-right:auto">
                                                    <tr>
                                                        <th>Bulan</th>
                                                        <th>Pokok</th>
                                                        <th>Bunga</th>
                                                        <th>Angsuran</th>
                                                        <th>Sisa Pinjaman</th>
                                                    </tr>
                                                    <tbody id="table_list">
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            {{-- Whatsapp kami --}}
                            <section class="wpb_row row-fluid section-padd bg-light row-has-fill"
                                style="margin-top: -150px">
                                <div class="container">
                                    <div class="row">
                                        <div class="wpb_column column_container col-sm-12">
                                            <div class="column-inner">
                                                <div class="wpb_wrapper">
                                                    <div class="row wpb_row inner row-fluid row-has-fill"
                                                        style="background: #039537; padding: 75px 85px 55px;">
                                                        <div
                                                            class="wpb_column column_container col-12 col-sm-12 col-md-9">
                                                            <div class="column-inner">
                                                                <div class="wpb_wrapper">
                                                                    <div class="section-head mobile-center text-light">
                                                                        <h6><span>Anda tertarik penawaran kami??</span>
                                                                        </h6>
                                                                        <h3 class="section-title">Ajukan pinjaman
                                                                            sekarang!</h3>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="wpb_column column_container col-12 col-sm-12 col-md-3">
                                                            <div class="column-inner">
                                                                <div class="wpb_wrapper">
                                                                    <div class="empty_space_12 sm-hidden"></div>
                                                                    <div class="text-right mobile-center light-hover">
                                                                        <a class="btn"
                                                                            href="https://api.whatsapp.com/send?phone=6281392006441"
                                                                            target="_blank">
                                                                            CHAT SEKARANG
                                                                        </a>
                                                                    </div>

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
                        </aside>
                    </div>
                </div>
            </div>
        </div>

        <!-- footer V-->
        {{-- @include('component.footer') --}}
    </div>

    <!-- Script V -->
    <script type="text/javascript" src="{{ asset('fe/js/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('fe/js/countto.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('fe/js/jquery.isotope.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('fe/js/royal_preloader.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('fe/js/slick.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('fe/js/scripts.js') }}"></script>
    <script type="text/javascript" src="{{ asset('fe/js/header-footer.js') }}"></script>

    <script src="{{ asset('fe/jquery-3.5.1.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $("aside").hide();
    
            $('#simulasiKredit').on('submit',function(e){
                e.preventDefault();
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
    
                $('#table_list').empty();
                let jumlahKredit  = $('#jumlahKredit').val();
                let jangkaWaktu   = $('#jangkaWaktu').val();
    
                if (jumlahKredit.length == 0) {
                    alert("Isi dulu jumlah kredit");
                } else if (jangkaWaktu.length == 0) {
                    alert("Pilih salah satu jangka waktu kredit");
                } else {
                    $.ajax({
                        url: '{{ route('hitung.kredit') }}',
                        type: 'POST',
                        data: $(this).serialize(),
                        success: function(response){
                            // console.log(response.angsuran);
                            $('#resultTotalPinjaman').text(rupiah_format(response.jumlahKredit));
                            $('#resultLamaPinjaman').text(response.jangkaWaktu + " Bulan");
                            $('#resultBungaPertahun').text(response.sukubungaPertahun + "%");
                            $('#resultAngPokokBulan').text(rupiah_format(response.pokok));
                            $('#resultAngBungaBulan').text(rupiah_format(response.bunga));
                            $('#resultAngBulan').text(rupiah_format(response.jumlahAngsuran));
    
                            $.each(response.angsuran, function (key, value) {
                                $('#table_list').append(`
                                    <tr>
                                        <td>${value.no}</td>
                                        <td>${rupiah_format(value.pokok)}</td>
                                        <td>${rupiah_format(value.bunga)}</td>
                                        <td>${rupiah_format(value.jumlahAngsuran)}</td>
                                        <td>${rupiah_format(value.sisaPinjaman)}</td>
                                    </tr>
                                `)
                            });
    
                            $("aside").show();
                        },
                    });
                }            
            });
    
            $('#btnUlangi').on('click', function(e){
                e.preventDefault();
                $("aside").hide();
                $('#table_list').empty();
            })
    
            function rupiah_format(number) {
                if (number == 0) {
                    return rupiah = 'Rp' + 0;
                } else {
                    const numb = number;
                    const format = numb.toString().split('').reverse().join('');
                    const convert = format.match(/\d{1,3}/g);
                    return rupiah = 'Rp' + convert.join('.').split('').reverse().join('')
                    // return rupiah = 'Rp' + convert.join('.').split('').reverse().join('') + ',00'
                }
            }
        });
    </script>
</body>

</html>