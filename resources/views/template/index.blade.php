<!DOCTYPE html>
<html lang="en"> <!--begin::Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <title>Form Pelayanan Sim</title><!--begin::Primary Meta Tags-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="title" content="AdminLTE v4 | Dashboard">
    <meta name="author" content="ColorlibHQ">
    <meta name="description"
        content="AdminLTE is a Free Bootstrap 5 Admin Dashboard, 30 example pages using Vanilla JS.">
    <meta name="keywords"
        content="bootstrap 5, bootstrap, bootstrap 5 admin dashboard, bootstrap 5 dashboard, bootstrap 5 charts, bootstrap 5 calendar, bootstrap 5 datepicker, bootstrap 5 tables, bootstrap 5 datatable, vanilla js datatable, colorlibhq, colorlibhq dashboard, colorlibhq admin dashboard">
    <!--end::Primary Meta Tags--><!--begin::Fonts-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fontsource/source-sans-3@5.0.12/index.css"
        integrity="sha256-tXJfXfp6Ewt1ilPzLDtQnJV4hclT9XuaZUKyUvmyr+Q=" crossorigin="anonymous">
    <!--end::Fonts--><!--begin::Third Party Plugin(OverlayScrollbars)-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.3.0/styles/overlayscrollbars.min.css"
        integrity="sha256-dSokZseQNT08wYEWiz5iLI8QPlKxG+TswNRD8k35cpg=" crossorigin="anonymous">
    <!--end::Third Party Plugin(OverlayScrollbars)--><!--begin::Third Party Plugin(Bootstrap Icons)-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.min.css"
        integrity="sha256-Qsx5lrStHZyR9REqhUF8iQt73X06c8LGIUPzpOhwRrI=" crossorigin="anonymous">
    <!--end::Third Party Plugin(Bootstrap Icons)--><!--begin::Required Plugin(AdminLTE)-->
    <link rel="stylesheet" href="{{ asset('assets') }}/dist/css/adminlte.css">
    <!--end::Required Plugin(AdminLTE)--><!-- apexcharts -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/apexcharts@3.37.1/dist/apexcharts.css"
        integrity="sha256-4MX+61mt9NVvvuPjUWdUdyfZfxSB1/Rf9WtqRHgG5S0=" crossorigin="anonymous"><!-- jsvectormap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/jsvectormap@1.5.3/dist/css/jsvectormap.min.css"
        integrity="sha256-+uGLJmmTKOqBr+2E6KDYs/NRsHxSkONXFHUL0fy2O/4=" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <script>
        function setMaxDate() {
            const today = new Date();
            const maxDate = new Date(
                today.getFullYear() - 18,
                today.getMonth(),
                today.getDate()
            );
            const formattedDate = maxDate.toISOString().split("T")[0];
            document.getElementById("birthdate").max = formattedDate;
        }
    </script>
    <style>
<<<<<<< HEAD
        * {
            font-family: "Ubuntu", system-ui;
            font-weight: 500;
            font-style: normal;
        }
=======
                    *{
                font-family: "Ubuntu", system-ui;
                font-weight: 500;
                font-style: normal;
                    }
                    body {
                        background-color: #E2F1E7;
                        padding: 0;
                        margin: 0;
                    }
                .navbar-brand {
                        display: flex;
                        align-items: center;
                    }
                    .navbar-logo {
                        max-height: 60px; 
                        height: auto;
                        width: auto;
                        margin-left: 15px;
                    }
                    .navbar-bg-brown {
                        background-color: #160944; /* Warna latar belakang navbar */
                    }
>>>>>>> 531eb1395f22169e7bec525090c2178eab54c92a

        body {
            background-color: #E2F1E7;
            padding: 0;
            margin: 0;
        }

        .navbar-brand {
            display: flex;
            align-items: center;
        }

        .navbar-logo {
            max-height: 60px;
            height: auto;
            width: auto;
            margin-left: 15px;
        }

        .navbar-bg-brown {
            background-color: #02293b;
            /* Warna latar belakang navbar */
        }

        /* Styling untuk logo di navbar */
        .navbar-logo {
            width: 60px;
            height: 60px;
        }

