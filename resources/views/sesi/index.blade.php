<!DOCTYPE html>
<html lang="en"> <!--begin::Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Login</title><!--begin::Primary Meta Tags-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="title" content="Login Page v2">
    <meta name="author" content="ColorlibHQ">
    <meta name="description" content="AdminLTE is a Free Bootstrap 5 Admin Dashboard, 30 example pages using Vanilla JS.">
    <meta name="keywords" content="bootstrap 5, bootstrap, bootstrap 5 admin dashboard, bootstrap 5 dashboard, bootstrap 5 charts, bootstrap 5 calendar, bootstrap 5 datepicker, bootstrap 5 tables, bootstrap 5 datatable, vanilla js datatable, colorlibhq, colorlibhq dashboard, colorlibhq admin dashboard"><!--end::Primary Meta Tags--><!--begin::Fonts-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fontsource/source-sans-3@5.0.12/index.css" integrity="sha256-tXJfXfp6Ewt1ilPzLDtQnJV4hclT9XuaZUKyUvmyr+Q=" crossorigin="anonymous"><!--end::Fonts--><!--begin::Third Party Plugin(OverlayScrollbars)-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.3.0/styles/overlayscrollbars.min.css" integrity="sha256-dSokZseQNT08wYEWiz5iLI8QPlKxG+TswNRD8k35cpg=" crossorigin="anonymous"><!--end::Third Party Plugin(OverlayScrollbars)--><!--begin::Third Party Plugin(Bootstrap Icons)-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.min.css" integrity="sha256-Qsx5lrStHZyR9REqhUF8iQt73X06c8LGIUPzpOhwRrI=" crossorigin="anonymous"><!--end::Third Party Plugin(Bootstrap Icons)--><!--begin::Required Plugin(AdminLTE)-->
    <link rel="stylesheet" href="{{asset('assets')}}/dist/css/adminlte.css"><!--end::Required Plugin(AdminLTE)-->
    <style>
       body {
    background-color: #682109; /* Warna latar belakang solid di bawah gambar */
    background-image:url('{{ asset('assets/dist/assets/img/indonesia.png') }}'); /* Ganti dengan path gambar Anda */
    background-size: 90% 60%; /* Mengatur ukuran gambar agar sesuai dengan kontainer */
    background-position: center; /* Memusatkan gambar di tengah layar */
    background-repeat: no-repeat; /* Mencegah gambar berulang */
    height: 100vh; /* Memastikan gambar latar menutupi tinggi penuh */
    width: 100vw; /* Memastikan gambar latar menutupi lebar penuh */
    margin: 0; /* Menghapus margin default */
    position: relative; /* Menyiapkan positioning untuk elemen pseudo */
}

body::before {
    content: ''; /* Konten kosong untuk pseudo-element */
    position: absolute;
    top: 0;
    left: 0;
    height: 100%;
    width: 100%;
}

.login-page {
    background-color: rgba(255, 255, 255, 0.8); /* Biarkan latar belakang halaman login transparan */
    height: 100vh; /* Tinggi layar penuh */
    width: 100vw; /* Lebar layar penuh */
    display: flex;
    justify-content: center; /* Menyelaraskan konten secara horizontal di tengah */
    align-items: center; /* Menyelaraskan konten secara vertikal di tengah */
    position: relative; /* Memastikan konten login berada di atas pseudo-element */
    z-index: 2; /* Membawa konten login di atas pseudo-element */
}
        .login-box {
            width: 100%;
            max-width: 500px; /* Membatasi lebar maksimum kotak login */
            margin: 20px auto; /* Membuat kotak login berada di tengah halaman */
            border-radius: 10px; /* Radius sudut untuk kotak login */
            overflow: hidden; /* Agar konten tidak keluar dari batas border-radius */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Menambahkan bayangan untuk efek kedalaman */
            background-color: #ffffff; /* Warna latar belakang kotak login */
        }
        .card-header {
            display: flex;
            align-items: center;
            background-color: #682109; /* Warna latar belakang header */
            padding: 20px; /* Menambahkan padding pada header */
            color: #ffffff; /* Warna teks putih */
        }
        .logo-image {
            width: 40%; /* Ukuran gambar lebih kecil */
            height: auto; /* Menjaga proporsi gambar */
            margin-right: 15px; /* Spasi antara gambar dan teks */
        }
        .card-header h1 {
            margin: 0; /* Menghapus margin default dari h1 */
            font-size: 24px; /* Ukuran font untuk h1 */
        }
        .card-body.login-content {
            background-color: #f0cc9e; /* Warna krem */
            padding: 20px; /* Menambahkan padding agar konten tidak menempel pada tepi */
            border-radius: 10px; /* Menambahkan border-radius agar tampilan lebih halus */
            color: black; /* Warna teks */
        }
        .btn-custom {
            background-color: #682109; /* Warna tombol */
            color: #ffffff; /* Warna teks putih */
            border: none; /* Menghilangkan border default */
            padding: 10px 20px; /* Padding dalam tombol */
            font-size: 16px; /* Ukuran font dalam tombol */
            border-radius: 5px; /* Membulatkan sudut tombol */
            cursor: pointer; /* Mengubah kursor menjadi pointer saat dihover */
        }
        .btn-custom:hover {
            background-color: #973131; /* Warna tombol saat dihover */
        }
        .alert-danger {
            margin: 20px; /* Menambahkan margin untuk pesan kesalahan */
        }
    </style>
</head> <!--end::Head--> <!--begin::Body-->

<body> 
    <div class="login-page">
        <div class="login-box">
            <div class="card card-outline card-secondary">
             <div class="card-header"> 
                <img src="{{ asset('assets/dist/assets/img/pres.png') }}" alt="Presisi Logo" class="logo-image">
                <h1 class="mb-0"><b>LOGIN ACCESS</b></h1>
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
            <div class="card-body login-content">
                <form action="sesi/login" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" value="{{ Session::get('email') }}" name="email" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control">
                    </div>
                    <div class="mb-3 d-grid">
                        <button name="submit" type="submit" class="btn btn-custom">LOGIN</button>
                    </div>
                    <div class="mb-3 d-grid">
                        <a href="/sesi/register" class="btn btn-custom">REGISTER NEW MEMBER</a>
                    </div>        
                </form>
            </div>
        </div>
    </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>