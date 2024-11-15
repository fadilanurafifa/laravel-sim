<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verifikasi e-KTP Berhasil</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #e1e4e6;
            font-family: Arial, sans-serif;
        }
        .container {
            margin-top: 100px;
            text-align: center;
        }
        h1 {
            font-size: 36px;
            color: #102C57; /* Warna hijau untuk sukses */
            font-weight: bold;
            margin-bottom: 20px;
        }
        p {
            font-size: 18px;
            color: #333;
        }
        a {
            color: #102C57;
            text-decoration: underline;
        }
        a:hover {
            text-decoration: none;
        }
        .spinner-border {
            margin-top: 30px;
            width: 3rem;
            height: 3rem;
            color: #102C57; /* Warna hijau untuk kesan sukses */
        }
    </style>

    <script>
        // Redirect ke dashboard setelah 5 detik
        setTimeout(function() {
            window.location.href = "{{ route('dashboard') }}";
        }, 5000); // 5000 milidetik = 5 detik
    </script>
</head>
<body>
    <div class="container">
        <h1>Verifikasi e-KTP Diproses</h1>
        <p>Anda akan diarahkan ke dashboard dalam beberapa saat...</p>
        <p>Jika tidak, klik <a href="{{ route('dashboard') }}">di sini</a>.</p>
        
        <!-- Spinner Loading -->
        <div class="spinner-border" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
</body>
</html>


