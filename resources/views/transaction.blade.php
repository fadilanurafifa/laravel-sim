<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Transaksi</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" 
    rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <style>
        /* Gaya dasar */
        body {
            font-family: 'Inter', sans-serif;
            background: linear-gradient(135deg, #160944, #777838);
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }

        .container {
            background-color: #ffffff;
            border-radius: 16px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
            padding: 40px;
            max-width: 800px;
            width: 100%;
            text-align: center;
        }

        h2 {
            font-size: 32px;
            font-weight: 700;
            color: #160944;
            margin-bottom: 20px;
        }

        .status-icon {
            font-size: 80px;
            color: #388e3c;
            margin-bottom: 30px;
            animation: bounce 1.5s infinite;
            padding-top: 20px;
        }
        .transaction-details .card {
            background-color: #f8f9fa;
            border-radius: 12px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.05);
            margin-top: 20px;
            padding: 25px;
        }

        .card-title {
            font-size: 24px;
            font-weight: 600;
            color: #160944;
            margin-bottom: 15px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 15px;
        }

        th, td {
            text-align: left;
            padding: 12px 15px;
            border-bottom: 1px solid #e0e0e0;
        }

        th {
            background-color: #160944;
            color: #ffffff;
            font-weight: 600;
            text-transform: uppercase;
        }

        .table-striped tbody tr:nth-child(odd) {
            background-color: #e8f5e9;
        }

        .action-btns {
            display: flex;
            justify-content: space-around;
            margin-top: 30px;
        }

        .action-btn {
            padding: 12px 24px;
            background: #777838;
            color: #fff;
            border-radius: 30px;
            font-size: 16px;
            text-decoration: none;
            font-weight: 600;
            transition: background 0.3s, transform 0.2s;
        }

        .action-btn:hover {
            background: #565726;
            transform: translateY(-3px);
        }

        .card-footer {
            margin-top: 20px;
            font-size: 14px;
            color: #757575;
        }

        @media (max-width: 768px) {
            .container {
                padding: 20px;
            }

            h2 {
                font-size: 24px;
            }

            .status-icon {
                font-size: 60px;
            }

            th, td {
                font-size: 14px;
                padding: 10px 8px;
            }
        }
        .notifikasi-foto {
            color: rgb(240, 36, 36);
            font-size: 13px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Transaksi Berhasil</h2>
        <div class="status-icon">
            <i class="fas fa-check-circle"></i>
        </div>
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
            <div class="notifikasi-foto">
                <h1>
                    PENTING
                    <i class="bi bi-exclamation-triangle" style="color: yellow;"></i>
                </h1>
                
                <h3>Silahkan foto menggunakan handphone anda, lalu kirim dan perlihatkan bukti pada petugas kami!</h3>
            </div>
        </div>
        <div class="action-btns">
            <a href="/dashboard" class="action-btn">Kembali ke Dashboard</a>
        </div>
        <div class="card-footer">
            <small>Terima kasih telah menggunakan layanan kami!</small>
        </div>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
