<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ujian SIM</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <!-- SweetAlert2 CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <style>
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

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 30px;
            background-color: #243642; /* warna latar header */
        }

        .logo {
            display: flex;
            align-items: center;
            font-size: 20px;
            font-weight: bold;
        }

        .logo-img {
            width: 50px; /* sesuaikan ukuran logo */
            height: 50px;
            margin-right: 10px; /* jarak antara logo dan teks */
        }

        .user-info {
            text-align: right;
        }


        .header .logo {
            font-size: 20px;
            color: #ffffff;
        }

        .header .user-info {
            display: flex;
            align-items: center;
        }

        .header .user-info .user-name {
            font-size: 20px;
            color: #ffffff;
            margin-right: 10px;
            font-weight: bold;
        }

        .header .user-info .user-id {
            font-size: 18px;
            color: #999;
        }

        .container {
            display: flex;
            justify-content: space-between;
            padding: 20px;
        }

        .sidebar {
            width: 20%;
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .sidebar h2 {
            font-size: 30px;
            color: #333;
            margin-bottom: 20px;
            font-weight: bold;
        }

        .sidebar .timer {
            font-size: 40px;
            color: #ff0000;
            margin-bottom: 20px;
        }

        .sidebar .questions {
            display: flex;
            flex-wrap: wrap;
        }

        .sidebar .questions button {
            width: 45px;
            height: 45px;
            margin: 5px;
            background-color: #243642;
            border: none;
            border-radius: 5px;
            color: #fff;
            font-size: 16px;
            cursor: pointer;
        }

        .content {
            width: 75%;
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .content h1 {
            font-size: 25px;
            color: #333;
            margin-bottom: 20px;
            font-weight: bold;
        }

        .content .question {
            font-size: 20px;
            color: #333;
            margin-bottom: 20px;
        }

        .content .options {
            margin-bottom: 20px;
        }

        .content .options label {
            display: block;
            margin-bottom: 10px;
            font-size: 19px;
            color: #333;
        }

        .content .options input {
            margin-right: 10px;
        }

        .content .navigation {
            display: flex;
            padding: 5px;
        }

        .content .navigation button {
            background-color: #b81717;
            border: none;
            border-radius: 5px;
            color: #fff;
            font-size: 16px;
            padding: 10px 20px;
            cursor: pointer;
        }
        .content .navigation button:hover {
            background-color: #851212; /* Warna lebih gelap saat hover */
            transform: scale(1.05); /* Sedikit membesarkan tombol saat hover */
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3); /* Efek bayangan saat hover */
        }

        .content .navigation button:active {
            transform: scale(0.95); /* Sedikit mengecil saat diklik */
            box-shadow: none; /* Menghilangkan bayangan saat diklik */
        }

        .hidden {
            display: none;
        }
        .user-info {
    display: flex;
    align-items: center;
}

.user-icon {
    background-color: #bfc2c4; /* Warna latar belakang lingkaran */
    color: #fff; /* Warna teks */
    width: 40px; /* Ukuran lingkaran */
    height: 40px;
    border-radius: 50%; /* Membuat bentuk lingkaran */
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: bold;
    font-size: 18px; /* Ukuran font untuk inisial */
    margin-right: 15px; /* Spasi antara ikon dan nama pengguna */
}

.user-details {
    display: flex;
    flex-direction: row; /* Membuat nama dan ID pengguna sejajar */
    gap: 10px; /* Spasi antara nama dan ID pengguna */
    align-items: center;
}
#options-wrapper {
    display: flex;
    flex-direction: column;
    gap: 12px; /* Menambahkan jarak antara opsi */
}

#options-wrapper label {
    display: flex;
    align-items: center;
    padding: 12px;
    font-size: 18px;
    background-color: #f3f4f6;
    border: 1px solid #d1d5db;
    border-radius: 8px;
    cursor: pointer;
    transition: background-color 0.3s, box-shadow 0.3s;
}

#options-wrapper label:hover {
    background-color: #e5e7eb; /* Warna saat opsi dihover */
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

