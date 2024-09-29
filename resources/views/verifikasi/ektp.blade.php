<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verifikasi e-KTP</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fontsource/source-sans-3@5.0.12/index.css" integrity="sha256-tXJfXfp6Ewt1ilPzLDtQnJV4hclT9XuaZUKyUvmyr+Q=" crossorigin="anonymous"><!--end::Fonts--><!--begin::Third Party Plugin(OverlayScrollbars)-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.3.0/styles/overlayscrollbars.min.css" integrity="sha256-dSokZseQNT08wYEWiz5iLI8QPlKxG+TswNRD8k35cpg=" crossorigin="anonymous"><!--end::Third Party Plugin(OverlayScrollbars)--><!--begin::Third Party Plugin(Bootstrap Icons)-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.min.css" integrity="sha256-Qsx5lrStHZyR9REqhUF8iQt73X06c8LGIUPzpOhwRrI=" crossorigin="anonymous"><!--end::Third Party Plugin(Bootstrap Icons)--><!--begin::Required Plugin(AdminLTE)-->
    <link rel="stylesheet" href="{{asset('assets')}}/dist/css/adminlte.css"><!--end::Required Plugin(AdminLTE)--><!-- apexcharts -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/apexcharts@3.37.1/dist/apexcharts.css" integrity="sha256-4MX+61mt9NVvvuPjUWdUdyfZfxSB1/Rf9WtqRHgG5S0=" crossorigin="anonymous"><!-- jsvectormap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/jsvectormap@1.5.3/dist/css/jsvectormap.min.css" integrity="sha256-+uGLJmmTKOqBr+2E6KDYs/NRsHxSkONXFHUL0fy2O/4=" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <style>
                    *{
                        font-family: "Ubuntu", system-ui;
                        font-weight: 500;
                        font-style: normal;
                    }
                    body {
                        background-color: #cccecf;
                        padding: 0;
                        margin: 0;
                    } 

                    /* Styling untuk Card */
                    .card {
                        border-radius: 12px;
                        border: none;
                        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                        overflow: hidden; /* Untuk efek border-radius yang lebih baik */
                    }

                    .card-header {
                        background-color: #102C57;
                        color: #ffffff;
                        font-size: 1.25rem;
                        font-weight: bold;
                        text-align: center;
                        padding: 15px;
                        border-bottom: none;
                        align-items: center;
                    }

                    .card-body {
                        padding: 30px;
                        background-color: #ffffff; /* Warna latar belakang body card */
                    }
                    .form-label {
                        font-weight: bold;
                        font-size: 1rem;
                        margin-bottom: 30px;
                        display: inline-block;
                    }

                    /* Styling untuk Pesan Sukses */
                    .alert-success {
                        border-radius: 6px;
                        font-size: 1rem;
                        margin-bottom: 20px;
                        padding: 15px;
                        background-color: #d4edda;
                        color: #155724;
                    }
                    /* Styling untuk navbar dengan latar belakang coklat */
                    .navbar-bg-brown {
                        background-color: #102C57; /* Warna latar belakang navbar */
                        display: flex; /* Menggunakan Flexbox untuk menyelaraskan item secara horizontal */
                        align-items: center; /* Menyelaraskan item secara vertikal di tengah */
                    }

                    /* Styling untuk logo di navbar */
                    .navbar-logo {
                        width: 60px; /* Lebar logo */
                        height: 60px; /* Tinggi logo */
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
                        background-color: #6c757d; /* Warna background default */
                        text-align: center; /* Menengahkan teks */
                        margin-bottom: 8px; /* Jarak antar item */
                        font-weight: 500; /* Tebal font */
                    }
                    .navbar-nav{
                        margin-left: 65%;
                    }
                    .nav-item{
                        margin-left: 230px;
                    }
                    .icon-large {
                        font-size: 100px; /* Atur ukuran ikon menjadi lebih besar */
                    }
                    .custom-button {
                    background-color: #102C57; /* Warna dasar biru */
                    border: none; /* Menghilangkan border default */
                    border-radius: 25px; /* Membuat sudut tombol menjadi bulat */
                    color: #fff; /* Warna teks putih */
                    font-size: 18px; /* Ukuran font lebih besar */
                    padding: 12px 20px; /* Jarak dalam tombol */
                    transition: background-color 0.3s ease, transform 0.2s ease; /* Efek transisi untuk hover */
                    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Bayangan halus pada tombol */
                }

                .custom-button:hover {
                    background-color: #102C57; /* Warna saat hover lebih gelap */
                    transform: translateY(-2px); /* Efek angkat saat hover */
                    box-shadow: 0 6px 8px rgba(0, 0, 0, 0.15); /* Meningkatkan bayangan saat hover */
                }

                .custom-button:active {
                    background-color: #102C57; /* Warna lebih gelap saat tombol ditekan */
                    transform: translateY(1px); /* Mengurangi efek angkat saat tombol ditekan */
                    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2); /* Mengurangi bayangan saat tombol ditekan */
                }
                /* Styling untuk footer */
            .footer {
                position: fixed;
                bottom: 0;
                left: 0;
                width: 100%;
                text-align: center;
                color: #000000; /* Teks berwarna putih */
                background: transparent; /* Latar belakang transparan */
                padding: 10px 0; /* Padding atas dan bawah */
                font-size: 14px; /* Ukuran font */
            }

            /* Styling untuk bagian kanan footer */
            .footer .float-right {
                margin-right: 30px; /* Margin kanan */
            }

            /* Responsif: mengatur float-right untuk tampilan kecil */
            @media (max-width: 576px) {
                .footer .float-right {
                    float: none;
                    text-align: center;
                    margin: 0;
                }
            }

    </style>
