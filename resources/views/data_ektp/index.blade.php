<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Verifikasi e-KTP</title>
    <style>
        /* Reset CSS */
        * {
            font-family: "Ubuntu", system-ui;
            font-weight: 500;
            font-style: normal;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Body */
        body {
            background-color: #f4f4f4; /* Warna latar belakang */
            color: #333; /* Warna teks */
            font-size: 18px; /* Ukuran font yang lebih besar */
            padding-top: 30px;
        }

        /* Container */
        .container {
            max-width: 1000px; /* Lebar maksimum yang lebih besar */
            margin: 20px auto; /* Margin atas dan bawah 20px, dan rata tengah */
            padding: 30px; /* Padding dalam container yang lebih besar */
            background-color: #fff; /* Warna latar belakang putih */
            border-radius: 8px; /* Sudut membulat */
            box-shadow: 0 2px 15px rgba(0, 0, 0, 0.2); /* Efek bayangan yang lebih besar */
        }

        /* Judul */
        h2 {
            margin-bottom: 30px; /* Jarak bawah yang lebih besar */
            color: #102C57; /* Warna judul */
            font-size: 24px; /* Ukuran font judul yang lebih besar */
        }

        /* Tabel */
        .table {
            width: 100%; /* Lebar penuh */
            border-collapse: collapse; /* Gabungkan border */
        }

        /* Header tabel */
        .table thead {
            background-color: #102C57; /* Warna latar belakang header */
            color: #fff; /* Warna teks header */
        }

        /* Sel tabel */
        .table th, .table td {
            padding: 15px; /* Padding dalam sel yang lebih besar */
            text-align: left; /* Teks rata kiri */
            border-bottom: 1px solid #ddd; /* Border bawah sel */
            font-size: 18px; /* Ukuran font yang lebih besar untuk sel */
        }

        /* Hover effect pada baris tabel */
        .table tbody tr:hover {
            background-color: #f1f1f1; /* Warna latar belakang saat hover */
        }

        /* Pesan Flash */
        .alert {
            padding: 15px; /* Padding dalam pesan yang lebih besar */
            margin-bottom: 20px; /* Jarak bawah */
            border-radius: 5px; /* Sudut membulat */
            font-size: 18px; /* Ukuran font yang lebih besar untuk pesan */
        }

        .alert-success {
            background-color: #dff0d8; /* Warna latar belakang untuk sukses */
            color: #3c763d; /* Warna teks untuk sukses */
            border: 1px solid #d6e9c6; /* Border untuk sukses */
        }

        .alert-danger {
            background-color: #f2dede; /* Warna latar belakang untuk error */
            color: #a94442; /* Warna teks untuk error */
            border: 1px solid #ebccd1; /* Border untuk error */
        }

        /* Responsive Design */
        @media (max-width: 600px) {
            .table thead {
                display: none; /* Sembunyikan header tabel pada layar kecil */
            }
            .table, .table tbody, .table tr, .table td {
                display: block; /* Tampilkan setiap elemen dalam blok */
                width: 100%; /* Lebar penuh */
            }
            .table tr {
                margin-bottom: 15px; /* Jarak antar baris */
            }
            .table td {
                text-align: right; /* Teks rata kanan */
                position: relative; /* Posisi relatif */
                padding-left: 50%; /* Padding kiri */
            }
            .table td::before {
                content: attr(data-label); /* Menampilkan label kolom */
                position: absolute; /* Posisi absolut */
                left: 10px; /* Jarak kiri */
                width: 40%; /* Lebar label */
                padding-right: 10px; /* Jarak kanan */
                white-space: nowrap; /* Tidak membungkus teks */
                text-align: left; /* Teks rata kiri */
                font-weight: bold; /* Tebal */
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Data Verifikasi e-KTP</h2>

        <!-- Pesan Flash -->
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if(session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif

        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>NIK</th>
                    <th>Nama</th>
                    <th>Tanggal Verifikasi</th>
                    <th>Status</th> <!-- Tambahkan header untuk status -->
                </tr>
            </thead>
            <tbody>
                @foreach($dataEktp as $data)
                <tr>
                    <td>{{ $data->id }}</td>
                    <td>{{ $data->nik }}</td>
                    <td>{{ $data->nama }}</td>
                    <td>{{ $data->created_at }}</td>
                    <td>{{ $data->status }}</td> <!-- Tampilkan status -->
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
