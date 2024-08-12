<!DOCTYPE html>
<html lang="en"> <!--begin::Head-->

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    {{-- <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Dashboard</title><!--begin::Primary Meta Tags-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="title" content="AdminLTE v4 | Dashboard">
    <meta name="author" content="ColorlibHQ">
    <meta name="description" content="AdminLTE is a Free Bootstrap 5 Admin Dashboard, 30 example pages using Vanilla JS.">
    <meta name="keywords" content="bootstrap 5, bootstrap, bootstrap 5 admin dashboard, bootstrap 5 dashboard, bootstrap 5 charts, bootstrap 5 calendar, bootstrap 5 datepicker, bootstrap 5 tables, bootstrap 5 datatable, vanilla js datatable, colorlibhq, colorlibhq dashboard, colorlibhq admin dashboard"><!--end::Primary Meta Tags--><!--begin::Fonts-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fontsource/source-sans-3@5.0.12/index.css" integrity="sha256-tXJfXfp6Ewt1ilPzLDtQnJV4hclT9XuaZUKyUvmyr+Q=" crossorigin="anonymous"><!--end::Fonts--><!--begin::Third Party Plugin(OverlayScrollbars)-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.3.0/styles/overlayscrollbars.min.css" integrity="sha256-dSokZseQNT08wYEWiz5iLI8QPlKxG+TswNRD8k35cpg=" crossorigin="anonymous"><!--end::Third Party Plugin(OverlayScrollbars)--><!--begin::Third Party Plugin(Bootstrap Icons)--> --}}
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.min.css" integrity="sha256-Qsx5lrStHZyR9REqhUF8iQt73X06c8LGIUPzpOhwRrI=" crossorigin="anonymous"><!--end::Third Party Plugin(Bootstrap Icons)--><!--begin::Required Plugin(AdminLTE)-->
    <link rel="stylesheet" href="{{asset('assets')}}/dist/css/adminlte.css"><!--end::Required Plugin(AdminLTE)--><!-- apexcharts -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/apexcharts@3.37.1/dist/apexcharts.css" integrity="sha256-4MX+61mt9NVvvuPjUWdUdyfZfxSB1/Rf9WtqRHgG5S0=" crossorigin="anonymous"><!-- jsvectormap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/jsvectormap@1.5.3/dist/css/jsvectormap.min.css" integrity="sha256-+uGLJmmTKOqBr+2E6KDYs/NRsHxSkONXFHUL0fy2O/4=" crossorigin="anonymous"> --}}
