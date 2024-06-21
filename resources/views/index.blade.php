<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- favicon -->
    <link rel="mask-icon" href="{{asset("assets/ico/default.ico")}}">
    <link rel="alternate icon" class="js-site-favicon" href="{{asset("assets/ico/default.ico")}}">
    <link rel="icon" class="js-site-favicon" href="{{asset("assets/ico/default.ico")}}">
    <!-- favicon -->

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Bootstrap CSS -->

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <!-- Bootstrap Icons -->

    <!-- CSS ME -->
    <link rel="stylesheet" href="{{asset("assets/dist/css/style.css")}}">
    <!-- CSS ME -->

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Font Awesome -->

    <!-- CSS AOS -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <!-- CSS AOS -->

    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Spartan:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <!-- Font -->

    <title>Web Portofolio | Naufal Aziz</title>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark shadow fixed-top">
        <div class="container">

            <a class="navbar-brand">
                <i class="fab fa-github"></i>
                Naufal Aziz
                <i class="fab fa-gitlab"></i>
            </a>


            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#projects">Projects</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Navbar -->

    <!-- jumbotron -->
    <section id="home" class="jumbotron text-center pt-5" data-aos="fade-down">
        <div class="pt-5 mb-4 bg-light rounded-3">
            <img src="{{asset("assets/img/picture/PP.jpg")}}"
                class="border border-dark rounded-circle img-thumbnail mx-auto d-block" alt="Eko Muchamad Haryono"
                width="200" />
            <h1 class="display-5 fw-bold mt-3 mb-3">Naufal Aziz</h1>
            <center>
                <hr style="width:50%; text-align: center;">
            </center>
            <p class="lead fw-bold">"Keep Moving Forward and Keep Developing".</p>
            <p class="lead">Saya murid SMK Wikrama bogor angkatang 28 tahun 2023/2024.<br>
            </p>
            <p class="lead fw-bold">Programmer</p>
            <center>
                <hr style="width:50%; text-align: center;">
            </center>
            <div class="lead fw-bold">Hubungi Saya Melalui Link Aplikasi Media Sosial</div>
            <div class=" mt-3s">
                <ul class="nav col-md-12 justify-content-center">
                    <li class="ms-2"><a class="text-black-50" href="https://wa.me/6285892186362/"
                            target="_blank"><i class="bi bi-whatsapp"></i></a></li>
                    <li class="ms-2"><a class="text-black-50" href="https://www.instagram.com/naufal__aziz/"
                            target="_blank"><i class="bi bi-instagram"></i></a></li>
                </ul>
            </div>
            


            <!-- Hiasan -->
            <!-- <div>
                <div class="text-center pt-5">
                    <div class="spinner-grow text-primary" role="status">
                        <span class="visually-hidden">Loading...</span>
                    </div>
                    <div class="spinner-grow text-secondary" role="status">
                        <span class="visually-hidden">Loading...</span>
                    </div>
                    <div class="spinner-grow text-success" role="status">
                        <span class="visually-hidden">Loading...</span>
                    </div>
                    <div class="spinner-grow text-danger" role="status">
                        <span class="visually-hidden">Loading...</span>
                    </div>
                    <div class="spinner-grow text-warning" role="status">
                        <span class="visually-hidden">Loading...</span>
                    </div>
                    <div class="spinner-grow text-info" role="status">
                        <span class="visually-hidden">Loading...</span>
                    </div>
                    <div class="spinner-grow text-light" role="status">
                        <span class="visually-hidden">Loading...</span>
                    </div>
                    <div class="spinner-grow text-dark" role="status">
                        <span class="visually-hidden">Loading...</span>
                    </div>
                </div>
            </div> -->
            <!-- Hiasan -->

            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                <path fill="#ffff" fill-opacity="1"
                    d="M0,64L24,96C48,128,96,192,144,224C192,256,240,256,288,224C336,192,384,128,432,101.3C480,75,528,85,576,112C624,139,672,181,720,192C768,203,816,181,864,160C912,139,960,117,1008,133.3C1056,149,1104,203,1152,229.3C1200,256,1248,256,1296,224C1344,192,1392,128,1416,96L1440,64L1440,320L1416,320C1392,320,1344,320,1296,320C1248,320,1200,320,1152,320C1104,320,1056,320,1008,320C960,320,912,320,864,320C816,320,768,320,720,320C672,320,624,320,576,320C528,320,480,320,432,320C384,320,336,320,288,320C240,320,192,320,144,320C96,320,48,320,24,320L0,320Z">
                </path>
            </svg>
        </div>

    </section>
    <!-- jumbotron -->

    <!-- About -->
    <section id="about">
        <div class="container" data-aos="fade-down">
            <div class="row text-center mb-3">
                <div class="col">
                    <div class="h2">
                        Tentang saya
                    </div>
                    <center>
                        <hr style="width:50%; text-align: center;">
                    </center>
                </div>
            </div>
            <div class="row justify-content-center fs-5 text-center">
                <div class="col-md-4 mb-4">Saya lulusan SMP Amaliah dan Masuk SMK Wikrama, saya memilih jurusan PPLG.
                    Saya belajar tentang pengembangan web menggunakan HTML, CSS, JS, PHP, MYSQL,
                    Laravel,untuk penyimpanan nya saya terbiasa menggunakan Github.</div>
                <div class="col-md-4 mb-4">Untuk pengalaman di bidang keahlian lain, saya memiliki keahlian seperti
                    memahami cara kerja microsoft excel, dan kegiatan ekstrakulikuler saya mengikuti futsal dan pernah mejuarai tingkat Kabupaten Bogor Timur.
                </div>
            </div>
        </div>
        <!-- Hiasan -->
        <!-- <div>
            <div class="text-center pt-5">
                <div class="spinner-grow text-primary" role="status">
                    <span class="visually-hidden">Loading...</span>
                </div>
                <div class="spinner-grow text-secondary" role="status">
                    <span class="visually-hidden">Loading...</span>
                </div>
                <div class="spinner-grow text-success" role="status">
                    <span class="visually-hidden">Loading...</span>
                </div>
                <div class="spinner-grow text-danger" role="status">
                    <span class="visually-hidden">Loading...</span>
                </div>
                <div class="spinner-grow text-warning" role="status">
                    <span class="visually-hidden">Loading...</span>
                </div>
                <div class="spinner-grow text-info" role="status">
                    <span class="visually-hidden">Loading...</span>
                </div>
                <div class="spinner-grow text-light" role="status">
                    <span class="visually-hidden">Loading...</span>
                </div>
                <div class="spinner-grow text-dark" role="status">
                    <span class="visually-hidden">Loading...</span>
                </div>
            </div>
        </div> -->
        <!-- Hiasan -->
    </section>
    <!-- About -->

    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="##212529" fill-opacity="1"
            d="M0,64L24,96C48,128,96,192,144,224C192,256,240,256,288,224C336,192,384,128,432,101.3C480,75,528,85,576,112C624,139,672,181,720,192C768,203,816,181,864,160C912,139,960,117,1008,133.3C1056,149,1104,203,1152,229.3C1200,256,1248,256,1296,224C1344,192,1392,128,1416,96L1440,64L1440,320L1416,320C1392,320,1344,320,1296,320C1248,320,1200,320,1152,320C1104,320,1056,320,1008,320C960,320,912,320,864,320C816,320,768,320,720,320C672,320,624,320,576,320C528,320,480,320,432,320C384,320,336,320,288,320C240,320,192,320,144,320C96,320,48,320,24,320L0,320Z">
        </path>
    </svg>

    <!-- Projects -->
    <section id="projects">
        <div class="container">
            <div class="row text-center mb-3">
                <div class="col">
                    <div class="h2 text-white">
                        Project Saya
                    </div>
                    <center>
                        <hr class="text-white" style="width:50%; text-align: center;">
                    </center>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-4 mb-3">
                    <div class="card" style="height: 1000px;" data-aos="flip-right">
                        <img src="{{asset("assets/img/projects/project-kakulator.png")}}" class="card-img-top" alt="Project_4">
                        <div class="card-body">
                            <div class="h4">Web kalkulator IMT</div>
                            <center>
                                <hr style="width:50%; text-align: center;">
                            </center>
                            <div class="h6 text-center  ">Waktu Dibuat : 2023</div>
                            <center>
                                <hr style="width:50%; text-align: center;">
                            </center>
                            <p class="card-text">Tugas Sekolah Membuat Web Kalkulator IMT Sederhana</p>
                            <center>
                                <hr style="width:50%; text-align: center;">
                            </center>
                            
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card" style="height: 1000px;" data-aos="flip-right">
                        <img src="{{asset("assets/img/projects/project-data siswa.png")}}" class="card-img-top" alt="Project_1">
                        <div class="card-body">
                            <div class="h4">Web Input Data Siswa 
                            </div>
                            <center>
                                <hr style="width:50%; text-align: center;">
                            </center>
                            <div class="h6 text-center">Waktu Dibuat : 2024</div>
                            <center>
                                <hr style="width:50%; text-align: center;">
                            </center>
                            <p class="card-text"> 
                                Web data siswa adalah platform digital yang digunakan untuk mengelola dan menyimpan informasi terkait siswa, termasuk data akademik, demografis, dan administrasi.</p>
                            <center>
                                <hr style="width:50%; text-align: center;">
                            
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card" style="height: 1000px;" data-aos="flip-left">
                        <img src="{{asset("assets/img/projects/project-mu.png")}}" class="card-img-top"
                            alt="Project_2">
                        <div class="card-body">
                            <div class="h4">Web King MU (Setan Merah)</div>
                            <center>
                                <hr style="width:50%; text-align: center;">
                            </center>
                            <div class="h6 text-center">Waktu Dibuat : 2023</div>
                            <center>
                                <hr style="width:50%; text-align: center;">
                            </center>
                            <p class="card-text">Manchester United Football Club adalah sebuah klub sepak bola profesional yang berbasis di Old Trafford, Manchester Raya, yang bermain di Liga Utama Inggris dengan gelar Liga Utama Inggris terbanyak sepanjang masa. Didirikan sebagai Newton Heath LYR Football Club pada tahun 1878, klub ini berganti nama menjadi Manchester United pada 1902 dan pindah ke Old Trafford pada tahun 1910.</p>
                            <center>
                                <hr style="width:50%; text-align: center;">
                            </center>
                            
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card" style="height: 1000px;" data-aos="flip-right">
                        <img src="{{asset("assets/img/projects/project-php-rental motor.png")}}" class="card-img-top" alt="Project_3">
                        <div class="card-body">
                            <div class="h4">Web PHP sederhana Rental Motor</div>
                            <center>
                                <hr style="width:50%; text-align: center;">
                            </center>
                            <div class="h6 text-center">Waktu Dibuat : 2024</div>
                            <center>
                                <hr style="width:50%; text-align: center;">
                            </center>
                            <p class="card-text">Web PHP menginput data tentang menginput nama kita, berapa hari kita menyewa, dan ketika di submit keluar harga motor yang kita sewa.</p>
                            <center>
                                <hr style="width:50%; text-align: center;">
                            </center>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card" style="height: 1000px;" data-aos="flip-left">
                        <img src="{{asset("assets/img/projects/project-tiket.png")}}" class="card-img-top"
                            alt="Project_5">
                        <div class="card-body">
                            <div class="h4">Web sederhana Tiket Konser</div>
                            <center>
                                <hr style="width:50%; text-align: center;">
                            </center>
                            <div class="h6 text-center">Waktu Dibuat : 2024</div>
                            <center>
                                <hr style="width:50%; text-align: center;">
                            </center>
                            <p class="card-text">Web PHP menginput data tentang menginput nama kita, tiket apa yang kita pilih, dan ketika di submit keluar harga tiket yang kita pesan.</p>
                            <center>
                            <center>
                                <hr style="width:50%; text-align: center;">
                            </center>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card" style="height: 1000px;" data-aos="flip-left">
                        <img src="{{asset("assets/img/projects/project-webshop 1.png")}}" class="card-img-top" alt="Project_5">
                        <div class="card-body">
                            <div class="h4">Webshop sederhana tentang jual beli laptop.</div>
                            <center>
                                <hr style="width:50%; text-align: center;">
                            </center>
                            <div class="h6 text-center">Waktu Dibuat : 2024</div>
                            <center>
                                <hr style="width:50%; text-align: center;">
                            </center>
                            <p class="card-text">Webshop tentang jual beli laptop dan komputer, kita mengisi dan kita pilih apa kebutuhan kita lalu submit dan keluar struk berapa yang harus kita bayar. </p>
                            <center>
                                <hr style="width:50%; text-align: center;">
                            </center>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- Hiasan -->
        <!-- <div>
            <div class="text-center pt-5">
                <div class="spinner-grow text-primary" role="status">
                    <span class="visually-hidden">Loading...</span>
                </div>
                <div class="spinner-grow text-secondary" role="status">
                    <span class="visually-hidden">Loading...</span>
                </div>
                <div class="spinner-grow text-success" role="status">
                    <span class="visually-hidden">Loading...</span>
                </div>
                <div class="spinner-grow text-danger" role="status">
                    <span class="visually-hidden">Loading...</span>
                </div>
                <div class="spinner-grow text-warning" role="status">
                    <span class="visually-hidden">Loading...</span>
                </div>
                <div class="spinner-grow text-info" role="status">
                    <span class="visually-hidden">Loading...</span>
                </div>
                <div class="spinner-grow text-light" role="status">
                    <span class="visually-hidden">Loading...</span>
                </div>
                <div class="spinner-grow text-dark" role="status">
                    <span class="visually-hidden">Loading...</span>
                </div>
            </div>
        </div> -->
        <!-- Hiasan -->
    </section>

    <!-- Projects -->

    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="##212529" fill-opacity="1"
            d="M0,64L24,96C48,128,96,192,144,224C192,256,240,256,288,224C336,192,384,128,432,101.3C480,75,528,85,576,112C624,139,672,181,720,192C768,203,816,181,864,160C912,139,960,117,1008,133.3C1056,149,1104,203,1152,229.3C1200,256,1248,256,1296,224C1344,192,1392,128,1416,96L1440,64L1440,0L1416,0C1392,0,1344,0,1296,0C1248,0,1200,0,1152,0C1104,0,1056,0,1008,0C960,0,912,0,864,0C816,0,768,0,720,0C672,0,624,0,576,0C528,0,480,0,432,0C384,0,336,0,288,0C240,0,192,0,144,0C96,0,48,0,24,0L0,0Z">
        </path>
    </svg>

    <!-- Contact -->
    <section id="contact" data-aos="fade-down">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="h2 text-center">
                        Hubungi saya
                    </div>
                    <center>
                        <hr style="width:50%; text-align: center;">
                    </center>
                </div>
            </div>
            <div class="row justify-content-center pt-4">
                <div class="col-md-8">
                    <div class="alert alert-success alert-dismissible fade show text-center alert-contact-me d-none"
                        role="alert">
                        <strong><i class="bi bi-emoji-smile"></i> Pesan Telah Terkirim</strong>, Terima Kasih atas
                        ulasan dan pesan nya saya akan menjadi lebih baik lagi dan maaf atas kekurangan nya <i
                            class="bi bi-emoji-smile"></i>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>

                    <form name="portofolio-contact-form">
                        <div class="mb-3">
                            <label for="nama_depan" class="form-label" placeholder="Masukan Nama Depan">Nama
                                Depan</label>
                            <input type="text" class="form-control" id="nama_depan" name="nama_depan">
                        </div>
                        <div class="mb-3">
                            <label for="nama_belakang" class="form-label" placeholder="Masukan Nama Belakang">Nama
                                Belakang</label>
                            <input type="text" class="form-control" id="nama_belakang" name="nama_belakang">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label" placeholder="Masukan Email">Email
                                address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp" name="email">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Pesan</label>
                            <div class="form-floating">
                                <textarea class="form-control" placeholder="Masukan Pesan Dan Kesan" id="pesan"
                                    style="height: 100px" name="pesan"></textarea>
                                <label for="pesan">Masukan Pesan</label>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="no_hp" class="form-label" placeholder="Masukan Nomor Handphone">Nomor
                                Handphone</label>
                            <input type="number" class="form-control" id="no_hp" name="no_hp">
                        </div>
                        <button type="submit" class="btn btn-outline-dark btn-kirim">Kirim Pesan</button>
                        <button class="btn btn-outline-dark btn-proses d-none" type="button" disabled>
                            <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                            Proses Pesan
                        </button>
                    </form>
                    <!-- Hiasan -->
                    <!-- <div>
                        <div class="text-center pt-5">
                            <div class="spinner-grow text-primary" role="status">
                                <span class="visually-hidden">Loading...</span>
                            </div>
                            <div class="spinner-grow text-secondary" role="status">
                                <span class="visually-hidden">Loading...</span>
                            </div>
                            <div class="spinner-grow text-success" role="status">
                                <span class="visually-hidden">Loading...</span>
                            </div>
                            <div class="spinner-grow text-danger" role="status">
                                <span class="visually-hidden">Loading...</span>
                            </div>
                            <div class="spinner-grow text-warning" role="status">
                                <span class="visually-hidden">Loading...</span>
                            </div>
                            <div class="spinner-grow text-info" role="status">
                                <span class="visually-hidden">Loading...</span>
                            </div>
                            <div class="spinner-grow text-light" role="status">
                                <span class="visually-hidden">Loading...</span>
                            </div>
                            <div class="spinner-grow text-dark" role="status">
                                <span class="visually-hidden">Loading...</span>
                            </div>
                        </div>
                    </div> -->
                    <!-- Hiasan -->
                </div>
            </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="##212529" fill-opacity="1"
                d="M0,64L24,96C48,128,96,192,144,224C192,256,240,256,288,224C336,192,384,128,432,101.3C480,75,528,85,576,112C624,139,672,181,720,192C768,203,816,181,864,160C912,139,960,117,1008,133.3C1056,149,1104,203,1152,229.3C1200,256,1248,256,1296,224C1344,192,1392,128,1416,96L1440,64L1440,320L1416,320C1392,320,1344,320,1296,320C1248,320,1200,320,1152,320C1104,320,1056,320,1008,320C960,320,912,320,864,320C816,320,768,320,720,320C672,320,624,320,576,320C528,320,480,320,432,320C384,320,336,320,288,320C240,320,192,320,144,320C96,320,48,320,24,320L0,320Z">
            </path>
        </svg>
    </section>
    <!-- Contact -->

    <!-- Footer -->
    <div id="footer" class="container-fluid pt-5 pb-5">
        <footer class="py-3 my-4">
            <ul class="nav justify-content-center border-bottom pb-3 mb-3">
                <li class="nav-item"><a href="#home" class="nav-link px-2 text-white">Home</a></li>
                <li class="nav-item"><a href="#about" class="nav-link px-2 text-white">About</a></li>
                <li class="nav-item"><a href="#projects" class="nav-link px-2 text-white">Projects</a></li>
                <li class="nav-item"><a href="#contact" class="nav-link px-2 text-white">Contact</a></li>
            </ul>
            <a href="https://www.instagram.com/naufal__aziz/" class="mb-3 me-2 mb-md-0 text-white text-decoration-none lh-1"
                target="_blank">
                <i class="bi bi-whatsapp"></i>
                <span class="text-white">&copy; 2024 Naufal Aziz</span><br>
            </a>
            <div class="border-top mt-3 mb-3"></div>
            <ul class="nav col-md-4 justify-content-start ">
                <li class="ms-3"><a class="text-white" href="https://wa.me/6285892186362/" target="_blank">
                        <i class="bi bi-whatsapp"></i></a>
                </li>
                <li class="ms-3"><a class="text-white" href="https://www.instagram.com/naufal__aziz/" target="_blank">
                        <i class="bi bi-instagram"></i>
            </ul>
            
            </ul>
            <div class="h6 text-center text-white pt-5">Part of :</div>
            <div class="text-center text-white">
                <a href="https://www.instagram.com/smkwikrama/#" class="mb-3 me-2 mb-md-0
                    text-white text-decoration-none lh-1" target="_blank">SMK Wikrama Bogor
                </a>
                
            </div>
        </footer>
    </div>
    <!-- Footer -->


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <!-- AOS JS -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 800,
            once: true
        });
    </script>

    <!-- AOS JS -->

    <script>
        const scriptURL =
            'https://script.google.com/macros/s/AKfycbzN6d5GMOapVwrHDF8cWqQZWuyLoj1pd0-emppu869JmPqz5b3XhJtEuHpwt5BimJ0h/exec'
        const form = document.forms['portofolio-contact-form']
        const btn_kirim = document.querySelector('.btn-kirim')
        const btn_proses = document.querySelector('.btn-proses')
        const alert_contact = document.querySelector('.alert-contact-me')

        form.addEventListener('submit', e => {
            e.preventDefault()
            btn_proses.classList.toggle('d-none')
            btn_kirim.classList.toggle('d-none')
            fetch(scriptURL, {
                    method: 'POST',
                    body: new FormData(form)
                })
                .then(response => {
                    btn_proses.classList.toggle('d-none')
                    btn_kirim.classList.toggle('d-none')
                    alert_contact.classList.toggle('d-none')
                    form.reset();
                    window.location.href = "#contact";
                    console.log('Success!', response)
                })
                .catch(error => console.error('Error!', error.message))
        })
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>