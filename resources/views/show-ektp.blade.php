<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File E-KTP </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<style>
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
    .list-container {
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        width: 100%;
    }

    /* Styling untuk header Nama dan NIK */
    .header-row {
        display: flex;
        justify-content: space-between;
        width: 100%;
        background-color: #160944;
        color: white;
        padding: 10px 10px;
        font-weight: bold;
        margin-bottom: 5px;
    }

    .header-column {
        flex: 1;
        text-align: left;
    }

    .list-column {
        width: 100%;
        margin-bottom: 10px;
    }

    .card {
        border: none;
        overflow: hidden;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        background-color: #f9fafb;
    }

    .card:hover {
        transform: translateY(-5px);
        box-shadow: 0 6px 15px rgba(0, 0, 0, 0.15);
    }

    .card-body {
        display: flex;
        justify-content: space-between;
        padding: 10px 20px;
        background-color: #f4f6f9;
        border-radius: 8px;
        cursor: pointer;
        /* Mengurangi jarak antara Nama dan NIK */
        gap: 10px; /* Jarak antar kolom */
    }

    .card-text {
        margin: 0;
        padding: 5px 0;
        color: #374151;
        flex: 1; /* Membuat kolom Nama dan NIK memiliki lebar yang sama */
    }

    .custom-search-container {
        display: flex;
        justify-content: flex-end;
        padding-top: -40px;
        
    }

    /* Styling input pencarian */
    .custom-search-input {
        width: 100%;
        padding: 16px 18px 18px 40px; /* Padding kiri untuk ikon */
        border-radius: 30px;
        border: 1px solid #ddd;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        font-size: 17px;
        outline: none;
    }
    .search-icon-wrapper {
        position: relative;
        width: 300px;
        margin-top: -70px;
        }

    .search-icon {
        position: absolute;
        left: 15px;
        top: 50%;
        transform: translateY(-50%);
        color: #888;
        font-size: 16px;
    }
    /*DARISINI*/
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

                    /* Styling untuk logo di navbar */
                    .navbar-logo {
                        width: 60px;
                        height: 60px;
                    }

                    /* Styling untuk teks logo */
                    .text-logo {
                        font-size: 18px;
                        font-weight: bold;
                        color: #ffffff; /* Warna teks logo */
                        margin-left: 10px;
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
                    .navbar-nav{
                        margin-left: 62%;
                    }
                    form {
                    background: linear-gradient(to bottom, #387478, #629584); 
                    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1); 
                    max-width: 700px;
                    margin: 8px auto; /* Agar form berada di tengah halaman */
                    gap: 70px; /* Jarak antar form-group */
                    padding: 20px; /* Memberi jarak di sekitar kontainer */
                    }

form h2 {
    color: white; 
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
    color: white;
}
.form-control:focus, .form-select:focus {
    border-color: white; 
    box-shadow: 0 0 5px rgba(212, 175, 55, 0.5);
}

.form-group {
    width: calc(50% - 50px); /* Setengah lebar form, minus jarak antar elemen */
    min-width: 200px; /* Lebar minimal untuk setiap form-group */
}

.form-label {
    margin-bottom: 8px; /* Jarak antara label dan input */
    color: white;
}

.form-control, .form-select {
    width: 100%; /* Input dan select menyesuaikan lebar kontainernya */
    padding: 10px; /* Tambahan padding untuk kenyamanan input */
}

@media (max-width: 768px) {
    .form-group {
        width: 100%; /* Pada layar kecil, form-group mengambil lebar penuh */
    }
}

.btn-primary {
    background-color: #777838; 
    border: none;
    padding: 10px 10px;
    font-size: 14px;
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

.nav-link span {
    white-space: nowrap;
}
.linked,
.dropdown-form {
    display: flex;
    align-items: center;
    margin-left: 20px; 
}
.navbar .linked {
    margin-left: 210%; 
}

.dropdown-form {
    margin-left: 15px; 
}
.linked,
.nav-item {
    padding-top: 7px;
}
.linked
.nav-item i {
    margin-right: 20px;
}
/* Styling untuk header-title dan image */
.header-title {
    flex-direction: column;
    align-items: center;
    gap: 10px;
    padding: 20px 15px;
    border-radius: 10px;
    margin-bottom: 20px; /* Jarak di bawah header */
    padding-top: 90px;
}

/* Styling untuk gambar */
.header-image {
    width: 14%;
    height: 14%;
}

/* Styling untuk judul */
.header-title h1 {
    font-size: 35px;
    color: #333;
    margin-top: -30px;
    font-weight: bold;
}
.header-title h2 {
    font-size: 15px;
    color: #333;
}
</style>

<body>
    <nav class="navbar navbar-expand-lg navbar-light navbar-bg-brown fixed-top">
        <a class="navbar-brand" href="#">
            <img src="{{ asset('assets/dist/assets/img/simedia.png') }}" class="navbar-logo d-inline-block align-top" alt="">
            <div class="text-logo">FILE VERFIKASI E-KTP</div>
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
                <a class="dropdown-toggle d-flex align-items-center text-white text-decoration-none" href="#" role="button" id="dropdownProfile" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="bi bi-person-circle profile-icon me-2"></i>
                    <span class="profile-text">KORLANTAS POLRI</span>
                </a>
            </div>
        </div>
    </nav>               
    <div class="container-fluid">
        <div class="header-title">
            <img src="assets/dist/assets/img/simfile.png" alt="E-KTP Icon" class="header-image">
            <h1>Kartu Tanda Penduduk Elektronik</h1>
            <h2>Kartu Tanda Penduduk Elektronik (E-KTP) adalah identitas resmi yang dikeluarkan oleh pemerintah Indonesia,<br> berfungsi sebagai bukti sah kependudukan dan identitas diri dengan teknologi chip yang menyimpan data biometrik pemiliknya.</h2>
            <div class="custom-search-container">
                <div class="search-icon-wrapper">
                    <i class="fas fa-search search-icon"></i> <!-- Ikon pencarian -->
                    <input type="text" id="searchInput" placeholder="Cari E-KTP..." class="custom-search-input">
                </div>
            </div>
        </div>        

        <!-- Header Nama dan NIK -->
        <div class="header-row">
            <div class="header-column">#</div>
            <div class="header-column">Nama</div>
            <div class="header-column">Nik</div>
            <div class="header-column">Tanggal Verifikasi</div>
            <div class="header-column">Status</div>
        </div>

        <!-- Daftar Nama dan NIK dalam list kebawah -->
        <div class="list-container" id="listContainer">
            @foreach($verifikasis as $verifikasi)
                <div class="list-column" data-nama="{{ strtolower($verifikasi->nama) }}">
                    <div class="card">
                        <div class="card-body" data-toggle="modal" data-target="#imageModal{{ $verifikasi->id }}">
                            <div class="card-text">{{ $verifikasi->id }}</div>
                            <!-- Kolom pertama untuk Nama -->
                            <div class="card-text">{{ $verifikasi->nama }}</div>
                            <!-- Kolom kedua untuk NIK -->
                            <div class="card-text">{{ $verifikasi->nik }}</div>
                            <div class="card-text">{{ $verifikasi->created_at }}</div>
                            <div class="card-text">{{ $verifikasi->status }}</div>
                        </div>
                    </div>
                </div>

                <!-- Modal untuk gambar -->
                <div class="modal fade" id="imageModal{{ $verifikasi->id }}" tabindex="-1" role="dialog" aria-labelledby="imageModalLabel{{ $verifikasi->id }}" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="imageModalLabel{{ $verifikasi->id }}">Gambar E-KTP</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="outline: none;">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body text-center">
                                <img src="{{ asset('uploads/ektp/' . $verifikasi->file_ektp_path) }}" class="img-fluid" alt="E-KTP">
                            </div>
                            <div class="modal-footer">
                                <!-- Tombol download -->
                                <a href="{{ asset('uploads/ektp/' . $verifikasi->file_ektp_path) }}" class="btn btn-primary" download="ektp-{{ $verifikasi->id }}.jpg">
                                    <i class="bi bi-download"></i> Download
                                </a>                                
                                {{-- <button type="button" class="btn btn-secondary" stydata-dismiss="modal">Tutup</button> --}}
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</body>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
    <script>
        $(document).ready(function() {
            $('#searchInput').on('keyup', function() {
                var value = $(this).val().toLowerCase(); // Ambil input pencarian
                $('#listContainer .list-column').filter(function() {
                    // Sembunyikan elemen jika tidak cocok dengan input pencarian
                    $(this).toggle($(this).data('nama').indexOf(value) > -1);
                });
            });
        });
    </script>
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
</body>
</html>

