<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        {{-- <title>All Abilities, One Vision</title> --}}
        <title>Inklusi Kita</title>
        <link rel="icon" href="pict\logo.png" type="image/x-icon" />
        <style>
            body {
                font-family: Arial, sans-serif;
                margin: 0;
                padding: 0;
                background-color: #f8dcd1;
            }
    
            .container {
                display: flex;
                flex-direction: column;
                align-items: center;
                padding: 20px;
            }
    
            .header {
                margin-bottom: 20px;
                text-align: center;
            }
    
            .header h1 {
                font-size: 36px;
                color: #FF7A00;
                margin: 0;
            }
    
            .header p {
                font-size: 16px;
                color: #333;
            }
    
            .content-section {
                display: flex;
                flex-direction: row;
                align-items: center;
                justify-content: center;
                width: 1200px;
                margin-top: 30px;
            }
    
            .image-container img {
                width: 100%;
                height: auto;
            }
    
            .text-content {
                max-width: 600px;
                margin-left: 20px;
                text-align: left;
            }
    
            .text-content h2 {
                color: #000;
                font-size: 24px;
            }
    
            .text-content p {
                font-size: 16px;
                color: #333;
                line-height: 1.6;
            }
    
            .event-section {
                display: flex;
                flex-direction: row;
                justify-content: space-between;
                align-items: center;
                padding: 50px;
                max-width: 1200px;
                margin: 30px auto;
                background-color: #ffe8e8;
                border-radius: 10px;
            }
    
            .left {
                flex: 1;
                padding-right: 30px;
            }
    
            .right {
                flex: 1;
                position: relative;
            }
    
            .countdown {
                display: flex;
                justify-content: start;
                gap: 20px;
                margin-bottom: 20px;
            }
    
            .countdown div {
                text-align: center;
                padding: 10px;
                border-radius: 10px;
            }
    
            .days {
                border: 2px solid #b87d50;
            }
    
            .hours {
                border: 2px solid #3d88cb;
            }
    
            .minutes {
                border: 2px solid #d1a738;
            }
    
            .countdown div h1 {
                font-size: 48px;
                margin: 0;
                color: #333;
            }
    
            .countdown div span {
                font-size: 18px;
                color: #777;
            }
    
            .event-title {
                font-size: 28px;
                color: #264653;
                margin: 20px 0;
            }
    
            .event-description {
                font-size: 16px;
                color: #555;
                margin-bottom: 30px;
            }
    
            .learn-more {
                display: inline-block;
                background-color: #f77f00;
                color: white;
                padding: 10px 20px;
                border-radius: 20px;
                text-decoration: none;
                font-weight: bold;
            }
    
            .person-image {
                max-width: 100%;
                border-radius: 10px;
            }
    
            #map {
                height: 500px;
                width: 100%;
                border-radius: 10px;
                margin: 20px auto;
                box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
            }
    
            .button-container {
                margin-top: 10px;
            }
    
            button {
                background-color: #ff6a33;
                color: white;
                padding: 10px 20px;
                border: none;
                border-radius: 5px;
                cursor: pointer;
                font-size: 16px;
            }
    
            button:hover {
                background-color: #e65c29;
            }
    
            h2 {
                text-align: center;
                font-size: 32px;
                margin-top: 50px;
                color: #FF7A00;
            }
    
            h2 span {
                color: #000;
            }
    
            .events-section, .internship-section, .join-us-section {
                padding: 20px;
            }
    
            .card-container {
                display: flex;
                justify-content: center;
                gap: 20px;
                flex-wrap: wrap;
                margin: 30px 0;
            }
    
            .card {
                background-color: white;
                border-radius: 10px;
                box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
                overflow: hidden;
                width: 300px;
                text-align: center;
                transition: transform 0.3s;
            }
    
            .card:hover {
                transform: translateY(-5px);
            }
    
            .card img {
                width: 100%;
                height: 200px;
                object-fit: cover;
            }
    
            .card-content {
                padding: 20px;
            }
    
            .card-header {
                display: flex;
                align-items: center;
                gap: 10px;
            }
    
            .card-header img {
                width: 40px;
                height: 40px;
                object-fit: contain;
            }
    
            .card-content h3 {
                font-size: 20px;
                color: #333;
                margin: 5px 0;
            }
    
            .card-content p {
                font-size: 14px;
                color: #555;
                margin: 5px 0;
            }
    
            .btn {
                display: inline-block;
                background-color: #FF7A00;
                color: white;
                padding: 10px 20px;
                border-radius: 20px;
                text-decoration: none;
                font-weight: bold;
                text-align: center;
                margin-top: 10px;
            }
    
            .btn:hover {
                background-color: #E66A00;
            }
    
            .explore-btn, .join-us-btn {
                text-align: center;
                margin-top: 20px;
            }
    
            .join-us-section {
                background-color: #FF7A00;
                color: white;
                text-align: center;
                padding: 40px 20px;
            }
    
            .join-us-section h3 {
                font-size: 28px;
                margin-bottom: 20px;
            }
    
            .join-us-section p {
                font-size: 18px;
                margin-bottom: 30px;
            }
    
            .join-us-section .btn {
                background-color: #E66A00;
            }
    
            /* Fix for the positioning of the "Temukan Lokasi Seminar" title */
            #map {
                margin-top: 40px; /* Adjusted margin to give space */
            }
    
            h1 {
                text-align: center;
                font-size: 28px;
                color: #FF7A00;
                margin-top: 30px;
            }
        </style>
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
    </head>
    
    <body>

        <!-- Event Section -->
        <div class="event-section">
            <div class="left">
                <div class="countdown">
                    <div class="days">
                        <h1 id="days">0</h1>
                        <span>Days</span>
                    </div>
                    <div class="hours">
                        <h1 id="hours">0</h1>
                        <span>Hours</span>
                    </div>
                    <div class="minutes">
                        <h1 id="minutes">0</h1>
                        <span>Minutes</span>
                    </div>
                </div>
                <p>📅 23-26 Dec, 2024  |  Gedung GKM LT 3.1</p>
                <h2 class="event-title">Peran pendamping dalam inklusi disabilitas</h2>
                <p class="event-description">
                    Pendamping memiliki peran penting dalam memastikan penyandang disabilitas dapat berpartisipasi aktif di lingkungan sosial, pendidikan, maupun pekerjaan.
                </p>
                <a href="#" class="learn-more">Learn More</a>
            </div>
            <div class="right">
                <img src="pict\gambar seminar\gambar 1.png" alt="People" class="person-image">
            </div>
        </div>
    
        <div class="container">
            <div class="header">
                <h1>All Abilities, One Vision</h1>
                <p>Building a future where inclusion is the norm, and diversity is celebrated</p>
            </div>
    
            <div class="content-section">
                <div class="image-container">
                    <img src="pict\gambar seminar\gambar 2.png" alt="Inspiration, Network, Rewards, Skills">
                </div>
                <div class="text-content">
                    <h2>Get yourself Inspired</h2>
                    <p>Seminar ini mengangkat pentingnya inklusi dan pemberdayaan bagi penyandang disabilitas. Melalui sesi inspiratif, peserta akan diajak untuk memahami tantangan, potensi, dan kontribusi luar biasa dari individu dengan berbagai kemampuan. Dengan fokus pada kolaborasi, keterampilan, dan motivasi, acara ini bertujuan untuk menciptakan lingkungan yang lebih inklusif, mendukung, dan merata bagi semua.</p>
                </div>
            </div>
    
            <!-- Fixed spacing for title and map -->
            <h1>Temukan Lokasi Seminar</h1>
            <div id="map"></div>
            <div class="button-container">
                <button onclick="getDirections()">Get Directions</button>
            </div>
        </div>
    
        <!-- Other sections -->
        <div class="events-section">
            <h2>Explore Our Other <span>EVENTS</span></h2>
            
            <div class="card-container">
                <a href="https://web.perpuskita.id/membangun-masa-depan-yang-lebih-inklusif-dan-adil-melalui-pemberdayaan-perempuan/" target="_blank" style="text-decoration: none">
                    <div class="card">
                        <img src="pict/gambar seminar/gambar 4.png" alt="Event 1">
                        <div class="card-content">
                            <h3>Membangun Masa Depan Inklusif</h3>
                            <p>Bagi Anak Berkebutuhan Khusus</p>
                        </div>
                    </div>
                </a>
                <a href="https://www.kompasiana.com/feridianto8677/63ef76824addee1899116734/pentingnya-pendidikan-inklusi-memberikan-kesempatan-pada-semua-anak-untuk-belajar" style="text-decoration: none" target="_blank">
                    <div class="card">
                        <img src="pict/gambar seminar/gambar 3.png" alt="Event 2">
                        <div class="card-content">
                            <h3>Pendidikan Inklusif</h3>
                            <p>Memperluas Kesempatan untuk Semua</p>
                        </div>
                    </div>
                </a>
                <a href="https://portal.tabalongkab.go.id/2018/12/peran-penting-guru-pendamping-dalam-pendidikan-inklusi" style="text-decoration: none" target="_blank">
                    <div class="card">
                        <img src="pict/gambar seminar/gambar 5.png" alt="Event 3">
                        <div class="card-content">
                            <h3>Peran Pendamping dalam Inklusi</h3>
                            <p>Disabilitas</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="explore-btn">
                <a href="#" class="btn">Explore All Events</a>
            </div>
        </div>
    
        <!-- Info Magang Section -->
        <div class="internship-section">
            <h2>Info <span>MAGANG</span> ?</h2>
            <div class="card-container">
                <!-- Card 1 -->
                <a href="{{ route('internships') }} " style="text-decoration: none" >
                    <div class="card">
                        <div class="card-header">
                            <img src="pict/gambar seminar/gambar 6.png" alt="Logo SMB">
                            <div>
                                <h3>MANAGEMENT TRAINEE</h3>
                                <p>PT Surabaya Mekabox</p>
                            </div>
                        </div>
                        <div class="card-content">
                            <p>Jawa Timur</p>
                            <p>Pengembangan Bisnis Baru (Sales)</p>
                        </div>
                    </div>
                </a>
                <!-- Card 2 -->
                <a href="{{ route('internships') }} " style="text-decoration: none">
                    <div class="card">
                        <div class="card-header">
                            <img src="pict/gambar seminar/gamba 7.png" alt="Logo XYZ">
                            <div>
                                <h3>MARKETING INTERN</h3>
                                <p>PT XYZ</p>
                            </div>
                        </div>
                        <div class="card-content">
                            <p>Jakarta</p>
                            <p>Marketing Strategy & Branding</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    
        <!-- Join Us Section -->
        <div class="join-us-section">
            <h3>Join Us for an Inclusive Future!</h3>
            <p>Be part of a movement where your passion for inclusion and diversity can make a real impact in the lives of many.</p>
            <a href="#" class="btn">Join Us Now</a>
        </div>
    
        <script>
            function getDirections() {
                window.location.href = "https://maps.google.com?q=Gedung+GKM+LT+3.1";
            }
    
            function updateCountdown() {
                const eventDate = new Date("December 23, 2024 00:00:00");
                const now = new Date();
                const timeLeft = eventDate - now;
    
                if (timeLeft > 0) {
                    const days = Math.floor(timeLeft / (1000 * 60 * 60 * 24));
                    const hours = Math.floor((timeLeft % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                    const minutes = Math.floor((timeLeft % (1000 * 60 * 60)) / (1000 * 60));
    
                    document.getElementById("days").innerText = days;
                    document.getElementById("hours").innerText = hours;
                    document.getElementById("minutes").innerText = minutes;
                } else {
                    document.getElementById("days").innerText = 0;
                    document.getElementById("hours").innerText = 0;
                    document.getElementById("minutes").innerText = 0;
                }
            }
    
            setInterval(updateCountdown, 60000);
            updateCountdown();
        </script>
        
        <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
        <script>
            const map = L.map('map').setView([-7.5, 112.5], 13);
    
            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
            }).addTo(map);
    
            L.marker([-7.5, 112.5]).addTo(map)
                .bindPopup('<b>Temukan Lokasi Seminar</b><br>Gedung GKM LT 3.1')
                .openPopup();
        </script>
        
    </body>
    
</html>