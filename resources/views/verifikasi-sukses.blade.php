<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verifikasi Sukses</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #021526;
            margin: 0;
            padding: 0;
        }
        .alert-success {
            background-color: #d4edda; /* Warna latar belakang hijau muda */
            color: #155724; /* Warna teks hijau gelap */
            border-color: #c3e6cb; /* Warna border hijau muda */
            border-radius: 0.5rem; /* Radius sudut border */
            padding: 1rem; /* Padding untuk ruang di dalam alert */
            font-size: 1.125rem; /* Ukuran font yang sedikit lebih besar */
        }

        .alert-success h4 {
            font-weight: bold; /* Menebalkan teks judul */
        }

        .container {
            display: flex;
            align-items: center; /* Vertikal center */
            justify-content: center; /* Horizontal center */
            height: 100vh; /* Tinggi penuh viewport */
        }

        p {
            margin-top: 0.5rem; /* Jarak antara judul dan paragraf */
            font-size: 1rem; /* Ukuran font paragraf */
        }
    </style>
     <script>
        setTimeout(function() {
            window.location.href = 'dashboard'; // Arahkan ke route dashboard
        }, 3000); // Waktu dalam milidetik (3000 ms = 3 detik)
    </script>
</head>
<body>
    <div class="container mt-5">
        <div class="alert alert-success text-center">
            @if (session('success'))
                <h4>{{ session('success') }}</h4>
            @endif
            <p>Tunggu sesaat, Anda akan beralih untuk pengajuan...</p>
        </div>
    </div>
</body>
</html>