</head> <!--end::Head--> <!--begin::Body-->
<!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Polres Cianjur</title>
                <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
                <style>
                     .app-sidebar.bg-light-brown {
                         background-color: #ffffff !important; 
                    }
                    .sidebar-menu .nav-link p {
                        color: #000000; 
                    }
                    .sidebar-menu .nav-link {
                        color: #000000;
                    }
                    .navbar-bg-brown {
                        background-color: #682109; 
                    }
                    .navbar-brand {
                        display: flex;
                        align-items: center;
                    }
                    .navbar-logo {
                        max-height: 60px; 
                        height: auto;
                        width: auto;
                        margin-right: 15px;
                    }
                    .text-logo {
                         color: #ffffff; 
                         font-size: 1.25rem; 
                         font-family: Arial, sans-serif;
                    }
                    body {
                        font-family: Arial, sans-serif;
                        background-color: #ffffff;
                        margin: 0;
                        padding: 0;
                    }

                    .container {
                        /* padding-top: 20px;  */
                        display: flex;
                        justify-content: space-between; /* Membuat ruang antara komentar dan form */
                        padding: 30px;
                        border-radius: 5px;
                        margin-top: 20px;
                        background-color: #fff;
                        width: 80%;
                        box-shadow: 0 2px 10px rgba(0,0,0,0.1);
                    }

                    .small-box {
                        position: relative;
                        display: block;
                        margin-bottom: 20px;
                        box-shadow: 0 1px 1px rgba(0,0,0,0.1);
                        width: 400px; /* Sesuaikan lebar card sesuai kebutuhan */
                        height: 170px; /* Sesuaikan tinggi card sesuai kebutuhan */
                        margin-top: 20px; /* Menambahkan jarak di bagian atas card */
                        margin-left: 20px; /* Menambahkan jarak di bagian kiri card */
                        border-radius: 15px; /* Menambah kelengkungan card */
                        overflow: hidden; /* Pastikan konten tidak keluar dari card yang melengkung */
                    }

                    .small-box .inner {
                        display: flex;
                        align-items: center; /* Menyelaraskan gambar dan teks di tengah secara vertikal */
                        padding: 10px;
                    }

                    .small-box .content {
                        display: flex;
                        align-items: center; /* Menyelaraskan gambar dan teks di tengah secara vertikal */
                        width: 100%; /* Mengambil seluruh lebar card */
                        justify-content: space-between; /* Memastikan gambar berada di ujung kanan card */
                    }

                    .small-box .text-content {
                        display: flex;
                        flex-direction: column;
                        justify-content: center; /* Menyelaraskan teks secara vertikal */
                    }

                    .small-box .small-image {
                        width: 100px; /* Sesuaikan ukuran gambar sesuai kebutuhan */
                        height: auto; /* Mempertahankan rasio aspek gambar */
                        margin-left: 15px; /* Jarak antara teks dan gambar */
                    }

                    .small-box h3 {
                        font-size: 20px; 
                        font-weight: bold;
                        margin: 0 0 5px 0; 
                        padding: 0;
                        white-space: nowrap;
                        overflow: hidden;
                        text-overflow: ellipsis;
                    }

                    .small-box p {
                        font-size: 12px; 
                    }

                    .small-box .icon {
                        color: rgba(0,0,0,0.15);
                        z-index: 0;
                    }

                    .small-box .icon i {
                        font-size: 40px; 
                        position: absolute;
                        top: 10px;
                        right: 10px;
                        transition: all 0.3s linear;
                    }

                    .small-box .small-box-footer {
                        position: relative;
                        text-align: center;
                        padding: 3px 0; 
                        color: #fff;
                        display: block;
                        background: rgba(0,0,0,0.1);
                        text-decoration: none;
                        transition: background 0.3s ease;
                    }

                    .small-box:hover .small-box-footer {
                        background: rgba(0,0,0,0.15);
                    }

                    .small-box:hover .icon i {
                        font-size: 45px; 
                    }

                    .small-box .inner h3,
                    .small-box .inner p,
                    .small-box .small-box-footer {
                        color: #fff; 
                    }
                    /* Kontainer utama */
                    .layout-container {
                        display: flex; /* Mengatur tata letak Flexbox untuk card dan progress bars */
                        align-items: flex-start; /* Menyelaraskan card dan progress bars di atas */
                        gap: 20px; /* Jarak antara card dan progress bars */
                        padding: 20px; /* Jarak dari tepi kontainer */
                        width: 100%; /* Memastikan kontainer memiliki lebar penuh */
                        box-sizing: border-box; /* Memastikan padding dihitung dalam lebar total */
                    }

                    /* Card styling */
                    .small-box {
                        position: relative;
                        display: block;
                        box-shadow: 0 1px 1px rgba(0,0,0,0.1);
                        width: 350px; /* Sesuaikan lebar card sesuai kebutuhan */
                        height: 170px; /* Sesuaikan tinggi card sesuai kebutuhan */
                        border-radius: 15px; /* Menambah kelengkungan card */
                        overflow: hidden; /* Pastikan konten tidak keluar dari card yang melengkung */
                    }

                    /* Konten dalam card */
                    .small-box .inner {
                        display: flex;
                        align-items: center; /* Menyelaraskan gambar dan teks di tengah secara vertikal */
                        padding: 10px;
                    }

                    .small-box .content {
                        display: flex;
                        align-items: center; /* Menyelaraskan gambar dan teks di tengah secara vertikal */
                        width: 100%; /* Mengambil seluruh lebar card */
                        justify-content: space-between; /* Memastikan gambar berada di ujung kanan card */
                    }

                    .small-box .text-content {
                        display: flex;
                        flex-direction: column;
                        justify-content: center; /* Menyelaraskan teks secara vertikal */
                    }

                    .small-box .small-image {
                        width: 60px; /* Sesuaikan ukuran gambar sesuai kebutuhan */
                        height: auto; /* Mempertahankan rasio aspek gambar */
                        margin-left: 10px; /* Jarak antara teks dan gambar */
                    }

                    .small-box h3 {
                        font-size: 20px; 
                        font-weight: bold;
                        margin: 0 0 5px 0; 
                        padding: 0;
                        white-space: nowrap;
                        overflow: hidden;
                        text-overflow: ellipsis;
                    }

                    .small-box p {
                        font-size: 12px; 
                    }

                    .small-box .icon {
                        color: rgba(0,0,0,0.15);
                        z-index: 0;
                    }

                    .small-box .icon i {
                        font-size: 40px; 
                        position: absolute;
                        top: 10px;
                        right: 10px;
                        transition: all 0.3s linear;
                    }

                    .small-box .small-box-footer {
                        position: relative;
                        text-align: center;
                        padding: 3px 0; 
                        color: #fff;
                        display: block;
                        background: rgba(0,0,0,0.1);
                        text-decoration: none;
                        transition: background 0.3s ease;
                    }

                    .small-box:hover .small-box-footer {
                        background: rgba(0,0,0,0.15);
                    }

                    .small-box:hover .icon i {
                        font-size: 45px; 
                    }

                    .small-box .inner h3,
                    .small-box .inner p,
                    .small-box .small-box-footer {
                        color: #fff; 
                    }

                    /* Styling progress bars */
                    .progress-container {
                        display: flex;
                        flex-direction: column;
                        gap: 10px; /* Jarak antara progress bars */
                        max-width: 300px; /* Maksimal lebar progress container sesuai dengan card */
                        width: 100%; /* Memastikan progress container memiliki lebar penuh */
                    }

                    .progress {
                        height: 20px; /* Mengatur tinggi progress bar */
                        border-radius: 10px; /* Menambah kelengkungan progress bar */
                        background-color: #e9ecef; /* Warna latar belakang progress bar */
                        overflow: hidden; /* Pastikan isi tidak keluar dari progress bar */
                    }

                    .progress-bar {
                        line-height: 20px; /* Menyelaraskan teks di dalam progress bar */
                        color: #fff; /* Warna teks di dalam progress bar */
                        height: 100%; /* Mengambil seluruh tinggi dari progress bar */
                        border-radius: 10px; /* Menambah kelengkungan pada progress bar isi */
                        transition: width 0.6s ease; /* Transisi halus saat perubahan lebar */
                    }

                    /* Warna Progress Bars */
                    .bg-success {
                        background-color: #28a745; /* Warna hijau untuk success */
                    }

                    .bg-info {
                        background-color: #17a2b8; /* Warna biru untuk info */
                    }

                    .bg-warning {
                        background-color: #ffc107; /* Warna kuning untuk warning */
                    }

                    .bg-danger {
                        background-color: #dc3545; /* Warna merah untuk danger */
                    }

                    /* Styling progress bars */
                    .progress-container {
                        display: flex;
                        flex-direction: column;
                        gap: 25px; /* Jarak antara progress bars */
                        max-width: 900px; /* Maksimal lebar progress container sesuai dengan card */
                    }

                    .progress {
                        height: 30px; /* Mengatur tinggi progress bar */
                        border-radius: 20px; /* Menambah kelengkungan progress bar */
                        background-color: #ffffff; /* Warna latar belakang progress bar */
                        overflow: hidden; /* Pastikan isi tidak keluar dari progress bar */
                        width: 100%;
                    }

                    .progress-bar {
                        line-height: 25px; /* Menyelaraskan teks di dalam progress bar */
                        color: #fff; /* Warna teks di dalam progress bar */
                        height: 100%; /* Mengambil seluruh tinggi dari progress bar */
                        border-radius: 10px; /* Menambah kelengkungan pada progress bar isi */
                        transition: width 0.6s ease; /* Transisi halus saat perubahan lebar */
                        width: 100%;
                    }
                    /* Styling untuk tombol logout */
                    .logout-btn-danger .btn {
                        font-size: 18px; /* Ukuran font lebih besar */
                        padding: 10px 20px; /* Padding lebih besar di sekitar teks tombol */
                        border-radius: 8px; /* Sudut tombol yang membulat */
                        width: auto; /* Biarkan lebar tombol otomatis sesuai dengan konten */
                        height: auto; /* Biarkan tinggi tombol otomatis sesuai dengan konten */
                        display: inline-flex; /* Memastikan tombol menggunakan flexbox untuk penyelarasan */
                        align-items: center; /* Menyelaraskan konten tombol secara vertikal */
                        justify-content: center; /* Menyelaraskan konten tombol secara horizontal */
                    }
                    .logout-btn-danger .btn-lg {
                        font-size: 20px; /* Ukuran font lebih besar */
                        padding: 15px 30px; /* Padding lebih besar untuk tombol lebih besar */
                    }
                    .logout-btn-danger .btn-danger {
                        background-color: #dc3545; /* Warna latar belakang tombol */
                        border: none; /* Menghapus border tombol jika diperlukan */
                        color: #fff; /* Warna teks tombol */
                    }
                    .logout-btn-danger:hover{
                        background-color: #c82333;
                        transform: scale(1.05); 
                        border-radius: 20%;
                    }
                    .logout-btn-danger:focus {
                        outline: none; /* Menghilangkan outline default */
                        box-shadow: 0 0 0 2px rgba(0, 0, 0, 0.2); /* Menambahkan shadow saat fokus */
                    }

                    .comment-list {
            width: 55%; /* Sesuaikan lebar daftar komentar */
            margin-right: 20px; /* Menambahkan jarak antara daftar komentar dan form */
        }

        .form-container {
            width: 40%; /* Sesuaikan lebar form sesuai kebutuhan */
            margin-left: 20%;
        }

        .comment {
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #e9ecef;
            box-shadow: 0 1px 3px rgba(0,0,0,0.1);
            position: relative; /* Posisi relatif untuk membatasi tombol hapus */
            background-color: #f8f9fa; /* Warna latar belakang komentar */
            border: 1px solid #ddd; /* Border komentar */
            border-radius: 5px; /* Sudut melengkung pada komentar */
            padding: 10px; /* Jarak di dalam komentar */
            margin-bottom: 10px; /* Jarak antar komentar */
        }

        textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box; /* Membuat textarea menyesuaikan dengan lebar container */
            margin-bottom: 10px;
            resize: vertical;
        }

        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #229918;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            box-sizing: border-box;
            transition: background-color 0.3s ease;
        }
        .delete-btn {
            background-color: #dc3545; /* Warna merah untuk tombol */
            color: #fff; /* Warna teks putih */
            border: none; /* Menghapus border default */
            border-radius: 5px; /* Sudut melengkung */
            padding: 8px 12px; /* Jarak dalam tombol */
            cursor: pointer; /* Menunjukkan bahwa tombol bisa diklik */
            font-size: 14px; /* Ukuran teks tombol */
            font-weight: bold; /* Teks tebal */
            transition: background-color 0.3s, transform 0.2s; /* Transisi halus */
            position: absolute;
            top: 10px; /* Jarak dari bagian atas komentar */
            right: 10px; /* Jarak dari bagian kanan komentar */
            }
            .delete-btn:hover {
                background-color: #c82333; /* Warna merah gelap saat hover */
                transform: scale(1.05); /* Meningkatkan ukuran sedikit saat hover */
            }
            .delete-btn:focus {
                outline: none; /* Menghilangkan outline default */
                box-shadow: 0 0 0 2px rgba(0, 0, 0, 0.2); /* Menambahkan shadow saat fokus */
            }
            .delete-btn:active {
                background-color: #bd2130; /* Warna merah lebih gelap saat ditekan */
                transform: scale(0.95); /* Menurunkan ukuran saat ditekan */
            }
            .small-image {
        width: 20%; /* Sesuaikan ukuran gambar sesuai kebutuhan */
        height: auto;
    }

    .container-fluid {
        padding: 0;
        margin: 0;
    }

    .text-center h3,
    .text-center h5,
    .text-center h7 {
        margin-top: 0;
        margin-bottom: 15px; /* Sesuaikan jarak bawah sesuai kebutuhan */
    }

    .me-3 {
        margin-right: 1rem; /* Sesuaikan jarak kanan antara gambar dan teks */
    }
        h5, h6 {
            font-family: 'Arial', sans-serif;
        }

        #welcome-text {
            font-size: 2em;
            color: #2c3e50;
            font-weight: bold;
            margin-bottom: 10px;
        }

        #service-text {
            font-size: 1.5em;
            color: #16a085;
        }
        .no-cursor {
            cursor: none;
        }
        .card.transparent-card {
    background: rgba(255, 255, 255, 0.8); /* Latar belakang transparan */
    border-radius: 15px; /* Sudut membulat */
    box-shadow: 0 12px 18px rgba(0, 0, 0, 0.4); /* Bayangan lembut */
    overflow: hidden; /* Menghindari konten melampaui border-radius */
    margin: 20px; /* Jarak dari elemen lain */
    transition: transform 0.3s ease, box-shadow 0.3s ease; /* Transisi halus untuk efek hover */
    width: 80%; /* Lebar responsif berdasarkan kontainer induk */
    max-width: 350px; /* Lebar maksimum */
}

