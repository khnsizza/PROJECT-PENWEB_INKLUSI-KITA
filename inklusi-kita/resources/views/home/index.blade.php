<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Inklusi Kita</title>
    <link rel="icon" href="pict\logo.png" type="image/x-icon" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Spartan:wght@400;500;600;700;800&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Spectral:wght@500&display=swap" />
    <link rel="stylesheet" href="{{ asset('css/index.css') }}" />
</head>

<body>
    <div class="main-container">
        <div class="box">
            <div class="pic"></div>
            <div class="box-2">
                <a href={{ route('home') }} style="text-decoration: none">
                    <span class="text" >Home</span>
                </a>
                <a href={{ route('home') }} style="text-decoration: none">
                    <span class="text-2" onclick="window.location='/'">Informasi</span>
                </a>
                <a href={{ route('home') }} style="text-decoration: none">
                    <span class="text-3" onclick="window.location='/'">About Us</span>
                </a>
            </div>
            <a href={{ route('home') }} style="text-decoration: none">
                <span class="text-4">INKLUSI KITA</span>
            </a>
        </div>
        <div class="section">
            <div class="pic-2"></div>
            <div class="section-2">
                <span class="text-5">Bersama </span><span class="text-6">Pendamping</span><span class="text-7">,
                    Ciptakan </span><span class="text-8">Akses Tanpa Batas </span>
            </div>
            <div class="pic-3"></div>
            <div class="pic-4"></div>
            <div class="section-3">
                <span class="text-9">Inklusi kita, hadir sebagai</span><span class="text-a"> jembatan</span><span
                    class="text-b"> bagi kaum disabilitas untuk lebih </span><span class="text-c">mengenal
                    dunia</span><span class="text-d"> bersama </span><span
                    class="text-e">pendamping-pendamping</span><span class="text-f"> hebat dan </span><span
                    class="text-10">berpengalaman</span>
            </div>
        </div>
        <div class="section-4">
            <div class="box-3">
                <div class="group">
                    <span class="text-11">Informasi </span><span class="text-12">Beasiswa</span><span class="text-13">
                        untuk Disabilitas</span>
                </div>
                <span class="text-14">>30</span>
            </div>
            <div class="section-5">
                <div class="group-2">
                    <span class="text-15">Informasi </span><span class="text-16">Magang</span><span class="text-17">
                        Ramah Disabilitas</span>
                </div>
                <span class="text-18">>50</span>
            </div>
            <div class="box-4">
                <div class="wrapper">
                    <span class="text-19">Seminar</span><span class="text-1a"> bagi Calon Pendamping Disabilitas</span>
                </div>
                <span class="text-1b">>40</span>
            </div>
        </div>
        <div class="group-3">
            <span class="text-1c">INFORMASI </span><span class="text-1d">BEASISWA</span>
        </div>
        <div class="wrapper-2">
            <div class="group-4">
                <div class="pic-5">
                    <img src="pict\paragonhd (2).png" alt="paragon">
                </div>
                <span class="text-1e">Paragon Scholarship</span><span class="text-1f">
                    We support college students by breaking down barriers, opening doors, and offering access to college scholarships.
                </span>
                <a href="{{ route('scholarships') }}">
                    <div class="box-5">
                        <div class="img"></div>
                        <span class="text-20">29 Juli 2024, 23.59</span>
                    </div>    
                </a>
                
            </div>
            <div class="box-6">
                <div class="img-2">
                    <img src="pict\CIMB.jpg" alt="CIMB">
                </div>
                <span class="text-21">Beasiswa CIMB NIAGA</span><span class="text-22">
                    Program Beasiswa CIMB Niaga hadir untuk mendukung mimpi generasi penerus bangsa dalam meraih pendidikan yang layak
                </span>
                <a href="{{ route('scholarships') }}">
                    <div class="wrapper-3">
                        <div class="pic-6"></div>
                        <span class="text-23">5 September 2024, 23.59</span>
                    </div>
                </a>
            </div>
            <div class="section-6">
                <div class="pic-7">
                    <img src="pict\bpi.JPG" alt="BPI">
                </div>
                <span class="text-24">Beasiswa Pendidikan Indonesia </span><span class="text-25">
                    BPI Kemendikbudristek tahun 2024 akan dibuka bertepatan dengan Hari Pendidikan Nasional, 2 Mei.
                </span>
                <a href="{{ route('scholarships') }}">
                    <div class="wrapper-4">
                        <div class="pic-8"></div>
                        <span class="text-26">2 Mei 2024, 23.59</span>
                    </div> 
                </a>
            </div>
            <div class="img-3"></div>
            <div class="pic-9"></div>
        </div>
        <div class="section-7">
            <span class="text-27">Magang<br /></span><span class="text-28">Ramah Disabilitas</span>
        </div>
        <div class="section-8">
            <div class="pic-a">
                <img src="pict\gambar seminar\tengah (Custom).png" alt="tengah">
            </div>
            <div class="box-7">
                <div class="pic-b">
                    <img src="pict\images_internship\MSB (Custom).jpg" alt="MSB">
                </div>
                <div class="box-8">
                    <span class="text-29">Management<br />Trainee</span><span class="text-2a">PT. Surabaya
                        Megabox</span>
                    <a href="{{ route('internships') }}">
                        <div class="wrapper-5"></div>
                        <span class="text-2b">Read More</span>
                    </a>
                </div>
            </div>
            <div class="group-5">
                <div class="img-4">
                    <img src="pict\images_internship\MSB (Custom).jpg" alt="MSB">
                </div>
                <div class="box-9">
                    <span class="text-2c">Management<br />Trainee</span><span class="text-2d">PT. Surabaya
                        Megabox</span>
                    <a href="{{ route('internships') }}">
                        <div class="box-a"></div>
                        <span class="text-2e">Read More</span>
                    </a>
                </div>
            </div>
            <div class="box-b">
                <div class="pic-c">
                    <img src="pict\images_internship\MSB (Custom).jpg" alt="MSB">
                </div>
                <div class="wrapper-6">
                    <span class="text-2f">Management<br />Trainee</span><span class="text-30">PT. Surabaya
                        Megabox</span>
                    <a href="{{ route('internships') }}">
                        <div class="group-6"></div>
                        <span class="text-31">Read More</span>
                    </a>
                </div>
            </div>
            <div class="box-c">
                <div class="pic-d">
                    <img src="pict\images_internship\MSB (Custom).jpg" alt="MSB">
                </div>
                <div class="group-7">
                    <span class="text-32">Management<br />Trainee</span><span class="text-33">PT. Surabaya
                        Megabox</span>
                    <a href="{{ route('internships') }}">
                        <div class="section-9"></div>
                        <span class="text-34">Read More</span>
                    </a>
                </div>
            </div>
            <div class="section-a">
                <div class="img-5">
                    <img src="pict\images_internship\MSB (Custom).jpg" alt="MSB">
                </div>
                <div class="box-d">
                    <span class="text-35">Management<br />Trainee</span><span class="text-36">PT. Surabaya
                        Megabox</span>
                    <a href="{{ route('internships') }}">
                        <div class="box-e"></div>
                        <span class="text-37">Read More</span>
                    </a>  
                </div>
            </div>
            <div class="group-8">
                <div class="pic-e">
                    <img src="pict\images_internship\MSB (Custom).jpg" alt="MSB">
                </div>
                <div class="wrapper-7">
                    <span class="text-38">Management<br />Trainee</span><span class="text-39">PT. Surabaya
                        Megabox</span>
                    <a href="{{ route('internships') }}">
                        <div class="group-9"></div>
                        <span class="text-3a">Read More</span>
                    </a>
                </div>
            </div>
        </div>
        
        <div class="box-f">
            <a href="{{ route('home') }}">
                <span class="text-3b" onclick="window.location='/'">About <br />Us</span>
            </a> 
        </div>
        <div class="img-6"></div>
        <div class="section-b">
            <a href="{{ route('seminars') }}">
                <div class="group-a">
                    <div class="pic-f">
                        <img src="pict\gambar seminar\tanpa batas (Custom).jpg" alt="inspirasi tanpa batas">
                    </div>
                    <div class="section-c">
                        <div class="box-10">
                            <span class="text-3c">31 <br /></span><span class="text-3d">Des</span>
                        </div>
                        <span class="text-3e">Insipirasi<br />Tanpa Batas</span>
                    </div>
                </div>
            </a>
            <a href="{{ route('seminars') }}">
                <div class="box-11">
                    <div class="pic-10">
                        <img src="pict\gambar seminar\inklusif (Custom).jpg" alt="inklusif">
                    </div>
                    <div class="box-12">
                        <div class="group-b">
                            <span class="text-3f">31</span><span class="text-40"> <br /></span><span
                                class="text-41">Des</span>
                        </div>
                        <span class="text-42">Pendidikan <br />Inklusif</span>
                    </div>
                </div>
            </a>
            
            <span class="text-43">SEMINAR<br /></span><span class="text-44">Untuk <br />Calon
                Pendamping<br />Disabilitas</span>
            <a href="{{ route('seminars') }}">
                <div class="section-d">
                    <div class="pic-11">
                        <img src="pict\gambar seminar\inspirasi (Custom).jpg" alt="Inspirasi">
                    </div>
                    <div class="box-13">
                        <div class="box-14">
                            <span class="text-45">31</span><span class="text-46"> <br /></span><span
                                class="text-47">Des</span>
                        </div>
                        <span class="text-48">Temu<br />Inspirasi</span>
                    </div>
                </div>
            </a>
            
            <a href="{{ route('seminars') }}">
                <div class="group-c">
                    <div class="pic-12">
                        <img src="pict\gambar seminar\semua (Custom).jpg" alt="harapan untuk semua">
                    </div>
                    <div class="group-d">
                        <div class="wrapper-8">
                            <span class="text-49">31</span><span class="text-4a"> <br /></span><span
                                class="text-4b">Des</span>
                        </div>
                        <span class="text-4c">Harapan untuk<br />Semua</span>
                    </div>
                </div>
            </a>
            
        </div>
        <a href="{{ route ('seminars') }}">
            <div class="group-e">
                <div class="img-7">
                    <img src="pict\gambar seminar\suarakan (Custom).jpg" alt="suarakan harapan">
                </div>
                <div class="box-15">
                    <div class="box-16">
                        <span class="text-4d">20<br /></span><span class="text-4e">Nov</span>
                    </div>
                    <span class="text-4f">Suarakan Harapan </span>
                </div>
            </div>
        </a>
        
    </div>
</body>

</html>