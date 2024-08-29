<!DOCTYPE html>
<html lang="en"> <!--begin::Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>History Pengajuan Sim</title><!--begin::Primary Meta Tags-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="title" content="AdminLTE v4 | Dashboard">
    <meta name="author" content="ColorlibHQ">
    <meta name="description" content="AdminLTE is a Free Bootstrap 5 Admin Dashboard, 30 example pages using Vanilla JS.">
    <meta name="keywords" content="bootstrap 5, bootstrap, bootstrap 5 admin dashboard, bootstrap 5 dashboard, bootstrap 5 charts, bootstrap 5 calendar, bootstrap 5 datepicker, bootstrap 5 tables, bootstrap 5 datatable, vanilla js datatable, colorlibhq, colorlibhq dashboard, colorlibhq admin dashboard"><!--end::Primary Meta Tags--><!--begin::Fonts-->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fontsource/source-sans-3@5.0.12/index.css" integrity="sha256-tXJfXfp6Ewt1ilPzLDtQnJV4hclT9XuaZUKyUvmyr+Q=" crossorigin="anonymous"><!--end::Fonts--><!--begin::Third Party Plugin(OverlayScrollbars)-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.3.0/styles/overlayscrollbars.min.css" integrity="sha256-dSokZseQNT08wYEWiz5iLI8QPlKxG+TswNRD8k35cpg=" crossorigin="anonymous"><!--end::Third Party Plugin(OverlayScrollbars)--><!--begin::Third Party Plugin(Bootstrap Icons)-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.min.css" integrity="sha256-Qsx5lrStHZyR9REqhUF8iQt73X06c8LGIUPzpOhwRrI=" crossorigin="anonymous"><!--end::Third Party Plugin(Bootstrap Icons)--><!--begin::Required Plugin(AdminLTE)-->
    <link rel="stylesheet" href="{{asset('assets')}}/dist/css/adminlte.css"><!--end::Required Plugin(AdminLTE)--><!-- apexcharts -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/apexcharts@3.37.1/dist/apexcharts.css" integrity="sha256-4MX+61mt9NVvvuPjUWdUdyfZfxSB1/Rf9WtqRHgG5S0=" crossorigin="anonymous"><!-- jsvectormap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/jsvectormap@1.5.3/dist/css/jsvectormap.min.css" integrity="sha256-+uGLJmmTKOqBr+2E6KDYs/NRsHxSkONXFHUL0fy2O/4=" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <style>
        /* Gaya Umum */
body {
    font-family: 'Roboto', sans-serif;
    background-color: #f4f4f4;
    color: #333;
}

/* Pesan Sukses */
.alert-success {
    background-color: #28a745;
    color: #fff;
    border-radius: 5px;
    padding: 10px 15px;
    margin-bottom: 20px;
    text-align: center;
}

/* Gaya Kartu */
.card-body {
    background-color: #ffffff;
    padding: 30px;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    margin-bottom: 30px;
}

/* Gaya Tabel */
.table {
    border-collapse: separate;
    border-spacing: 0;
    width: 100%;
}

.table thead th {
    background-color: #682109;
    color: #fff;
    padding: 12px;
    border: none;
    text-transform: uppercase;
}

.table tbody td {
    padding: 12px;
    border: none;
    border-bottom: 1px solid #ddd;
}

/* Tombol */
.btn {
    font-size: 14px;
    font-weight: bold;
    border-radius: 5px;
    padding: 8px 16px;
    text-transform: uppercase;
}

.btn-danger {
    background-color: #dc3545;
    border-color: #dc3545;
   
}

.btn-float {
    background-color: #ffc107;
    margin-left: 5px;
}
.app-footer {
    background-color: #343a40;
    color: #fff;
    padding: 20px 0;
    text-align: center;
    font-size: 14px;
}
.app-footer a:hover {
    text-decoration: underline;
}

/* Gaya Modal */
.modal-content {
    border-radius: 8px;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
}

.modal-header {
    background-color: #682109;
    color: #fff;
    border-bottom: none;
}

.modal-footer {
    border-top: none;
    justify-content: center;
}

