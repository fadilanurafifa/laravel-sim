<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Transaksi</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<style>
    body {
        font-family: 'Arial', sans-serif;
        background: linear-gradient(to right, #6a11cb, #2575fc);
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

    .container {
        max-width: 850px;
        width: 100%;
        background-color: #fff;
        padding: 40px;
        border-radius: 15px;
        box-shadow: 0px 15px 25px rgba(0, 0, 0, 0.1);
        text-align: center;
    }

    h2 {
        font-size: 36px;
        color: #007bff;
        margin-bottom: 20px;
        font-weight: bold;
        text-transform: uppercase;
    }

    .status-icon {
        font-size: 80px;
        color: #28a745;
        margin-bottom: 20px;
        animation: bounce 1.5s infinite;
    }

    @keyframes bounce {
        0%, 100% {
            transform: translateY(0);
        }
        50% {
            transform: translateY(-10px);
        }
    }

    .card {
        border: none;
        border-radius: 10px;
        box-shadow: 0px 6px 15px rgba(0, 0, 0, 0.1);
        background-color: #f9f9f9;
        margin-bottom: 30px;
    }

    .card-body {
        padding: 30px;
    }

    .card-title {
        font-size: 26px;
        color: #333;
        margin-bottom: 25px;
        font-weight: bold;
    }

    table {
        width: 100%;
        margin-top: 15px;
        border-collapse: collapse;
        text-align: left;
    }

    .table th {
        background-color: #007bff;
        color: #fff;
        padding: 12px 15px;
        font-size: 18px;
    }

    .table td {
        padding: 12px 15px;
        border-bottom: 1px solid #ddd;
        font-size: 16px;
    }

    .table-striped tbody tr:nth-child(odd) {
        background-color: #f8f9fa;
    }

    .action-btns {
        display: flex;
        justify-content: center;
        gap: 30px;
        margin-top: 40px;
    }

    .action-btn {
        padding: 14px 30px;
        background-color: #007bff;
        color: white;
        border-radius: 30px;
        text-decoration: none;
        font-size: 18px;
        font-weight: bold;
        text-transform: uppercase;
        letter-spacing: 1px;
        transition: background-color 0.3s ease, transform 0.3s ease;
    }

    .action-btn:hover {
        background-color: #0056b3;
        transform: scale(1.1);
    }

    .action-btn:active {
        background-color: #003f6b;
        transform: scale(1);
    }

    .card-footer {
        margin-top: 20px;
        text-align: center;
    }

    .card-footer small {
        color: #777;
        font-size: 14px;
    }

</style>
<body>
    <div class="container">
        <h2>Transaksi Berhasil</h2>

        <!-- Ikon Centang dengan Animasi -->
        <div class="status-icon">
            <i class="fas fa-check-circle"></i>
        </div>

        <!-- Detail Transaksi -->
        <div class="transaction-details">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Detail Pembayaran</h4>
                    <table class="table table-striped">
                        <tr>
                            <th>User ID</th>
                            <td>{{ $transaction->user_id }}</td>
                        </tr>
                        <tr>
                            <th>Jumlah Pembayaran</th>
                            <td>Rp {{ number_format($transaction->payment_amount, 2, ',', '.') }}</td>
                        </tr>
                        <tr>
                            <th>Jenis SIM</th>
                            <td>{{ $transaction->jenis_sim }}</td>
                        </tr>
                        <tr>
                            <th>Metode Pembayaran</th>
                            <td>{{ $transaction->payment_method }}</td>
                        </tr>
                        <tr>
                            <th>Tanggal Transaksi</th>
                            <td>{{ $transaction->created_at->format('d-m-Y H:i:s') }}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>

        <!-- Tombol Aksi Lanjutan -->
        <div class="action-btns">
            <a href="/dashboard" class="action-btn">Kembali ke Dashboard</a>
            <a href="/transactions" class="action-btn">Lihat Transaksi Lain</a>
        </div>
        
        <div class="card-footer">
            <small>Terima kasih telah menggunakan layanan kami!</small>
        </div>
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
