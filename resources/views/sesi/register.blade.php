<!DOCTYPE html>
<html lang="en"> <!--begin::Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Register</title><!--begin::Primary Meta Tags-->
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
         html, body {
        margin: 0;
        padding: 0;
        height: 100%;
        width: 100%;
    }
    .login-page {
        background-color: #792525; /* Warna latar belakang */
        height: 100vh; /* Mengatur tinggi penuh layar */
        width: 100vw; /* Mengatur lebar penuh layar */
        display: flex;
        justify-content: center;
        align-items: center;
    }
        .login-box {
            width: 500px; /* Adjust this value as needed */
            border-radius: 30px; /* Radius sudut untuk login box */
            overflow: hidden; /* Agar konten tidak keluar dari batas border-radius */
        }
        .card-header {
            display: flex;
            align-items: center;
        }
        .header-image {
            width: 50%; /* Ukuran gambar lebih kecil */
            height: auto; /* Menjaga proporsi gambar */
            margin-right: 10px; /* Spasi antara gambar dan teks */
        }
        .card-header a {
            text-decoration: none; /* Menghapus garis bawah dari tautan */
        }
        .card-header h1 {
            margin: 0; /* Menghapus margin default dari h1 */
        }
        .header-background {
            background-color: #682109; /* Warna coklat */
            padding: 10px; /* Opsional: menambahkan padding agar konten tidak menempel pada tepi */
        }
        .custom-background {
            background-color: #f0cc9e; /* Warna krem */
            padding: 20px; /* Opsional: menambahkan padding agar konten tidak menempel pada tepi */
            border-radius: 10px; /* Opsional: menambahkan border-radius agar tampilan lebih halus */
        }
        .header-background h1 {
            color: #ffffff; /* Warna putih khusus untuk h1 */
            font-size: 25px;
        }
        .btn-tomple {
            background-color: #682109; /* Warna coklat */
            color: #ffffff; /* Warna teks putih */
            border: none; /* Menghilangkan border default */
        }
        .btn-tomple:hover, .btn-tomple:focus {
            background-color: #682109; 
            border-color: #e2d2b1; 
            color: #ffffff; 
        }
        .btn-tomple:hover {
            background-color: #973131; /* Warna coklat lebih gelap untuk hover */
        }
    </style>
</head> <!--end::Head--> <!--begin::Body-->

<body> 
    <div class="login-page">
        <div class="login-box">
            <div class="card card-outline card-secondary">
                <div class="card-header d-flex align-items-center header-background"> 
                    <img src="{{ asset('assets/dist/assets/img/pres.png') }}" alt="Image Description" class="header-image me-3">
                    <a href="" class="text-center link-offset-2 link-opacity-100 link-opacity-50-hover">
                        <h1 class="mb-0"><b>REGISTER NEW MEMBER</b></h1>
                    </a>
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
                <div class="w-100 mx-auto border rounded px-3 py-3 custom-background">
                    <form action="create" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" value="{{ Session::get('name') }}" name="name" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" value="{{ Session::get('email') }}" name="email" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" name="password" class="form-control">
                        </div>
                        <div class="mb-3 d-grid">
                            <button name="submit" type="submit" class="btn btn-tomple">Register</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div> <!-- /.login-page -->
    
    <!--begin::Third Party Plugin(OverlayScrollbars)-->
    <script src="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.3.0/browser/overlayscrollbars.browser.es6.min.js" integrity="sha256-H2VM7BKda+v2Z4+DRy69uknwxjyDRhszjXFhsL4gD3w=" crossorigin="anonymous"></script> 
    <!--end::Third Party Plugin(OverlayScrollbars)-->
    
    <!--begin::Required Plugin(popperjs for Bootstrap 5)-->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha256-whL0tQWoY1Ku1iskqPFvmZ+CHsvmRWx/PIoEvIeWh4I=" crossorigin="anonymous"></script> 
    <!--end::Required Plugin(popperjs for Bootstrap 5)-->
    
    <!--begin::Required Plugin(Bootstrap 5)-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha256-YMa+wAM6QkVyz999odX7lPRxkoYAan8suedu4k2Zur8=" crossorigin="anonymous"></script> 
    <!--end::Required Plugin(Bootstrap 5)-->
</body> <!--end::Body-->

</html> <!--end::HTML-->