.card .card-body {
    padding: 35px; /* Padding internal */
}

.card .content {
    display: flex; /* Mengatur konten untuk mendukung layout flex */
    justify-content: space-between; /* Memisahkan teks dan gambar */
    align-items: center; /* Menyelaraskan item secara vertikal */
}

.card .text-content {
    max-width: 60%; /* Maksimal lebar teks */
}

.card .small-image {
    width: 100px; /* Ukuran gambar */
    height: auto; /* Menjaga rasio gambar */
}

.card .icon {
    margin-top: 20px; /* Jarak atas ikon */
    text-align: center; /* Menyelaraskan ikon di tengah */
}

.card .small-box-footer {
    display: block; /* Menyusun footer sebagai blok */
    text-align: center; /* Menyelaraskan teks di tengah */
    margin-top: 20px; /* Jarak atas footer */
    color: #007bff; /* Warna teks */
    font-weight: bold; /* Membuat teks menjadi tebal */
}

.card:hover {
    transform: scale(1.05); /* Zoom saat hover */
    box-shadow: 0 6px 12px rgba(0, 0, 0, 0.3); /* Bayangan lebih kuat saat hover */
}
.progress-container {
    width: 100%;
    padding: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Bayangan lembut di sekitar container */
    border-radius: 10px; /* Sudut membulat untuk container */
    background: rgba(255, 255, 255, 0.9); /* Latar belakang transparan untuk container */
}

