<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Aktivitas Pengguna</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* CSS Styling */
        *{
            font-family: "Ubuntu", system-ui;
            font-weight: 500;
            font-style: normal;
         }
        body {
            background-color: #E2F1E7;
            padding: 0;
            margin: 0;
        }   

        .activity-details-container {
            width: 100%;
            max-width: 900px;
            margin: 30px auto;
            background-color: #f9f9f9;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .activity-details-container h3 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }

        .filter-section {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .filter-section select, .filter-section input {
            padding: 8px;
            border-radius: 5px;
            border: 1px solid #ccc;
            font-size: 14px;
            flex: 1; /* Membuat elemen flex lebih responsif */
            margin-right: 10px; /* Menambahkan jarak antara elemen */
        }

        .filter-section input {
            margin-right: 0; /* Menghilangkan margin kanan untuk input date */
        }

        .activity-item {
            background-color: #fff;
            margin-bottom: 15px;
            padding: 15px;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s ease-in-out;
            cursor: pointer;
        }

        .activity-item:hover {
            transform: translateY(-5px);
        }

        .activity-item h4 {
            margin: 0;
            color: #02293b;
            font-size: 1.2em;
        }

        .activity-item small {
            display: block;
            margin-top: 5px;
            color: #666;
        }

        .activity-item p {
            margin-top: 10px;
            color: #333;
            font-size: 1em;
            display: none;
            transition: max-height 0.3s ease;
            overflow: hidden;
        }

        .activity-item.active p {
            display: block;
        }

        .stats-section {
            background-color: #02293b;
            padding: 15px;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
            text-align: center;
        }

        .stats-section h5 {
            margin-bottom: 10px;
            color: #ffffff;
        }

        .stats-item {
            display: inline-block;
            margin: 0 20px;
        }

        .stats-item h6 {
            margin: 0;
            font-size: 1.1em;
            color: #ffffff;
        }

        .stats-item span {
            font-size: 1.3em;
            font-weight: bold;
            color: #ffffff;
        }

        .pagination {
            justify-content: center;
        }

        @media (max-width: 768px) {
            .filter-section {
                flex-direction: column;
                align-items: stretch;
            }

            .filter-section select, .filter-section input {
                width: 100%;
                margin-bottom: 10px;
            }

            .activity-item h4 {
                font-size: 1.1em;
            }

            .stats-item {
                display: block;
                margin-bottom: 10px;
            }
        }
    </style>
</head>
<body>

<div class="activity-details-container">
    <h3>Detail Aktivitas Pengguna</h3>

    <!-- Statistik aktivitas pengguna -->
    <div class="stats-section">
        <div class="stats-item">
            <h6>Total Login</h6>
            <span>{{ $totalLogins }}</span>
        </div>
        <div class="stats-item">
            <h6>Total Aktivitas</h6>
            <span>{{ $totalActivities }}</span>
        </div>        
    </div>
     <!-- Filter aktivitas -->
     <div class="filter-section">
        <select id="filterActivity" class="form-control">
            <option value="all">Semua Aktivitas</option>
            <option value="login">Login</option>
        </select>
        <input type="date" id="filterDate" class="form-control" placeholder="Filter by Date">
    </div>
    
    @if($activities->isEmpty())
        <p class="text-center">Tidak ada aktivitas yang tercatat.</p>
    @else
        @foreach($activities as $activity)
            <div class="activity-item" data-type="{{ strtolower($activity->activity_name) }}">
                <h4>{{ $activity->activity_name }}</h4>
                <small>Waktu: {{ \Carbon\Carbon::parse($activity->activity_time)->format('Y-m-d H:i') }}</small>
                <p>Detail: {{ $activity->activity_details }}</p>
            </div>
        @endforeach
    @endif

    <!-- Tambahkan paginasi -->
    {{ $activities->links() }}  
</div>

<!-- JavaScript for interactivity -->
<script>
    document.querySelectorAll('.activity-item').forEach(function (item) {
        item.addEventListener('click', function () {
            this.classList.toggle('active');
        });
    });

    // Filter functionality
    document.getElementById('filterActivity').addEventListener('change', function () {
        const selectedType = this.value;
        document.querySelectorAll('.activity-item').forEach(function (item) {
            if (selectedType === 'all' || item.dataset.type === selectedType) {
                item.style.display = 'block';
            } else {
                item.style.display = 'none';
            }
        });
    });

    document.getElementById('filterDate').addEventListener('change', function () {
        const selectedDate = this.value;
        document.querySelectorAll('.activity-item').forEach(function (item) {
            const activityDate = item.querySelector('small').textContent.split(': ')[1].split(' ')[0]; // Ambil tanggal dari elemen small
            if (selectedDate && activityDate !== selectedDate) {
                item.style.display = 'none';
            } else {
                item.style.display = 'block';
            }
        });
    });
</script>

</body>
</html>


