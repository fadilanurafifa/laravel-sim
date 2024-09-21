<!DOCTYPE html>
<html lang="en"> <!--begin::Head-->

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <link rel="stylesheet" href="styles.css">
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
                    .navbar-brand {
                        display: flex;
                        align-items: center;
                    }
                    .text-logo {
                         color: #ffffff; 
                         font-size: 1.25rem; 
                         font-family: Arial, sans-serif;
                    }
                    body {
                        font-family: Arial, sans-serif;
                        background-color: #cccecf;
                        /* background-color: #021526; */
                        display: grid;
                        margin: 0;
                    }

                    .container {
                        display: flex;
                        justify-content: space-between; 
                        padding: 30px;
                        border-radius: 5px;
                        margin-top: 20px;
                        background-color: #fff;
                        width: 80%;

                    }

                    .small-box {
                        position: relative;
                        display: block;
                        margin-bottom: 20px;
                     
                        width: 400px; 
                        height: 170px; 
                        margin-top: 20px; 
                        margin-left: 20px; 
                        border-radius: 15px; 
                        overflow: hidden; 
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

                    /* Kontainer utama */
                    .layout-container {
                        display: flex; /* Mengatur tata letak Flexbox untuk card dan progress bars */
                        align-items: flex-start; /* Menyelaraskan card dan progress bars di atas */
                        gap: 20px; /* Jarak antara card dan progress bars */
                        padding: 20px; /* Jarak dari tepi kontainer */
                        width: 100%; /* Memastikan kontainer memiliki lebar penuh */
                        box-sizing: border-box; /* Memastikan padding dihitung dalam lebar total */
                        margin-bottom: 10px;
                        margin-left: 200px; /* menyesuaikan lebar sidebar */
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
                    
                    .no-cursor {
                        cursor: none;
                    }
                    .card.transparent-card {
                        background: linear-gradient(to bottom, #102C57, #5f615d);
                        border-radius: 10px; /* Sudut membulat */
                        margin: 100px; /* Jarak dari elemen lain */
                        width: 80%; /* Lebar responsif berdasarkan kontainer induk */
                        max-width: 350px; /* Lebar maksimum */
                        border: none;
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

.card .icon {
    margin-top: 20px; /* Jarak atas ikon */
    text-align: center; /* Menyelaraskan ikon di tengah */
}

.card .small-box-footer {
    display: block; /* Menyusun footer sebagai blok */
    text-align: center; /* Menyelaraskan teks di tengah */
    margin-top: 20px; /* Jarak atas footer */
    font-weight: bold; /* Membuat teks menjadi tebal */
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
    width: 170px; /* Ukuran gambar yang konsisten */
    height: auto; /* Menjaga rasio aspek */
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
.small-box-footer {
    display: inline-flex; /* Menjadikan elemen inline dan fleksibel */
    align-items: center; /* Memastikan ikon dan teks sejajar secara vertikal */
    padding: 12px 24px; /* Memberikan padding di sekitar teks */
    font-size: 1rem; /* Ukuran font */
    font-weight: 600; /* Menebalkan teks */
    color: #6c757d; /* Warna teks putih */
    background-color: #6c757d;
    border-radius: 8px; /* Sudut membulat */
    text-decoration: none; /* Menghapus garis bawah default */
    transition: transform 0.3s, color 0.3s; /* Tambahkan transisi */
}

.small-box-footer:hover, .small-box-footer:focus {
    background-color: #6c757d; /* Warna latar belakang biru solid saat hover */
    color: #6c757d; /* Warna teks lebih terang saat hover */
    box-shadow: 0 6px 12px rgba(0, 0, 0, 0.3); /* Bayangan lebih pekat saat hover */
    transform: translateY(-2px); /* Gerakkan elemen sedikit ke atas saat hover */
}

.small-box-footer:hover i {
    transform: translateY(-2px); /* Gerakkan ikon sedikit ke atas saat hover */
}

.small-box-footer:active {
    color: #f8f9fa; /* Warna teks tetap putih saat diklik */
}

.small-box-footer:visited {
    color: #fff; /* Warna teks tetap putih setelah dikunjungi */
}
/* Styling untuk background navbar */
.navbar-bg-brown {
    background: linear-gradient(to right, #102C57, #5f615d); /* Gradasi dari kiri ke kanan */
}

/* Styling untuk logo di navbar */
.navbar-logo {
    width: 60px;
    height: 60px;
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
.btn-orange {
    background-color: #6c757d; /* Warna oranye */
    border: none; /* Menghilangkan border default */
    color: #531e1e; /* Warna teks putih */
    padding: 8px 35px; /* Padding diperbesar secara horizontal (samping) */
    
}

.nav-link p {
    margin-bottom: 0; /* Menghilangkan margin bawah pada paragraf */
    font-size: 16px;
}

.dropdown-menu-custom {
    background-color: #ffffff; /* Warna latar belakang dropdown */
    border: 1px solid #6c757d; /* Warna border */
    border-radius: 0.5rem; /* Radius border */
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Bayangan dropdown */
    min-width: 300px; /* Atur lebar minimal dropdown, ubah sesuai kebutuhan */
    width: auto; /* Memungkinkan dropdown menyesuaikan lebar konten */
    padding: 10px; /* Tambahkan padding untuk memberi ruang lebih di dalam dropdown */
    left: auto;
    right: 0;
    transform: translateX(-1%); /* Geser dropdown ke kiri */
}
/* Styling untuk item dalam dropdown */
.dropdown-item-custom {
    padding: 12px 16px;
    border-radius: 0.3rem;
    transition: background-color 0.2s ease, color 0.2s ease;
    background-color: #ffffff; /* Warna background default */
    text-align: center; /* Menengahkan teks */
    margin-bottom: 8px; /* Jarak antar item */
    font-weight: 500; /* Tebal font */
    display: flex;
    align-items: center;
    gap: 8px; /* Jarak antara ikon dan teks */
}
.dropdown-item-custom i {
    margin-right: 8px;
    font-size: 20px; /* Ukuran ikon */
}
.nav-link i {
        margin-right: 8px; /* Sesuaikan jarak sesuai kebutuhan */
    }
    .search-form {
            margin-right: 40px; /* Jarak antara form pencarian dan ikon profil */
        }
        .custom-container {
    background-color: #ffffff; /* Warna latar belakang sedikit berbeda */
    padding: 10px; /* Padding dalam container */
    border-radius: 5px; /* Sudut yang melengkung */
}
.dashboard-container {
    width: 100%; /* Lebar sesuai dengan navbar */
    background: linear-gradient(to right, #102C57, #5f615d); /* Gradasi dari kiri ke kanan */
    border-top: 2px solid #e7e7e7; /* Garis atas untuk memisahkan dari navbar */
    margin-top: 60px; /* Menambahkan margin-top untuk menghindari tumpang tindih dengan navbar */
    display: flex;
    justify-content: space-between; /* Menyebarkan elemen ke kiri dan kanan */
    align-items: center;
    padding: 20px 20px;
    border-bottom: 1px solid #ddd;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    border-radius: 43px;
    border: none;
}
.dashboard-container .dashboard-text {
    padding-right: 70px;
}
.custom-progress-bar {
    height: 300px; /* Tinggi progress bar yang lebih besar */
}

.progress {
    width: 600px; /* Lebar progress bar yang lebih besar */
    margin-bottom: 20px; /* Jarak bawah antar progress bars */
    background-color: #e9ecef; /* Warna latar belakang progress bar */
    margin-right: 600px; /* Jarak antara progress bar dan teks persentase */
}

.progress-bar {
    background-color: #007bff; /* Warna progress bar */
    height: 100%; /* Mengisi tinggi dari progress container */
}

.progress-wrapper {
    display: flex; /* Mengatur kontainer untuk menampilkan elemen secara horizontal */
    flex-direction: column; /* Menyusun elemen progress secara vertikal */
    gap: 15px; /* Jarak antara baris progress bar */
}

.progress-container {
    display: flex; /* Mengatur kontainer untuk menampilkan elemen secara horizontal */
    align-items: center; /* Menyelaraskan elemen secara vertikal di tengah */
}

.progress-wrapper p {
    margin-bottom: 10px; /* Jarak antara teks dan progress bar */
    font-weight: bold; /* Mengatur teks menjadi tebal */
    color: #666;
}

.progress-percentage {
    font-weight: bold; /* Mengatur teks menjadi tebal */
    white-space: nowrap; /* Menghindari teks membungkus ke baris berikutnya */
    font-size: 20px;
}
.text-content h3 {
    color: #fff;
    font-size: 35px;
    font-weight: 600;
}
.text-content p {
    color: #fff;
}
.card-body .content img {
    width: 30%;
    height: 30%;
}
.dashboard-text {
    font-size: 20px;
    font-weight: bold;
    color: #ffffff;
    margin-right: 30px;
}
.search-dropdown-container {
    display: flex;
    align-items: center;
    position: relative; /* Memastikan dropdown-content terletak dengan benar relatif terhadap kontainer ini */
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
    border-color: #102C57;
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
.box-container {
    width: 200px; /* Lebar kotak */
    height: 200px; /* Tinggi kotak */
    color: #fff; /* Warna teks putih */
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    border-radius: 10px; /* Membuat sudut kotak melengkung */
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); /* Efek bayangan */
    margin: 140px; /* Jarak di sekitar kotak */
    text-align: center;
}

.box-title {
    font-size: 24px; /* Ukuran font untuk judul */
    margin-bottom: 10px; /* Jarak bawah judul */
}

.box-number {
    font-size: 36px; /* Ukuran font untuk angka */
    font-weight: bold; /* Tebal font */
}
.progress-wrapper {
    display: flex;
    flex-direction: column;
    gap: 5px;
    padding: 20px;
    background-color: #DEE5D4;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    max-width: 650px; 
    margin: auto; 
}

.progress-section {
    display: flex;
    flex-direction: column;
    gap: 5px; /* Jarak antar elemen dalam satu section */
}

.progress-title {
    font-weight: bold;
    margin: 0; /* Menghapus margin default */
}

.progress-percentage {
    font-size: 14px;
    color: #555; /* Warna teks untuk persentase */
}

.progress {
    height: 20px;
    background-color: #e9ecef;
    border-radius: 5px;
    overflow: hidden;
}

.custom-progress-bar {
    background-color: #102C57;
    height: 100%;
}
.box-container {
    position: relative; /* Membuat container relatif untuk pseudo-elemen */
    flex: 1;
    min-height: 200px; /* Tinggi minimal */
    height: auto; /* Tinggi menyesuaikan konten jika lebih besar dari min-height */
    padding: 20px;
    background-color: #102C57;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    max-width: 500px;
    margin-left: 180px;
    overflow: hidden; /* Memastikan logo tidak keluar dari container */
    transition: background-color 0.3s ease, box-shadow 0.3s ease, transform 0.3s ease;
    cursor: pointer;
}

.box-container:hover {
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2); /* Menambahkan shadow */
    transform: scale(1.05); /* Memperbesar sedikit ukuran elemen */
}

.box-container::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-image: url('{{ asset('assets/dist/assets/img/lambangpolri.png') }}'); /* Path ke logo */
    background-size: 250px; /* Ukuran logo */
    background-position: center; /* Posisikan di tengah */
    background-repeat: no-repeat; /* Jangan ulangi logo */
    opacity: 0.3; /* Atur opasitas agar logo memudar */
    z-index: 0; /* Tempatkan di belakang konten */
}
.title-container {
    height: 40px;
    width: 220px;
    padding: 10px;
    background-color: #ece6dc;
    border-radius: 5px;
    margin-bottom: 30px;
}

.box-title {
    color: #6c757d;
    margin: 0;
    font-size: 18px;
    font-weight: 600;
}

.box-number {
    font-size: 55px;
    color: #fff;
}
.box-container h2{
    font-size: 20px;
    font-weight: 600;
}
/* Styling untuk queue container */
.queue-container {
    display: flex;
    justify-content: center;
    align-items: center;
    width: 450px;
    margin: 20px;
    margin-top: -20px;
    margin-left: 30px;
    position: relative; /* Untuk menghindari tumpang tindih dengan elemen lain */
    overflow: hidden; /* Untuk memastikan tidak ada elemen yang keluar dari container */
}
/* Styling untuk queue box */
.queue-box {
    background: linear-gradient(to bottom, #102C57, #ffffff);
    border-radius: 10px;
    padding: 15px 20px;
    text-align: center;
    color: white;
    width: 100%;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.10); /* Bayangan kotak */
    position: relative; /* Pastikan box tidak tumpang tindih */
}

/* Styling untuk nomor antrian */
.queue-box p {
    font-size: 30px;
    margin: 0;
    font-weight: bold;
    color: #ffffff; /* Warna emas untuk menonjolkan angka */
}

/* Styling untuk tombol */
.queue-box button {
    margin-top: 15px;
    padding: 8px 15px;
    font-size: 16px;
    border: none;
    border-radius: 5px;
    background-color: #28455e; /* Warna sesuai dengan aksen Polri */
    color: white;
}


.custom-margin-top {
        margin-top: 80px; /* Kamu bisa sesuaikan nilai ini */
    }
    .button-sim {
    background-color: #102C57; /* Warna latar belakang tombol */
    color: #ffffff; /* Warna teks tombol */
    border: 2px solid white; /* Border putih tebal */
    padding: 10px 20px; /* Padding untuk ukuran tombol */
    text-align: center;
    font-size: 16px;
    border-radius: 15px; /* Membuat sudut tombol melengkung */
    margin: 0 10px; /* Memberikan jarak antar tombol */
    outline: none;
    cursor: pointer; /* Menunjukkan bahwa tombol bisa diklik */
    transition: background-color 0.3s, color 0.3s, transform 0.3s, border 0.3s; /* Menambahkan 
    transisi */
    margin-top: -30px;
}

.button-sim:hover {
    background-color: #6c757d; /* Warna latar belakang tombol saat hover */
    color: #ffffff; /* Warna teks saat hover */
    transform: translateY(-2px); /* Efek naik saat hover */
}

.button-sim:focus,
.button-sim:active {
    border: 2px solid white; /* Menjaga border tetap putih */
    outline: none; /* Menghilangkan outline default */
    transform: translateY(-2px); /* Efek naik saat fokus atau aktif */
}
.container-atas {
    display: flex;
    flex-direction: column;
    height: 40vh; /* Tinggi viewport penuh */
    background-color: #596264; /* Warna latar belakang biru */
    padding: 20px;
    margin-top: 86px; /* Sesuaikan nilai margin-top sesuai kebutuhan */
    margin-bottom: -20px; /* Menggeser kontainer ke atas */
    box-sizing: border-box;
    position: relative;
    z-index: 1; /* Pastikan berada di atas navbar */
    background-image: url('{{ asset('assets/dist/assets/img/polres.jpg') }}'); /* Gambar latar belakang */
    background-size: 140%; /* Menyesuaikan ukuran gambar dengan container */
    background-position: center 20%; /* Mengatur posisi gambar agak ke atas */
    background-blend-mode: overlay; /* Mencampur gambar dengan warna latar belakang */
    background-repeat: no-repeat; /* Menghindari pengulangan gambar */
    background-attachment: fixed; /* Menjaga gambar tetap pada tempatnya saat scroll */
    color: #ffffff; /* Warna teks putih agar kontras dengan latar belakang */
    text-align: center; /* Memusatkan teks dalam elemen */
}

/* Jika Anda ingin menambahkan styling khusus pada elemen di dalam container */
.container-atas h1, 
.container-atas p {
    margin: 0;
    padding: 10px;
}


.button-container {
    display: flex;
    justify-content: center;
    gap: 20px;
    padding-top: 40px;
}

.modal {
    display: none; /* Tersembunyi secara default */
    position: fixed; /* Tetap di tempat */
    z-index: 1000; /* Di atas semua elemen */
    left: 0;
    top: 0;
    width: 100%; /* Lebar penuh */
    height: 500%; /* Tinggi penuh */
    overflow: auto; /* Aktifkan scroll jika diperlukan */
    background-color: rgba(0,0,0,0.4); /* Hitam dengan opacity */
    z-index: 1050;
}

.modal-content {
    background-color: #fefefe;
    margin: 15% auto; /* Pusatkan modal */
    padding: 20px;
    border: 1px solid #888;
    width: 80%; /* Sesuaikan lebar jika diperlukan */
}

.close {
    color: #aaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: black;
    text-decoration: none;
    cursor: pointer;
}
.typing {
    color: #2c3e50; /* Warna putih untuk teks */
    font-family: Arial, sans-serif; /* Gaya font */
    margin-right: 230px;
}

#welcome-text {
    color: #1f1e1e; /* Warna putih untuk teks selamat datang */
}

#service-text {
    color: #1f1e1e; /* Warna putih untuk teks layanan */
}
/* Gaya untuk Modal */
/* Gaya untuk Modal */
.modal-card {
    display: none; /* Sembunyikan modal secara default */
    position: fixed; /* Tetap di tempat */
    z-index: 1; /* Pastikan modal berada di atas konten lainnya */
    left: 0;
    top: 0;
    width: 100%; /* Lebar penuh */
    height: 100%; /* Tinggi penuh */
    overflow: auto; /* Aktifkan scroll jika diperlukan */
    background-color: rgba(0, 0, 0, 0.4); /* Background semi-transparan */
    opacity: 0; /* Sembunyikan modal secara default */
    transition: opacity 0.3s ease; /* Transisi untuk opacity */
}

/* Gaya untuk Konten Modal */
.modal-cons {
    background-color: #fff; /* Latar belakang putih */
    margin: 15% auto; /* Margin atas otomatis */
    padding: 20px;
    border: 1px solid #888;
    width: 80%; /* Lebar modal */
    border-radius: 50px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); /* Bayangan kotak */
    transition: transform 0.3s ease; /* Transisi untuk transformasi */
}

/* Gaya untuk Tombol Tutup */
.closes {
    color: #aaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.closes:hover,
.closes:focus {
    color: black;
    text-decoration: none;
    cursor: pointer;
}
.modal-image {
    display: block;
    max-width: 20%; 
    height: auto;
    margin: 20px auto 0;
    border-radius: 8px; 
}
.modal-cons p {
    text-align: center;
    font-size: 20px;
    font-weight: 600;
 }
 .modal-cons h2 {
    text-align: center;
    font-weight: 600;
    color: #6c757d;
 }
 .modal-cons h3 {
    font-size: 20px;
    text-align: center;
 }

.modal-cons {
    padding: 20px;
    font-family: 'Arial', sans-serif;
    color: #333;
    position: relative;
}

.closes {
    position: absolute;`
    top: 10px;
    right: 15px;
    font-size: 20px;
    cursor: pointer;
    transition: color 0.3s ease;
}

.closes:hover {
    color: #ff0000;
}

.modal-cons h2 {
    margin-bottom: 15px;
    font-size: 24px;
    color: #0056b3; /* Warna biru */
    text-align: center;
}

.procedure-content {
    background-color: #f0f8ff;
    padding: 15px;
    border-radius: 8px;
    margin-top: 15px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}

.procedure-content h3 {
    margin-bottom: 10px;
    font-size: 20px;
    color: #004080;
}

.procedure-content ol {
    padding-left: 20px;
    margin: 0;
}

.procedure-content ol li {
    margin-bottom: 8px;
    line-height: 1.6;
    color: #555;
    font-size: 16px;
}

.procedure-content ol li::marker {
    color: #004080; /* Warna biru untuk penanda list */
}

/* Styling untuk box container */
.container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 20px;
    
}

/* Styling Card */
.card {
    border: 1px solid #ddd;
    border-radius: 8px;
    overflow: hidden;
    transition: transform 0.2s ease, box-shadow 0.2s ease;
}

.card:hover {
    transform: scale(1.05);
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
}

.card-header {
    padding: 10px;
    font-size: 1.25rem;
    font-weight: bold;
}

.card-body {
    padding: 20px;
}

.card-body p {
    margin-bottom: 15px;
    color: #ffffff;
    line-height: 1.6;
}

.btn {
    padding: 8px 16px;
    border-radius: 4px;
    text-transform: uppercase;
}

/* Responsif untuk tampilan mobile */
@media (max-width: 768px) {
    .container {
        padding: 10px;
    }

    .card {
        margin-bottom: 20px;
    }
}
.card {
            width: 100%; /* Menyesuaikan lebar card dengan lebar kolom */
        }
        .card-body {
            display: flex;
            flex-direction: column;
            justify-content: space-between; /* Untuk memastikan tombol aksi berada di bawah */
        }
        .btn {
            margin-top: auto; /* Memastikan tombol aksi selalu berada di bagian bawah card */
        }
        .footer {
    position: fixed;
    bottom: 0;
    left: 0;
    width: 100%;
    text-align: center;
    color: #ffffff; /* Teks berwarna putih */
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
.activity-container {
    background: #ffffff; /* Warna latar belakang kontainer putih */
    padding: 20px; /* Jarak di dalam kontainer */
    border-radius: 8x; /* Sudut membulat */
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1); /* Bayangan lembut untuk efek kedalaman */
    width: 90%;
    margin: 20px auto; /* Pusatkan kontainer secara horizontal dengan jarak atas/bawah */
    border: 1px solid #e0e0e0; /* Border tipis untuk kontainer */
    overflow: hidden; /* Menghindari konten melampaui kontainer */
    text-align: center; /* Pusatkan teks di dalam kontainer */
}

.activity-container h3 {
    font-size: 1.75rem; /* Ukuran font untuk judul */
    margin-bottom: 20px; /* Jarak bawah untuk judul */
    color: #333; /* Warna teks judul */
}

.btn-view-details {
    display: inline-block; /* Membuat tombol inline-block */
    background: linear-gradient(135deg, #007bff, #0056b3); /* Gradient background tombol */
    color: #ffffff; /* Warna teks tombol putih */
    border: none; /* Hilangkan border default */
    border-radius: 6px; /* Sudut tombol membulat */
    padding: 12px 24px; /* Padding di dalam tombol */
    font-size: 1.1rem; /* Ukuran font tombol */
    cursor: pointer; /* Pointer cursor saat hover */
    text-transform: uppercase; /* Mengubah teks menjadi huruf kapital */
    font-weight: bold; /* Menguatkan teks tombol */
    transition: background 0.3s, transform 0.3s, box-shadow 0.3s; /* Transisi halus untuk hover */
}

.btn-view-details:hover {
    background: linear-gradient(135deg, #0056b3, #003d7a); /* Gradient background saat hover */
    transform: translateY(-3px); /* Efek gerakan tombol saat hover */
    box-shadow: 0 8px 15px rgba(0, 0, 0, 0.2); /* Shadow yang lebih besar saat hover */
}

.btn-view-details:focus {
    outline: none; /* Hilangkan outline saat fokus */
    box-shadow: 0 0 0 3px rgba(0, 123, 255, 0.5); /* Shadow untuk efek fokus */
}
.navbar-brand {
    display: flex;
    align-items: center; /* Logo dan teks berada sejajar */
}

.brand-text-container {
    display: flex;
    flex-direction: column; /* Atur "DIGITAL KORLANTAS POLRI" di atas dan "Pages Dashboard" di bawahnya */
    margin-left: 15px; /* Jarak antara logo dan teks */
}

.text-logo {
    font-size: 18px; /* Ukuran teks untuk "DIGITAL KORLANTAS POLRI" */
    font-weight: bold;
    color: white;
}

.page-title {
    display: flex; /* Untuk mengatur ikon dan teks secara horizontal */
    align-items: center;
    margin-top: 40px; /* Jarak kecil antara teks logo dan page-title */
    margin-left: 50px;
}

.page-title i {
    font-size: 30px; /* Ukuran ikon */
    color: rgb(3, 3, 3);
    margin-right: 5px; /* Jarak antara ikon dan teks */
}

.page-title h3 {
    font-size: 30px; /* Ukuran teks lebih kecil */
    color: rgb(0, 0, 0);
    margin: 0;
    font-weight: 600;
    
}
.additional-box-container {
    width: 40px; /* Atur lebar sesuai kebutuhan */
    max-width: 20%; /* Pastikan tidak melebihi lebar kontainer parent */
    background: linear-gradient(to bottom, #102C57, #5f615d);
    border: 1px solid #ddd; /* Ganti border sesuai kebutuhan */
    padding: 40px;
    text-align: center;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); /* Tambahkan bayangan untuk efek visual */
    border-radius: 10px;
    border: none;
    padding-top: -20px;
    transition: background-color 0.3s ease, box-shadow 0.3s ease, transform 0.3s ease;
    cursor: pointer;
}

.additional-box-container:hover {
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
    transform: scale(1.05);
}

.additional-box-container .title-container {
    margin-bottom: 15px;
}

.additional-box-container .box-title {
    font-size: 1.5rem;
    color: #333;
}

.additional-box-container .box-number {
    font-size: 2rem;
    color: #eeeeee; /* Ganti warna sesuai kebutuhan */
}

.additional-box-container h2 {
    font-size: 1.25rem;
    color: #555;
}
.additional-box-container h3 {
    font-size: 30px;
    color: #ffffff;
    font-weight: bold;
}
/* Styling utama untuk sidebar */
.sidebar {
    height: 100vh; /* Sidebar mengisi seluruh tinggi viewport */
    width: 250px; /* Lebar sidebar */
    position: fixed; /* Tetap di posisi kiri */
    top: 0;
    left: 0;
    background-color: #2c3e50; /* Warna latar sidebar */
    padding-top: 20px;
    box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1); /* Bayangan untuk tampilan lebih menonjol */
    font-family: 'Arial', sans-serif;
    overflow-y: auto; /* Memungkinkan sidebar untuk di-scroll secara vertikal */
    margin-top: 80px;
    z-index: 1000;
}

/* Sembunyikan scrollbar di sidebar */
.sidebar::-webkit-scrollbar {
    width: 0; /* Lebar scrollbar 0, sehingga tidak terlihat */
}

/* Heading untuk sidebar */
.sidebar h2 {
    text-align: center;
    color: #ecf0f1;
    margin-bottom: 30px;
    font-size: 24px;
    font-weight: bold;
    letter-spacing: 1px;
}

/* Styling untuk setiap link di sidebar */
.sidebar a {
    padding: 10px 15px;
    text-decoration: none;
    font-size: 18px;
    color: #bdc3c7; /* Warna teks default */
    display: block;
    transition: 0.3s; /* Efek transisi halus saat hover */
    margin-bottom: 10px;
}

/* Hover effect untuk link sidebar */
.sidebar a:hover {
    color: #ecf0f1; /* Warna teks saat hover */
    background-color: #34495e; /* Warna latar saat hover */
}

/* Styling untuk konten utama */
#main {
    margin-left: 250px; /* Sesuaikan dengan lebar sidebar */
    padding: 20px;
    font-family: 'Arial', sans-serif;
    overflow-y: auto; /* Memungkinkan konten utama untuk di-scroll */
    height: 100vh; /* Pastikan konten utama memiliki tinggi 100vh */
}

/* Pastikan konten utama lebih panjang untuk demonstrasi scroll */
#main p {
    margin-bottom: 15px; /* Ruang antar paragraf */
}

#main h1 {
    font-size: 36px;
    color: #2c3e50;
}




                </style>
            </head>
            <body>
                <nav class="navbar navbar-expand-lg navbar-light navbar-bg-brown fixed-top">
                    <a class="navbar-brand d-flex align-items-center" href="#">
                        <img src="{{ asset('assets/dist/assets/img/simedia.png') }}" class="navbar-logo d-inline-block align-top" alt="">
                        <div class="brand-text-container">
                            <div class="text-logo">DIGITAL KORLANTAS POLRI</div>
                        </div>
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
                                <a href="history" class="nav-link btn btn-orange text-white d-flex align-items-center">
                                    <i class="bi bi-clock-history me-2"></i>
                                    <p class="mb-0">Data Input Anda</p>
                                </a>
                            </li>                               
                        </ul>
                        <div class="dropdown ms-auto">
                            <a class="dropdown-toggle d-flex align-items-center text-white text-decoration-none" href="#" role="button" id="dropdownProfile" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bi bi-person-circle profile-icon me-2"></i>
                                <span class="profile-text">POLRES CIANJUR</span>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-custom" aria-labelledby="dropdownProfile">
                                <li>
                                    <a class="dropdown-item dropdown-item-custom" href="#">
                                        <i class="bi bi-person"></i> Profil
                                    </a>
                                    <a class="dropdown-item dropdown-item-custom" href="/sesi/logout">
                                        <i class="bi bi-box-arrow-right"></i> Logout
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav> 
                
                    <!-- Elemen pencarian tetap terpisah -->
                    {{-- <div class="search-dropdown-container" style="margin-left: 77%; position: relative;">
                        <div class="input-wrapper">
                            <input type="text" placeholder="POLRES CIANJUR" class="search-input" id="search-input">
                            <i class="bi bi-arrow-down-short dropdown-icon"></i>
                        </div>
                        <div class="dropdown-content" id="dropdown-content">
                            <a href="#">POLRES CIANJUR</a>
                        </div>
                    </div> --}}               
                  {{-- <div class="button-container">
                        <button class="button-sim" data-target="#modal-sim-internasional">SIM Internasional</button>
                        <button class="button-sim" data-target="#modal-sim-nasional">SIM Nasional</button>
                        <button class="button-sim" data-target="#modal-memperpanjang">Memperpanjang SIM</button>
                    </div>     --}}
                <div class="container-atas" style="padding-top: 20px;">
                    <div class="bordered-container p-3 d-flex flex-column justify-content-center align-items-center">
                        {{-- <div class="d-flex align-items-center text-container">
                            <img src="{{ asset('assets/dist/assets/img/presisi.png') }}" alt="Gambar Kecil" class="small-image me-3">
                            <div class="text-center">
                                @auth
                                <div>
                                    <h5 class="mb-2 typing" id="welcome-text">Selamat Datang, {{ Auth::user()->name }} Di Sim Nasional Presisi!</h5>
                                </div>
                                <div>
                                    <h6 class="mb-2 typing" id="service-text">Digital Korlantas Polri</h6>
                                </div>
                                @else
                                <div>
                                    <h5 class="mb-2 typing" id="welcome-text">Selamat Datang, Tamu Di Sim Nasional Presisi!</h5>
                                </div>
                                <div>
                                    <h6 class="mb-2 typing" id="service-text"><b>Digital Korlantas Polri!</b></h6>
                                </div>
                                @endauth
                            </div>
                        </div> --}}
                    </div>
                
                        <!-- Modal SIM Internasional -->
                    <div id="modal-sim-internasional" class="modal-card">
                        <div class="modal-cons">
                            <span class="closes" data-modal="#modal-sim-internasional">&times;</span>
                            <h2>SIM Internasional</h2>
                            <img src="{{ asset('assets/dist/assets/img/intern.jpg') }}" alt="SIM Internasional" class="modal-image">
                            <p>Layanan Belum Tersedia</p>
                            <h3>Maaf, Layanan yang Anda pilih sedang dalam proses pengembangan.</h3>
                         </div>
                        </div>
                    </div>

                    <!-- Modal SIM Nasional -->
                    <div id="modal-sim-nasional" class="modal-card">
                        <div class="modal-cons">
                            <span class="closes" data-modal="#modal-sim-nasional">&times;</span>
                            <h2>SIM Nasional</h2>
                            <div class="procedure-content">
                                <h3>Tata Cara Pengajuan SIM</h3>
                                <ol>
                                    <li>Lengkapi formulir pendaftaran secara online atau di kantor kepolisian.</li>
                                    <li>Siapkan dokumen pendukung seperti KTP, pas foto, dan bukti pembayaran.</li>
                                    <li>Bayar biaya administrasi di loket pembayaran atau secara online.</li>
                                    <li>Ikuti tes teori dan praktik sesuai jadwal yang telah ditentukan.</li>
                                    <li>Tunggu hasil pengujian. Jika lulus, SIM akan dicetak dan diberikan.</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Modal Memperpanjang SIM -->
                    <div id="modal-memperpanjang" class="modal-card">
                        <div class="modal-cons">
                            <span class="closes" data-modal="#modal-memperpanjang">&times;</span>
                            <h2>Memperpanjang SIM</h2>
                            <img src="{{ asset('assets/dist/assets/img/perpanjang.jpg') }}" alt="SIM Internasional" class="modal-image">
                            <p>Layanan Belum Tersedia</p>
                            <h3>Maaf, Layanan yang Anda pilih sedang dalam proses pengembangan.</h3>
                        </div>
                    </div>
                    {{-- <div class="page-title">
                        <i class="bi bi-house-door"></i>
                        <h3 style="margin: 0">Dashboard</h3>
                    </div> --}}
                    <div id="mySidebar" class="sidebar">
                        <h2>My Sidebar</h2>
                        <a href="#">Link 1</a>
                        <a href="#">Link 2</a>
                        <a href="#">Link 3</a>
                        <a href="#">Link 4</a>
                        <!-- Tambahkan lebih banyak link untuk demonstrasi scroll -->
                        <a href="#">Link 5</a>
                        <a href="#">Link 6</a>
                        <a href="#">Link 7</a>
                        <a href="#">Link 8</a>
                        <a href="#">Link 9</a>
                        <a href="#">Link 10</a>
                        <a href="#">Link 11</a>
                        <a href="#">Link 12</a>
                        <a href="#">Link 13</a>
                    </div>
                    
                    <div id="main" style="padding-top: 30px;">
                        <div class="d-flex align-items-center text-container">
                            {{-- <img src="{{ asset('assets/dist/assets/img/presisi.png') }}" alt="Gambar Kecil" class="small-image me-3"> --}}
                            <div class="text-center">
                                @auth
                                <div>
                                    <h5 class="mb-2 typing" id="welcome-text">Selamat Datang, {{ Auth::user()->name }} Di Sim Nasional Presisi!</h5>
                                </div>
                                <div>
                                    <h6 class="mb-2 typing" id="service-text">Digital Korlantas Polri</h6>
                                </div>
                                @else
                                <div>
                                    <h5 class="mb-2 typing" id="welcome-text">Selamat Datang, Tamu Di Sim Nasional Presisi!</h5>
                                </div>
                                <div>
                                    <h6 class="mb-2 typing" id="service-text"><b>Digital Korlantas Polri!</b></h6>
                                </div>
                                @endauth
                            </div>
                        </div>
                        {{-- <h1>Welcome to the Dashboard</h1>
                        <p>Content goes here...</p> --}}
                    </div>                                        
                            
                    <div class="layout-container" style="padding-top: -10px; margin-top: -800px;">
                        <div class="content-wrapper" style="display: flex; align-items: flex-start; margin-left: -100px; ">
                            <div class="flex-container" style="display: flex; align-items: center; width: 100%; justify-content: space-around;"> <!-- Mengganti justify-content -->
                                <div class="card-wrapper" style="flex: 1; margin: 0 50px;"> <!-- Menambahkan margin antar box -->
                                    <div class="card transparent-card" style="width: 100%;">
                                        <div class="card-body">
                                            <div class="content" style="display: flex; justify-content: space-between; align-items: center;">
                                                <div class="text-content">
                                                    <h3>{{ $jumlahPengajuan }}</h3>
                                                    <p>Daftarkan Sekarang!</p>
                                                </div>
                                                <img src="{{ asset('assets/dist/assets/img/sim.png') }}" class="navbar-logo d-inline-block align-top" alt="">
                                            </div>
                                            <div class="icon">
                                                <i class="ion ion-bag"></i>
                                            </div>
                                            <a href="create-sim" class="small-box-footer">Pelayanan Sim <i class="fas fa-arrow-circle-right"></i></a>
                                        </div>
                                    </div>
                                </div>           
                                <div class="box-container" style="flex: 1; margin: 0 20px; text-align: center;"> <!-- Menambahkan margin antar box -->
                                    <div class="title-container">
                                        <h3 class="box-title">POLRES CIANJUR</h3>
                                    </div>
                                    <p class="box-number">91.42</p>
                                    <h2>NILAI TOTAL ZI</h2>
                                </div>
                                <div class="additional-box-container" style="flex: 1; margin: 0 10px; text-align: center;"> <!-- Menambahkan margin antar box -->
                                    <h3>Clien</h3>
                                    <p class="box-number">123.45</p>
                                    <h2>INFORMATION</h2>
                                </div>
                                <div class="queue-container" style="flex: 1; margin: 0 30px; text-align: center;"> <!-- Menambahkan margin antar box -->
                                    <div class="queue-box" id="queueBox">
                                        <p id="queueNumber">0</p>
                                        <button id="incrementBtn">Ambil Nomor Antrian Tes</button>
                                        <p id="message"></p>
                                    </div>
                                </div>
                            </div> 
                        </div> 
                    </div>                    
                                         
                    <div class="activity-container">
                        <h3>Aktivitas Terbaru</h3>
                        
                        <!-- Tombol Aktivitas Terbaru untuk menampilkan aktivitas saat ini -->
                        <button onclick="window.location.href='{{ route('user.activityDetails') }}'">
                            Lihat Aktivitas Details
                        </button>
                    </div>                           
                                 
                    {{-- <div class="container custom-margin-top">
                        <div id="commentList" class="comment-list mb-4">
                  
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
                    </div>  --}}
        

                    <script>
                        function toggleSidebar() {
    var sidebar = document.getElementById("mySidebar");
    var main = document.getElementById("main");
    var button = document.getElementById("sidebarToggle");

    // Cek apakah sidebar dalam kondisi terbuka atau tertutup
    if (sidebar.classList.contains('open')) {
        // Jika terbuka, tutup sidebar
        sidebar.classList.remove('open');
        sidebar.classList.add('closed');
        main.style.marginLeft = "0";
        button.innerHTML = "☰"; // Ubah ikon tombol menjadi buka
    } else {
        // Jika tertutup, buka sidebar
        sidebar.classList.remove('closed');
        sidebar.classList.add('open');
        main.style.marginLeft = "250px";
        button.innerHTML = "×"; // Ubah ikon tombol menjadi tutup
    }
}

                        </script>
                    <script>
                      document.addEventListener('DOMContentLoaded', function () {
    function fetchActivities() {
        fetch('/activities') // Pastikan endpoint ini mengembalikan aktivitas untuk pengguna yang sedang login
            .then(response => {
                if (!response.ok) {
                    throw new Error(`HTTP error! Status: ${response.status}`);
                }
                return response.json();
            })
            .then(data => {
                console.log('Data aktivitas yang diterima:', data); // Debugging: Tampilkan data yang diterima
                renderActivities(data);
            })
            .catch(error => {
                console.error('Error fetching activities:', error); // Debugging: Menampilkan kesalahan di konsol
                const activityTable = document.getElementById('activity-table');
                activityTable.innerHTML = '<p>Tidak dapat mengambil data aktivitas. Silakan coba lagi nanti.</p>';
            });
    }

    function renderActivities(activities) {
        const activityTable = document.getElementById('activity-table');
        activityTable.innerHTML = ''; // Menghapus konten lama

        if (!activities || activities.length === 0) {
            activityTable.innerHTML = '<p>Tidak ada aktivitas terbaru.</p>';
            return;
        }

        // Menampilkan aktivitas tanpa nama pengguna
        activities.forEach(activity => {
            const activityItem = document.createElement('div');
            activityItem.classList.add('activity-item');

            activityItem.innerHTML = `
                <h4>${activity.activity_name}</h4>
                <small>Waktu: ${new Date(activity.activity_time).toLocaleString()}</small>
                <p>Detail: ${activity.activity_details}</p>
            `;

            activityTable.appendChild(activityItem);
        });
    }

    // Memanggil fungsi untuk mengambil aktivitas saat halaman dimuat
    fetchActivities();
});
                        </script>
                   <script>
                    document.addEventListener('DOMContentLoaded', () => {
                        const buttons = document.querySelectorAll('.button-sim');
                        
                        buttons.forEach(button => {
                            button.addEventListener('click', () => {
                                const target = document.querySelector(button.getAttribute('data-target'));
                                if (target) {
                                    target.style.display = 'block'; // Tampilkan modal
                                    setTimeout(() => {
                                        target.style.opacity = 1; // Menambahkan opacity untuk transisi
                                    }, 10); // Kecilkan delay agar opacity transisi terlihat
                                }
                            });
                        });

                        const closeButtons = document.querySelectorAll('.closes');

                    closeButtons.forEach(closeButton => {
                        closeButton.addEventListener('click', () => {
                            const modal = document.querySelector(closeButton.getAttribute('data-modal'));
                            if (modal) {
                                modal.style.opacity = 0; // Menambahkan opacity untuk transisi
                                setTimeout(() => {
                                    modal.style.display = 'none'; // Sembunyikan modal setelah transisi
                                }, 300); // Durasi transisi opacity
                            }
                        });
                    });

                        window.addEventListener('click', (event) => {
                            if (event.target.classList.contains('modal')) {
                                event.target.style.opacity = 0; // Menambahkan opacity untuk transisi
                                setTimeout(() => {
                                    event.target.style.display = 'none'; // Sembunyikan modal setelah transisi
                                }, 300); // Durasi transisi opacity
                            }
                        });
                    });

                    </script>

                    <script>
//                         document.addEventListener('DOMContentLoaded', function() {
//     const queueNumberElement = document.getElementById('queueNumber');
//     const incrementBtn = document.getElementById('incrementBtn');
//     const messageElement = document.getElementById('message');

//     // Fungsi untuk mendapatkan nomor antrian dari localStorage
//     function getQueueNumber() {
//         const number = parseInt(localStorage.getItem('queueNumber'), 10);
//         return isNaN(number) ? 0 : number;
//     }

//     // Fungsi untuk menyimpan nomor antrian ke localStorage
//     function setQueueNumber(number) {
//         localStorage.setItem('queueNumber', number);
//     }

//     // Fungsi untuk mendapatkan daftar ID pengguna yang sudah mengambil nomor antrian
//     function getUsers() {
//         const users = JSON.parse(localStorage.getItem('users')) || [];
//         return users;
//     }

//     // Fungsi untuk menyimpan daftar ID pengguna ke localStorage
//     function setUsers(users) {
//         localStorage.setItem('users', JSON.stringify(users));
//     }

//     // Fungsi untuk mendapatkan ID pengguna unik dari cookies
//     function getUserId() {
//         const cookie = document.cookie.split('; ').find(row => row.startsWith('userId='));
//         if (cookie) {
//             return cookie.split('=')[1];
//         } else {
//             // Buat ID pengguna unik
//             const userId = 'user_' + Math.random().toString(36).substr(2, 9);
//             // Simpan ID pengguna ke cookie (berlaku untuk sesi browser)
//             document.cookie = `userId=${userId}; path=/; max-age=86400`; // Cookie berlaku selama 24 jam
//             return userId;
//         }
//     }

//     // Fungsi untuk mereset tampilan notifikasi dan nomor antrian
//     function resetQueueDisplay() {
//         messageElement.textContent = '';  // Mengosongkan pesan notifikasi
//         incrementBtn.disabled = false;    // Mengaktifkan tombol agar bisa diambil nomor lagi
//     }

//     // Fungsi untuk menangani klik tombol
//     function handleIncrement() {
//         const users = getUsers();
//         const userId = getUserId();

//         // Periksa jika pengguna sudah mengambil nomor
//         if (users.includes(userId)) {
//             messageElement.textContent = 'Anda sudah mengambil nomor antrian.';
//             incrementBtn.disabled = true;
//             return;
//         }

//         // Perbarui nomor antrian dan status pengguna
//         let currentNumber = getQueueNumber();
//         currentNumber++; // Tambah nomor antrian
//         setQueueNumber(currentNumber);

//         users.push(userId);
//         setUsers(users);

//         // Perbarui tampilan
//         queueNumberElement.textContent = currentNumber;
//         messageElement.textContent = 'Nomor antrian Anda adalah ' + currentNumber;
//         incrementBtn.disabled = true; // Nonaktifkan tombol setelah pengguna mengambil nomor
//     }

//     // Fungsi untuk inisialisasi tampilan awal
//     function initializeDisplay() {
//         const userId = getUserId(); // Dapatkan ID pengguna saat ini
//         const users = getUsers();

//         // Reset tampilan notifikasi dan tombol
//         resetQueueDisplay();

//         // Tampilkan nomor antrian terakhir tanpa notifikasi jika pengguna sudah mengambil nomor
//         if (users.includes(userId)) {
//             const lastQueueNumber = getQueueNumber();
//             queueNumberElement.textContent = lastQueueNumber;
//             messageElement.textContent = 'Nomor antrian Anda adalah ' + lastQueueNumber;
//             incrementBtn.disabled = true; // Nonaktifkan tombol jika pengguna sudah mengambil nomor
//         } else {
//             // Jika pengguna belum mengambil nomor, tampilkan nomor terakhir tanpa notifikasi
//             const lastQueueNumber = getQueueNumber();
//             queueNumberElement.textContent = lastQueueNumber;
//         }
//     }

//     // Inisialisasi tampilan nomor antrian saat halaman dimuat
//     initializeDisplay();

//     // Tambahkan event listener ke tombol
//     incrementBtn.addEventListener('click', handleIncrement);
// });

                        </script>
                        
                <script>
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
        </main> <!--end::App Main--> <!--begin::Footer-->
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
    <footer style="
    text-align: center;
    padding: 15px;
    color: rgb(0, 0, 0);
    font-size: 14px;
">
    <strong>Copyright &copy; 2024 <a href="/sesi" style="color: rgb(50, 77, 196); text-decoration: none;">SIMedia</a>.</strong>
    All rights reserved.
    <div style="float: right; display: inline-block;">
        <b>Version</b> 3.2.0
    </div>
</footer>
</body><!--end::Body-->
</html> 