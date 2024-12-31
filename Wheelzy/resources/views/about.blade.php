<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WHEELZY</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        body, html {
            height: 100%;
            margin: 0;
            font-family: 'Arial', sans-serif;
        }

        .background {
            position: absolute;
            width: 100%;
            height: 100%;
            overflow: hidden;
        }

        .background img {
            position: absolute;
            width: 100%;
            height: 100%;
            object-fit: cover;
            opacity: 0.2;
        }

        .container-wrapper {
            display: flex; /* Menjadikan container berdampingan */
            justify-content: center; /* Mengatur posisi agar sejajar di tengah */
            align-items: flex-start; /* Mengatur alignment vertikal */
            gap: 5px; /* Mengatur jarak antar container menjadi lebih kecil */
            margin: 10px auto; /* Margin luar untuk wrapper */
        }

        .container {
            position: relative;
            background: rgba(255, 255, 255, 0.1);
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            z-index: 1;
            flex: 1; /* Memastikan container mengambil lebar yang sama */
            max-width: 45%; /* Batas maksimal lebar container */
        }

        .container h1 {
            color: white;
            margin-bottom: 20px;
            font-weight: bold;
            text-align: justify;
        }

        .container p {
            color: white;
            margin-bottom: 20px;
            text-align: justify;
        }

        .bg {
            background-image: url('/images/CarLandingPage.png');
            height: 100%;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            position: relative;
            color: white;
        }

        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(0, 0, 0, 0.5);
        }

        .navbar {
            padding: 1rem 2rem;
        }

        .navbar-brand {
            font-weight: bold;
        }

        .navbar-nav .nav-link {
            color: white !important;
            margin-right: 1rem;
        }

        .navbar-nav .nav-link:last-child {
            margin-right: 0;
        }

        .btn-outline-light {
            border-color: white;
            color: white;
        }

        .btn-outline-light:hover {
            background-color: white;
            color: black;
        }

        @media (max-width: 768px) {
            .container-wrapper {
                flex-direction: column; /* Stack container secara vertikal */
            }

            .container {
                max-width: 100%; /* Full width untuk container */
            }
        }
    </style>
</head>
<body>
    <div class="bg">
        <div class="overlay"></div>
        <nav class="navbar navbar-expand-lg navbar-dark">
            <a class="navbar-brand" href="#">WHEELZY</a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('about') }}">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">Daftar</a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="container-wrapper">
            <!-- Container Pertama -->
            <div class="container">
                <h1>ABOUT WHEELZY</h1>
                <p>
                    Kami hadir sebagai solusi transportasi terpercaya untuk Anda di Kota Bandung. 
                    Wheelzy adalah inovasi dalam dunia penyewaan kendaraan yang menghadirkan kemudahan dan kenyamanan dalam genggaman Anda. 
                    Melalui platform digital kami, Anda dapat mengakses berbagai pilihan kendaraan, 
                    mulai dari motor hingga mobil, yang siap menemani setiap perjalanan Anda.
                </p>
                <p>
                    Kami memahami bahwa setiap momen perjalanan Anda berharga. Itulah mengapa Wheelzy hadir dengan sistem penyewaan yang fleksibel dan dapat diandalkan 24/7. Baik untuk keperluan sehari-hari, urusan bisnis, maupun petualangan akhir pekan, kami siap mendukung mobilitas Anda dengan armada berkualitas dan layanan prima.
                </p>
                <p>
                    Bersama Wheelzy, nikmati kebebasan berkendara tanpa batasan. Karena bagi kami, setiap perjalanan Anda adalah prioritas kami.
                </p>
            </div>
            <!-- Container Kedua -->
            <div class="container">
                <h1>TEAM WHEELZY</h1>
                <p>
                    Website Wheelzy dibuat oleh kelompok 3 untuk memenuhi tugas besar pemrograman web.
                </p>
            </div>
        </div>
    </div>
</body>
</html>
