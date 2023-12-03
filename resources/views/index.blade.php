<!doctype html>
<html lang="en" id="theme" data-bs-theme="light">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://unpkg.com/feather-icons"></script>
    <link rel="stylesheet" href="{{ asset('/css/styles.css') }}">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

</head>

<body>
    <nav class="navbar navbar-expand-lg border-bottom border-body">
        <div class="container">
            <a class="navbar-brand" href="#">Mochammad Robby Sugara</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01"
                aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse me-auto" id="navbarColor01">
                <div class="navbar-nav ms-auto">
                    <div class="nav-item">
                        <a class="nav-link" href="https://github.com/MRSugara" target="_blank"><i
                                data-feather="github"></i></a>
                    </div>
                    <div class="nav-item">
                        <a class="nav-link" href="https://www.linkedin.com/in/mochammad-robbyy-sugara-344a06258/"
                            target="_blank"><i data-feather="linkedin"></i></a>
                    </div>
                    <div class="nav-item">
                        <a class="nav-link" href="mailto:srobby109@gmail.com" target="_blank"><i
                                data-feather="mail"></i></a>
                    </div>
                </div>
            </div>

        </div>
    </nav>
    <div class="container-fluid p-0 bg-image">
        <div class="text-center header mb-5" data-aos="fade-up" data-aos-duration="2000" id="#">
            <div class="fs-1 title text-white">Fullstack Web Developer</div>
            <blockquote class="fs-5 blockquote mt-2 text-white">
                Barang siapa belum merasakan pahitnya belajar walau sebentar, <br>
                maka akan merasakan hinanya kebodohan sepanjang hidupnya.
            </blockquote>
            <figcaption class="blockquote-footer mt-1">
                Imam Syafi'i
            </figcaption>
        </div>
        <div class="row justify-content-center mt-5" data-aos="fade-up" data-aos-duration="2000">
            <div class="card m-5 p-3 justify-content-center" style="width: 20rem;height:16rem;opacity:0.8;">
                <img src="{{ asset('image/laravel.png') }}" class="card-img-top mx-auto"
                    style="size: cover;max-height:180px;max-width:180px" alt="...">
                <div class="card-body">
                    <h5 class="card-title text-center">Laravel</h5>
                    <p class="card-text"></p>
                </div>
            </div>
            <div class="card m-5 p-4 justify-content-center" style="width: 20rem;height:16rem;opacity:0.8;">
                <img src="{{ asset('image/html.png') }}" class="card-img-top mx-auto"
                    style="size: cover;max-width:500px" alt="...">
                <div class="card-body">
                    <h5 class="card-title text-center">Front-End</h5>
                    <p class="card-text"></p>
                </div>
            </div>
            <div class="card m-5 p-3 justify-content-center" style="width: 20rem;height:16rem;opacity:0.8;">
                <img src="{{ asset('image/postman.png') }}" class="card-img-top mx-auto"
                    style="size: cover;max-height:180px;max-width:180px" alt="...">
                <div class="card-body">
                    <h5 class="card-title text-center">API</h5>
                    <p class="card-text"></p>
                </div>
            </div>
        </div>

    </div>
    <div class="container about" style="height: 500vh">
        <div class="section-title text-center mt-5 fs-1" data-aos="fade-up" data-aos-duration="2000">Tentang Saya</div>
        <div class="text-center fs-6" data-aos="fade-up" data-aos-duration="2000"> Saya adalah seorang muslim yang
            sangat menyukai tantangan dan tak pernah merasa
            puas dengan status quo. Setiap masalah merupakan peluang bagi saya untuk tumbuh dan belajar. Saya merasa
            hidup penuh makna ketika dihadapkan pada kompelsitas yang memerlukan solusi inovatif. Dunia teknologi terus
            berkembang, dan saya senang menjadi bagian perubahan itu.</div>
        <div class="row mt-3" data-aos="fade-up" data-aos-duration="2000">
            <div class="col-lg-6 ">
                <div class="fs-2 text-center">Pendidikan</div>
                <div class="card-group mt-1">
                    <div class="card ">
                        <div class="card-header fs-6">Sekolah</div>
                        <div class="card-body">
                            <div class="card-text">SMA Negeri 3 Lumajang</div>
                            <div class="card-text">Jurusan MIPA</div>
                        </div>
                    </div>
                    <div class="card ">
                        <div class="card-header fs-6">Organisasi</div>
                        <div class="card-body">
                            <div class="card-text">Dewan Ambalan Pramuka</div>
                        </div>
                    </div>
                </div>
                <div class="card-group mt-2">
                    <div class="card">
                        <div class="card-header fs-6">Institut</div>
                        <div class="card-body">
                            <div class="card-text">Institut Teknologi Sains dan Kesehatan dr.Soepraoen Malang</div>
                            <div class="card-text">Prodi S1 Informatika</div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header fs-6">Organisasi</div>
                        <div class="card-body">
                            <div class="card-text">Himpunan Mahasiswa</div>
                        </div>
                    </div>
                </div>


            </div>
            <div class="col-lg-6 ">
                <div class="fs-2 text-center">Sertifikat</div>
                <ul class="list-group list-group-flush mt-1">
                    <li class="list-group-item d-flex justify-content-between align-item-center pointer"
                        data-bs-toggle="modal" data-bs-target="#ICCM">
                        Sertifikat Pelatihan "Computing and Information Technology" ICCCM
                        <i data-feather="chevron-right"></i>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-item-center pointer"
                        data-bs-toggle="modal" data-bs-target="#course">
                        Sertifikat Pelatihan "Fundamental of Cyber Security" Course-Net
                        <i data-feather="chevron-right"></i>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-item-center pointer"
                        data-bs-toggle="modal" data-bs-target="#bnsp">
                        Sertifikasi "Junior Web-Developer" BNSP(Badan Nasional Sertifikasi Profesi)
                        <i data-feather="chevron-right"></i>
                    </li>

                </ul>
                <div class="modal fade" id="ICCM" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Sertifikat</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="container-fluid d-flex justify-content-center">
                                    <img src="{{ asset('image/ICCCM.jpg') }}" style="size:cover;max-width:750px;"
                                        alt="">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary"
                                    data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="course" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Sertifikat</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="container-fluid d-flex justify-content-center">
                                    <img src="{{ asset('image/course.jpg') }}" style="size:cover;max-width:750px;"
                                        alt="">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary"
                                    data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="bnsp" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Sertifikat</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="container-fluid d-flex justify-content-center">
                                    <img src="{{ asset('image/bnsp1.jpg') }}" style="size:cover;max-width:750px;"
                                        alt="">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary"
                                    data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="mt-5">
            <div class="fs-1 text-center" data-aos="fade-up" data-aos-duration="2000">Proyek</div>
            <div class="fs-6 text-center" data-aos="fade-up" data-aos-duration="2000">Proyek ini adalah sebuah
                perjalanan menuju kesempurnaan, sebuah evolusi yang terus-menerus. Meskipun saya telah mencapai
                pencapaian signifikan, saya dengan tulus mengakui bahwa masih ada kekurangan yang perlu saya
                perbaiki.Saya percaya bahwa keberhasilan sejati berasal dari kemampuan untuk mengakui kekurangan dan
                memperbaikinya. Oleh karena itu, proyek ini tidak hanya merupakan suatu produk, tetapi juga sebuah
                komitmen untuk melampaui batas dan memberikan yang terbaik.</div>
            <div class="row mt-3">
                <div class="col">
                    <div class="card pointer" data-aos="zoom-in-up" data-aos-duration="2000" data-bs-toggle="modal"
                        data-bs-target="#product">
                        <img src="{{ asset('image/learn.png') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title fs-4">Data Product</h5>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card pointer" data-aos="zoom-in-up" data-aos-duration="2000" data-bs-toggle="modal"
                        data-bs-target="#ICCM">
                        <img src="{{ asset('image/pemesanan.png') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title fs-4">Pemesanan Kendaraan Pegawai</h5>
                        </div>
                    </div>
                </div>

                <div class="modal fade" id="product" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Sertifikat</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="container-fluid d-flex justify-content-center carousel slide"id="carouselExampleInterval"
                                    data-bs-ride="carousel">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active" data-bs-interval="2000">
                                            <img src="{{ asset('image/learn.png') }}" class="d-block w-100" alt="...">
                                        </div>
                                        <div class="carousel-item" data-bs-interval="2000">
                                            <img src="{{ asset('image/learn1.png') }}" class="d-block w-100" alt="...">
                                        </div>
                                        <div class="carousel-item" data-bs-interval="2000">
                                            <img src="{{ asset('image/learn2.png') }}" class="d-block w-100" alt="...">
                                        </div>
                                    </div>
                                    <button class="carousel-control-prev" type="button"
                                        data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button"
                                        data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>
                                </div>
                                <div class="fs-4 m-3">Data Product</div>
                                <div class="fs-6">Proyek data produk kami tidak hanya mengelola informasi yang melibatkan produk-produk kami, tetapi juga memanfaatkan fungsi chart untuk memberikan visualisasi yang kuat dan mudah dimengerti. Grafik dan diagram yang disajikan secara interaktif memungkinkan tim kami untuk dengan cepat melacak performa produk, mengidentifikasi tren pasar, dan menyajikan temuan secara visual kepada pemangku kepentingan. Dengan integrasi fungsi chart yang canggih, proyek ini membuka pintu bagi analisis mendalam terhadap data produk, mempermudah pengambilan keputusan strategis, dan menghadirkan perspektif yang lebih jelas dalam upaya meningkatkan kualitas dan daya saing produk kami di pasaran.</div>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary"
                                    data-bs-dismiss="modal">Close</button>
                                    <a href="https://mrsugara.my.id" target="_blank" class="btn btn-primary">Visit site</i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>







    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <script>
        feather.replace();
    </script>
</body>
<script src="{{ asset('/js/theme.js') }}"></script>

</html>
