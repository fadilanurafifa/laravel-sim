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
         *{
    font-family: "Ubuntu", system-ui;
    font-weight: 500;
    font-style: normal;
    }
     body {
    background-color: #160944; 
    background-image:url('{{ asset('assets/dist/assets/img/indonesia.png') }}'); 
    background-size: 90% 60%; 
    background-position: center;
    background-repeat: no-repeat; 
    height: 100vh; 
    width: 100vw; 
    margin: 0; 
    position: relative; 
}

body::before {
    content: ''; 
    position: absolute;
    top: 0;
    left: 0;
    height: 100%;
    width: 100%;
}

.login-page {
    background-color: rgba(255, 255, 255, 0.8); 
    height: 100vh; 
    width: 100vw; 
    display: flex;
    justify-content: center; 
    align-items: center; 
    position: relative; 
    z-index: 2; 
}
.login-box {
    width: 100%;
    max-width: 600px; 
    margin: 20px; 
    border-radius: 10px; 
    overflow: hidden; 
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    background-color: #ffffff; 
}

        .card-header {
            display: flex;
            align-items: center;
            background-color: #160944; 
            padding: 20px; 
            color: #ffffff;
        }
        .logo-image {
            width: 40%; 
            height: auto; 
            margin-right: 15px; 
        }
        .card-header h1 {
            margin: 0; 
            font-size: 24px; 
        }
        .card-body.login-content {
            background-color: #ece6dc; 
            padding: 20px; 
            border-radius: 10px; 
            color: black; 
        }
       
        .alert-danger {
            margin: 20px;
            color: red;
        }
.card-nav {
    display: flex; 
    align-items: center;
    justify-content: center;
    gap: 10px; 
    background-color: transparent; 
    padding: 20px 0;
    transition: transform 0.2s ease, opacity 0.2s ease;
}
.logo-sinar {
    max-width: 200px; 
    height: auto;
    transition: transform 0.2s ease; 
}
.card-nav h2 {
    color: #160944;
    font-family: 'Arial', sans-serif; 
    font-size: 50px;
    margin: 0; 
    font-weight: bold; 
    transition: color 0.2s ease, transform 0.2s ease;
}

.card-nav:hover {
    transform: scale(1.02); 
}

.logo-sinar:hover {
    transform: scale(1.05); 
}

.card-nav h2:hover {
    color: #555; 
    transform: translateY(-2px); 
}
.login-content {
    padding: 30px;
    border-radius: 10px; 
    background-color: #f7f7f7; 
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); 
}

.form-label {
    font-weight: bold; 
    color: #160944;
}
.mb-3 {
    margin-bottom: 20px; 
}
.login-content {
    padding: 30px; 
    border-radius: 10px; 
    background-color: #f7f7f7;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); 
}

.form-label {
    font-weight: bold; 
    color: #160944;
    margin-bottom: 5px; 
}

.form-control {
    width: 90%; 
    border: 1px solid #ccc; 
    border-radius: 10px; 
    padding: 12px; 
    transition: border-color 0.3s ease; 
    margin-top: 10px;
    outline: none;
}

.form-control:focus {
    border-color: #160944; 
    box-shadow: 0 0 5px rgba(16, 44, 87, 0.5); 
}

.mb-3 {
    margin-bottom: 20px;
}

.d-grid {
    display: grid; 
    gap: 10px; 
}
.btn-tomple {
    background-color: #160944; 
    color: #ffffff; 
    border: none; 
    padding: 10px 20px; 
    font-size: 16px;
    border-radius: 5px; 
    cursor: pointer; 
    transition: background-color 0.3s ease; 
}
.btn-tomple:hover {
    background-color: #160944; 
}

    </style>
</head> 

<body> 
    <div class="login-page">
        {{-- <div class="card-nav text-center">
            <!-- Logo SIMedia -->
            <img src="{{ asset('assets/dist/assets/img/sinar.png') }}" alt="Presisi Logo" class="logo-sinar">

            <!-- Teks SIMedia -->
            <h2 class="mb-0 mt-2"><b>SIMedia</b></h2>

        </div> --}}
        <div class="login-box">
            <div class="card card-outline card-secondary">
             <div class="card-header"> 
                <img src="{{ asset('assets/dist/assets/img/pres.png') }}" alt="Presisi Logo" class="logo-image">
                <h1 class="mb-0"><b>REGISTER ACCESS</b></h1>
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
                <form action="create" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama Sesuai KTP</label>
                        <input type="text" value="{{ Session::get('name') }}" name="name" class="form-control" placeholder="Masukan nama anda">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" value="{{ Session::get('email') }}" name="email" class="form-control" placeholder="Masukan email anda">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" placeholder="Masukan password anda">
                    </div>
                    <div class="mb-3 d-grid">
                        <button name="submit" type="submit" class="btn btn-tomple">REGISTER</button>
                    </div>
                </form>
            </div>            
        </div>
    </div>
    </div>
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