.modal-footer .btn {
    min-width: 100px;
}

                    body {
                        font-family: Arial, sans-serif;
                        background-color: transparent;
                        margin: 0;
                        padding: 0;
                    }
                    /* Styling untuk navbar dengan latar belakang coklat */
                    .navbar-bg-brown {
                        background-color: #8B4513; /* Warna latar belakang navbar */
                        display: flex; /* Menggunakan Flexbox untuk menyelaraskan item secara horizontal */
                        align-items: center; /* Menyelaraskan item secara vertikal di tengah */
                    }

                    /* Styling untuk logo di navbar */
                    .navbar-logo {
                        width: 80px; /* Lebar logo */
                        height: 40px; /* Tinggi logo */
                        margin-right: 10px; /* Jarak antara logo dan teks */
                    }

                    /* Styling untuk teks logo */
                    .text-logo {
                        font-size: 18px; /* Ukuran font teks logo */
                        font-weight: bold; /* Berat font teks logo */
                        color: #ffffff; /* Warna teks logo */
                    }

                    /* Styling untuk link dalam navbar */
                    .nav-link p {
                        margin-bottom: 0;
                        font-size: 16px;
                    }

                    /* Styling untuk ikon profil */
                    .profile-icon {
                        font-size: 30px; /* Ukuran ikon profil */
                        color: #ffffff; /* Warna ikon profil */
                        margin-right: 8px;
                    }

                    /* Styling untuk teks profil */
                    .profile-text {
                        font-weight: bold;
                        color: #ffffff; /* Warna teks profil */
                    }
                    .dropdown-menu-custom {
                        background-color: transparent; /* Warna latar belakang dropdown */
                        border: 1px solid #6c757d; /* Warna border */
                        border-radius: 0.5rem; /* Radius border */
                        padding: 10px; /* Padding dalam dropdown */
                        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Bayangan dropdown */
                    }
                    /* Styling untuk item dalam dropdown */
                    .dropdown-item-custom {
                        color: #ffffff; /* Warna teks item */
                        padding: 8px 12px; /* Padding item */
                        border-radius: 0.3rem; /* Radius border item */
                        transition: background-color 0.2s ease, color 0.2s ease; /* Animasi transisi */
                    }
                    .dropdown-item-custom {
                        color: #ffffff;
                        padding: 8px 12px;
                        border-radius: 0.3rem;
                        transition: background-color 0.2s ease, color 0.2s ease;
                        background-color: #dc3545; /* Warna background default */
                        text-align: center; /* Menengahkan teks */
                        margin-bottom: 8px; /* Jarak antar item */
                        font-weight: 500; /* Tebal font */
                    }
                    .navbar-nav{
                        margin-left: 65%;
                    }
                    .nav-item{
                        margin-left: 150px;
                    }
                    .dashboard-container {
                        display: flex;
                        justify-content: space-between; /* Menyebarkan elemen ke kiri dan kanan */
                        align-items: center;
                        padding: 20px 20px;
                        background-color: #f8f9fa;
                        border-bottom: 1px solid #ddd;
                        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
                    }
                    .dashboard-container {
                        width: 100%; /* Lebar sesuai dengan navbar */
                        background-color: #f0f0f0; /* Warna latar belakang sedikit berbeda dari navbar */
                        padding: 10px 0; /* Padding atas dan bawah */
                        border-top: 2px solid #e7e7e7; /* Garis atas untuk memisahkan dari navbar */
                        margin-top: 60px; /* Menambahkan margin-top untuk menghindari tumpang tindih dengan navbar */
                        padding-top: 20px;
                        margin-bottom: 10px;
                    }
                    .dashboard-text {
                        margin: 10px; /* Menghilangkan margin default */
                        font-size: 23px; /* Ukuran font untuk teks Dashboard */
                        color: #333; /* Warna teks */
                        font-family: Arial, sans-serif;
                        font-weight: 500;
                        margin-left: 25px;

                    }
                    .dashboard-text {
                        font-size: 24px;
                        font-weight: bold;
                        color: #333;
                    
                    }
                    .search-dropdown-container {
                        display: flex;
                        align-items: center;
                        position: relative; /* Memastikan dropdown-content terletak dengan benar relatif terhadap kontainer ini */
                        margin-right: 20px;
                    }

                    .input-wrapper {
                        position: relative;
                        width: 100%;
                    }

                    .search-input {
                        width: 100%;
                        padding: 10px 173px 10px 15px;
                        border: 2px solid #ccc;
                        border-radius: 5px;
                        outline: none;
                        font-size: 16px;
                        transition: border-color 0.3s ease;
                    }

                    .search-input:focus {
                        border-color: #bd2130;
                    }

                    .dropdown-icon {
                        position: absolute;
                        right: 10px;
                        top: 50%;
                        transform: translateY(-50%);
                        pointer-events: none;
                        color: #aaa;
                        font-size: 20px;
                    }

                    .dropdown-content {
                        display: none;
                        position: absolute;
                        top: 100%; /* Pastikan dropdown berada di bawah form field */
                        left: 0;
                        background-color: #ffffff;
                        width: 100%; /* Memastikan dropdown sesuai dengan lebar input field */
                        box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.1);
                        border-radius: 0 0 8px 8px;
                        z-index: 1;
                        max-height: 200px;
                        overflow-y: auto;
                        border-top: 2px solid #bd2130; /* Warna border sesuai dengan yang diinginkan */
                    }

                    .dropdown-content a {
                        color: #333;
                        padding: 10px 15px;
                        text-decoration: none;
                        display: block;
                        transition: background-color 0.3s ease;
                    }

                    .dropdown-content a:hover {
                        background-color: #f1f1f1;
                    }

                    .search-dropdown-container:focus-within .dropdown-content {
                        display: block;
                    }
                    .d-flex {
                        display: flex;
                    }

                    .justify-content-start {
                        justify-content: flex-start; /* Memposisikan elemen di awal baris */
                    }

                    .align-items-center {
                        align-items: center; /* Menyelaraskan elemen secara vertikal di tengah */
                    }

                    .gap-2 {
                        gap: 0.5rem; /* Memberikan jarak antara tombol */
                    }

                    /* Tambahan styling untuk tombol */
                    .btn-danger {
                        background-color: #dc3545;
                        border: none;
                        padding: 8px 16px;
                        border-radius: 5px;
                        font-weight: bold;
                        color: white;
                        transition: background-color 0.3s ease;
                    }

                    .btn-warning {
                        background-color: #ffc107;
                        border: none;
                        padding: 8px 16px;
                        border-radius: 5px;
                        font-weight: bold;
                        color: white;
                        transition: background-color 0.3s ease;
                    }

                    .btn-danger:hover, .btn-warning:hover {
                        opacity: 0.9; /* Menambahkan sedikit efek saat hover */
                    }
                    .text-content{
                        padding-top: 20px;
                    }
                  
                    
    </style>
