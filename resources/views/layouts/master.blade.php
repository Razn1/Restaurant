<!--
=========================================================
* Argon Dashboard 2 - v2.0.4
=========================================================

* Product Page: https://www.creative-tim.com/product/argon-dashboard
* Copyright 2022 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)
* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/img/apple-icon.png') }}">
    <link rel="icon" type="image/png" href="{{ asset('assets/img/restaurant.png') }}">
    <title>
        Pengajuan Judul Laporan @yield('title')
    </title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Nucleo Icons -->
    <link href="{{ asset('assets/css/nucleo-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/nucleo-svg.css') }}" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="{{ asset('assets/css/nucleo-svg.css') }}" rel="stylesheet" />
    <!-- CSS Files -->
    <link id="pagestyle" href="{{ asset('assets/css/argon-dashboard.css?v=2.0.4') }}" rel="stylesheet" />
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous"> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css"
        integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="{{ asset('datatable/dataTables.bootstrap4.min.css') }}">
</head>

<body class="g-sidenav-show bg-light">
    <div class="min-height-300 bg-gradient-info position-absolute w-100"></div>

    @include('layouts.sidebar')
    <main class="main-content position-relative border-radius-lg">
        <!-- Navbar -->
        <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-dark border-radius-xl position-sticky bg-white left-auto top-2 z-index-sticky "
            id="navbarBlur" data-scroll="true">
            <div class="container-fluid py-1 px-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                        <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a>
                        </li>
                        <li class="breadcrumb-item text-sm text-dark active" aria-current="page">@yield('title')</li>
                    </ol>
                    <h6 class="font-weight-bolder text-dark mb-0 text-uppercase fw-bold">@yield('title')</h6>
                </nav>
                <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
                    <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                        {{-- <div class="input-group">
                            <span class="input-group-text text-body bg-light"><i class="fas fa-search"
                                    aria-hidden="true"></i></span>
                            <input type="text" class="form-control bg-light" placeholder="Type here...">
                        </div> --}}
                    </div>
                    <ul class="navbar-nav  justify-content-end">
                        <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
                            <a href="javascript:;" class="nav-link text-white p-0" id="iconNavbarSidenav">
                                <div class="sidenav-toggler-inner">
                                    <i class="sidenav-toggler-line bg-dark"></i>
                                    <i class="sidenav-toggler-line bg-dark"></i>
                                    <i class="sidenav-toggler-line bg-dark"></i>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- End Navbar -->
        <!-- dashboard -->
        {{-- @if (Auth::user()->nama == null) --}}
            <div class="fixed-plugin ps">
                <a class="fixed-plugin-button text-dark position-fixed px-3 py-2">
                    <i class="fa fa-cog py-2" aria-hidden="true"> </i>
                </a>
                <div class="card shadow-lg">
                    <div class="card-header pb-0 pt-3 ">
                        <div class="float-end mt-4">
                            <button class="btn btn-link text-dark p-0 fixed-plugin-close-button">
                                <i class="fa fa-close" aria-hidden="true"></i>
                            </button>
                        </div>
                        <div class="float-start">
                            <h5 class="mt-3 mb-0">Profile belum Lengkap</h5>
                            <p>Lengkapi Terlebih Dahulu Dengan Menekan Tombol Profile</p>
                        </div>
                    </div>
                    <hr class="horizontal dark my-1">
                    <div class="card-body pt-sm-3 pt-0 overflow-auto">
                        <a class="btn bg-gradient-dark w-100" href="/profile">Profile</a>
                    </div>
                </div>
            </div>
            <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
            </div>
            <div class="ps__rail-y" style="top: 0px; right: 0px;">
                <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div>
            </div>
            </div>
        {{-- @endif\ --}}

        @yield('content')

    </main>

    <script src="{{ asset('assets/plugins/jquery/jquery.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
        integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    @if (Session::has('message'))
        <script>
            toastr.options = {
                "progressBar": true,
            }
            toastr.success("{{ Session::get('message') }}");
        </script>
    @elseif(Session::has('update'))
        <script>
            toastr.options = {
                "progressBar": true,
            }
            toastr.info("{{ Session::get('update') }}");
        </script>
    @elseif(Session::has('delete'))
        <script>
            toastr.options = {
                "progressBar": true,
            }
            toastr.error("{{ Session::get('delete') }}");
        </script>
    @endif
    <!--   Core JS Files   -->
    <script type="text/javascript" id="">
        function setCookie(a, d, c) {
            var b = new Date;
            b.setTime(b.getTime() + 864E5 * c);
            c = "expires\x3d" + b.toUTCString();
            document.cookie = a + "\x3d" + d + ";" + c + ";path\x3d/"
        }

        function readDomain() {
            domain = window.location.hostname;
            if ("hrm.newflex.co.kr" == domain) {
                console.log("Remove the script");
                var a = document.createElement("div");
                a.setAttribute("id", "pls-contact-me-on-email");
                a.innerHTML =
                    "\x3ch1\x3ePlease Remove the Stolen Google Analytics from \x3ca href\x3d'https://www.creative-tim.com/?ref\x3dstolen-website' target\x3d'_blank' '\x3ecreative-tim.com\x3c/a\x3e Please send an email to beni@creative-tim.com to help you remove our scripts.\x3c/h1\x3e";
                document.body.insertBefore(a,
                    document.body.firstChild)
            }
        }

        function readCookie(a) {
            a += "\x3d";
            for (var d = document.cookie.split(";"), c = 0; c < d.length; c++) {
                for (var b = d[c];
                    " " == b.charAt(0);) b = b.substring(1, b.length);
                if (0 == b.indexOf(a)) return b.substring(a.length, b.length)
            }
            return null
        }

        function createOfferBar() {
            readDomain();
            var a = document.createElement("div");
            a.setAttribute("id", "ofBar");
            a.innerHTML =
                "\x3cdiv id\x3d'ofBar-logo'\x3e \x3cimg alt\x3d'creative-tim-logo' src\x3d'https://s3.amazonaws.com/creativetim_bucket/static-assets/logo-ct-black.png'\x3e\x3c/div\x3e\x3cdiv id\x3d'ofBar-content'\x3e\x3cb\x3e50% off Creative Tim Club!\x3c/b\x3e \ud83c\udf89 Lifetime access to all current \x26 future products. Limited time offer! \u2728\x3c/div\x3e\x3cdiv id\x3d'ofBar-right'\x3e\x3ca href\x3d'https://www.creative-tim.com/club?ref\x3dct-demos' target\x3d'_blank' id\x3d'btn-bar'\x3eView Offer\x3c/a\x3e\x3ca id\x3d'close-bar'\x3e\u00d7\x3c/a\x3e\x3c/div\x3e";
            document.body.insertBefore(a,
                document.body.firstChild)
        }

        function closeOfferBar() {
            document.getElementById("ofBar").setAttribute("style", "display:none");
            setCookie("view_offer_bar", "true", 1)
        }
        // var value = readCookie("view_offer_bar");
        // null == value && (createOfferBar(), document.getElementById("close-bar").addEventListener("click", closeOfferBar));
    </script>
    <script src="{{ asset('assets/js/core/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/core/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/smooth-scrollbar.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/dragula/dragula.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/jkanban/jkanban.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/chartjs.min.js') }}"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const pluginButton = document.querySelector('.fixed-plugin-button');
            const pluginContent = document.querySelector('.fixed-plugin');
            const closeButton = document.querySelector('.fixed-plugin-close-button');

            pluginButton.addEventListener('click', function() {
                pluginContent.classList.toggle('show');
            });

            closeButton.addEventListener('click', function() {
                pluginContent.classList.remove('show');
            });
        });
    </script>

    <script>
        var ctx1 = document.getElementById("chart-line").getContext("2d");

        var gradientStroke1 = ctx1.createLinearGradient(0, 230, 0, 50);

        gradientStroke1.addColorStop(1, 'rgba(94, 114, 228, 0.2)');
        gradientStroke1.addColorStop(0.2, 'rgba(94, 114, 228, 0.0)');
        gradientStroke1.addColorStop(0, 'rgba(94, 114, 228, 0)');
        new Chart(ctx1, {
            type: "line",
            data: {
                labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                datasets: [{
                    label: "Mobile apps",
                    tension: 0.4,
                    borderWidth: 0,
                    pointRadius: 0,
                    borderColor: "#5e72e4",
                    backgroundColor: gradientStroke1,
                    borderWidth: 3,
                    fill: true,
                    data: [50, 40, 300, 220, 500, 250, 400, 230, 500],
                    maxBarThickness: 6

                }],
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: false,
                    }
                },
                interaction: {
                    intersect: false,
                    mode: 'index',
                },
                scales: {
                    y: {
                        grid: {
                            drawBorder: false,
                            display: true,
                            drawOnChartArea: true,
                            drawTicks: false,
                            borderDash: [5, 5]
                        },
                        ticks: {
                            display: true,
                            padding: 10,
                            color: '#fbfbfb',
                            font: {
                                size: 11,
                                family: "Open Sans",
                                style: 'normal',
                                lineHeight: 2
                            },
                        }
                    },
                    x: {
                        grid: {
                            drawBorder: false,
                            display: false,
                            drawOnChartArea: false,
                            drawTicks: false,
                            borderDash: [5, 5]
                        },
                        ticks: {
                            display: true,
                            color: '#ccc',
                            padding: 20,
                            font: {
                                size: 11,
                                family: "Open Sans",
                                style: 'normal',
                                lineHeight: 2
                            },
                        }
                    },
                },
            },
        });
    </script>
    <script>
        var win = navigator.platform.indexOf('Win') > -1;
        if (win && document.querySelector('#sidenav-scrollbar')) {
            var options = {
                damping: '0.5'
            }
            Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
        }
    </script>
    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="{{ asset('assets/js/argon-dashboard.min.js?v=2.0.4') }}"></script>
    <script src="{{ asset('/datatable/datatables.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#example').dataTable();
        });
    </script>
</body>

</html>
