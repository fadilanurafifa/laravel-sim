<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bukti Pembayaran</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        body {
            background-color: #160944;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 900px;
            margin: 50px auto;
            padding: 30px;
            background-color: #ffffff;
            border-radius: 20px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
            text-align: center;
            overflow: hidden;
            margin-top: 15%;
        }

        h2 {
            font-size: 32px;
            color: #333;
            margin-bottom: 20px;
            font-weight: 600;
        }

        .payment-proof-image img {
            border-radius: 10px;
            box-shadow: 0 6px 18px rgba(0, 0, 0, 0.15);
            width: 100%;
            max-width: 800px;
            height: auto;
            margin-bottom: 30px;
        }

        .download-btn a {
            display: inline-block;
            background-color: #007bff;
            color: white;
            font-size: 18px;
            padding: 15px 30px;
            border-radius: 8px;
            text-decoration: none;
            margin-top: 20px;
            transition: background-color 0.3s, transform 0.3s ease-in-out;
        }

        .download-btn a:hover {
            background-color: #0056b3;
            transform: translateY(-3px);
        }

        .divider {
            height: 2px;
            background-color: #dee2e6;
            margin: 25px 0;
            width: 80%;
            margin-left: auto;
            margin-right: auto;
        }

        .info-text {
            font-size: 18px;
            color: #6c757d;
            margin-bottom: 15px;
        }

        .info-text i {
            margin-right: 10px;
        }

        .icon {
            color: #28a745;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2><i class="fas fa-receipt"></i> Bukti Pembayaran</h2>
        <p class="info-text">Terima kasih atas pembayaran Anda. Berikut adalah bukti pembayaran Anda:</p>
    
        <div class="payment-proof-image">
            @if($transaction->payment_proof && file_exists(public_path('storage/payments/' . $transaction->payment_proof)))
            <img src="{{ asset('storage/payments/' . $transaction->payment_proof) }}" alt="Bukti Pembayaran" style="max-width: 100%; height: auto;">
        @else
            <p class="info-text">Bukti pembayaran tidak tersedia atau tidak ditemukan.</p>
        @endif        
        </div>
    
        <div class="divider"></div>
    
        <div class="download-btn">
            @if($transaction->payment_proof)
                <a href="{{ asset('storage/payments/' . $transaction->payment_proof) }}" download>
                    <i class="fa fa-download"></i> Unduh Bukti Pembayaran
                </a>
            @endif
        </div>
    
        <p class="info-text"><i class="fa fa-info-circle icon"></i> Simpan bukti ini untuk keperluan dokumentasi Anda.</p>
    </div>    
</body>
</html>