<<<<<<< HEAD
        /* Styling untuk teks logo */
        .text-logo {
            font-size: 18px;
            font-weight: bold;
            color: #ffffff;
            /* Warna teks logo */
            margin-left: 10px;
        }
=======
form h2 {
    color: rgb(0, 0, 0); 
    font-weight: bold;
    text-align: center;
    font-size: 40px;
    margin-bottom: 20px; /* Jarak bawah heading */
}
.form-control, .form-select {
    border-radius: 4px;
    border: 1px solid #160944;
    padding: 15px;
    font-size: 16px;
    margin-bottom: 10px; /* Tambahkan jarak bawah untuk input */
}
.form-check-label {
    color: rgb(0, 0, 0);
}
.form-control:focus, .form-select:focus {
    border-color: white; 
    box-shadow: 0 0 5px rgba(212, 175, 55, 0.5);
}
>>>>>>> 531eb1395f22169e7bec525090c2178eab54c92a

        /* Styling untuk link dalam navbar */
        .nav-link p {
            margin-bottom: 0;
            font-size: 16px;
        }

        /* Styling untuk ikon profil */
        .profile-icon {
            font-size: 30px;
            /* Ukuran ikon profil */
            color: #ffffff;
            /* Warna ikon profil */
            margin-right: 8px;
        }

        /* Styling untuk teks profil */
        .profile-text {
            font-weight: bold;
            color: #ffffff;
            /* Warna teks profil */
        }

        .navbar-nav {
            margin-left: 62%;
        }

<<<<<<< HEAD
        form {
            background: #ffffff;
        }

        form h2 {
            color: rgb(0, 0, 0);
            font-weight: bold;
            text-align: center;
            font-size: 40px;
            margin-bottom: 20px;
            /* Jarak bawah heading */
        }
=======
.btn-primary {
    background-color: #777838; 
    border: none;
    padding: 10px 20px;
    font-size: 18px;
    font-weight: bold;
    border-radius: 4px;
    transition: background-color 0.3s ease;
}

.btn-primary:hover {
    background-color: #777838; 
}
.mb-3 {
    margin-bottom: 20px;
}
.nav-item {
    display: flex;
    align-items: center;
    margin-left: 150px;
}
>>>>>>> 531eb1395f22169e7bec525090c2178eab54c92a

        .form-control,
        .form-select {
            border-radius: 4px;
            border: 1px solid #02293b;
            padding: 15px;
            font-size: 16px;
            margin-bottom: 10px;
            /* Tambahkan jarak bawah untuk input */
        }

        .form-check-label {
            color: rgb(0, 0, 0);
        }

        .form-control:focus,
        .form-select:focus {
            border-color: white;
            box-shadow: 0 0 5px rgba(212, 175, 55, 0.5);
        }

        .form-group {
            width: calc(50% - 50px);
            /* Setengah lebar form, minus jarak antar elemen */
            min-width: 200px;
            /* Lebar minimal untuk setiap form-group */
        }

        .form-label {
            margin-bottom: 8px;
            /* Jarak antara label dan input */
            color: rgb(8, 8, 8);
        }

        .form-control,
        .form-select {
            width: 100%;
            /* Input dan select menyesuaikan lebar kontainernya */
            padding: 10px;
            /* Tambahan padding untuk kenyamanan input */
        }

        @media (max-width: 768px) {
            .form-group {
                width: 100%;
                /* Pada layar kecil, form-group mengambil lebar penuh */
            }
        }

        .btn-primary {
            background-color: #28a745;
            border: none;
            padding: 10px 20px;
            font-size: 18px;
            font-weight: bold;
            border-radius: 4px;
            transition: background-color 0.3s ease;
        }

        .btn-primary:hover {
            background-color: #629584;
        }

        .mb-3 {
            margin-bottom: 20px;
        }

        .nav-item {
            display: flex;
            align-items: center;
            margin-left: 150px;
        }

        .nav-link span {
            white-space: nowrap;
        }

        .linked,
        .dropdown-form {
            display: flex;
            align-items: center;
        }

        .navbar .linked {
            margin-left: 195%;
        }

        .dropdown-form {
            margin-left: 15px;
        }

        .linked,
        .nav-item {
            padding-top: 7px;
        }

        .linked .nav-item i {
            margin-right: 6px;
        }

        .form-label {
            font-weight: bold;
            /* Teks label tebal */
            margin-bottom: 5px;
            /* Ruang di bawah label */
        }

        .col-md-4 {
            margin-bottom: -10px;
            /* Ruang antara kolom */
        }

        .form-control {
            width: 100%;
            /* Lebar penuh dalam kolom */
            height: 50px;
            /* Tentukan tinggi tertentu */
            border: 2px solid #007bff;
            /* Change border color */
            border-radius: 8px;
            /* Rounded corners */
            padding: 10px;
            /* Padding inside the input */
            transition: border-color 0.3s;
            /* Smooth transition for border color */
        }

        .form-control:focus {
            border-color: #0056b3;
            /* Darker blue on focus */
            box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
            /* Glow effect on focus */
        }
    </style>
