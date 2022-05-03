<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Riset 3</title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Poppins:300,400,500,700" rel="stylesheet">
    <link rel="icon" href="<?= base_url("/assets/dist/img/LogoPKL.png") ?>" type="image/x-icon">

    <!-- Vendor CSS Files -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" />

    <!-- Template Main CSS File -->
    <link href="<?= base_url("/css/landing_page/riset3.css") ?>" rel="stylesheet">

    <style>
        * {
            font-family: poppins;
        }

        .navbar {
            font-size: 1.2rem;
            background-color: #0A5446;
            ;
        }

        .navbar .dropdown-menu {
            background-color: #0A5446;
        }

        .navbar .dropdown-menu .dropdown-item {
            transition: 0.2s;
        }

        .navbar .dropdown-menu .dropdown-item:hover {
            background-color: transparent;
            font-weight: bold;
        }

        .navbar .navbar-nav.d-lg-none .nav-item {
            margin: 0 !important;
            text-align: center;
        }

        .custom-toggler.navbar-toggler {
            border-color: white;
            border-width: 0.2rem;
            border-radius: 0.5rem;
            padding: 1px 5px;
        }

        /* Setting the stroke to green using rgb values (0, 128, 0) */

        .custom-toggler .navbar-toggler-icon {
            background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 32 32' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba(255, 255, 255, 1)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 8h24M4 16h24M4 24h24'/%3E%3C/svg%3E");
        }

        #mobile .nav-link:after {
            content: '';
            display: block;
            margin: auto;
            height: 1px;
            width: 0px;
            background: transparent;
            transition: width .5s ease, background-color .5s ease;
        }

        #mobile .nav-link:hover:after {
            width: 100%;
            background: white;
        }

        /* HEADER-SECTION */

        #header-section {
            background-color: #0A5446;
        }

        #header-section img {
            width: 50%;
        }

        #header-section .vector {
            background-image: url(/img/landing_page/riset1/vector_gelombang.png);
            background-size: 100% 100%;
            background-repeat: no-repeat;
            background-attachment: local;
            min-height: 10vh;
        }

        #header-section .garis {
            width: 7rem;
            /* margin: 0 92.3%; */
            border-bottom: 0.8rem solid #A4D29F;
        }

        @media (min-width:768px) and (max-width: 1025px) {
            #header-section .garis {
                width: 6rem;
                /* margin: 0 92.3%; */
                border-bottom: 0.7rem solid #A4D29F;
            }
        }

        @media (max-width: 768px) {
            #header-section {
                background-color: #f7f5f9;
            }

            #header-section .vector {
                background-image: url('/img/landing_page/riset1/Ornamen Header Mobile_1.png');
                background-size: cover;
                background-repeat: no-repeat;
                background-attachment: local;
                background-position: top;
            }

            #header-section .garis {
                width: 5rem;
                /* margin: 0 92.3%; */
                border-bottom: 0.6rem solid #A4D29F;
            }
        }
    </style>

</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark sticky-top">
        <div class="container-fluid mx-sm-5">
            <div class="navbar-brand text-white" href="#">
                <a class="text-decoration-none text-white" href="<?= base_url('/') ?>"><img src="/assets/dist/img/LogoPKL.png" alt="Logo PKL" height="45">
                    <span class="text-decoration-none text-white ms-2 fw-bold">PKL 61</span>
                </a>
            </div>
            <button class="navbar-toggler d-lg-none custom-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                <!-- <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success text-white" type="submit">Search</button>
                </form> -->
                <ul class="navbar-nav mb-2 mb-lg-0 me-4 d-lg-flex d-none">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Riset
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item text-white" href="<?= base_url('/riset/1') ?>">Riset 1</a></li>
                            <li><a class="dropdown-item text-white" href="<?= base_url('/riset/2') ?>">Riset 2</a></li>
                            <li><a class="dropdown-item text-white" href="<?= base_url('/riset/3') ?>">Riset 3</a></li>
                            <li><a class="dropdown-item text-white" href="<?= base_url('/riset/4') ?>">Riset 4</a></li>
                            <li><a class="dropdown-item text-white" href="<?= base_url('/riset/5') ?>">Riset 5</a></li>
                            <li><a class="dropdown-item text-white" href="<?= base_url('/umum') ?>">Umum</a></li>
                        </ul>
                    </li>
                </ul>

                <!-- Responsive Mobile -->
                <ul id="mobile" class="navbar-nav d-lg-none">
                    <li class="nav-item">
                        <a class="nav-link text-white" href="<?= base_url('/riset/1') ?>">Riset 1</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="<?= base_url('/riset/2') ?>">Riset 2</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="<?= base_url('/riset/3') ?>">Riset 3</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="<?= base_url('/riset/4') ?>">Riset 4</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="<?= base_url('/riset/5') ?>">Riset 5</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="<?= base_url('/umum') ?>">Umum</a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>

    <!-- End Navbar -->

    <section id="header-section">

        <div class="container-fluid h-auto vector">

            <!-- Desktop Version -->
            <div class="row p-md-5 p-3 d-md-flex d-none">
                <div class="col p-lg-5 p-md-4 p-3 d-flex flex-column justify-content-center align-items-center text-center" data-aos="fade-left" data-aos-duration="1000">
                    <h1 class="text-center text-white" style="font-size: 3vw;">Kajian Pertanian Urban</h1>
                    <div class="garis mt-3 mb-5"></div>
                    <a href="<?= base_url('/riset3/dashboard'); ?>" class="btn btn-success btn-lg rounded-pill border border-3" style="font-size:1.5vw;">
                        Dashboard <i class="fas fa-arrow-circle-right arrow"></i>
                    </a>
                </div>
                <div class="col d-inline-flex" data-aos="fade-up" data-aos-duration="1000">
                    <img src="/img/landing_page/riset3/maskot.png" alt="Maskot">
                    <div class="pt-2 ps-3">
                        <a href="#" class="text-decoration-none">
                            <h3 class="text-white text-center" style="font-size: 2.4vw">Riset 3</h3>
                        </a>
                        <div class="garis"></div>
                    </div>
                </div>
            </div>

            <!-- Mobile Version -->
            <div class="d-md-none p-5">
                <div class="d-inline-flex flex-column block" data-aos="fade-left" data-aos-duration="1000">
                    <a href="#" class="text-decoration-none">
                        <h3 class="text-white">Riset 3</h3>
                    </a>
                    <div class="garis"></div>
                </div>
                <div class="d-flex justify-content-center" data-aos="fade-right" data-aos-duration="1000">
                    <img src="/img/landing_page/riset3/maskot.png" alt="Maskot" style="width: 13rem;">
                </div>
                <div class="d-block mt-5 text-center" data-aos="zoom-out" data-aos-duration="1000">
                    <h3 class="subbab fs-2">Kajian Pertanian Urban</h3>
                    <a href="<?= base_url('/riset/3/dashboard'); ?>" class="btn btn-success btn-md rounded-pill border border-2" style="font-size:1rem;">
                        Dashboard <i class="fas fa-arrow-circle-right arrow"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>