#options-wrapper input[type="radio"] {
    margin-right: 12px; /* Memberikan jarak antara radio button dan teks */
    accent-color: #4f46e5; /* Mengatur warna radio button */
}

#options-wrapper label.selected {
    background-color: #c7d2fe; /* Warna saat opsi dipilih */
    border-color: #4f46e5; /* Warna border saat dipilih */
    box-shadow: 0 4px 12px rgba(79, 70, 229, 0.2);
}
.content .navigation {
    display: flex; /* Menjadikan elemen flex */
    gap: 10px; /* Mengatur jarak antar tombol */
}
#result {
            background-color: #f0f8ff;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            text-align: center;
            margin-top: 20px;
        }

        .score-text {
            font-size: 24px;
            font-weight: bold;
            margin: 10px 0;
        }

        .button-container {
            display: flex;
            justify-content: center;
            gap: 10px;
            margin-top: 20px;
        }

        .finish-button, .download-button {
            background-color: #4caf50;
            color: white;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .finish-button:hover, .download-button:hover {
            background-color: #45a049;
        }

        .download-button {
            background-color: #2196F3;
        }

        .download-button:hover {
            background-color: #1976D2;
        }
    </style>
</head>
<body>
    <div class="header">
        <div class="logo">
            <img src="assets/dist/assets/img/simedia.png" alt="Logo" class="logo-img">
            DIGITAL KORLANTAS POLRI
        </div>
        <div class="user-info">
            <!-- Icon inisial pengguna -->
            <div class="user-icon">
                {{ strtoupper(substr(Auth::user()->name, 0, 1)) }}
            </div>
            <!-- Nama dan ID pengguna -->
            <div class="user-details">
                <span class="user-name">{{ Auth::user()->name }}</span>
                <span class="user-id">ID: {{ Auth::user()->id }}</span>
            </div>
        </div>          
    </div>    
    <div class="container">
        <div class="sidebar">
            <h2>SISA WAKTU UJIAN</h2>
            <div class="timer" id="time-left">3600 detik</div>
            <div class="questions">
            </div>
        </div>
        <div class="content">
            <h1 id="question-number">NO. 1 DARI 30 SOAL</h1>
            <div class="question" id="question-wrapper"></div>
            <div class="options" id="options-wrapper"></div>
            <div class="navigation">
                <button id="prev-btn"><i class="fas fa-chevron-left"></i> Prev</button>
                <button id="next-btn">Next <i class="fas fa-chevron-right"></i></button>
            </div>                   
            <div id="result" class="hidden">
                <h2>Hasil Ujian</h2>
                <p id="username" class="score-text">{{ Auth::user()->name }}</p> <!-- Contoh nama pengguna -->
                <p id="score" class="score-text">Skor Anda: 91</p>
                <div class="button-container">
                    <button id="finish-btn" class="finish-button" onclick="showFinishMessage()">UJIAN SELESAI</button>
                    <button id="download-btn" class="download-button" onclick="downloadScore()">DOWNLOAD HASIL</button>
                </div>
            </div>
        </div>
    </div>
    <script>
        // Fungsi untuk mengunduh skor sebagai file PDF
        function downloadScore() {
            const { jsPDF } = window.jspdf; // Mengambil jsPDF dari window
            const pdf = new jsPDF(); // Membuat instance jsPDF
    
            // Menambahkan judul dengan gaya
            pdf.setFontSize(22); // Ukuran font judul
            pdf.text("Hasil Ujian Anda", 105, 20, null, null, "center"); // Menambahkan judul di tengah
            pdf.setFontSize(16); // Kembali ke ukuran font normal
            pdf.text("=================================", 105, 30, null, null, "center"); // Garis pemisah
    
            // Mendapatkan nama pengguna dan skor
            const username = document.getElementById("username").textContent; // Mendapatkan nama pengguna
            const scoreText = document.getElementById("score").textContent; // Mendapatkan teks skor
    
            // Menambahkan informasi ke PDF
            pdf.setFontSize(14); // Ukuran font untuk teks
            pdf.text(username, 105, 40, null, null, "center"); // Nama pengguna
            pdf.text(scoreText, 105, 50, null, null, "center"); // Skor
    
            // Menambahkan informasi tambahan
            pdf.text("Terima kasih telah mengikuti ujian.", 105, 60, null, null, "center");
            pdf.text("Silakan kunjungi website kami untuk informasi lebih lanjut.", 105, 70, null, null, "center");
    
            // Menambahkan garis pemisah
            pdf.line(10, 75, 200, 75); // Garis horizontal
    
            // Menyimpan PDF dengan nama 'hasil_ujian.pdf'
            pdf.save('hasil_ujian.pdf'); 
        }
    </script>
    <script>
                document.getElementById('finish-btn').addEventListener('click', function() {
            // Menampilkan notifikasi
            Swal.fire({
                title: 'Terima kasih!',
                text: 'Anda telah mengerjakan ujian dengan baik.',
                icon: 'success',
                confirmButtonText: 'OK'
            }).then((result) => {
                // Jika pengguna mengklik OK, redirect ke halaman akses-ujian
                if (result.isConfirmed) {
                    window.location.href = 'akses-ujian'; // Ganti 'akses-ujian' dengan URL yang sesuai jika perlu
                }
            });
        });

        document.getElementById('options-wrapper').addEventListener('click', function(e) {
            if (e.target.tagName === 'LABEL') {
                document.querySelectorAll('#options-wrapper label').forEach(label => {
                    label.classList.remove('selected');
                });
                e.target.classList.add('selected');
            }
        });
    
        const questions = [
            { question: "Saat berkendara di jalan, faktor apa yang paling utama yang harus Anda perhatikan dalam menentukan jarak aman antara kendaraan Anda dan kendaraan di depan?", options: ["Kondisi Cuaca", "Kecepatan kendaraan dan jarak berhenti apabila direm", "Asap tebal dari knalpot kendaraan di depan", "Apabila ada orang sedang menyeberang"], answer: 1 },
            { question: "Apa arti marka jalan garis tengah berwarna putih yang terputus-putus di atas jalan dua arah?", options: ["Kendaraan tidak boleh melintas karena ada Polisi yang bertugas", "Kendaraan tidak boleh melintas garis ini karena jalanan sempit", "Kendaraan tidak boleh melintas di atas garis ini walaupun tidak ada kendaraan lain di depannya", "Kendaraan boleh melintas di atas garis ini"], answer: 3 },
            { question: "Bila Anda mengemudikan kendaraan dalam cuaca kabut tebal, maka Anda harus mengurangi kecepatan dan menyalakan?", options: ["Lampu besar sinar jarak dekat", "Lampu hazard", "Lampu besar sinar jarak jauh", "Lampu besar dan lampu hazard secara bersamaan"], answer: 0 },
            { question: "Marka membujur berupa garis ganda yang terdiri dari dua buah garis utuh digunakan untuk menyatakan?", options: ["endaraan diperbolehkan melintas garis ganda tersebut", "Kendaraan yang berada pada posisi gars terputus-putus dilarang melintasi garis ganda tersebut", "Kendaraan tidak diperbolehkan melintasi garis tersebut", "Kendaraan dilarang saling mendahului"], answer: 2 },
            { question: "Berapa usia minimal untuk membuat SIM A?", options: ["15 tahun", "16 tahun", "17 tahun", "18 tahun"], answer: 3 },
            { question: "Pada saat mengendarai kendaraan bermotor di jalan, lokasi manakah yang dilarang bagi pengendara untuk memberhentikan kendaraan?", options: ["Halte bus", "Pada belokan, persimpangan, jembatan dan lokasi yang terdapat rambu larangan berhenti", "Di depan kantor polisi", "Di depan kantor pemerintahan"], answer: 1 },
            { question: "Menurut sifatnya, rambu lalu lintas terdiri dari?", options: [" Peringatan, larangan, perintah, petunjuk", " Larangan, perintah, petunjuk", "Peringatan, larangan, perintah", "Peringatan, larangan, petunjuk"], answer: 0 },
            { question: "Menurut bentuknya, rambu lalu lintas ada?", options: ["4 macam bentuk", "3 macam bentuk", "2 macam bentuk", "5 macam bentuk"], answer: 0 },
            { question: "Pada waktu lampu pengatur lalu lintas berganti menjadi hijau, seorang penyeberang jalan masih berada di atas zebra cross, maka yang mendapat kesempatan berjalan terlebih dahulu adalah", options: ["Pengemudi kendaraan yang berada pada lajur paling kanan", "Pengemudi kendaraan yang berada paling depan", "Pejalan kaki yang masih berada di atas zebra cross", "Pengemudi kendaraan yang berada pada lajur paling kiri"], answer: 2 },
            { question: "Menurut Anda dari beberapa jenis kendaraan di bawah ini, kendaraan manakah yang mendapatkan prioritas berjalan yang harus didahulukan?", options: ["Mobil jenazah", "Metro mini, bajaj, dan sepeda motor", "Truk tronton dan kontainer", "Pemadam kebakaran dan ambulans yang sedang bertugas"], answer: 3 },
            { question: "Seseorang pengemudi yang terlibat kecelakaan lalu lintas tidak dibenarkan untuk meninggalkan tempat kejadian perkara kecelakaan yang dialaminya, kecuali...", options: ["Menyembunyikan diri agar tidak diketahui orang karena tidak ada saksi di TKP", "Terancam jiwanya oleh masyarakat yang marah/emosi tetapi harus segera melaporkan kejadian tersebut kepada kepolisian terdekat", "Mencari bantuan untuk membawa kendaraan ke bengkel", "Kabur untuk menghilangkan jejak"], answer: 1 },
            { question: "Pada saat mengendarai kendaraan di jalan umum, manakah menurut Anda pemakai jalan yang perlu mendapat perhatian dan kewaspadaan khusus?", options: ["Truk yang membawa muatan", "Anak-anak yang bermain di jalan", "Pengendara sepeda motor", "Kendaraan yang parkir di bahu jalan"], answer: 1 },
            { question: "Untuk kepentingan tertentu, kendaraan bermotor dapat dilengkapi dengan lampu isyarat/sirine. Penggunaan lampu isyarat/sirine sesuai dengan ketentuan hanya boleh dipasang pada kendaraan bermotor?", options: ["Petugas penegak hukum tertentu, dinas pemadam kebakaran dan ambulans", "Iring-iringan konvoi kendaraan pribadi", "Mobil mewah dan motor besar", "Geng motor abal-abal"], answer: 0 },
            { question: "Bagi seorang pengemudi yang terlibat sebagai tersangka dalam kasus kecelakaan lalu lintas dengan akibat korban luka berat atau meninggal dunia, ataupun si pengemudi terbukti beberapa kali melakukan pelanggaran lalu lintas, Polri berwenang untuk...", options: ["Meningkatkan golongan SIM-nya", "Membatalkan SIM-nya serta mencabut SIM-nya sesuai keputusan hakim", " Menurunkan golongan SIM-nya", "Memerintahkan pengendara untuk membuat SIM baru"], answer: 1 },
            { question: "Anda melanggar ketentuan undang-undang lalu lintas apabila saat berkendara di jalan tidak memiliki?", options: ["Tidak memiliki BPKB", "Tidak memiliki SIM", "Tidak memiliki KTP", "Tidak memiliki ijazah"], answer: 1 },
            { question: "Pengaturan dengan isyarat gerakan tangan yang dilakukan oleh petugas Polisi Lalu lintas di bawah ini berarti...", options: [" Kendaraan berhenti satu arah tertentu", "Kendaraan yang berada di depan hati-hati", "Kendaraan yang berada di depan berhenti", "Kendaraan yang berada di depan dipersilakan jalan terus"], answer: 0 },
            { question: " Pada saat di persimpangan atau traffic light terdapat marka jalan berupa garis stop, apa fungsi dari marka jalan tersebut?", options: ["Sebagai tanda batas berhenti kendaraan bermotor saat traffic light menyala berwarna merah", "Pemisah lajur kiri dengan lajur kanan", "Batas pemisah kanan", "Boleh dilanggar saat traffic light menyala merah"], answer: 0 },
            { question: "Apa arti garis putih putus-putus di jalan?", options: ["Boleh menyalip", "Tidak boleh menyalip", "Jalan satu arah", "Berhenti"], answer: 0 },
            { question: "Penggunaan Handphone (HP) tidak diizinkan pada saat pengemudi kendaraan bermotor di jalan, kecuali...", options: ["Menerima panggilan menggunakan alat bantu dengar (handsfree) atau pengeras suara handphone (loudspeaker)", "Menepikan kendaraan lalu berhenti", "Pernyataan keduanya benar", " Boleh menggunakan HP asal hati-hati"], answer: 1 },
            { question: "Pada saat mengendarai kendaraan di jalan bebas hambatan/jalan tol, pengemudi dilarang melakukan hal-hal, kecuali...", options: ["Menggunakan bahu jalan untuk mendahului kendaraan lain", "Berhenti di bahu jalan pada saat keadaan darurat", "Mengemudi dengan kecepatan melebihi ketentuan batas kecepatan", "Berbalik arah"], answer: 1 },
            { question: "Pengereman mendadak di jalan yang licin terutama pada kecepatan tinggi akan mengakibatkan, kecuali...", options: ["Tidak berakibat apa-apa kalau pengemudi mahir", "Kendaraan akan selip (tergelincir)", "Membahayakan kendaraan lain di belakang", "Kendaraan sulit dikendalikan"], answer: 0 },
            { question: "Pada saat berkendara dalam keadaan hujan deras pengemudi diharuskan mengurangi kecepatan kendaraan karena...", options: ["Persentuhan antara ban kendaraan dan permukaan jalan tidak melekat akibat air hujan", "Pemandangan sangat terganggu oleh cuaca deras", "Pernyataan A dan B benar", "Tidak perlu mengurangi apabila pengemudi yakin akan kemampuan pengemudi saat hujan"], answer: 2 },
            { question: "Masa berlaku Surat Izin Mengemudi (SIM) selama 5 tahun dan dapat diperpanjang, kecuali untuk SIM?", options: ["SIM C", "SIM Internasional", "SIM BII", "SIM A Umum"], answer: 1 },
            { question: "Bagaimana menurut Anda kendaraan barang yang digunakan untuk mengangkut penumpang/orang?", options: ["Boleh asal hati-hati", "Boleh asal digunakan pada malam hari dan jalanan sepi", "Boleh asal penumpang tidak berdesakan", "Tidak boleh"], answer: 3 },
            { question: "Kaca pengintai atau kaca spion sebagai perlengkapan pada kendaraan bermotor berfungsi untuk...", options: ["Digunakan sebagai kaca hias", "Memenuhi peraturan semata", "Sewaktu-waktu melihat keadaan jalan sebelah belakang kanan atau kiri oleh pengemudinya", "Melengkapi aksesoris kendaraan"], answer: 2 },
            { question: "Sabuk keselamatan sebagai salah satu persyaratan keselamatan berlalu lintas pada kendaraan bermotor minimal harus terpasang...", options: ["Paling sedikit di tempat duduk pengemudi dan tempat duduk penumpang depan di samping tempat duduk pengemudi", "Di tempat pengemudi saja", " Di tempat duduk penumpang depan samping pengemudi saja", "Di seluruh tempat duduk"], answer: 0 },
            { question: "Persiapan apa yang harus Anda lakukan sebelum mengendarai kendaraan bermotor di jalan?", options: ["Mempersiapkan sarana hiburan di kendaraan", "Melakukan pengecekan kelengkapan (ban, rem, spion, lampu, sein, air radiator dll) dan surat-surat (SIM, STNK, dll) kendaraan bermotor", "Mempersiapkan makanan/minuman secukupnya", "Mempersiapkan handset/alat komunikasi/telepon"], answer: 1 },
            { question: "Untuk mendapatkan Surat Izin Mengemudi (SIM), setiap orang antara lain harus memenuhi persyaratan usia untuk dapat memiliki SIM golongan A?", options: ["17 tahun", "18 tahun", "19 tahun", "20 tahun"], answer: 0 },
            { question: "Seseorang yang memiliki SIM A dapat mengemudikan kendaraan?", options: ["Mobil penumpang dan kendaraan beroda dua", "Mobil penumpang perorangan dan mobil barang yang beratnya tidak melebihi 3.500 kg", "Mobil penumpang perorangan dan mobil penumpang umum", "Mobil penumpang perorangan, mobil barang perorangan dan mobil barang umum"], answer: 1 },
            { question: "Jenis SIM apa yang harus dimiliki bila mengemudikan kendaraan penumpang perseorangan dan mobil barang perseorangan?", options: ["SIM C", "SIM A", "SIM A Umum", "Jawaban B dan C benar"], answer: 3 }
        ];
    
        let currentQuestionIndex = 0;
        let score = 0;
        let timeLeft = 3600; // Waktu pengerjaan dalam detik (30 menit)
        let timerInterval;
    
        const questionWrapper = document.getElementById('question-wrapper');
        const optionsWrapper = document.getElementById('options-wrapper');
        const nextButton = document.getElementById('next-btn');
        const prevButton = document.getElementById('prev-btn');
        const resultDiv = document.getElementById('result');
        const scoreText = document.getElementById('score');
        const timeLeftText = document.getElementById('time-left');
        const questionNumberText = document.getElementById('question-number');
        const questionsButtons = document.querySelector('.sidebar .questions');
    
        function loadQuestion() {
            const currentQuestion = questions[currentQuestionIndex];
            questionWrapper.innerHTML = currentQuestion.question;
            optionsWrapper.innerHTML = currentQuestion.options.map((option, index) => `
                <label>
                    <input type="radio" name="answer" value="${index}">
                    ${option}
                </label>
            `).join('');
            questionNumberText.textContent = `NO. ${currentQuestionIndex + 1} DARI ${questions.length} SOAL`;
            updateQuestionButtons();
        }
    
        function updateQuestionButtons() {
            questionsButtons.innerHTML = questions.map((_, index) => `
                <button class="${index === currentQuestionIndex ? 'active' : ''}">${index + 1}</button>
            `).join('');
        }
    
        function showResult() {
            clearInterval(timerInterval); // Hentikan timer saat menunjukkan hasil
            questionWrapper.classList.add('hidden');
            optionsWrapper.classList.add('hidden');
            resultDiv.classList.remove('hidden');
    
            // Hitung persentase
            const percentage = (score / questions.length) * 100;
            scoreText.textContent = `Skor Anda: ${percentage.toFixed(2)}%`; // Format persentase dengan 2 desimal
        }
    
        function formatTime(seconds) {
            const hours = String(Math.floor(seconds / 3600)).padStart(2, '0');
            const minutes = String(Math.floor((seconds % 3600) / 60)).padStart(2, '0');
            const secs = String(seconds % 60).padStart(2, '0');
            return `${hours}:${minutes}:${secs}`;
        }
    
        function startTimer() {
            timerInterval = setInterval(() => {
                timeLeft--;
                timeLeftText.textContent = formatTime(timeLeft);
                if (timeLeft <= 0) {
                    clearInterval(timerInterval);
                    showResult();
                }
            }, 1000);
        }
    
        nextButton.addEventListener('click', () => {
            const selectedOption = document.querySelector('input[name="answer"]:checked');
            if (selectedOption) {
                const answer = parseInt(selectedOption.value);
                if (answer === questions[currentQuestionIndex].answer) {
                    score++;
                }
                currentQuestionIndex++;
                if (currentQuestionIndex < questions.length) {
                    loadQuestion();
                } else {
                    showResult();
                }
            }
        });
    
        prevButton.addEventListener('click', () => {
            if (currentQuestionIndex > 0) {
                currentQuestionIndex--;
                loadQuestion();
            }
        });
    
        // Inisialisasi
        loadQuestion();
        startTimer();
    </script>       
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
    <!-- SweetAlert2 JS -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>
</html>