</head> <!--end::Head--> <!--begin::Body-->
<body>
    <nav class="navbar navbar-expand-lg navbar-light navbar-bg-brown fixed-top" style="padding: 12px;">

        <img src="{{ asset('assets/dist/assets/img/lambangpolri.png') }}" class="navbar-logo" alt="Logo">
        <div class="text-logo">ZONA INTEGRITAS POLRI</div>

        <div class="collapse navbar-collapse me-3">
            <ul class="navbar-nav d-flex align-items-center">
                <li class="nav-item">
                    <a href="dashboard" class="nav-link text-white d-flex align-items-center">
                        <i class="bi bi-speedometer2 me-2"></i>
                        <p class="d-inline ms-0 mb-0">Dashboard</p>
                    </a>
                </li>
            </ul>
            <div class="dropdown ms-auto">
                <a class="dropdown-toggle d-flex align-items-center text-white text-decoration-none" href="#" role="button" id="dropdownProfile" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="bi bi-person-circle profile-icon me-2"></i>
                    <span class="profile-text">POLRES CIANJUR</span>
                </a>
            </div>
        </div>        
    </nav> 
    <div class="dashboard-container bg-light" style="position: fixed; top: 0; width: 100%; z-index: 1000;">
        <div class="dashboard-text">Data Inputan</div>
        <div class="search-dropdown-container">
            <div class="input-wrapper">
                <input type="text" placeholder="POLRES CIANJUR" class="search-input" id="search-input">
                <i class="bi bi-arrow-down-short dropdown-icon"></i>
            </div>
            <div class="dropdown-content" id="dropdown-content">
                <a href="#">POLRES CIANJUR</a>
            </div>
        </div>                                                              
    </div>       
    @if(session('Success'))
        <div class="alert alert-success">
            {{ session('Success') }}
        </div>
    @endif      
            <div class="app-content"> <!--begin::Container-->
                <div class="container-fluid" style="padding-top: 170px;"> <!--begin::Row-->
                    <div class="card-body">
                        <a href="create-sim" style="
                            background-color: #FFA500; /* Warna oranye */
                            color: white; /* Warna teks putih */
                            border: none; /* Menghapus border default */
                            padding: 10px 20px; /* Spasi dalam tombol */
                            text-align: center; /* Memastikan teks terpusat */
                            text-decoration: none; /* Menghapus garis bawah */
                            display: inline-block; /* Agar tombol memiliki spasi yang cukup */
                            font-size: 18px; /* Ukuran font */
                            border-radius: 5px; /* Sudut membulat */
                            transition: background-color 0.3s ease; /* Transisi warna saat hover */
                            margin-top: 5px;
                            margin-bottom: 25px;
                        " onmouseover="this.style.backgroundColor='#FF8C00'" onmouseout="this.style.backgroundColor='#FFA500'">Pelayanan SIM</a>

                        <table id="example1" class="table table-bordered table-striped text-center">
                            <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>Nomor Ktp</th>
                                    <th>Tempat Lahir</th>
                                    <th>Tanggal Lahir</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Golongan Darah</th>
                                    <th>Pendidikan</th>
                                    <th>Jenis Sim</th>
                                    <th>Tanggal Pengajuan</th>
                                    <th>Lanjutan</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($catatan as $history)
                                    <tr>
                                        <td>{{ $history->name }}</td>
                                        <td>{{ $history->nomor_ktp }}</td>
                                        <td>{{ $history->tempat_lahir }}</td>
                                        <td>{{ $history->tanggal_lahir }}</td>
                                        <td>{{ $history->jenis_kelamin }}</td>
                                        <td>{{ $history->golongan_darah }}</td>
                                        <td>{{ $history->pendidikan }}</td>
                                        <td>{{ $history->jenis_sim }}</td>
                                        <td>{{ $history->tanggal_pengajuan }}</td>
                                        <td>
                                            <div class="d-flex justify-content-start align-items-center gap-2">
                                                <!-- Tombol Edit -->
                                                <button class="btn btn-warning" onclick="showEditModal(
                                                    '{{ $history->id }}',
                                                    '{{ $history->name }}',
                                                    '{{ $history->nomor_ktp }}',
                                                    '{{ $history->tempat_lahir }}',
                                                    '{{ $history->tanggal_lahir }}',
                                                    '{{ $history->jenis_kelamin }}',
                                                    '{{ $history->golongan_darah }}',
                                                    '{{ $history->pendidikan }}',
                                                    '{{ $history->jenis_sim }}',
                                                    '{{ $history->tanggal_pengajuan }}'
                                                )">Edit</button>
                        
                                                <!-- Tombol Hapus dengan SweetAlert -->
                                                <button type="button" class="btn btn-danger delete-button" data-id="{{ $history->id }}">Hapus</button>
                        
                                                <!-- Form untuk penghapusan, disembunyikan -->
                                                <form id="delete-form-{{ $history->id }}" action="{{ route('history.destroy', $history->id) }}" method="POST" style="display: none;">
                                                    @csrf
                                                    @method('DELETE')
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        
                        <!-- Script untuk SweetAlert2 -->
                        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                        <script>
                        document.querySelectorAll('.delete-button').forEach(function(button) {
                            button.addEventListener('click', function() {
                                var historyId = this.getAttribute('data-id');
                        
                                Swal.fire({
                                    title: 'Yakin ingin menghapus?',
                                    text: "Data yang sudah dihapus tidak bisa dikembalikan!",
                                    icon: 'warning',
                                    showCancelButton: true,
                                    confirmButtonColor: '#d33',
                                    cancelButtonColor: '#3085d6',
                                    confirmButtonText: 'Ya, Hapus!',
                                    cancelButtonText: 'Batal'
                                }).then((result) => {
                                    if (result.isConfirmed) {
                                        document.getElementById('delete-form-' + historyId).submit();
                                    }
                                });
                            });
                        });
                        </script>                        
                    </div>
                    
                </div> <!--end::Container-->
                
            </div> <!--end::App Content-->
            
        </main> <!--end::App Main--> <!--begin::Footer-->
    </div> <!--end::App Wrapper--> <!--begin::Script--> <!--begin::Third Party Plugin(OverlayScrollbars)-->

    @include('history/modal')

    <script src="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.3.0/browser/overlayscrollbars.browser.es6.min.js" integrity="sha256-H2VM7BKda+v2Z4+DRy69uknwxjyDRhszjXFhsL4gD3w=" crossorigin="anonymous"></script> <!--end::Third Party Plugin(OverlayScrollbars)--><!--begin::Required Plugin(popperjs for Bootstrap 5)-->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha256-whL0tQWoY1Ku1iskqPFvmZ+CHsvmRWx/PIoEvIeWh4I=" crossorigin="anonymous"></script> <!--end::Required Plugin(popperjs for Bootstrap 5)--><!--begin::Required Plugin(Bootstrap 5)-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha256-YMa+wAM6QkVyz999odX7lPRxkoYAan8suedu4k2Zur8=" crossorigin="anonymous"></script> <!--end::Required Plugin(Bootstrap 5)--><!--begin::Required Plugin(AdminLTE)-->
    <script src="{{asset('assets')}}/dist/js/adminlte.js"></script> <!--end::Required Plugin(AdminLTE)--><!--begin::OverlayScrollbars Configure-->
    <script>
    </script> <!--end::OverlayScrollbars Configure--> <!-- OPTIONAL SCRIPTS --> <!-- sortablejs -->
    <script src="https://cdn.jsdelivr.net/npm/sortablejs@1.15.0/Sortable.min.js" integrity="sha256-ipiJrswvAR4VAx/th+6zWsdeYmVae0iJuiR+6OqHJHQ=" crossorigin="anonymous"></script> <!-- sortablejs -->
    <script>
     <script>
    document.addEventListener("DOMContentLoaded", function() {
        @foreach ($catatan as $history)
            const pengajuanTanggal{{ $history->id }} = "{{ $history->tanggal_pengajuan }}";
            console.log("Pengajuan Tanggal ID {{ $history->id }}:", pengajuanTanggal{{ $history->id }}); // Log tanggal pengajuan
            if (pengajuanTanggal{{ $history->id }}) {
                const pengajuanDate{{ $history->id }} = new Date(pengajuanTanggal{{ $history->id }});
                if (isNaN(pengajuanDate{{ $history->id }}.getTime())) {
                    console.error("Invalid date format for ID {{ $history->id }}");
                } else {
                    const dueDate{{ $history->id }} = new Date(pengajuanDate{{ $history->id }});
                    dueDate{{ $history->id }}.setDate(pengajuanDate{{ $history->id }}.getDate() + 3);

                    const options = { year: 'numeric', month: 'long', day: 'numeric' };
                    const formattedDueDate{{ $history->id }} = dueDate{{ $history->id }}.toLocaleDateString('id-ID', options);

                    console.log("Due Date for ID {{ $history->id }}:", formattedDueDate{{ $history->id }}); // Log tanggal tes
                    document.getElementById("due-date-{{ $history->id }}").textContent = formattedDueDate{{ $history->id }};
                }
            }
        @endforeach
    });
    <script src="https://cdn.jsdelivr.net/npm/apexcharts@3.37.1/dist/apexcharts.min.js" integrity="sha256-+vh8GkaU7C9/wbSLIcwq82tQ2wTf44aOHA8HlBMwRI8=" crossorigin="anonymous"></script> <!-- ChartJS -->
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
    <script src="https://cdn.jsdelivr.net/npm/jsvectormap@1.5.3/dist/js/jsvectormap.min.js" integrity="sha256-/t1nN2956BT869E6H4V1dnt0X5pAQHPytli+1nTZm2Y=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/jsvectormap@1.5.3/dist/maps/world.js" integrity="sha256-XPpPaZlU8S/HWf7FZLAncLg2SAkP8ScUTII89x9D3lY=" crossorigin="anonymous"></script> <!-- jsvectormap -->
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

    <script>
        function onEdit(btn, historyId) {
            const tr = btn.closest('tr');
            const tds = tr.querySelectorAll('td')
            const modalId = ['nik', 'tanggal', 'jam', 'lokasi', 'suhu']

            tds.forEach((td, index) => {
                if (index != tds.length - 1) {
                    document.getElementById(modalId[index]).value = td.textContent
                }
            });
            
            document.getElementById('modalForm').action=`editcatatan/${historyId}`
        }
    </script>
</body><!--end::Body-->

</html>