.progress {
    background-color: rgba(0, 0, 0, 0.1); /* Latar belakang transparan untuk progress bar */
    border-radius: 10px; /* Sudut membulat */
    height: 20px; /* Tinggi progress bar */
    margin-bottom: 10px; /* Jarak antar progress bar */
    margin-top: 10px;
    overflow: hidden; /* Menghindari overflow konten */
}

.progress-bar {
    border-radius: 10px; /* Sudut membulat untuk progress bar */
    height: 100%; /* Mengisi tinggi container */
    color: #fff; /* Warna teks di atas progress bar */
    font-size: 0.75rem; /* Ukuran font untuk persen */
    display: flex;
    align-items: center;
    justify-content: center; /* Menyelaraskan teks di tengah */
    transition: width 0.4s ease; /* Transisi halus untuk perubahan lebar */
}
/* Efek hover */
.progress:hover {
    background-color: rgba(0, 0, 0, 0.2); /* Latar belakang sedikit lebih gelap saat hover */
}

/* Efek hover pada progress-bar */
.progress:hover .progress-bar {
    background-color: rgba(0, 0, 0, 0.1); /* Warna latar belakang progress bar saat hover */
    transform: scale(1.05); /* Zoom saat hover */
}

/* Efek aktif (ketika diklik) */
.progress:active .progress-bar {
    background-color: rgba(0, 0, 0, 0.15); /* Warna latar belakang progress bar saat diklik */
    transform: scale(1.02); /* Zoom sedikit saat diklik */
}

