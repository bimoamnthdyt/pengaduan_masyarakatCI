<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Home - pengaduan masyarakat </title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />

    <link href="<?php echo base_url('assets/css/style.css') ?>" rel="stylesheet" />


    <style>
        .containerform {
            width: 30%;
            margin: 0 auto;
            box-shadow: 0 3px 20px rgba(0, 0, 0);
            padding: 40px;
        }


        button {
            margin: 0 auto;
        }
    </style>



</head>

<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="#page-top">LAPOR DONG!</a>
            <button class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#about">Tentang</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#lapor">Lapor</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="<?php echo site_url('auth') ?>">Keluar</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Masthead-->
    <header class="masthead bg-secondary text-white text-center">

        <div class="container d-flex align-items-center flex-column">
            <!-- Masthead Avatar Image-->
            <img class="masthead-avatar mb-5" alt="" />

            <!-- Masthead Heading-->
            <h1 class="masthead-heading text-uppercase mb-0">Layanan Aspirasi dan Pengaduan Online Rakyat</h1>
            <!-- Icon Divider-->
            <div class="divider-custom divider-light">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line"></div>
            </div>
            <!-- Masthead Subheading-->
            <p class="masthead-subheading font-weight-light mb-0">Sampaikan laporan Anda langsung kepada instansi
                pemerintah berwenang</p>
        </div>
    </header>

    <section class="page-section bg-info text-white mb-0" id="about">
        <div class="container">
            <!-- About Section Heading-->
            <h2 class="page-section-heading text-center text-uppercase text-white">Tentang Kami</h2>
            <!-- Icon Divider-->
            <div class="divider-custom divider-light">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-line"></div>
            </div>
            <!-- About Section Content-->
            <div class="row">
                <div class="col-lg-4 ml-auto">
                    <p class="lead">Freelancer is a free bootstrap theme created by Start Bootstrap. The download
                        includes the complete source files including HTML, CSS, and JavaScript as well as optional SASS
                        stylesheets for easy customization.</p>
                </div>
                <div class="col-lg-4 mr-auto">
                    <p class="lead">You can create your own custom avatar for the masthead, change the icon in the
                        dividers, and add your email address to the contact form to make it fully functional!</p>
                </div>
            </div>
            <!-- About Section Button-->

        </div>
    </section>

    <!-- Contact Section-->
    <section class="page-section" id="lapor">
        <div class="containerform">
            <form method="post" action="<?php echo site_url('user/insert_data') ?>" enctype="multipart/form-data">
                <div class="form-group">
                    <h6>Taggal Kejadian</h6>
                    <div class="textdate">
                        <input type="date" name="tanggal" style="width: 371px;" />
                    </div>
                </div>
                <hr>
                <div class="form-group">
                    <h6>Email anda</h6>
                    <div class="textemail">
                        <input type="text" name="email" style="width: 371px;" />
                    </div>
                </div>

                <hr>
                <h6>Isi Laporan Anda</h6>
                <div class="form-group">
                    <div class="textarea">
                        <textarea name="laporan" id="" cols="44" rows="10"></textarea>
                    </div>
                </div>
                <hr>
                <h6>Foto Kejadian</h6>
                <div class="form-group">
                    <div class="fotolaporan">
                        <input type="file" name="foto" style="width: 371px;" />
                    </div>
                </div>
                <hr>
                <button type="submit" class="btn btn-primary center-block" data-toggle="modal" data-target="#addModal">LAPOR</button>
            </form>
        </div>
    </section>


    <!-- Footer-->
    <footer class="footer text-center">
        <div class="container">
            <div class="row">
                <!-- Footer Location-->
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <h4 class="text-uppercase mb-4">Lokasi</h4>
                    <p class="lead mb-0">
                        SMK Taruna Bhakti depok
                        <br />
                        Jalan Raya pekapuran RT 02 RW 07
                    </p>
                </div>
                <!-- Footer Social Icons-->
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <h4 class="text-uppercase mb-4">ikuti kita di</h4>
                    <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-twitter"></i></a>
                    <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-instagram"></i></a>
                </div>
                <!-- Footer About Text-->
                <div class="col-lg-4">
                    <h4 class="text-uppercase mb-4">About Freelancer</h4>
                    <p class="lead mb-0">
                        Freelance is a free to use, MIT licensed Bootstrap theme created by
                        <a href="http://startbootstrap.com">Start Bootstrap</a>
                        .
                    </p>
                </div>
            </div>
        </div>
    </footer>
    <!-- Copyright Section-->
    <div class="copyright py-4 text-center text-white">
        <div class="container"><small>Copyright © LAPOR DONG ! <?= date('Y') ?></small></div>
    </div>
    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes)-->
    <div class="scroll-to-top d-lg-none position-fixed">
        <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top"><i class="fa fa-chevron-up"></i></a>
    </div>
    <!-- Bootstrap core JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
    <!-- Third party plugin JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <!-- Contact form JS-->
    <script src="assets/mail/jqBootstrapValidation.js"></script>
    <script src="assets/mail/contact_me.js"></script>
    <!-- Core theme JS-->
    <script src="<?php echo base_url() . 'asset/js/script.js'; ?>"></script>

    <!-- Modal -->
    <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Data Anda Berhasil Disimpan
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary">Okay</button>
                </div>
            </div>
        </div>
    </div>
</body>

</html>