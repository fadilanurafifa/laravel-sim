<!-- resources/views/payment-proof.blade.php -->

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bukti Pembayaran</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container" style="max-width: 800px; margin-top: 50px; text-align: center;">
        <h2>Bukti Pembayaran</h2>

        <!-- Tampilkan gambar bukti pembayaran -->
        <div class="payment-proof-image" style="margin: 20px 0;">
            <img src="{{ asset('storage/payments/' . $transaction->payment_proof) }}" alt="Bukti Pembayaran" style="max-width: 100%; height: auto;">
        </div>

        <!-- Tombol untuk mengunduh bukti pembayaran -->
        <div class="download-btn" style="margin-top: 20px;">
            <a href="{{ asset('storage/payments/' . $transaction->payment_proof) }}" class="btn btn-primary" download>
                <i class="fa fa-download"></i> Unduh Bukti Pembayaran
            </a>
        </div>
    </div>
</body>
</html>