.bg-success {
    background: rgba(40, 167, 69, 0.7); /* Warna hijau dengan transparansi */
}

.bg-info {
    background: rgba(23, 162, 184, 0.7); /* Warna biru dengan transparansi */
}

.bg-warning {
    background: rgba(255, 193, 7, 0.7); /* Warna kuning dengan transparansi */
}

.bg-danger {
    background: rgba(220, 53, 69, 0.7); /* Warna merah dengan transparansi */
}
.container-fluid {
    background: rgba(255, 255, 255, 0.8); /* Background putih transparan */
    border-radius: 15px; /* Sudut membulat */
    padding: 20px; /* Padding di sekitar konten */
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); /* Bayangan lembut */
    display: flex;
    justify-content: center;
    align-items: center;
}

.text-container {
    display: flex;
    align-items: center;
    justify-content: center; /* Memastikan konten berada di tengah */
    max-width: 800px; /* Lebar maksimum kontainer teks dan gambar */
    width: 100%; /* Lebar penuh kontainer */
    text-align: center; /* Teks terpusat */
}

.small-image {
    width: 120px; /* Ukuran gambar yang konsisten */
    height: auto; /* Menjaga rasio aspek */
    border-radius: 50%; /* Membuat gambar berbentuk lingkaran */
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3); /* Bayangan lembut pada gambar */
    margin-right: 15px; /* Jarak antara gambar dan teks */
}

h5, h6 {
    margin: 0; /* Menghapus margin default */
    font-weight: 600; /* Menebalkan teks */
    font-family: Arial, Helvetica, sans-serif;
}

.typing {
    font-family: 'Courier New', Courier, monospace; /* Font monospace untuk efek ketikan */
    white-space: nowrap; /* Menghindari pembungkusan baris teks */
    font-family: Arial, sans-serif; 
}

h5 {
    font-size: 1.5rem; /* Ukuran font untuk heading utama */
    color: #333; /* Warna teks */
}

h6 {
    font-size: 1.2rem; /* Ukuran font untuk heading sekunder */
    color: #666; /* Warna teks */
}
.small-image {
    width: 120px; /* Ukuran gambar yang konsisten */
    height: auto; /* Menjaga rasio aspek */
    border-radius: 50%; /* Membuat gambar berbentuk lingkaran */
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3); /* Bayangan lembut pada gambar */
    margin-right: 15px; /* Jarak antara gambar dan teks */
    transition: transform 0.3s ease, box-shadow 0.3s ease; /* Transisi halus untuk transformasi dan bayangan */
}

.small-image:hover {
    transform: scale(1.2); /* Memperbesar gambar 10% */
    box-shadow: 0 6px 12px rgba(0, 0, 0, 0.5); /* Bayangan lebih pekat saat hover */
}
.small-box-footer {
    display: inline-flex; /* Menjadikan elemen inline dan fleksibel */
    align-items: center; /* Memastikan ikon dan teks sejajar secara vertikal */
    padding: 12px 24px; /* Memberikan padding di sekitar teks */
    font-size: 1rem; /* Ukuran font */
    font-weight: 600; /* Menebalkan teks */
    color: #fff; /* Warna teks putih */
    background-color: #3a943c;
    border-radius: 8px; /* Sudut membulat */
    text-decoration: none; /* Menghapus garis bawah default */
    transition: background-color 0.3s ease, color 0.3s ease, box-shadow 0.3s ease, transform 0.3s ease; /* Transisi halus untuk latar belakang, warna, bayangan, dan transformasi */
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); /* Bayangan lembut */
}

