<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pengguna</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
        * {
            font-family: "Ubuntu", system-ui;
            font-weight: 500;
            font-style: normal;
        }

        body {
            background-color: #f5f7fa;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .container {
            width: 100%;
            max-width: 900px;
            padding: 30px;
            background-color: white;
            border-radius: 15px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            font-weight: bold;
            color: #333;
            text-transform: uppercase;
            letter-spacing: 1.5px;
            margin-bottom: 30px;
            font-size: 28px;
        }

        .card {
            border-radius: 15px;
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.1);
            background-color: #ffffff;
            padding: 25px;
        }

        .card-header {
            background-color: #007bff;
            color: white;
            text-align: center;
            font-weight: bold;
            font-size: 24px;
            padding: 15px;
            border-radius: 10px;
            margin-bottom: 20px;
        }

        .card-body {
            font-size: 18px;
            color: #555;
        }

        .card-body .row {
            margin-bottom: 20px;
        }

        .card-body .col-4 {
            font-weight: 600;
            color: #333;
        }

        .card-body .col-8 {
            background-color: #f8f9fa;
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 8px 12px;
            font-size: 16px;
            color: #444;
            display: flex;
            align-items: center;
        }

        .action-buttons {
            display: flex;
            justify-content: space-evenly;
            padding-top: 20px;
        }

        .action-buttons button {
            font-size: 16px;
            width: 30%;
            padding: 12px 18px;
            border-radius: 10px;
            transition: all 0.3s ease;
        }

        .btn-warning {
            background-color: #ffbf00;
        }

        .btn-danger {
            background-color: #dc3545;
        }

        .btn-info {
            background-color: #17a2b8;
        }

        .btn-warning:hover {
            background-color: #e6a800;
            transform: translateY(-2px);
        }

        .btn-danger:hover {
            background-color: #c82333;
            transform: translateY(-2px);
        }

        .btn-info:hover {
            background-color: #138496;
            transform: translateY(-2px);
        }

        .card:hover {
            box-shadow: 0 12px 30px rgba(0, 0, 0, 0.1);
            transform: translateY(-5px);
            transition: all 0.3s ease-in-out;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>DATA MILIK ANDA!</h2>

        <!-- Card for the User -->
        @foreach ($catatan as $catatans)
            <div class="card mb-4">
                <div class="card-body">
                    <div class="row">
                        <div class="col-4"><strong>Nama:</strong></div>
                        <div class="col-8">{{ $catatans->name }}</div>
                    </div>
                    <div class="row">
                        <div class="col-4"><strong>Nomor KTP:</strong></div>
                        <div class="col-8">{{ $catatans->nomor_ktp }}</div>
                    </div>
                    <div class="row">
                        <div class="col-4"><strong>Tempat Lahir:</strong></div>
                        <div class="col-8">{{ $catatans->tempat_lahir }}</div>
                    </div>
                    <div class="row">
                        <div class="col-4"><strong>Tanggal Lahir:</strong></div>
                        <div class="col-8">{{ $catatans->tanggal_lahir }}</div>
                    </div>
                    <div class="row">
                        <div class="col-4"><strong>Jenis Kelamin:</strong></div>
                        <div class="col-8">{{ $catatans->jenis_kelamin }}</div>
                    </div>
                    <div class="row">
                        <div class="col-4"><strong>Golongan Darah:</strong></div>
                        <div class="col-8">{{ $catatans->golongan_darah }}</div>
                    </div>
                    <div class="row">
                        <div class="col-4"><strong>Pendidikan:</strong></div>
                        <div class="col-8">{{ $catatans->pendidikan }}</div>
                    </div>
                    <div class="row">
                        <div class="col-4"><strong>Jenis SIM:</strong></div>
                        <div class="col-8">{{ $catatans->jenis_sim }}</div>
                    </div>
                    <div class="row">
                        <div class="col-4"><strong>Tanggal Pengajuan:</strong></div>
                        <div class="col-8">{{ $catatans->tanggal_pengajuan }}</div>
                    </div>

                    <div class="action-buttons">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#edit{{ $catatans->id }}">Edit</button>

                        <button type="button" class="btn btn-danger delete-button" data-id="{{ $catatans->id }}"><i
                                class="fas fa-trash"></i></button>
                        <form id="delete-form-{{ $catatans->id }}"
                            action="{{ route('history.destroy', $catatans->id) }}" method="POST"
                            style="display: none;">
                            @csrf
                            @method('DELETE')
                        </form>
                        <button type="button" type="button" class="btn btn-success" data-bs-toggle="modal"
                            data-bs-target="#foto{{ $catatans->id }}">
                            <i class="fas fa-eye"></i> <!-- Icon only, no text -->
                        </button>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    @include('history/modal')


    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


    <script>
        document.querySelectorAll('.delete-button').forEach(function(button) {
            button.addEventListener('click', function() {
                var historyId = this.getAttribute('data-id');

                Swal.fire({
                    title: 'Yakin ingin menghapus?',
                    text: "Data yang sudah dihapus tidak bisa dikembalikan!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#d33',
                    cancelButtonColor: '#3085d6',
                    confirmButtonText: 'Ya, Hapus!',
                    cancelButtonText: 'Batal'
                }).then((result) => {
                    if (result.isConfirmed) {
                        document.getElementById('delete-form-' + historyId).submit();
                    }
                });
            });
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
