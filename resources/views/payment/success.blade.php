<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pembayaran Berhasil</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
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
            color: #28a745; /* Warna hijau */
            margin-bottom: 20px;
        }

        p {
            color: #6c757d; /* Warna abu-abu */
            margin: 0;
            line-height: 1.5;
        }

        .icon {
            font-size: 50px;
            color: #28a745;
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
            <i class="fas fa-check-circle"></i>
        </div>
        <h1>Pembayaran Anda Berhasil!</h1>
        <p>Terima kasih telah melakukan pembayaran. Silakan cek email Anda untuk konfirmasi.</p>
        <a href="{{ route('dashboard') }}" class="btn">Kembali ke Beranda</a>
    </div>
</body>
</html>
