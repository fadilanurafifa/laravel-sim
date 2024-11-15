<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Akses Ujian</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <style>
        * {
            font-family: "Ubuntu", sans-serif;
            font-weight: 500;
        }
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
            background-image: url('assets/dist/assets/img/remind.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            text-align: center;
        }

        .judul-ujian {
            font-size: 2.2rem;
            font-weight: bold;
            color: #ffffff;
            margin-bottom: 15px;
            position: relative;
        }

        .judul-ujian::after {
            content: '';
            width: 90%;
            height: 5px;
            background: #28A745;
            position: absolute;
            bottom: -8px;
            left: 50%;
            transform: translateX(-50%);
        }

        .notifikasi {
            font-size: 20px;
            font-weight: bold;
            color: #ffffff;
            margin-top: 15px;
            font-style: italic;
        }
        
        .link-ujian {
            text-decoration: none;
            color: #ffffff;
            font-size: 1.5rem;
            cursor: pointer;
            transition: color 0.3s ease;
            text-decoration: none;
        }
        
        .link-ujian:hover {
            color: #ffffff;
            text-decoration: underline;
        }
        
        .icon-ujian {
            font-size: 3rem;
            color: #28A745;
            margin-bottom: 15px;
            transition: color 0.3s;
        }
        
        .icon-ujian:hover {
            color: #136326;
        }
        
        .deskripsi-ujian {
            font-size: 16px;
            color: #f12f16;
            margin-bottom: 20px;
        }

        .logo-ujian {
            width: 35%;
            height: auto;
            margin-bottom: -50px;
            animation: pulse 1.5s ease-in-out infinite;
        }

        @keyframes pulse {
            0%, 100% {
                transform: scale(1); /* Ukuran normal */
            }
            50% {
                transform: scale(1.1); /* Membesar 10% */
            }
        }
        .modal-content {
            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.15);
        }

        .modal-header {
            background-color: #243642;
            color: white;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }

        .modal-header .close {
            color: white;
            outline: none;
        }

        .form-control {
            border-radius: 5px;
            transition: border-color 0.3s ease;
        }

        .form-control:focus {
            border-color: #000000;
            box-shadow: none;
        }

        .modal-footer .btn-verif {
            background-color: #28A745;
            color: #ffffff;
            transition: background-color 0.3s;
        }

        .modal-footer .btn-verif:hover {
            background-color: #218838;
        }
        .alert {
            display: none;
            margin-top: 10px;
        }
        .custom-modal {
            max-width: 700px; /* Atur lebar modal */
        }

        .custom-modal .modal-content {
            max-height: 80vh; /* Atur tinggi modal */
            overflow-y: auto; /* Aktifkan scroll jika konten terlalu panjang */
        }
        .modal-body .form-label {
        text-align: left;
        display: block;
        font-weight: 600;
        color: #333333;
        }
    </style>
</head>
<body>
    <div>
        <img src="/assets/dist/assets/img/simfile3.png" alt="Logo Ujian" class="logo-ujian">
        <h1 class="judul-ujian">Selamat Mengerjakan Ujian Pengajuan SIM {{ Auth::user()->name }}</h1>
        <h3 class="notifikasi">Kerjakan soal ujian dengan baik dan benar, karena ini menentukan pengajuan Anda!</h3>
        <h2 class="deskripsi-ujian">Klik link di bawah untuk akses halaman ujian Anda.</h2>
        
        <div class="link-ujian" id="ujianLink">
            <i class="bi bi-arrow-right-circle icon-ujian"></i>
            <p>Kerjakan Ujian!</p>
        </div>
    </div>

    <!-- Modal Verifikasi -->
    <div class="modal fade" id="verifikasiModal" tabindex="-1" aria-labelledby="verifikasiModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered custom-modal">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="verifikasiModalLabel">
                        <i class="bi bi-shield-lock" style="margin-right: 8px;"></i> Verifikasi Akun
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p class="text-muted">Silakan masukkan email dan password Anda yang sama dengan login untuk mengakses Uji SIM.</p>
                    <form id="verifikasiForm" method="POST" action="{{ route('verifikasi.akun') }}">
                        @csrf
                        <div class="mb-3">
                            <label for="email" class="form-label">Email :</label>
                            <div class="input-group">
                                <span class="input-group-text" id="email-icon">
                                    <i class="fas fa-envelope"></i>
                                </span>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan email Anda" required aria-describedby="email-icon">
                            </div>
                        </div>
                    
                        <div class="mb-3">
                            <label for="password" class="form-label">Password :</label>
                            <div class="input-group">
                                <span class="input-group-text" id="password-icon">
                                    <i class="fas fa-lock"></i>
                                </span>
                                <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan password Anda" required aria-describedby="password-icon">
                            </div>
                        </div>
                    
                        <div class="alert alert-danger d-none" id="error-message">Email atau password salah</div>
                    </form>                
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    <button type="button" class="btn btn-verif" id="submitVerifikasi">Kerjakan!</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        $('#verifikasiForm').submit(function(event) {
            event.preventDefault(); // Cegah reload halaman

            $.ajax({
                url: $(this).attr('action'),
                type: 'POST',
                data: $(this).serialize(),
                success: function(response) {
                    if (response.success) {
                        window.location.href = response.redirect;
                    } else {
                        $('#error-message').removeClass('d-none').text(response.message);
                    }
                },
                error: function() {
                    $('#error-message').removeClass('d-none').text('Terjadi kesalahan. Silakan coba lagi.');
                }
            });
        });

        $(document).ready(function() {
            $('#ujianLink').on('click', function() {
                $('#verifikasiModal').modal('show');
            });

            $('#submitVerifikasi').on('click', function() {
                $('#verifikasiForm').submit();
            });
        });
    </script>
</body>
</html>
