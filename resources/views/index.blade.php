<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Company Profile ILP</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <title>Pendaftaran ILP</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    
        <!-- SweetAlert2 -->
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    
        <!-- jQuery & Bootstrap JS -->
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    
        <script>
            function validasi() {
                var nama = document.getElementById("nama").value.trim();
                var hp = document.getElementById("hp").value.trim();
    
                if (nama.length == 0) {
                    Swal.fire({
                        title: "Kesalahan Input",
                        text: "Nama tidak boleh kosong!",
                        icon: "error"
                    });
                    return false;
                }
    
                if (hp.length == 0) {
                    Swal.fire({
                        title:"Kesalahan Input",
                        text: "Nomor HP tidak boleh kosong!",
                        icon: "error"
                    });
                    return false;
                }
    
                if (isNaN(hp)) {
                    Swal.fire({
                        title:"Kesalahan Input",
                        text: "Nomor HP harus berupa angka!",
                        icon: "error"
                    });
                    return false;
                }
    
                return true;
            }
        </script>
    </head>

    <body id="page-top">
        <section class="page-section bg-primary text-white mb-0" id="about">
            <div class="container">
                <!-- konten1 Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-white">History</h2>
                <!-- Icon Divider-->
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- About Section Content-->
                <div class="row">
                    <div class="col-lg-6 ms-auto"><p class="lead">ILP berdiri pada tahun 1977 di Jl. Ciomas, Kebayoran Baru, Jakarta Selatan. Outlet pertama ini didukung oleh staf pengajar native speaker yang profesional untuk mendukung terbentuknya staf pengajar Indonesia yang berkualitas.</p></div>
                    <div class="col-lg-6 me-auto"><p class="lead">Pada tahun 1979, ILP mendirikan Divisi Teacher Training sekaligus membuka outlet kedua di Jl. Juanda, Jakarta Pusat, dengan staf pengajar Indonesia.</p></div>
                </div>
            </div>
        </section>

           <!-- konten2 Section-->
           <section class="page-section portfolio" id="portfolio">
            <div class="container">
                <!-- Portfolio Grid Items-->
                <div class="row justify-content-center">
                    <!-- Portfolio Item 1-->
                    <div class="col-md-5 col-lg-8 mb-5">
                        <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal1">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="foto/11.png" alt="..." />
                        </div>
                    </div>
                    <!-- Portfolio Item 2-->
                    <div class="row">
                        <div class="col-lg-5 ms-auto"><p class="lead">ILP juga melakukan berbagai kegiatan pendidikan yang lain, seperti pendidikan Bahasa Indonesia untuk orang asing, pendidikan Bahasa Mandarin, serta mengembangkan Divisi Corporate Training dan ILP Eduport untuk konsultasi studi di luar negeri.</p></div>
                        <div class="col-lg-5 me-auto"><p class="lead">Pada tahun 1998, ILP mengembangkan sistem waralaba sebagai strategi pengembangan usaha. Outlet waralaba pertama adalah ILP Depok, dan sampai saat ini ILP memiliki total 46 outlet di Jakarta, Jawa, Bali, dan Sumatera.</p></div>
                    </div>
                    </div>
                </div>
            </div>
        </section>

           <!-- konten 3 Section-->
           <section class="page-section bg-primary text-white mb-0" id="about">
            <div class="container">
                <!-- About Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-white">Visi</h2>
                <!-- Icon Divider-->
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- About Section Content-->
                <div class="row">
                    <div class="row justify-content-center"><p class="lead text-center">Visi umum ILP untuk masa depan adalah untuk terus menawarkan program bahasa yang berkualitas tinggi dengan mendirikan center-center ILP dan menawarkan peluang waralaba ILP di setiap kota besar di Indonesia dan negara-negara lain di dunia.</p></div>
                </div>
            </div>
        </section>

                <!-- Konten 4 Section-->
                <section class="page-section portfolio" id="portfolio">
                    <div class="container">
                        <!-- Portfolio Section Heading-->
                        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Misi</h2>
                        <!-- Icon Divider-->
                        <div class="divider-custom">
                            <div class="divider-custom-line"></div>
                            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                            <div class="divider-custom-line"></div>
                        </div>
                        <div class="row">
                            <div class="row justify-content-center"><p class="lead text-center">Reputasi kami telah berkembang pesat selama bertahun-tahun didasarkan pada visi bisnis yang kuat.</p></div>
                        </div>
                        <!-- Portfolio Grid Items-->
                        <div class="row justify-content-center">
                            <!-- Portfolio Item 1-->
                            <div class="col-md-3 col-lg-5 mb-5">
                                <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal1">
                                    <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                        <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                                    </div>
                                    <img class="img-fluid" src="foto/12.png" alt="..." />
                                </div>
                                <div class="row justify-content-center">
                                    <div class="col-lg-8 ms-2 text-center"><p class="lead">Untuk Warga Indonesia:</div>
                                    <div class="col-lg-11 ms-2 text-center"><p class="lead">Memberikan kualitas pendidikan yang lebih tinggi dalam bahasa untuk mendukung pengembangan masyarakat Indonesia.</div>
                                </div>
                            </div>
                            <!-- Portfolio Item 2-->
                            <div class="col-md-3 col-lg-5 mb-5">
                                <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal2">
                                    <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                        <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                                    </div>
                                    <img class="img-fluid" src="foto/13.png" alt="..." />
                                </div>
                                <div class="row justify-content-center">
                                    <div class="col-lg-8 ms-2 text-center"><p class="lead">Untuk Sistem Pendidikan:</div>
                                    <div class="col-lg-11 ms-2 text-center"><p class="lead">Memberikan kontribusi dan berbagi pengetahuan serta pengalaman dalam pendidikan bahasa Inggris.</div>
                                </div>
                            </div>
                        <!-- Portfolio Item 3-->
                        <div class="col-md-3 col-lg-5 mb-5">
                            <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal1">
                                <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                    <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="foto/16.png" alt="..." />
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-lg-8 ms-2 text-center"><p class="lead">Untuk Karyawan ILP:</div>
                                <div class="col-lg-11 ms-2 text-center"><p class="lead">Memberikan kesempatan pada staf dan karyawan untuk mengembangkan diri dan berkarir bersama ILP.</div>
                            </div>
                        </div>
                        <!-- Portfolio Item 4-->
                        <div class="col-md-3 col-lg-5 mb-5">
                            <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal2">
                                <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                    <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="foto/15.png" alt="..." />
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-lg-8 ms-2 text-center"><p class="lead">Untuk ILP Yayasan Pendidikan:</div>
                                <div class="col-lg-11 ms-2 text-center"><p class="lead">Mengembangkan materi bahasa terbaik dengan belajar melalui penelitian dan pengembangan.</div>
                            </div>
                        </div>
                        </div>
                    </div>
                </section>
            
               <!-- konten 5 Contact Section-->
               <section class="page-section bg-primary text-white mb-0" id="contact">
                <div class="container">
                    <!-- Contact Section Heading-->
                    <h2 class="page-section-heading text-center text-uppercase text-white mb-0">Daftar Sekarang!</h2>
                    <!-- Icon Divider-->
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                    <!-- Contact Section Form-->
                    <div class="container mt-5">
                        <form action="https://www.google.com/chrome/" method="get" onsubmit="return validasi();">
                    
                            <div class="form-group">
                                <label for="nama">Nama:</label>
                                <input type="text" name="nama" id="nama" class="form-control" placeholder="Aurel Salsabila">
                            </div>
                    
                            <div class="form-group">
                                <label for="hp">Nomor HP:</label>
                                <input type="text" name="hp" id="hp" class="form-control" placeholder="081234567890">
                            </div>
                    
                            <input type="submit" class="btn btn-success" value="Daftar">
                        </form>
                    </div>
                </div>
            </section>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