</head>
<body>
        @if (session('Success'))
        <div class="alert alert-success">
            {{ session('Success') }}
        </div>
    @endif
    <nav class="navbar navbar-expand-lg navbar-light navbar-bg-brown fixed-top" style="padding: 12px;">
        <img src="{{ asset('assets/dist/assets/img/simedia.png') }}" class="navbar-logo" alt="Logo">
        <div class="text-logo">DIGITAL KORLANTAS POLRI</div>

        <div class="collapse navbar-collapse me-3">
            <ul class="navbar-nav d-flex align-items-center">
                <li class="nav-item">
                    <a href="/sesi" class="nav-link text-white d-flex align-items-center">
                        <i class="bi bi-box-arrow-in-right me-2" style="margin-left: -20px;"></i>
                        <p class="d-inline ms-0 mb-0">Login kembali</p>
                    </a>
                </li>
            </ul>
            <div class="dropdown ms-auto">
                <a class="dropdown-toggle d-flex align-items-center text-white text-decoration-none" href="#" role="button" id="dropdownProfile" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="bi bi-person-circle profile-icon me-2"></i>
                    <span class="profile-text">KORLANTAS POLRI</span>
                </a>
            </div>
        </div>        
    </nav> 
    <!-- Konten Utama -->
    <div class="container" style="margin-top: 190px;">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-sm">
                    <div class="card-header">
                        <h4 class="mb-0">Verifikasi e-KTP</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('verifikasi.ektp.submit') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group mb-3">
                                <label for="nik" class="form-label">NIK</label>
                                <input type="text" class="form-control" id="nik" name="nik" placeholder="Masukkan NIK 16 digit" maxlength="16" required>
                            </div>
                            
                            <div class="form-group mb-3">
                                <label for="nama" class="form-label">Nama Sesuai E-KTP</label>
                                <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan nama lengkap Anda" required>
                            </div>
                        
                            <div class="form-group mb-3">
                                <label for="file_ektp" class="form-label">Upload e-KTP</label>
                                <input type="file" class="form-control" id="file_ektp" name="file_ektp" required>
                            </div>
                            <button type="submit" class="btn btn-primary w-100 custom-button">Kirim Verifikasi</button>
                        </form>     
                        @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif       
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="footer">
        <strong>Copyright &copy; 2024<a href="/sesi">SIMedia</a>.</strong>
        All rights reserved.
        <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> 3.2.0
        </div>
        </footer>
</body>
</html>
