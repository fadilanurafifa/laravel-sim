<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pembayaran Gagal</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;; /* Warna latar belakang merah muda */
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .container {
            text-align: center;
            background-color: #ffffff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
        }

        h1 {
            color: #dc3545; /* Warna merah untuk kesalahan */
            margin-bottom: 20px;
        }

        p {
            color: #721c24; /* Warna teks untuk pesan kesalahan */
            margin: 0;
            line-height: 1.5;
        }

        .icon {
            font-size: 50px;
            color: #dc3545; /* Warna merah untuk ikon */
            margin-bottom: 20px;
        }

        .btn {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #007bff; /* Warna biru */
            color: white;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .btn:hover {
            background-color: #0056b3; /* Biru gelap saat hover */
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="icon">
            <i class="fas fa-times-circle"></i> <!-- Ikon untuk menunjukkan kesalahan -->
        </div>
        <h1>Pembayaran Gagal!</h1>
        <p>{{ session('error') }}</p> <!-- Menampilkan pesan error -->
        <a href="{{ route('pembayaran.form') }}" class="btn">Coba Lagi</a>
    </div>
</body>
</html>
