<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pembayaran SIM</title>
    <style>
       
        *{
            font-family: "Ubuntu", system-ui;
            font-weight: 500;
            font-style: normal;
            box-sizing: border-box;
        }
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            color: #333;
            padding: 20px;
            background-color: #E2F1E7;
            padding: 0;
            margin: 0;
            background: linear-gradient(135deg, #160944, #777838); 
        }  

        /* Background Elements */
        .background-elements { position: absolute; top: 0; left: 0; width: 100%; height: 100%; overflow: hidden; pointer-events: none; }
        .circle { position: absolute; background-color: rgba(255, 255, 255, 0.2); border-radius: 50%; animation: float 6s ease-in-out infinite; }
        .circle.small { width: 100px; height: 100px; top: 10%; right: 10%; }
        .circle.medium { width: 150px; height: 150px; bottom: 20%; left: 20%; }
        .circle.large { width: 200px; height: 200px; bottom: 5%; right: 20%; }
        @keyframes float { 0%, 100% { transform: translateY(0); } 50% { transform: translateY(-20px); } }

        /* Container */
        .container { background-color: #fff; padding: 20px; border-radius: 12px; box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2); max-width: 900px; width: 100%; text-align: center; position: relative; z-index: 1; display: flex; gap: 20px; align-items: flex-start; }

        /* Column Section */
        .left-section, .right-section { 
            flex: 1;
         }
        
        .container .transaction-summary {}
        .transaction-summary, .order-details { background-color: #f9f9f9; padding: 15px; border-radius: 8px; border: 1px solid #ddd; text-align: left; margin-bottom: 15px; }
        .transaction-summary h2, .order-details h2 { font-size: 1.2em; color: #666; margin-bottom: 10px; }
        .transaction-summary p, .order-details p { color: #555; font-size: 0.95em; margin: 5px 0; }

        /* Input Fields */
        .input-group { margin-bottom: 15px; text-align: left; }
        .input-group label { display: block; font-size: 0.9em; color: #777; margin-bottom: 5px; }
        .input-group input[type="text"], .input-group select { width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 5px; font-size: 0.95em; background-color: #f5f5f5; }

        /* Payment and Cancel Buttons */
        .button-group { display: flex; gap: 10px; justify-content: flex-end; margin-top: 20px; }
        .payment-button, .cancel-button { flex: 1; padding: 12px; color: #fff; font-size: 1em; font-weight: bold; border: none; border-radius: 5px; cursor: pointer; transition: background-color 0.3s ease; }
        .payment-button { background-color: #4CAF50; }
        .payment-button:hover { background-color: #45a049; }
        .cancel-button { background-color: #d9534f; }
        .cancel-button:hover { background-color: #c9302c; }

        /* Additional Info */
        .info { text-align: left; font-size: 0.9em; color: #777; line-height: 1.5; }
        .info strong { color: #333; }
        .left-section {
            background: #ffffff;
            border-radius: 12px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            max-width: 400px;
            margin: 20px auto;
            color: #333;
        }

        .left-section h1 {
            font-size: 40px;
            color: #160944; 
            margin-bottom: 15px;
            text-align: center;
        }

        .left-section .user-info {
            font-size: 18px;
            color: #666;
            margin-bottom: 20px;
            text-align: center;
            font-weight: bold;
        }

        .transaction-summary,
        .order-details {
            margin-top: 15px;
            padding: 15px;
            border: 1px solid #e0e0e0;
            border-radius: 8px;
            background-color: #f8f8f8;
        }

        .transaction-summary h2,
        .order-details h2 {
            font-size: 20px;
            color: #387478;
            margin-bottom: 10px;
            border-bottom: 2px solid #02293b;
            padding-bottom: 5px;
        }

        .transaction-summary p,
        .order-details p {
            font-size: 16px;
            margin: 8px 0;
            color: #333;
        }

        .transaction-summary p strong,
        .order-details p strong {
            color: #160944;
        }

        .right-section {
    background: #ffffff;
    border-radius: 16px;
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
    padding: 25px;
    max-width: 450px;
    margin: 30px auto;
    color: #333;
    font-family: Arial, sans-serif;
}

.right-section h2 {
    font-size: 20px;
    color: #160944;
    margin-bottom: 15px;
    font-weight: bold;
    border-bottom: 2px solid #387478;
    padding-bottom: 8px;
}

.input-group {
    display: flex;
    flex-direction: column;
    margin-bottom: 20px;
}

.input-group label {
    font-size: 15px;
    color: #160944;
    margin-bottom: 6px;
}

.input-group input,
.input-group select {
    padding: 12px;
    font-size: 16px;
    border: 1px solid #d0d0d0;
    border-radius: 10px;
    background-color: #f9f9f9;
    transition: box-shadow 0.3s ease, border-color 0.3s ease;
}

.input-group input:focus,
.input-group select:focus {
    border-color: #387478;
    box-shadow: 0 4px 8px rgba(56, 116, 120, 0.3);
    background-color: #ffffff;
}

.button-group {
    display: flex;
    justify-content: space-between;
    margin-top: 25px;
}

.cancel-button,
.payment-button {
    padding: 12px 18px;
    font-size: 16px;
    border-radius: 10px;
    border: none;
    font-weight: bold;
    cursor: pointer;
    transition: background-color 0.3s, transform 0.2s;
}

.cancel-button {
    background-color: #f35d5d;
    color: #fff;
}

.cancel-button:hover {
    background-color: #d32f2f;
    transform: scale(1.05);
}

.payment-button {
    background:  #160944;
    color: #fff;
}

.payment-button:hover {
    background: #160944;
    transform: scale(1.05);
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.3);
}
.card-input {
    display: none;
}

    </style>
</head>
<body>
    <!-- Background Elements -->
    <div class="background-elements">
        <div class="circle small"></div>
        <div class="circle medium"></div>
        <div class="circle large"></div>
    </div>

    <div class="container">
        <!-- Left Section: Transaction Summary -->
        <div class="left-section">
            <h1>Pembayaran SIM</h1>
            <p class="user-info">{{ Auth::user()->name }}</p>

            <!-- Transaction Summary -->
            <div class="transaction-summary">
                <h2>Ringkasan Transaksi</h2>
                <p><strong>Jenis SIM:</strong> SIM A</p>
                <p><strong>Jumlah Pembayaran:</strong> Rp500.000</p>
                <p><strong>Tanggal Kadaluarsa:</strong> 20-10-2025</p>
            </div>

            <!-- Order Details -->
            <div class="order-details">
                <h2>Rincian Biaya</h2>
                <p><strong>Biaya Administrasi:</strong> Rp10.000</p>
                <p><strong>Total:</strong> Rp510.000</p>
            </div>
        </div>

        <!-- Right Section: Payment Form -->
        <div class="right-section">
            <form action="{{ route('submit-payment') }}" method="POST">
                @csrf
                <div class="input-group">
                    <label for="payment-amount">Jumlah Pembayaran:</label>
                    <input type="text" id="payment-amount" name="payment_amount" placeholder="Masukkan jumlah" required>
                </div>
                <div class="input-group">
                    <label for="jenis-sim">Jenis SIM:</label>
                    <select id="jenis-sim" name="jenis_sim" required>
                        <option value="" disabled selected>Pilih jenis SIM</option>
                        <option value="sim_a">SIM A</option>
                        <option value="sim_b">SIM B</option>
                        <option value="sim_c">SIM C</option>
                    </select>
                </div>
                <div class="input-group">
                    <label for="payment-method">Metode Pembayaran:</label>
                    <select id="payment-method" name="payment_method" required>
                        <option value="" disabled selected>Pilih metode pembayaran</option>
                        <option value="transfer">Transfer Bank</option>
                    </select>
                </div>

                <!-- Card Information for Credit Card Payment -->
                <div class="input-group">
                    <label for="card-number">Nomor Kartu</label>
                    <input type="text" id="card-number" name="card_number" placeholder="Masukkan nomor kartu">
                </div>
                <div class="input-group">
                    <label for="card-expiry">Tanggal Kadaluarsa</label>
                    <input type="text" id="card-expiry" name="card_expiry" placeholder="MM/YY">
                </div>
                <div class="input-group">
                    <label for="card-cvc">Kode CVC</label>
                    <input type="text" id="card-cvc" name="card_cvc" placeholder="123">
                </div>

                <!-- Button Group -->
                <div class="button-group">
                    <button type="submit" class="payment-button">Lanjutkan Pembayaran</button>
                </div>
            </form>
        </div>
    </div>
    <script>
        document.getElementById('payment-method').addEventListener('change', function() {
            const cardInputs = document.querySelectorAll('.card-input');
            if (this.value === 'kartu-kredit') {
                cardInputs.forEach(input => input.style.display = 'block');
            } else {
                cardInputs.forEach(input => input.style.display = 'none');
            }
        });
    </script>
</body>
</html>
