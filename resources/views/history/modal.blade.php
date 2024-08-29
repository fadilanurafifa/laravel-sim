<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SweetAlert2 Modal Example</title>

    <!-- SweetAlert2 CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">

    <!-- SweetAlert2 JS -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>

    <!-- Optional: Bootstrap CSS (for styling) -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <style>
        /* Custom styles for SweetAlert2 */
        .swal2-container {
            z-index: 1050; /* Ensure it is above other content */
        }

        .swal2-popup {
            border-radius: 10px; /* Rounded corners for the modal */
            padding: 20px; /* Padding inside the modal */
            max-width: 100%; /* Set maximum width for the modal */
            margin: 0 auto; /* Center the modal horizontally */
            position: relative;
            top: 50%;
            transform: translateY(-50%);
        }

        .swal2-title {
            font-size: 1.5rem; /* Larger font size for the title */
            margin-bottom: 1rem; /* Space below the title */
        }

        .swal2-html-container {
            padding: 0; /* Remove default padding */
        }

        .swal2-confirm {
            background-color: #28a745; /* Green color for the confirm button */
            border-color: #28a745; /* Border color matching the background */
            color: white; /* White text color */
        }

        .swal2-confirm:hover {
            background-color: #218838; /* Darker green on hover */
            border-color: #1e7e34; /* Darker border color on hover */
        }

        .swal2-cancel {
            background-color: #6c757d; /* Gray color for the cancel button */
            border-color: #6c757d; /* Border color matching the background */
            color: white; /* White text color */
        }

        .swal2-cancel:hover {
            background-color: #5a6268; /* Darker gray on hover */
            border-color: #545b62; /* Darker border color on hover */
        }

        .swal2-popup {
            max-height: 80vh; /* Maximum height for the modal */
            overflow-y: auto; /* Enable scroll if content exceeds height */
        }

        .swal2-html-container {
            display: flex; /* Display flex for horizontal layout */
            flex-wrap: wrap; /* Allow wrapping for form elements */
            gap: 10px; /* Gap between form elements */
        }

        .swal2-html-container > div {
            flex: 1; /* Allow elements to grow and shrink */
            min-width: 200px; /* Minimum width for each element */
        }
    </style>
</head>
<body>
    <script>
        async function showEditModal(id, name, nomorKtp, tempatLahir, tanggalLahir, jenisKelamin, golonganDarah, pendidikan, jenisSim, tanggalPengajuan) {
            const { value: formValues } = await Swal.fire({
                title: 'Edit Data Pengajuan',
                html: `
             <form id="modalForm" action="editcatatan/${id}" method="POST">
                    <!-- Laravel CSRF Token -->
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    
                    <div>
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name" value="${name}" required>
                    </div>
                    <div>
                        <label for="nomor_ktp" class="form-label">Nomor KTP</label>
                        <input type="text" class="form-control" id="nomor_ktp" name="nomor_ktp" value="${nomorKtp}" required>
                    </div>
                    <div>
                        <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
                        <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" value="${tempatLahir}" required>
                    </div>
                    <div>
                        <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                        <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" value="${tanggalLahir}" required>
                    </div>
                    <div>
                        <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                        <select class="form-control" id="jenis_kelamin" name="jenis_kelamin" required>
                            <option value="Laki-laki" ${jenisKelamin === 'Laki-laki' ? 'selected' : ''}>Laki-laki</option>
                            <option value="Perempuan" ${jenisKelamin === 'Perempuan' ? 'selected' : ''}>Perempuan</option>
                        </select>
                    </div>
                    <div>
                        <label for="golongan_darah" class="form-label">Golongan Darah</label>
                        <input type="text" class="form-control" id="golongan_darah" name="golongan_darah" value="${golonganDarah}" required>
                    </div>
                    <div>
                        <label for="pendidikan" class="form-label">Pendidikan</label>
                        <input type="text" class="form-control" id="pendidikan" name="pendidikan" value="${pendidikan}" required>
                    </div>
                    <div>
                        <label for="jenis_sim" class="form-label">Jenis SIM</label>
                        <input type="text" class="form-control" id="jenis_sim" name="jenis_sim" value="${jenisSim}" required>
                    </div>
                    <div>
                        <label for="tanggal_pengajuan" class="form-label">Tanggal Pengajuan</label>
                        <input type="date" class="form-control" id="tanggal_pengajuan" name="tanggal_pengajuan" value="${tanggalPengajuan}" required>
                    </div>
                </form>
                `,
                confirmButtonText: 'Save Data',
                cancelButtonText: 'Cancel',
                showCancelButton: true,
                preConfirm: async () => {
                    const form = Swal.getPopup().querySelector('#modalForm');
                    const formData = new FormData(form);
                    try {
                        const response = await fetch(`/editcatatan/${id}`, {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json',
                                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                            },
                            body: JSON.stringify({
                                name: formData.get('name'),
                                nomor_ktp: formData.get('nomor_ktp'),
                                tempat_lahir: formData.get('tempat_lahir'),
                                tanggal_lahir: formData.get('tanggal_lahir'),
                                jenis_kelamin: formData.get('jenis_kelamin'),
                                golongan_darah: formData.get('golongan_darah'),
                                pendidikan: formData.get('pendidikan'),
                                jenis_sim: formData.get('jenis_sim'),
                                tanggal_pengajuan: formData.get('tanggal_pengajuan')
                            })
                        });
    
                        if (!response.ok) {
                            throw new Error('Gagal memperbarui data');
                        }
    
                        const data = await response.json();
    
                        if (data.success) {
                            Swal.fire('Saved!', 'Your data has been saved.', 'success');
                        } else {
                            Swal.fire('Error!', 'Something went wrong.', 'error');
                        }
                    } catch (error) {
                        Swal.fire('Error!', 'Permintaan gagal!', 'error');
                    }
                }
            }).then(result => {
                if (result.isConfirmed) {
                    window.location.reload();
                }
            });
        }
    </script>                       
</body>
</html>
