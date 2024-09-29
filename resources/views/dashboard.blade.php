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
                <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
            </head>
            <body>
                <div class="container">
                    <div class="sidebar closed"> 
                        <div class="headerer">
                            <div class="list-item">
                                <a href="#">
                                    <img src="{{ asset('assets/dist/assets/img/userprofile.svg') }}" alt="" class="icon1">
                                    <span class="description-header">Fadila Nur Afifa</span>
                                </a>
                            </div>
                            <div class="illustration">
                                <img src="{{ asset('assets/dist/assets/img/sinar.png') }}" alt="">
                            </div>
                        </div>
                        <div class="main">
                            <div class="list-item">
                                <a href="dashboard">
                                    <img src="{{ asset('assets/dist/assets/img/dashboard.svg') }}" alt="" class="icon">
                                    <span class="description">Dashboard</span>
                                </a>
                            </div>
                            <div class="list-item">
                                <a href="#">
                                    <img src="{{ asset('assets/dist/assets/img/user.svg') }}" alt="" class="icon">
                                    <span class="description">Profile</span>
                                </a>
                            </div>
                            <div class="list-item">
                                <a href="#">
                                    <img src="{{ asset('assets/dist/assets/img/human.svg') }}" alt="" class="icon">
                                    <span class="description">Clien</span>
                                </a>
                            </div>
                            <div class="list-item">
                                <a href="history">
                                    <img src="{{ asset('assets/dist/assets/img/data.svg') }}" alt="" class="icon">
                                    <span class="description">Data Pengajuan</span>
                                </a>
                            </div>
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
                                <img src="{{ asset('assets/dist/assets/img/simedia.png') }}">
                                DIGITAL KORLANTAS POLRI</h1>
                            <div class="custom-search-container">
                                <form action="/search" method="GET" class="custom-search-form">
                                    <div class="input-with-icon">
                                        <i class="bi bi-search"></i>
                                        <input type="text" placeholder="Cari sesuatu..." name="search" class="custom-search-input">
                                    </div>
                                </form>                                
                            </div>                                                            
                            <div class="header-buttons">
                                <button class="header-button-dashboard" onclick="location.href='/dashboard'">
                                    <i class="bi bi-house"></i> 
                                    Dashboard
                                </button>
                                <button class="header-button-input" onclick="location.href='history'">
                                    <i class="bi bi-file-earmark-plus"></i>
                                    Inputan Data
                                </button>
                                
                                <div class="dropdown">
                                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
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
                        <div class="box-container">
                            <div class="box">
                                <p id="jumlah-pengajuan">{{ $jumlahPengajuan }}</p>
                                <h1>Daftarkan Sekarang!</h1>
                                <a href="create-sim" class="box-button">Pelayanan SIM</a>
                            </div>                            
                            <div class="box2">
                                <img src="{{ asset('assets/dist/assets/img/lambangpolri.png') }}" class="background-image" alt="Background Image">
                                <div class="content-box2">
                                    <p>POLRES CIANJUR</p>
                                </div>
                                <p class="angka">91.42</p>
                                <p class="total">NILAI TOTAL ZI</p>
                            </div>                                             
                            <div class="box3">
                                <a href="{{ route('registered-users') }}" class="client-link">
                                    <i class="bi bi-person-check"></i>
                                    <p>Client</p>
                                </a>                            
                            </div>                            
                            <div class="box4">
                                <a href="#" class="client-link">
                                    <i class="bi bi-calendar-range-fill"></i>
                                    <p>Nomor Antrian</p>
                                </a>       
                            </div>
                            <a class="box5" href="{{ route('data_ektp.index') }}" style="text-decoration: none;">
                                <i class="bi bi-check-circle-fill"></i>
                                <p>Data Verifikasi E-Ktp</p>
                            </a>
                                                                     
                            <div class="box">
                                <p>Pengambilan Nomor Urut</p>
                                <a href="link-box4" class="box-button">Pelayanan SIM</a>
                            </div>
                        </div>                                                
                    </div>
                </div>                               
                
    
                {{-- <nav class="navbar navbar-expand-lg navbar-light navbar-bg-brown fixed-top">
                    <a class="navbar-brand d-flex align-items-center" href="#">
                        <img src="{{ asset('assets/dist/assets/img/simedia.png') }}" class="navbar-logo d-inline-block align-top" alt="">
                        <div class="brand-text-container">
                            <div class="text-logo">DIGITAL KORLANTAS POLRI</div>
                        </div>
                    </a>
                    <div class="collapse navbar-collapse">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a href="dashboard" class="nav-link text-white">
                                    <i class="bi bi-speedometer2 me-4"></i>
                                    <p class="d-inline ms-0">Dashboard</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="history" class="nav-link btn btn-orange text-white d-flex align-items-center">
                                    <i class="bi bi-clock-history me-2"></i>
                                    <p class="mb-0">Data Input Anda</p>
                                </a>
                            </li>                               
                        </ul>
                        <div class="dropdown ms-auto">
                            <a class="dropdown-toggle d-flex align-items-center text-white text-decoration-none" href="#" role="button" id="dropdownProfile" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bi bi-person-circle profile-icon me-2"></i>
                                <span class="profile-text">POLRES CIANJUR</span>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-custom" aria-labelledby="dropdownProfile">
                                <li>
                                    <a class="dropdown-item dropdown-item-custom" href="#">
                                        <i class="bi bi-person"></i> Profil
                                    </a>
                                    <a class="dropdown-item dropdown-item-custom" href="/sesi/logout">
                                        <i class="bi bi-box-arrow-right"></i> Logout
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>  --}}

                
                
              
                                         
                    {{-- <div class="activity-container">
                        <h3>Aktivitas Terbaru</h3>
                        
                        <!-- Tombol Aktivitas Terbaru untuk menampilkan aktivitas saat ini -->
                        <button onclick="window.location.href='{{ route('user.activityDetails') }}'">
                            Lihat Aktivitas Details
                        </button>
                    </div>                            --}}
                    <script src="{{ asset('assets/dist/js/dashboard.js') }}"></script>
                    <script>
                      document.addEventListener('DOMContentLoaded', function () {
    function fetchActivities() {
        fetch('/activities') // Pastikan endpoint ini mengembalikan aktivitas untuk pengguna yang sedang login
            .then(response => {
                if (!response.ok) {
                    throw new Error(`HTTP error! Status: ${response.status}`);
                }
                return response.json();
            })
            .then(data => {
                console.log('Data aktivitas yang diterima:', data); // Debugging: Tampilkan data yang diterima
                renderActivities(data);
            })
            .catch(error => {
                console.error('Error fetching activities:', error); // Debugging: Menampilkan kesalahan di konsol
                const activityTable = document.getElementById('activity-table');
                activityTable.innerHTML = '<p>Tidak dapat mengambil data aktivitas. Silakan coba lagi nanti.</p>';
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
                   <script>
                    document.addEventListener('DOMContentLoaded', () => {
                        const buttons = document.querySelectorAll('.button-sim');
                        
                        buttons.forEach(button => {
                            button.addEventListener('click', () => {
                                const target = document.querySelector(button.getAttribute('data-target'));
                                if (target) {
                                    target.style.display = 'block'; // Tampilkan modal
                                    setTimeout(() => {
                                        target.style.opacity = 1; // Menambahkan opacity untuk transisi
                                    }, 10); // Kecilkan delay agar opacity transisi terlihat
                                }
                            });
                        });

                        const closeButtons = document.querySelectorAll('.closes');

                    closeButtons.forEach(closeButton => {
                        closeButton.addEventListener('click', () => {
                            const modal = document.querySelector(closeButton.getAttribute('data-modal'));
                            if (modal) {
                                modal.style.opacity = 0; // Menambahkan opacity untuk transisi
                                setTimeout(() => {
                                    modal.style.display = 'none'; // Sembunyikan modal setelah transisi
                                }, 300); // Durasi transisi opacity
                            }
                        });
                    });

                        window.addEventListener('click', (event) => {
                            if (event.target.classList.contains('modal')) {
                                event.target.style.opacity = 0; // Menambahkan opacity untuk transisi
                                setTimeout(() => {
                                    event.target.style.display = 'none'; // Sembunyikan modal setelah transisi
                                }, 300); // Durasi transisi opacity
                            }
                        });
                    });

                    </script>

                    <script>



                        </script>
                        
                <script>
                    function addCommentToList(comment) {
                        // Create new comment element
                        let newComment = document.createElement('div');
                        newComment.classList.add('comment');
                
                        // Add comment text
                        let commentText = document.createElement('p');
                        commentText.textContent = comment;
                        newComment.appendChild(commentText);
                
                        // Add delete button
                        let deleteButton = document.createElement('button');
                        deleteButton.classList.add('delete-btn');
                        deleteButton.textContent = 'Hapus';
                        deleteButton.addEventListener('click', function() {
                            newComment.remove();
                            removeCommentFromLocalStorage(comment);
                        });
                        newComment.appendChild(deleteButton);
                
                        // Add new comment to the list
                        document.getElementById('commentList').appendChild(newComment);
                    }
                
                    function saveCommentToLocalStorage(comment) {
                        let comments = JSON.parse(localStorage.getItem('comments')) || [];
                        comments.push(comment);
                        localStorage.setItem('comments', JSON.stringify(comments));
                    }
                
                    function removeCommentFromLocalStorage(comment) {
                        let comments = JSON.parse(localStorage.getItem('comments')) || [];
                        comments = comments.filter(c => c !== comment);
                        localStorage.setItem('comments', JSON.stringify(comments));
                    }
                    document.addEventListener("DOMContentLoaded", function() {
            const welcomeTextElement = document.getElementById('welcome-text');
            const serviceTextElement = document.getElementById('service-text');
            
            const welcomeText = welcomeTextElement.textContent;
            const serviceText = serviceTextElement.textContent;

            welcomeTextElement.textContent = '';
            serviceTextElement.textContent = '';

            let i = 0, j = 0;

            function typeWriter() {
                if (i < welcomeText.length) {
                    welcomeTextElement.textContent += welcomeText.charAt(i);
                    i++;
                    setTimeout(typeWriter, 50); // Adjust typing speed here
                } else if (j < serviceText.length) {
                    serviceTextElement.textContent += serviceText.charAt(j);
                    j++;
                    setTimeout(typeWriter, 50); // Adjust typing speed here
                } else {
            // Setelah semua teks selesai diketik, hapus kursor
                    welcomeTextElement.classList.add('no-cursor');
                    serviceTextElement.classList.add('no-cursor');
                }
            }

            typeWriter();
        });
                </script>
        </main> <!--end::App Main--> <!--begin::Footer-->
    </div> <!--end::App Wrapper--> <!--begin::Script--> <!--begin::Third Party Plugin(OverlayScrollbars)-->
    <script src="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.3.0/browser/overlayscrollbars.browser.es6.min.js" integrity="sha256-H2VM7BKda+v2Z4+DRy69uknwxjyDRhszjXFhsL4gD3w=" crossorigin="anonymous"></script> <!--end::Third Party Plugin(OverlayScrollbars)--><!--begin::Required Plugin(popperjs for Bootstrap 5)-->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha256-whL0tQWoY1Ku1iskqPFvmZ+CHsvmRWx/PIoEvIeWh4I=" crossorigin="anonymous"></script> <!--end::Required Plugin(popperjs for Bootstrap 5)--><!--begin::Required Plugin(Bootstrap 5)-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha256-YMa+wAM6QkVyz999odX7lPRxkoYAan8suedu4k2Zur8=" crossorigin="anonymous"></script> <!--end::Required Plugin(Bootstrap 5)--><!--begin::Required Plugin(AdminLTE)-->
    <script src="{{asset('assets')}}/dist/js/adminlte.js"></script> <!--end::Required Plugin(AdminLTE)--><!--begin::OverlayScrollbars Configure-->
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
    <script src="https://cdn.jsdelivr.net/npm/sortablejs@1.15.0/Sortable.min.js" integrity="sha256-ipiJrswvAR4VAx/th+6zWsdeYmVae0iJuiR+6OqHJHQ=" crossorigin="anonymous"></script> <!-- sortablejs -->
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
    <script src="https://cdn.jsdelivr.net/npm/apexcharts@3.37.1/dist/apexcharts.min.js" integrity="sha256-+vh8GkaU7C9/wbSLIcwq82tQ2wTf44aOHA8HlBMwRI8=" crossorigin="anonymous"></script> <!-- ChartJS -->
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
    <script src="https://cdn.jsdelivr.net/npm/jsvectormap@1.5.3/dist/js/jsvectormap.min.js" integrity="sha256-/t1nN2956BT869E6H4V1dnt0X5pAQHPytli+1nTZm2Y=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/jsvectormap@1.5.3/dist/maps/world.js" integrity="sha256-XPpPaZlU8S/HWf7FZLAncLg2SAkP8ScUTII89x9D3lY=" crossorigin="anonymous"></script> 
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
    {{-- <footer style="
    text-align: center;
    padding: 15px;
    color: rgb(0, 0, 0);
    font-size: 14px;
">
    <strong>Copyright &copy; 2024 <a href="/sesi" style="color: rgb(50, 77, 196); text-decoration: none;">SIMedia</a>.</strong>
    All rights reserved.
    <div style="float: right; display: inline-block;">
        <b>Version</b> 3.2.0
    </div>
</footer> --}}
</body><!--end::Body-->
</html> 