.small-box-footer:hover, .small-box-footer:focus {
    background-color: #682109; /* Warna latar belakang biru solid saat hover */
    color: #f8f9fa; /* Warna teks lebih terang saat hover */
    box-shadow: 0 6px 12px rgba(0, 0, 0, 0.3); /* Bayangan lebih pekat saat hover */
    transform: translateY(-2px); /* Gerakkan elemen sedikit ke atas saat hover */
}

.small-box-footer i {
    margin-left: 10px; /* Jarak antara teks dan ikon */
    font-size: 1.3rem; /* Ukuran ikon */
    transition: transform 0.3s ease; /* Transisi halus untuk transformasi ikon */
    color: inherit; /* Ikuti warna teks dari parent */
}

.small-box-footer:hover i {
    transform: translateX(5px); /* Gerakkan ikon sedikit ke kanan saat hover */
}
.small-box-footer:active {
    color: #f8f9fa; /* Warna teks tetap putih saat diklik */
}

.small-box-footer:visited {
    color: #fff; /* Warna teks tetap putih setelah dikunjungi */
}
/* Styling untuk background navbar */
.navbar-bg-brown {
    background-color: #8B4513; /* Warna latar belakang navbar */
}

/* Styling untuk logo di navbar */
.navbar-logo {
    width: 80px;
    height: 40px;
    margin-right: 10px;
}

