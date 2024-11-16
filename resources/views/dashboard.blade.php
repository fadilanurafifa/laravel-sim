<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Polres Cianjur</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('assets/dist/css/dashboard.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<body>
    <div class="container">
        <div class="sidebar closed">
            <div class="headerer">
                <div class="list-item">
                    <a href="#" class="profile-link">
                        <div class="icon initials">{{ strtoupper(substr(session('user_name', 'Nama Lengkap'), 0, 1)) }}
                        </div>
                        <div class="user-info">
                            <div class="description-header">{{ session('user_name', 'Nama Lengkap') }}</div>
                            <div class="description-sub">
                                @if (Auth::user()->role == 'admin')
                                    Admin
                                @else
                                    Pengguna
                                @endif
                            </div>
                            <!-- Teks "pengguna" tepat di bawah nama user -->
                        </div>
                    </a>
                </div>
            </div>
            <hr class="divider">
            <div class="main" style="padding-top: -20px;">
                <div class="list-item">
                    <a href="dashboard">
                        <img src="{{ asset('assets/dist/assets/img/dashboard.svg') }}" alt="" class="icon">
                        <span class="description">Dashboard</span>
                    </a>
                </div>
                <div class="list-item">
                    <a href="{{ route('profile.show') }}">
                        <img src="{{ asset('assets/dist/assets/img/user.svg') }}" alt="" class="icon">
                        <span class="description">Profile</span>
                    </a>
                </div>
                @if (Auth::user()->role === 'admin')
                    <div class="list-item">
                        <a href="registered-users">
                            <img src="{{ asset('assets/dist/assets/img/human.svg') }}" alt="" class="icon">
                            <span class="description">Client</span>
                        </a>
                    </div>
                @endif
                @if (Auth::user()->role === 'admin')
                    <div class="list-item">
                        <a href="history">
                            <img src="{{ asset('assets/dist/assets/img/data.svg') }}" alt="" class="icon">
                            <span class="description">Data Pengajuan</span>
                        </a>
                    </div>
                @endif
                <div class="list-item">
                    <a href="activity-details">
                        <img src="{{ asset('assets/dist/assets/img/activity.svg') }}" alt="" class="icon">
                        <span class="description">Aktivitas Terbaru</span>
                    </a>
                </div>
                <div class="list-item">
                    <a href="/sesi/register">
                        <img src="{{ asset('assets/dist/assets/img/register.svg') }}" alt="" class="icon">
                        <span class="description">Register</span>
                    </a>
                </div>
                <div class="list-item">
                    <a href="/sesi">
                        <img src="{{ asset('assets/dist/assets/img/login.svg') }}" alt="" class="icon">
                        <span class="description">Login</span>
                    </a>
                </div>
                <div class="list-item">
                    <a href="/sesi">
                        <img src="{{ asset('assets/dist/assets/img/logout.svg') }}" alt="" class="icon">
                        <span class="description">Logout</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="main-content">
            <div class="header-top">
                <div id="menu-button">
                    <input type="checkbox" id="menu-checkbox">
                    <label for="menu-checkbox" id="menu-label">
                        <div id="hamburger"></div>
                    </label>
                </div>
                <h1 class="header-title">
                    <img src="{{ asset('assets/dist/assets/img/simedia.png') }}" class="digilog">
                    DIGITAL KORLANTAS POLRI
                </h1>
                <div class="header-buttons">
                    <div class="custom-search-container">
                        <form action="/search" method="GET" class="custom-search-form">
                            <div class="input-with-icon">
                                <i class="bi bi-search"></i>
                                <input type="text" placeholder="Cari sesuatu..." name="search"
                                    class="custom-search-input">
                            </div>
                        </form>
                    </div>
                    <button class="header-button-dashboard" onclick="location.href='/dashboard'">
                        <i class="bi bi-house"></i>
                        Dashboard
                    </button>
                    @if (Auth::user()->role === 'admin')
                        <button class="header-button-input" onclick="location.href='history'">
                            <i class="bi bi-file-earmark-plus"></i>
                            Data Input
                        </button>
                    @endif
                    <div class="dropdown">
                        <button class="dropdown-toggle" type="button" id="dropdownMenuButton"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-people"></i>
                            KORLANTAS POLRI
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <li>
                                <a class="dropdown-item" href="#">
                                    <i class="bi bi-person"></i> Profile
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="/sesi">
                                    <i class="bi bi-box-arrow-right"></i> Logout
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Box container di bawah header -->
            <div class="image-box">
                <img src="assets/dist/assets/img/simfile.png" alt="SIM File">
            </div>
            <div class="welcome-text">
                @if (Auth::user()->role === 'admin')
                    <h2>Selamat Datang, Admin, di Layanan SIM Digital Korlantas Polri!</h2>
                    <h1>Admin Dashboard: Kelola Layanan dan Data dengan Mudah</h1>
                @else
                    <h2>Selamat Datang, di Layanan SIM Digital Korlantas Polri!</h2>
                    <h1>Sim Media: Inovasi Layanan, Kenyamanan Berkendara</h1>
                @endif
            </div>
            <div class="button-container">
                <button class="button-sim" data-target="#modal-sim-internasional">Internasional</button>
                <button class="button-sim" data-target="#modal-sim-nasional">Nasional</button>
                <button class="button-sim" data-target="#modal-memperpanjang">Perpanjang</button>
            </div>
            <div class="overlay"></div>

            <!-- Modal Internasional -->
            <div id="modal-sim-internasional" class="modal-card">
                <div class="modal-cons">
                    <span class="closes" data-modal="#modal-sim-internasional">&times;</span>
                    <h2><i class="fas fa-globe"></i> SIM Internasional</h2>
                    <div class="divider-item"></div>
                    <img src="{{ asset('assets/dist/assets/img/intern.png') }}" alt="SIM Internasional"
                        class="modal-image">
                    <p>Layanan Belum Tersedia</p>
                    <h3>Maaf, Layanan yang Anda pilih sedang dalam proses pengembangan.</h3>
                </div>
            </div>

            <!-- Modal Nasional -->
            <div id="modal-sim-nasional" class="modal-card">
                <div class="modal-cons">
                    <span class="closes" data-modal="#modal-sim-nasional">&times;</span>
                    <h2><i class="fas fa-id-card"></i> SIM Nasional</h2>
                    <div class="divider-item"></div>
                    <div class="procedure-content">
                        <h3>Tata Cara Pengajuan SIM</h3>
                        <ol>
                            <li>Lengkapi formulir pendaftaran secara online atau di kantor kepolisian.</li>
                            <li>Siapkan dokumen pendukung seperti KTP, pas foto, dan bukti pembayaran.</li>
                            <li>Bayar biaya administrasi di loket pembayaran atau secara online.</li>
                            <li>Ikuti tes teori dan praktik sesuai jadwal yang telah ditentukan.</li>
                            <li>Tunggu hasil pengujian. Jika lulus, SIM akan dicetak dan diberikan.</li>
                        </ol>
                    </div>
                    <div class="modal-footer">
                        <button class="btn-primary" onclick="window.location.href='create-sim'">Ajukan
                            Sekarang!</button>
                        <button class="btn-primary">Cek Status Pengajuan</button>
                    </div>
                </div>
            </div>

            <!-- Modal Memperpanjang -->
            <div id="modal-memperpanjang" class="modal-card">
                <div class="modal-cons">
                    <span class="closes" data-modal="#modal-memperpanjang">&times;</span>
                    <h2><i class="fas fa-redo-alt"></i> Memperpanjang SIM</h2>
                    <div class="divider-item"></div>
                    <img src="{{ asset('assets/dist/assets/img/perpanjang.jpg') }}" alt="Memperpanjang SIM"
                        class="modal-image">
                    <p>Layanan Belum Tersedia</p>
                    <h3>Maaf, Layanan yang Anda pilih sedang dalam proses pengembangan.</h3>
                </div>
            </div>
            <div class="box-container flex-layout">
                <div class="box">
                    <div class="flex">
                        @if (Auth::user()->role == 'admin')
                            <p id="jumlah-pengajuan">{{ $jumlahPengajuan }}</p>
                        @else
                            <p id="jumlah-pengajuan">{{ Auth::user()->catatan->count() }}</p>
                        @endif
                        <i class="bi bi-plus-circle"></i> <!-- Ikon tambah data diletakkan di sini -->
                    </div>
                    <h1>Miliki SIM Sekarang!</h1>
                    <a href="create-sim" class="box-button">Pelayanan SIM</a>
                </div>

                <div class="box2">
                    <img src="{{ asset('assets/dist/assets/img/lambangpolri.png') }}" class="background-image"
                        alt="Background Image">
                    <div class="content-box2">
                        <p>POLRES CIANJUR</p>
                    </div>
                    <p class="angka">91.42</p>
                    <p class="total">NILAI TOTAL ZI</p>
                </div>
                <div class="box-ujian" style="border-radius: 30px;">
                    <a href="{{ route('ujian.akses') }}" class="link-ujian" style="text-decoration: none;">
                        <p>Ikuti Ujian</p>
                        <i class="bi bi-patch-question"></i>
                    </a>
                </div>
                @if (Auth::user()->role === 'admin')
                    <div class="box3">
                        <a href="{{ route('registered-users') }}" class="client-link"
                            style="text-decoration: none;">
                            <p>Client</p>
                            <i class="bi bi-person-check"></i>
                        </a>
                    </div>
                @endif
                <div class="box4">
                    <a href="#" class="client-link" id="takeQueueNumber">
                        <p>Nomor Antrian</p>
                        <i class="bi bi-calendar-range-fill"></i>
                    </a>
                </div>
                @if (session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif

                @if (session('error'))
                    <div class="alert alert-danger">{{ session('error') }}</div>
                @endif
                <div class="box" onclick="handleBoxClick()">
                    <div class="box-header">
                        <p style="display: inline; margin-left: 8px;">File E-KTP</p> <!-- Teks judul -->
                        <i class="bi bi-database-add"></i> <!-- Ikon diletakkan di sini -->
                    </div>
                    @if (Auth::user()->role === 'admin')
                        <a href="{{ route('show_ektp') }}" class="box-button">
                            Identitas Pengaju
                        </a>
                    @endif
                </div>
                <div class="box4">
                    <a href="{{ route('pembayaran.form') }}" class="client-link">
                        <p>Pembayaran SIM</p>
                        <i class="bi bi-credit-card"></i>
                    </a>
                </div>
                @if (Auth::user()->role != 'admin')
                    <div class="box4">
                        <a href="{{ route('history') }}" class="client-link">
                            <p>Bukti Pendaftaran</p>
                            <i class="bi bi-arrow-down-left-circle"></i>
                        </a>
                    </div>
                @endif
            </div>
            <!-- Chart for progress data -->
            <div class="chart-container" style="height:450px; width:700px;">
                <canvas id="progressChart"></canvas>
                <div class="box4">
                    <a href="/payment-proof" class="client-link">
                        <p>Bukti Pendaftaran</p>
                        <i class="bi bi-arrow-down-left-circle"></i>
                    </a>
                </div>
                @if (Auth::user()->role !== 'admin')
                    <div class="box4">
                        <a href="#" class="client-link">
                            <p>Data Input Anda</p>
                            <i class="bi bi-arrow-down-left-circle"></i>
                        </a>
                    </div>
                @endif
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        << << << < HEAD
        // Ambil elemen overlay
        const overlay = document.querySelector('.overlay');
        // Ambil semua tombol dengan class 'button-sim' dan tambahkan event listener
        document.querySelectorAll('.button-sim').forEach(button => {
            button.addEventListener('click', () => {
                const targetModal = button.getAttribute('data-target');
                const modal = document.querySelector(targetModal);
                if (modal) {
                    modal.style.display = 'block'; // Tampilkan modal
                    overlay.classList.add('show'); // Tampilkan overlay
                }
            });
        });

        // Ambil semua tombol close dan tambahkan event listener
        document.querySelectorAll('.closes').forEach(closeBtn => {
            closeBtn.addEventListener('click', () => {
                const modal = document.querySelector(closeBtn.getAttribute('data-modal'));
                if (modal) {
                    modal.style.display = 'none'; // Sembunyikan modal
                    overlay.classList.remove('show'); // Sembunyikan overlay
                }
            });
        });

        // Menutup modal ketika klik di luar modal (overlay)
        overlay.addEventListener('click', () => {
            document.querySelectorAll('.modal-card').forEach(modal => {
                modal.style.display = 'none'; // Sembunyikan modal
            });
            overlay.classList.remove('show'); // Sembunyikan overlay
        });

        // Menutup modal jika klik di luar elemen modal (untuk klik di window)
        window.addEventListener('click', (event) => {
            document.querySelectorAll('.modal-card').forEach(modal => {
                if (event.target === modal) {
                    modal.style.display = 'none'; // Sembunyikan modal
                    overlay.classList.remove('show'); // Sembunyikan overlay
                }
            });
        }); ===
        ===
        =
        function handleBoxClick() {
            // Cek peran pengguna di sisi server (masukkan variabel peran ke dalam JavaScript)
            var userRole = "{{ Auth::user()->role }}";

            if (userRole === 'admin') {
                // Jika pengguna adalah admin, arahkan ke halaman yang diinginkan
                window.location.href = "{{ route('show_ektp') }}";
            } else {
                // Jika pengguna bukan admin, tampilkan SweetAlert dengan styling kustom
                Swal.fire({
                    icon: 'error',
                    title: 'Data Private',
                    text: 'Hanya admin yang dapat mengakses data!',
                    confirmButtonText: 'OK',
                    customClass: {
                        popup: 'swal-popup', // Styling untuk popup
                        title: 'swal-title', // Styling untuk title
                        content: 'swal-content', // Styling untuk content
                        confirmButton: 'swal-btn' // Styling untuk tombol konfirmasi
                    },
                    backdrop: true, // Tampilan latar belakang gelap
                    allowOutsideClick: false // Mencegah klik di luar modal
                });
            }
        } >>>
        >>>
        >
        531 eb1395f22169e7bec525090c2178eab54c92a
    </script>
    <script>
        document.querySelectorAll('.button-sim').forEach(button => {
            button.addEventListener('click', function() {
                const targetModal = document.querySelector(this.getAttribute(
                    'data-target')); // Modal yang terkait dengan tombol
                const overlay = document.querySelector('.overlay'); // Overlay untuk menutupi konten lainnya

                // Menambahkan class .show untuk modal dan overlay agar muncul dengan animasi
                targetModal.classList.add('show');
                overlay.classList.add('show');
            });
        });

        document.querySelectorAll('.closes').forEach(closeButton => {
            closeButton.addEventListener('click', function() {
                const modal = document.querySelector(this.getAttribute(
                    'data-modal')); // Modal yang perlu ditutup
                const overlay = document.querySelector('.overlay'); // Overlay

                // Menghapus class .show untuk modal dan overlay agar menghilang dengan animasi
                modal.classList.remove('show');
                overlay.classList.remove('show');
            });
        });

        // Menutup modal jika klik di luar modal
        document.querySelector('.overlay').addEventListener('click', function() {
            const modals = document.querySelectorAll('.modal-card');
            modals.forEach(modal => {
                modal.classList.remove('show');
            });
            this.classList.remove('show');
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        document.getElementById('takeQueueNumber').addEventListener('click', function(event) {
            event.preventDefault(); // Mencegah default behavior dari tautan

            // Kirim permintaan AJAX untuk mengambil nomor antrian
            fetch('{{ route('ambilAntrian') }}', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}' // Tambahkan token CSRF
                    }
                })
                .then(response => response.json())
                .then(data => {
                    // Tampilkan SweetAlert sesuai dengan status dari respons
                    if (data.status === 'success') {
                        Swal.fire({
                            icon: 'success',
                            title: 'Nomor Antrian Anda',
                            text: data.message,
                            customClass: {
                                popup: 'my-custom-popup',
                                title: 'my-custom-title',
                                text: 'my-custom-text',
                                confirmButton: 'my-custom-confirm-button'
                            },
                            confirmButtonColor: '#3085d6'
                        });
                    } else {
                        Swal.fire({
                            icon: 'error',
                            title: 'Anda Sudah Mengambil Nomor',
                            text: data.message,
                            customClass: {
                                popup: 'my-custom-popup',
                                title: 'my-custom-title',
                                text: 'my-custom-text',
                                confirmButton: 'my-custom-confirm-button'
                            },
                            confirmButtonColor: '#d33'
                        });
                    }
                })
                .catch(error => {
                    Swal.fire({
                        icon: 'error',
                        title: 'Error',
                        text: 'Terjadi kesalahan saat mengambil nomor antrian.',
                        customClass: {
                            popup: 'my-custom-popup',
                            title: 'my-custom-title',
                            text: 'my-custom-text',
                            confirmButton: 'my-custom-confirm-button'
                        },
                        confirmButtonColor: '#d33'
                    });
                });
        });
    </script>
    <script src="{{ asset('assets/dist/js/dashboard.js') }}"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            function fetchActivities() {
                fetch(
                        '/activities'
                    ) // Pastikan endpoint ini mengembalikan aktivitas untuk pengguna yang sedang login
                    .then(response => {
                        if (!response.ok) {
                            throw new Error(`HTTP error! Status: ${response.status}`);
                        }
                        return response.json();
                    })
                    .then(data => {
                        console.log('Data aktivitas yang diterima:',
                            data); // Debugging: Tampilkan data yang diterima
                        renderActivities(data);
                    })
                    .catch(error => {
                        console.error('Error fetching activities:',
                            error); // Debugging: Menampilkan kesalahan di konsol
                        const activityTable = document.getElementById('activity-table');
                        activityTable.innerHTML =
                            '<p>Tidak dapat mengambil data aktivitas. Silakan coba lagi nanti.</p>';
                    });
            }

            function renderActivities(activities) {
                const activityTable = document.getElementById('activity-table');
                activityTable.innerHTML = ''; // Menghapus konten lama

                if (!activities || activities.length === 0) {
                    activityTable.innerHTML = '<p>Tidak ada aktivitas terbaru.</p>';
                    return;
                }

                // Menampilkan aktivitas tanpa nama pengguna
                activities.forEach(activity => {
                    const activityItem = document.createElement('div');
                    activityItem.classList.add('activity-item');

                    activityItem.innerHTML = `
                <h4>${activity.activity_name}</h4>
                <small>Waktu: ${new Date(activity.activity_time).toLocaleString()}</small>
                <p>Detail: ${activity.activity_details}</p>
            `;

                    activityTable.appendChild(activityItem);
                });
            }

            // Memanggil fungsi untuk mengambil aktivitas saat halaman dimuat
            fetchActivities();
        });
    </script>

    </main> <!--end::App Main--> <!--begin::Footer-->
    </div> <!--end::App Wrapper--> <!--begin::Script--> <!--begin::Third Party Plugin(OverlayScrollbars)-->
    <script src="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.3.0/browser/overlayscrollbars.browser.es6.min.js"
        integrity="sha256-H2VM7BKda+v2Z4+DRy69uknwxjyDRhszjXFhsL4gD3w=" crossorigin="anonymous"></script>
    <!--end::Third Party Plugin(OverlayScrollbars)--><!--begin::Required Plugin(popperjs for Bootstrap 5)-->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha256-whL0tQWoY1Ku1iskqPFvmZ+CHsvmRWx/PIoEvIeWh4I=" crossorigin="anonymous"></script>
    <!--end::Required Plugin(popperjs for Bootstrap 5)--><!--begin::Required Plugin(Bootstrap 5)-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha256-YMa+wAM6QkVyz999odX7lPRxkoYAan8suedu4k2Zur8=" crossorigin="anonymous"></script> <!--end::Required Plugin(Bootstrap 5)--><!--begin::Required Plugin(AdminLTE)-->
    <script src="{{ asset('assets') }}/dist/js/adminlte.js"></script> <!--end::Required Plugin(AdminLTE)--><!--begin::OverlayScrollbars Configure-->
    <script>
        const SELECTOR_SIDEBAR_WRAPPER = ".sidebar-wrapper";
        const Default = {
            scrollbarTheme: "os-theme-light",
            scrollbarAutoHide: "leave",
            scrollbarClickScroll: true,
        };
        document.addEventListener("DOMContentLoaded", function() {
            const sidebarWrapper = document.querySelector(SELECTOR_SIDEBAR_WRAPPER);
            if (
                sidebarWrapper &&
                typeof OverlayScrollbarsGlobal?.OverlayScrollbars !== "undefined"
            ) {
                OverlayScrollbarsGlobal.OverlayScrollbars(sidebarWrapper, {
                    scrollbars: {
                        theme: Default.scrollbarTheme,
                        autoHide: Default.scrollbarAutoHide,
                        clickScroll: Default.scrollbarClickScroll,
                    },
                });
            }
        });
    </script> <!--end::OverlayScrollbars Configure--> <!-- OPTIONAL SCRIPTS --> <!-- sortablejs -->
    <script src="https://cdn.jsdelivr.net/npm/sortablejs@1.15.0/Sortable.min.js"
        integrity="sha256-ipiJrswvAR4VAx/th+6zWsdeYmVae0iJuiR+6OqHJHQ=" crossorigin="anonymous"></script> <!-- sortablejs -->
    <script>
        const connectedSortables =
            document.querySelectorAll(".connectedSortable");
        connectedSortables.forEach((connectedSortable) => {
            let sortable = new Sortable(connectedSortable, {
                group: "shared",
                handle: ".card-header",
            });
        });

        const cardHeaders = document.querySelectorAll(
            ".connectedSortable .card-header",
        );
        cardHeaders.forEach((cardHeader) => {
            cardHeader.style.cursor = "move";
        });
    </script> <!-- apexcharts -->
    <script src="https://cdn.jsdelivr.net/npm/apexcharts@3.37.1/dist/apexcharts.min.js"
        integrity="sha256-+vh8GkaU7C9/wbSLIcwq82tQ2wTf44aOHA8HlBMwRI8=" crossorigin="anonymous"></script> <!-- ChartJS -->
    <script>
        // NOTICE!! DO NOT USE ANY OF THIS JAVASCRIPT
        // IT'S ALL JUST JUNK FOR DEMO
        // ++++++++++++++++++++++++++++++++++++++++++

        const sales_chart_options = {
            series: [{
                    name: "Digital Goods",
                    data: [28, 48, 40, 19, 86, 27, 90],
                },
                {
                    name: "Electronics",
                    data: [65, 59, 80, 81, 56, 55, 40],
                },
            ],
            chart: {
                height: 300,
                type: "area",
                toolbar: {
                    show: false,
                },
            },
            legend: {
                show: false,
            },
            colors: ["#0d6efd", "#20c997"],
            dataLabels: {
                enabled: false,
            },
            stroke: {
                curve: "smooth",
            },
            xaxis: {
                type: "datetime",
                categories: [
                    "2023-01-01",
                    "2023-02-01",
                    "2023-03-01",
                    "2023-04-01",
                    "2023-05-01",
                    "2023-06-01",
                    "2023-07-01",
                ],
            },
            tooltip: {
                x: {
                    format: "MMMM yyyy",
                },
            },
        };

        const sales_chart = new ApexCharts(
            document.querySelector("#revenue-chart"),
            sales_chart_options,
        );
        sales_chart.render();
    </script> <!-- jsvectormap -->
    <script src="https://cdn.jsdelivr.net/npm/jsvectormap@1.5.3/dist/js/jsvectormap.min.js"
        integrity="sha256-/t1nN2956BT869E6H4V1dnt0X5pAQHPytli+1nTZm2Y=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/jsvectormap@1.5.3/dist/maps/world.js"
        integrity="sha256-XPpPaZlU8S/HWf7FZLAncLg2SAkP8ScUTII89x9D3lY=" crossorigin="anonymous"></script>
    <!-- jsvectormap -->
    <script>
        const visitorsData = {
            US: 398, // USA
            SA: 400, // Saudi Arabia
            CA: 1000, // Canada
            DE: 500, // Germany
            FR: 760, // France
            CN: 300, // China
            AU: 700, // Australia
            BR: 600, // Brazil
            IN: 800, // India
            GB: 320, // Great Britain
            RU: 3000, // Russia
        };

        // World map by jsVectorMap
        const map = new jsVectorMap({
            selector: "#world-map",
            map: "world",
        });

        // Sparkline charts
        const option_sparkline1 = {
            series: [{
                data: [1000, 1200, 920, 927, 931, 1027, 819, 930, 1021],
            }, ],
            chart: {
                type: "area",
                height: 50,
                sparkline: {
                    enabled: true,
                },
            },
            stroke: {
                curve: "straight",
            },
            fill: {
                opacity: 0.3,
            },
            yaxis: {
                min: 0,
            },
            colors: ["#DCE6EC"],
        };

        const sparkline1 = new ApexCharts(
            document.querySelector("#sparkline-1"),
            option_sparkline1,
        );
        sparkline1.render();

        const option_sparkline2 = {
            series: [{
                data: [515, 519, 520, 522, 652, 810, 370, 627, 319, 630, 921],
            }, ],
            chart: {
                type: "area",
                height: 50,
                sparkline: {
                    enabled: true,
                },
            },
            stroke: {
                curve: "straight",
            },
            fill: {
                opacity: 0.3,
            },
            yaxis: {
                min: 0,
            },
            colors: ["#DCE6EC"],
        };

        const sparkline2 = new ApexCharts(
            document.querySelector("#sparkline-2"),
            option_sparkline2,
        );
        sparkline2.render();

        const option_sparkline3 = {
            series: [{
                data: [15, 19, 20, 22, 33, 27, 31, 27, 19, 30, 21],
            }, ],
            chart: {
                type: "area",
                height: 50,
                sparkline: {
                    enabled: true,
                },
            },
            stroke: {
                curve: "straight",
            },
            fill: {
                opacity: 0.3,
            },
            yaxis: {
                min: 0,
            },
            colors: ["#DCE6EC"],
        };

        const sparkline3 = new ApexCharts(
            document.querySelector("#sparkline-3"),
            option_sparkline3,
        );
        sparkline3.render();
    </script> <!--end::Script-->
    <footer style="
    text-align: center;
    padding: 15px;
    color: rgb(0, 0, 0);
    font-size: 14px;
">
        <strong>Copyright &copy; 2024 <a href="/sesi"
                style="color: rgb(50, 77, 196); text-decoration: none;">SIMedia</a>.</strong>
        All rights reserved.
        <div style="float: right; display: inline-block;">
            <b>Version</b> 3.2.0
        </div>
    </footer>
</body><!--end::Body-->

</html>