</head>

<body onload="setMaxDate()">
    <nav class="navbar navbar-expand-lg navbar-light navbar-bg-brown fixed-top">
        <a class="navbar-brand" href="#">
            <img src="{{ asset('assets/dist/assets/img/simedia.png') }}" class="navbar-logo d-inline-block align-top"
                alt="">
            <div class="text-logo">FORM PENGAJUAN PEMBUATAN SIM</div>
        </a>

        <div class="d-flex ms-auto align-items-center"> <!-- Tambahkan div pembungkus -->
            <ul class="linked">
                <li class="nav-item">
                    <a href="dashboard" class="nav-link text-white d-flex align-items-center">
                        <i class="bi bi-speedometer2 me-2"></i>
                        <span class="mb-0">Dashboard</span>
                    </a>
                </li>
            </ul>

            <div class="dropdown-form">
                <a class="dropdown-toggle d-flex align-items-center text-white text-decoration-none" href="#"
                    role="button" id="dropdownProfile" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="bi bi-person-circle profile-icon me-2"></i>
                    <span class="profile-text">KORLANTAS POLRI</span>
                </a>
            </div>
        </div>
    </nav>
    <div class="container" style="max-width: 1200px; padding-top: 95px; margin-left: 600px;">
        <!-- Formulir Pembuatan SIM -->
        <div class="col-lg-8">
            <form action="{{ route('catatan.store') }}" method="post" class="p-4 border rounded shadow-sm"
                enctype="multipart/form-data">
                @csrf
                <h2 class="mb-4 text-center">Formulir Pembuatan Kartu SIM</h2>
                <div class="row g-3">
                    <!-- Nama Lengkap -->
                    <div class="col-md-6">
                        <label for="name" class="form-label">Nama Lengkap</label>
                        <input type="text" class="form-control" id="name" name="name"
                            placeholder="Masukan Nama Lengkap" required>
                    </div>
                    <!-- Nomor KTP -->
                    <div class="col-md-6">
                        <label for="nomor_ktp" class="form-label">Nomor KTP</label>
                        <input type="text" class="form-control" id="nomor_ktp" name="nomor_ktp"
                            placeholder="Masukan Nomor KTP" required>
                    </div>
                    <!-- Tempat Lahir -->
                    <div class="col-md-6">
                        <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
                        <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir"
                            placeholder="Masukan Tempat Lahir" required>
                    </div>
                    <!-- Tanggal Lahir -->
                    <div class="col-md-6">
                        <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                        <input type="date" id="birthdate" class="form-control" id="tanggal_lahir"
                            name="tanggal_lahir" required>
                    </div>
                    <!-- Alamat Lengkap -->
                    <div class="col-md-6">
                        <label for="alamat" class="form-label">Alamat Lengkap</label>
                        <textarea class="form-control" id="alamat" name="alamat" rows="3" placeholder="Masukan Alamat Lengkap"
                            required></textarea>
                    </div>
                    <!-- Jenis Kelamin -->
                    <div class="col-md-6">
                        <label class="form-label">Jenis Kelamin</label>
                        <div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="jenis_kelamin"
                                    id="jenis_kelamin-laki" value="Laki-laki" required>
                                <label class="form-check-label" for="jenis_kelamin-laki">Laki-laki</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="jenis_kelamin"
                                    id="jenis_kelamin-perempuan" value="Perempuan" required>
                                <label class="form-check-label" for="jenis_kelamin-perempuan">Perempuan</label>
                            </div>
                        </div>
                    </div>
                    <!-- Golongan Darah -->
                    <div class="col-md-6">
                        <label for="golongan_darah" class="form-label">Golongan Darah</label>
                        <select class="form-control" id="golongan_darah" name="golongan_darah" required>
                            <option value="" disabled selected>Pilih Golongan Darah</option>
                            <option value="A">A</option>
                            <option value="B">B</option>
                            <option value="AB">AB</option>
                            <option value="O">O</option>
                        </select>
                    </div>
                    <!-- Pendidikan Terakhir -->
                    <div class="col-md-6">
                        <label for="pendidikan" class="form-label">Pendidikan Terakhir</label>
                        <select class="form-control" id="pendidikan" name="pendidikan" required>
                            <option value="" disabled selected>Pilih Pendidikan Terakhir</option>
                            <option value="SD">SD</option>
                            <option value="SMP">SMP</option>
                            <option value="SMA">SMA</option>
                            <option value="D1">D1</option>
                            <option value="D3">D3</option>
                            <option value="S1">S1</option>
                            <option value="S2">S2</option>
                            <option value="S3">S3</option>
                        </select>
                    </div>
                    <!-- Jenis SIM -->
                    <div class="col-md-6">
                        <label for="jenis_sim" class="form-label">Jenis SIM</label>
                        <select class="form-control" id="jenis_sim" name="jenis_sim" required>
                            <option value="" disabled selected>Pilih Jenis SIM</option>
                            <option value="SIM A">SIM A</option>
                            <option value="SIM B1">SIM B1</option>
                            <option value="SIM B2">SIM B2</option>
                            <option value="SIM C">SIM C</option>
                            <option value="SIM D">SIM D</option>
                        </select>
                    </div>
                    <!-- Tanggal Pengajuan -->
                    <div class="col-md-6">
                        <label for="tanggal_pengajuan" class="form-label">Tanggal Pengajuan</label>
                        <input type="date" class="form-control" id="tanggal_pengajuan" name="tanggal_pengajuan"
                            readonly value="{{ date('Y-m-d') }}">
                    </div>
                </div>
                <!-- Keterangan di Atas Unggah Dokumen -->
                <h5 class="mt-4 text-center" style="color: #e74545; padding-top:10px; padding-bottom: 10px;">Silakan
                    unggah dokumen berikut untuk melengkapi pendaftaran SIM</h5>
                <!-- Unggah Dokumen Secara Horizontal -->
                <div class="row g-3 mt-3">
                    <!-- Unggah Kartu Keluarga -->
                    <div class="col-md-4">
                        <label for="kk" class="form-label">Kartu Keluarga</label>
                        <input type="file" class="form-control" id="kk" name="kk" accept="image/*"
                            required>
                    </div>

                    <!-- Unggah KTP -->
                    <div class="col-md-4">
                        <label for="ktp" class="form-label">KTP</label>
                        <input type="file" class="form-control" id="ktp" name="ktp" accept="image/*"
                            required>
                    </div>

                    <!-- Unggah Pas Foto -->
                    <div class="col-md-4">
                        <label for="pas_foto" class="form-label">Pas Foto</label>
                        <input type="file" class="form-control" id="pas_foto" name="pas_foto" accept="image/*"
                            required>
                    </div>
                </div>
                <div class="mb-3 text-center" style="padding-top: 40px;">
                    <button type="submit" class="btn btn-primary">Ajukan SIM!</button>
                </div>
            </form>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    </main>
    </div> <!--end::App Wrapper--> <!--begin::Script--> <!--begin::Third Party Plugin(OverlayScrollbars)-->
    <script src="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.3.0/browser/overlayscrollbars.browser.es6.min.js"
        integrity="sha256-H2VM7BKda+v2Z4+DRy69uknwxjyDRhszjXFhsL4gD3w=" crossorigin="anonymous"></script>
    <!--end::Third Party Plugin(OverlayScrollbars)--><!--begin::Required Plugin(popperjs for Bootstrap 5)-->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha256-whL0tQWoY1Ku1iskqPFvmZ+CHsvmRWx/PIoEvIeWh4I=" crossorigin="anonymous"></script>
    <!--end::Required Plugin(popperjs for Bootstrap 5)--><!--begin::Required Plugin(Bootstrap 5)-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha256-YMa+wAM6QkVyz999odX7lPRxkoYAan8suedu4k2Zur8=" crossorigin="anonymous"></script> <!--end::Required Plugin(Bootstrap 5)--><!--begin::Required Plugin(AdminLTE)-->
    <script src="{{ asset('assets') }}/dist/js/adminlte.js"></script> <!--end::Required Plugin(AdminLTE)--><!--begin::OverlayScrollbars Configure-->
    <script>
        const SELECTOR_SIDEBAR_WRAPPER = ".sidebar-wrapper";
        const Default = {
            scrollbarTheme: "os-theme-light",
            scrollbarAutoHide: "leave",
            scrollbarClickScroll: true,
        };
        document.addEventListener("DOMContentLoaded", function() {
            const sidebarWrapper = document.querySelector(SELECTOR_SIDEBAR_WRAPPER);
            if (
                sidebarWrapper &&
                typeof OverlayScrollbarsGlobal?.OverlayScrollbars !== "undefined"
            ) {
                OverlayScrollbarsGlobal.OverlayScrollbars(sidebarWrapper, {
                    scrollbars: {
                        theme: Default.scrollbarTheme,
                        autoHide: Default.scrollbarAutoHide,
                        clickScroll: Default.scrollbarClickScroll,
                    },
                });
            }
        });
    </script> <!--end::OverlayScrollbars Configure--> <!-- OPTIONAL SCRIPTS --> <!-- sortablejs -->
    <script src="https://cdn.jsdelivr.net/npm/sortablejs@1.15.0/Sortable.min.js"
        integrity="sha256-ipiJrswvAR4VAx/th+6zWsdeYmVae0iJuiR+6OqHJHQ=" crossorigin="anonymous"></script> <!-- sortablejs -->
    <script>
        const connectedSortables =
            document.querySelectorAll(".connectedSortable");
        connectedSortables.forEach((connectedSortable) => {
            let sortable = new Sortable(connectedSortable, {
                group: "shared",
                handle: ".card-header",
            });
        });

        const cardHeaders = document.querySelectorAll(
            ".connectedSortable .card-header",
        );
        cardHeaders.forEach((cardHeader) => {
            cardHeader.style.cursor = "move";
        });
    </script> <!-- apexcharts -->
    <script src="https://cdn.jsdelivr.net/npm/apexcharts@3.37.1/dist/apexcharts.min.js"
        integrity="sha256-+vh8GkaU7C9/wbSLIcwq82tQ2wTf44aOHA8HlBMwRI8=" crossorigin="anonymous"></script> <!-- ChartJS -->
    <script>
        // NOTICE!! DO NOT USE ANY OF THIS JAVASCRIPT
        // IT'S ALL JUST JUNK FOR DEMO
        // ++++++++++++++++++++++++++++++++++++++++++

        const sales_chart_options = {
            series: [{
                    name: "Digital Goods",
                    data: [28, 48, 40, 19, 86, 27, 90],
                },
                {
                    name: "Electronics",
                    data: [65, 59, 80, 81, 56, 55, 40],
                },
            ],
            chart: {
                height: 300,
                type: "area",
                toolbar: {
                    show: false,
                },
            },
            legend: {
                show: false,
            },
            colors: ["#0d6efd", "#20c997"],
            dataLabels: {
                enabled: false,
            },
            stroke: {
                curve: "smooth",
            },
            xaxis: {
                type: "datetime",
                categories: [
                    "2023-01-01",
                    "2023-02-01",
                    "2023-03-01",
                    "2023-04-01",
                    "2023-05-01",
                    "2023-06-01",
                    "2023-07-01",
                ],
            },
            tooltip: {
                x: {
                    format: "MMMM yyyy",
                },
            },
        };

        const sales_chart = new ApexCharts(
            document.querySelector("#revenue-chart"),
            sales_chart_options,
        );
        sales_chart.render();
    </script> <!-- jsvectormap -->
    <script src="https://cdn.jsdelivr.net/npm/jsvectormap@1.5.3/dist/js/jsvectormap.min.js"
        integrity="sha256-/t1nN2956BT869E6H4V1dnt0X5pAQHPytli+1nTZm2Y=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/jsvectormap@1.5.3/dist/maps/world.js"
        integrity="sha256-XPpPaZlU8S/HWf7FZLAncLg2SAkP8ScUTII89x9D3lY=" crossorigin="anonymous"></script> <!-- jsvectormap -->
    <script>
        const visitorsData = {
            US: 398, // USA
            SA: 400, // Saudi Arabia
            CA: 1000, // Canada
            DE: 500, // Germany
            FR: 760, // France
            CN: 300, // China
            AU: 700, // Australia
            BR: 600, // Brazil
            IN: 800, // India
            GB: 320, // Great Britain
            RU: 3000, // Russia
        };

        // World map by jsVectorMap
        const map = new jsVectorMap({
            selector: "#world-map",
            map: "world",
        });

        // Sparkline charts
        const option_sparkline1 = {
            series: [{
                data: [1000, 1200, 920, 927, 931, 1027, 819, 930, 1021],
            }, ],
            chart: {
                type: "area",
                height: 50,
                sparkline: {
                    enabled: true,
                },
            },
            stroke: {
                curve: "straight",
            },
            fill: {
                opacity: 0.3,
            },
            yaxis: {
                min: 0,
            },
            colors: ["#DCE6EC"],
        };

        const sparkline1 = new ApexCharts(
            document.querySelector("#sparkline-1"),
            option_sparkline1,
        );
        sparkline1.render();

        const option_sparkline2 = {
            series: [{
                data: [515, 519, 520, 522, 652, 810, 370, 627, 319, 630, 921],
            }, ],
            chart: {
                type: "area",
                height: 50,
                sparkline: {
                    enabled: true,
                },
            },
            stroke: {
                curve: "straight",
            },
            fill: {
                opacity: 0.3,
            },
            yaxis: {
                min: 0,
            },
            colors: ["#DCE6EC"],
        };

        const sparkline2 = new ApexCharts(
            document.querySelector("#sparkline-2"),
            option_sparkline2,
        );
        sparkline2.render();

        const option_sparkline3 = {
            series: [{
                data: [15, 19, 20, 22, 33, 27, 31, 27, 19, 30, 21],
            }, ],
            chart: {
                type: "area",
                height: 50,
                sparkline: {
                    enabled: true,
                },
            },
            stroke: {
                curve: "straight",
            },
            fill: {
                opacity: 0.3,
            },
            yaxis: {
                min: 0,
            },
            colors: ["#DCE6EC"],
        };

        const sparkline3 = new ApexCharts(
            document.querySelector("#sparkline-3"),
            option_sparkline3,
        );
        sparkline3.render();
    </script> <!--end::Script-->
    <footer
        style="
     text-align: center;
     padding: 15px;
     color: rgb(0, 0, 0);
     font-size: 14px;
     padding-top: 20px;
 ">
        <strong>Copyright &copy; 2024 <a href="/sesi"
                style="color: rgb(50, 77, 196); text-decoration: none;">SIMedia</a>.</strong>
        All rights reserved.
        <div style="float: right; display: inline-block;">
            <b>Version</b> 3.2.0
        </div>
    </footer>
</body><!--end::Body-->

</html>