/* Styling untuk teks logo */
.text-logo {
    font-size: 18px;
    font-weight: bold;
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

/* Tambahan margin untuk jarak antara item nav dan profil */
.nav-item.ms-4 {
    margin-left: 1.5rem; /* Sesuaikan jarak antara item menu dan profil */
}
.nav-item {
    margin-right: 30px; /* Atur jarak antara item-menu */
}
.dropdown-menu-custom {
    background-color: transparent; /* Warna latar belakang dropdown */
    border: 1px solid #6c757d; /* Warna border */
    border-radius: 0.5rem; /* Radius border */
    padding: 10px; /* Padding dalam dropdown */
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Bayangan dropdown */
}

/* Styling untuk divider di dropdown */
.dropdown-divider {
    border-color: #6c757d; /* Warna garis pemisah */
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

/* Hover effect untuk dropdown item */
.dropdown-item-custom:hover {
    background-color: #6c757d; /* Warna saat di-hover */
    color: #ffffff;
}

/* Active effect untuk dropdown item */
.dropdown-item-custom:active {
    background-color: #adb5bd; /* Warna saat aktif */
    color: #ffffff;
}
.dropdown-item{
    border-radius: 20px; /* Atur nilai sesuai kebutuhan */
}
.dropdown-item-custom i {
    margin-right: 8px; /* Jarak antara ikon dan teks */
    font-size: 16px; /* Ukuran ikon */
}
.nav-link i {
        margin-right: 8px; /* Sesuaikan jarak sesuai kebutuhan */
    }
    .search-form {
            margin-right: 30px; /* Jarak antara form pencarian dan ikon profil */
        }
                </style>
            </head>
            <body>
                <nav class="navbar navbar-expand-lg navbar-light navbar-bg-brown fixed-top">
                    <a class="navbar-brand" href="#">
                        <img src="{{ asset('assets/dist/assets/img/lambangpolri.png') }}" class="navbar-logo d-inline-block align-top" alt="">
                        <div class="text-logo">ZONA INTEGRITAS POLRI</div>
                    </a>
                    
                    <div class="collapse navbar-collapse">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a href="dashboard" class="nav-link text-white">
                                    <i class="bi bi-speedometer2 me-4"></i>
                                    <p class="d-inline ms-0">Dashboard</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="history" class="nav-link text-white">
                                    <i class="bi bi-clock-history me-4"></i>
                                    <p class="d-inline ms-0">History</p>
                                </a>
                            </li>                                     
                        </ul>
                        <form class="d-flex search-form" role="search">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-light" type="submit">Search</button>
                        </form>
                        <div class="dropdown ms-auto">
                            <!-- Tombol Dropdown -->
                            <a class="dropdown-toggle d-flex align-items-center text-white text-decoration-none" href="#" role="button" id="dropdownProfile" data-bs-toggle="dropdown" aria-expanded="false">
                                <!-- Ikon Profil -->
                                <i class="bi bi-person-circle profile-icon me-2"></i>
                                <!-- Teks Profil -->
                                <span class="profile-text">Polres Cianjur</span>
                            </a>
                        
                            <!-- Menu Dropdown -->
                            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-custom" aria-labelledby="dropdownProfile">
                                <!-- Tombol Logout -->
                                <li>
                                    <a class="dropdown-item dropdown-item-custom" href="/sesi/logout">
                                        <i class="bi bi-box-arrow-right"></i> Logout
                                    </a>
                                    <a class="dropdown-item dropdown-item-custom" href="logout-url">
                                        <i class="bi bi-box-arrow-right"></i> Custom
                                    </a>
                                    <a class="dropdown-item dropdown-item-custom" href="logout-url">
                                        <i class="bi bi-box-arrow-right"></i> Custom
                                    </a>
                                    <a class="dropdown-item dropdown-item-custom" href="logout-url">
                                        <i class="bi bi-box-arrow-right"></i> Custom
                                    </a>
                                </li>
                            </ul>
                        </div>
                            
                    </div>
                </nav>                     
                <div class="layout-container" style="padding-top: 100px;">
                    <div class="card transparent-card">
                        <div class="card-body">
                            <div class="content">
                                <div class="text-content">
                                    <h3>296341</h3>
                                    <p>Daftarkan Sekarang!</p>
                                </div>
                                <img src="{{ asset('assets/dist/assets/img/sim.png') }}" alt="Small Image" class="small-image">
                            </div>
                            <div class="icon">
                                <i class="ion ion-bag"></i>
                            </div>
                            <a href="/" class="small-box-footer">Pelayanan Sim <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <div class="progress-container mb-3">
                        <div class="progress" role="progressbar" aria-label="Success example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar bg-success" style="width: 25%">25%</div>
                        </div>
                        <div class="progress" role="progressbar" aria-label="Info example" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar bg-info" style="width: 50%">50%</div>
                        </div>
                        <div class="progress" role="progressbar" aria-label="Warning example" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar bg-warning" style="width: 75%">75%</div>
                        </div>
                        <div class="progress" role="progressbar" aria-label="Danger example" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar bg-danger" style="width: 100%">100%</div>
                        </div>
                    </div>                    
                </div>
                <div class="container-fluid d-flex flex-column justify-content-center align-items-center" style="height: 44vh;">
                    <div class="d-flex align-items-center text-container">
                        <img src="{{ asset('assets/dist/assets/img/presisi.png') }}" alt="Small Image" class="small-image me-3">
                        <div class="text-center">
                            @auth
                            <div>
                                <h5 class="mb-2 typing" id="welcome-text">Selamat Datang, {{ Auth::user()->name }} Di Zona Integrasi Polri!</h5>
                            </div>
                            <div>
                                <h6 class="mb-2 typing" id="service-text">Pelayanan Kami, Untuk Anda!</h6>
                            </div>
                            @else
                            <div>
                                <h5 class="mb-2 typing" id="welcome-text">Selamat Datang, Tamu Di Zona Integrasi Polri!</h5>
                            </div>
                            <div>
                                <h6 class="mb-2 typing" id="service-text"><b>Pelayanan Kami, Untuk Anda!</b></h6>
                            </div>
                            @endauth
                        </div>
                    </div>
                </div>                
                <div class="container mt-3">
                    <div id="commentList" class="comment-list mb-4">
                        <!-- Komentar akan ditambahkan di sini -->
                    </div>
                    <form id="formKomentar" class="form-container p-4 rounded shadow-lg">
                        <h5 class="mb-4">Tinggalkan Komentar</h5>
                        <div class="form-group mb-3">
                            <textarea name="komentar" class="form-control" rows="5" placeholder="Tulis komentar Anda di sini..."></textarea>
                        </div>
                        <div class="text-end">
                            <input type="submit" class="btn btn-primary" value="Tambahkan Komentar"/>
                        </div>
                    </form>
                </div>                     
        
                <script>
                    document.addEventListener('DOMContentLoaded', function() {
                        // Load comments from local storage on page load
                        const storedComments = JSON.parse(localStorage.getItem('comments')) || [];
                        storedComments.forEach(comment => {
                            addCommentToList(comment);
                        });
                    });
                
                    document.getElementById('formKomentar').addEventListener('submit', function(event) {
                        event.preventDefault(); // Mencegah form submit default
                        let textarea = this.querySelector('textarea');
                        let komentar = textarea.value.trim();
                
                        if (komentar !== '') {
                            // Add comment to list and save to local storage
                            addCommentToList(komentar);
                            saveCommentToLocalStorage(komentar);
                
                            // Clear textarea
                            textarea.value = '';
                        }
                    });
                
                    function addCommentToList(comment) {
                        // Create new comment element
                        let newComment = document.createElement('div');
                        newComment.classList.add('comment');
                
                        // Add comment text
                        let commentText = document.createElement('p');
                        commentText.textContent = comment;
                        newComment.appendChild(commentText);
                
                        // Add delete button
                        let deleteButton = document.createElement('button');
                        deleteButton.classList.add('delete-btn');
                        deleteButton.textContent = 'Hapus';
                        deleteButton.addEventListener('click', function() {
                            newComment.remove();
                            removeCommentFromLocalStorage(comment);
                        });
                        newComment.appendChild(deleteButton);
                
                        // Add new comment to the list
                        document.getElementById('commentList').appendChild(newComment);
                    }
                
                    function saveCommentToLocalStorage(comment) {
                        let comments = JSON.parse(localStorage.getItem('comments')) || [];
                        comments.push(comment);
                        localStorage.setItem('comments', JSON.stringify(comments));
                    }
                
                    function removeCommentFromLocalStorage(comment) {
                        let comments = JSON.parse(localStorage.getItem('comments')) || [];
                        comments = comments.filter(c => c !== comment);
                        localStorage.setItem('comments', JSON.stringify(comments));
                    }
                    document.addEventListener("DOMContentLoaded", function() {
            const welcomeTextElement = document.getElementById('welcome-text');
            const serviceTextElement = document.getElementById('service-text');
            
            const welcomeText = welcomeTextElement.textContent;
            const serviceText = serviceTextElement.textContent;

            welcomeTextElement.textContent = '';
            serviceTextElement.textContent = '';

            let i = 0, j = 0;

            function typeWriter() {
                if (i < welcomeText.length) {
                    welcomeTextElement.textContent += welcomeText.charAt(i);
                    i++;
                    setTimeout(typeWriter, 50); // Adjust typing speed here
                } else if (j < serviceText.length) {
                    serviceTextElement.textContent += serviceText.charAt(j);
                    j++;
                    setTimeout(typeWriter, 50); // Adjust typing speed here
                } else {
            // Setelah semua teks selesai diketik, hapus kursor
                    welcomeTextElement.classList.add('no-cursor');
                    serviceTextElement.classList.add('no-cursor');
                }
            }

            typeWriter();
        });
                </script>
                
                

{{-- <body>
            <div class="row align-items-center">
                <div class="container-fluid d-flex justify-content-center align-items-center" style="height: 55vh;">
                    <div class="class text-center">
                    <h3 class="mb-2"><b>PEDULI DIRI</b></h3>
                    <h5 class="mb-2">Catatan Perjalanan</h5>
                    @auth
                    <h5 class="mb-2">Selamat Datang, {{ Auth::user()->name }} Di Aplikasi Peduli Diri!</h5>
                    @else
                    <h7 class="mb-2">Selamat Datang, Tamu Di Aplikasi Peduli Diri!</h7>
                    @endauth
        </div>
    </div>
</div>
    @if(session('Success'))
        <div class="alert alert-success">
            {{ session('Success') }}
        </div>
    @endif --}}
        </main> <!--end::App Main--> <!--begin::Footer-->
        <footer class="app-footer"> <!--begin::To the end-->
                Copyright &copy; 2014-2024&nbsp;
                <a href="https://adminlte.io" class="text-decoration-none">AdminLTE.io</a>.
            </strong>
            All rights reserved.
            <!--end::Copyright-->
        </footer> <!--end::Footer-->
    </div> <!--end::App Wrapper--> <!--begin::Script--> <!--begin::Third Party Plugin(OverlayScrollbars)-->
    <script src="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.3.0/browser/overlayscrollbars.browser.es6.min.js" integrity="sha256-H2VM7BKda+v2Z4+DRy69uknwxjyDRhszjXFhsL4gD3w=" crossorigin="anonymous"></script> <!--end::Third Party Plugin(OverlayScrollbars)--><!--begin::Required Plugin(popperjs for Bootstrap 5)-->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha256-whL0tQWoY1Ku1iskqPFvmZ+CHsvmRWx/PIoEvIeWh4I=" crossorigin="anonymous"></script> <!--end::Required Plugin(popperjs for Bootstrap 5)--><!--begin::Required Plugin(Bootstrap 5)-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha256-YMa+wAM6QkVyz999odX7lPRxkoYAan8suedu4k2Zur8=" crossorigin="anonymous"></script> <!--end::Required Plugin(Bootstrap 5)--><!--begin::Required Plugin(AdminLTE)-->
    <script src="{{asset('assets')}}/dist/js/adminlte.js"></script> <!--end::Required Plugin(AdminLTE)--><!--begin::OverlayScrollbars Configure-->
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
    <script src="https://cdn.jsdelivr.net/npm/sortablejs@1.15.0/Sortable.min.js" integrity="sha256-ipiJrswvAR4VAx/th+6zWsdeYmVae0iJuiR+6OqHJHQ=" crossorigin="anonymous"></script> <!-- sortablejs -->
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
</body><!--end::Body-->
</html> 