<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <!-- My fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Viga&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" href="<?php echo $this->config->item('base_url'); ?>/logo.png">
    <link href="<?php echo base_url() ?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <!-- light-slider.css -->
    <link rel="stylesheet" type="text/css" href="assets/css/lightslider.css">
    <!-- Jquery -->
    <script type="text/javascript" src="assets/js/Jquery.js"></script>
    <!-- lightslider.js -->
    <script type="text/javascript" src="assets/js/lightslider.js"></script>
    <!-- My CSS -->

    <style>
        .jumbotron {
            background-image: url(assets/pict/jumbotron2.jpg);
        }

        /* NAVBAR */
        .navbar {
            position: relative;
            z-index: 10;
        }

        .navbar-brand {
            font-family: Viga;
            font-size: 32px;
        }




        /* JUMBOTRON */
        .jumbotron {

            background-size: cover;
            height: 700px;
            text-align: center;
            position: relative
        }

        .jumbotron .container {
            position: relative;
            z-index: 1;
        }

        .jumbotron::after {
            content: ' ';
            display: block;
            width: 100%;
            height: 100%;
            background-image: linear-gradient(to top, rgba(0, 0, 0, 1), rgba(0, 0, 0, 0));
            position: absolute;
            bottom: 0;
        }

        .bottom .container {
            position: relative;
            z-index: 1;
        }

        .jumbotron .display-4 {
            color: white;
            padding-top: 300px;
            font-weight: 200;
            font-size: 40px;
            text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.6);
            margin-bottom: 40px;
        }

        .jumbotron .display-4 span {
            font-weight: 500;
        }

        /* Info panel */
        .info-panel {
            box-shadow: 0 3px 20px rgba(0, 0, 0, 0.5);
            border-radius: 12px;
            margin-top: -80px;
            position: relative;
            background-color: white;
            padding: 30px;
        }

        .info-panel img {
            width: 80px;
            height: 80px;
            margin-right: 20px;
            margin-bottom: 20px;
        }

        .info-panel h4 {
            font-size: 16px;
            text-transform: uppercase;
            font-weight: bold;
            padding-top: 15px;
        }

        .info-panel p {
            font-size: 14px;
            color: #ACACAC;
            margin-top: -5px;
            font-weight: 200;
        }

        /* Workingspace */
        .workingspace {

            margin-top: 120px;
            text-align: center;
        }

        .workingspace h4 {
            font-size: 53px;
            font-weight: 200;
            text-transform: uppercase;
            margin-top: 30px;
        }

        .workingspace h4 span {
            font-weight: 500;
        }

        .workingspace p {
            font-size: 18px;
            color: #ACACAC;
            font-weight: 200;
            margin-top: 25px;
            margin-bottom: 25px;
        }


        /* footer */
        .footer {
            height: auto;
            width: 100%;
            font-family: "Open Sans";
            padding-top: 40px;
            box-sizing: border-box;
        }

        .main-content {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }

        .main-content h2 {
            font-size: 1.8rem;
            font-weight: 400;
            text-transform: capitalize;
            line-height: 3rem;
        }

        .content {
            max-width: 500px;
            margin: 10 auto;
            line-height: 28px;
            font-size: 14px;
        }

        .footer p {
            color: black;
            font-size: 18p
        }


        /* Utility */
        .tombol {
            text-transform: uppercase;
            border-radius: 40px;
        }

        /* Box Slider */
        .box {
            background-color: white;
            margin-top: 50vh;
            width: 400px;
            box-shadow: 2px 2px 30px rgba(0, 0, 0, 0.2);
            border-radius: 10px;
            overflow: hidden;
            position: relative;
            left: 50%;
            top: 50;
            transform: translate(-50%, -50%);
        }

        .slide-img {
            height: 550px;

        }

        .slide-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            box-sizing: border-box;
        }

        .detail-box {
            max-width: fit-content;
            width: 100%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
            box-sizing: border-box;
            font-family: calibri;
        }

        .type {

            display: flex;
            flex-direction: column;
        }

        .type span {
            color: #222222;
            margin: 5px 0px;
            font-weight: 700;
            letter-spacing: 0.5px;
            padding-right: 8px;
        }

        /* DESKTOP VERSION   */
        @media (min-width: 992px) {

            .navbar-brand {
                color: rgb(243, 108, 108) !important;
                text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.7);
            }

            .nav-link {
                color: rgb(243, 108, 108) !important;
                text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.7);
            }

            .nav-link {
                text-transform: uppercase;
                margin-right: 30px;
                position: relative;
            }

            .nav-link:hover::after {
                content: ' ';
                display: block;
                border-bottom: 3px solid rgb(240, 77, 77);
                width: 50%;
                margin: auto;
                padding-bottom: 5px;
                margin-bottom: -8px;
                position: relative;
                z-index: 2;
            }

            .jumbotron {
                margin-top: -75px;
                height: 880px;

            }

            .jumbotron .display-4 {
                font-size: 64px;
            }

            .workingspace {
                text-align: left;
            }

            .title {
                z-index: 1;
                margin-left: 55vh;
            }



        }
    </style>


    <title>Tahura Boots Company</title>
</head>

<body style="background-color: #F7D59C;" onload="submit">
    <!-- Navbar -->
    <nav class=" navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" style="color:#864741;" href="<?= base_url('dashboard') ?>">Tahura Boots Company</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto">
                    <a class="nav-link active" aria-current="page" href="<?= base_url('dashboard') ?>">Home</a>
                    <a class="nav-link" href="<?= base_url('dashboard/produk') ?>">Product</a>
                </div>
            </div>
        </div>
    </nav>
    </nav>



    <!-- Akhir Navbar -->