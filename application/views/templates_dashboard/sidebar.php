<!-- Jumbotron -->
<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <h1 class="display-4">A Comfortable <span>Shoes</span><br> Makes A <span>Journey</span> In Every Step</h1>
        <a href="#" class="btn btn-success tombol">How To Order</a>
        <a href="<?= base_url('order') ?>" class="btn btn-primary tombol">Order Here</a>
        <?php
        echo $this->session->flashdata('message');
        $this->session->unset_userdata('message');
        $this->session->sess_destroy();
        ?>
    </div>
</div>

<!-- Akhir Jumbotron -->
<!-- Container -->
<div class="container">

    <!-- info panel -->
    <div class="row justify-content-center">
        <div class="col-10 info-panel">
            <div class="row">

                <div class="col-lg">
                    <img src="assets/pict/quality.png" alt="high-quality" class="float-start">
                    <h4>High-Quality</h4>

                </div>

                <div class="col-lg">
                    <img src="assets/pict/worldwide-shipping.png" alt="worldwide" class="float-start">
                    <h4>Worldwide-Shipping</h4>

                </div>

                <div class="col-lg">
                    <img src="assets/pict/boots.png" alt="boot" class="float-start">
                    <h4>Handmade</h4>

                </div>


            </div>

        </div>
    </div>

    <!-- akhir info panel -->
    <!-- Working space -->
    <div class="row workingspace">
        <div class="col-lg-6"><img src="assets/pict/workingspace.jpg" alt="workingspace" class="img-fluid"></div>
        <div class="col-lg-5">
            <h4>Your <span>Shoes</span> You <span>Choose</span></h4>
            <br><br>
            <a href="<?= base_url('dashboard/produk') ?>" class="btn btn-danger tombol">Gallery Product</a>
            <a href="https://www.instagram.com/tahurabootsco/" class="btn btn-primary tombol mx-2">Our Instagram</a>
        </div>
    </div>
    <!-- Akhir Working Space -->

    <!-- Display Product -->
    <br><br><br>
    <h1 class="title fa fa-star"> BEST SELLER</h1>
    <ul id="autoWidth" class="cs-hidden">
        <li class="item-a">
            <!-- box slider -->
            <div class="box">
                <!-- img box -->
                <div class="slide-img">
                    <img src="<?= base_url('assets/pict/display1.jpg') ?>" alt="1">
                    <!-- overlayer -->
                    <div class="overlayer">
                        <!--  -->
                    </div>
                </div>
                <!-- detail box -->
                <div class="detail-box">
                    <!-- type -->
                    <div class="type">
                        <span>KAKTOES</span>
                    </div>
                </div>
            </div>
        </li>

        <li class="item-b">
            <!-- box slider -->
            <div class="box">
                <!-- img box -->
                <div class="slide-img">
                    <img src="<?= base_url('assets/pict/display2.jpg') ?>" alt="2">
                    <!-- overlayer -->
                    <div class="overlayer">
                        <!--  -->
                    </div>
                </div>
                <!-- detail box -->
                <div class="detail-box">
                    <!-- type -->
                    <div class="type">
                        <span>BENJAMINA 2.0</span>
                    </div>
                </div>
            </div>
        </li>

        <li class="item-c">
            <!-- box slider -->
            <div class="box">
                <!-- img box -->
                <div class="slide-img">
                    <img src="<?= base_url('assets/pict/display3.jpg') ?>" alt="3">
                    <!-- overlayer -->
                    <div class="overlayer">
                        <!--  -->
                    </div>
                </div>
                <!-- detail box -->
                <div class="detail-box">
                    <!-- type -->
                    <div class="type">
                        <span>CARPATUS BROGUE</span>
                    </div>
                </div>
            </div>
        </li>

        <li class="item-d">
            <!-- box slider -->
            <div class="box">
                <!-- img box -->
                <div class="slide-img">
                    <img src="<?= base_url('assets/pict/display4.jpg') ?>" alt="4">
                    <!-- overlayer -->
                    <div class="overlayer">
                        <!--  -->
                    </div>
                </div>
                <!-- detail box -->
                <div class="detail-box">
                    <!-- type -->
                    <div class="type">
                        <span>KAKTOES 6 inch Series</span>
                    </div>
                </div>
            </div>
        </li>

        <li class="item-e">
            <!-- box slider -->
            <div class="box">
                <!-- img box -->
                <div class="slide-img">
                    <img src="<?= base_url('assets/pict/display5.jpg') ?>" alt="5">
                    <!-- overlayer -->
                    <div class="overlayer">
                        <!--  -->
                    </div>
                </div>
                <!-- detail box -->
                <div class="detail-box">
                    <!-- type -->
                    <div class="type">
                        <span>CALAMUS</span>
                    </div>
                </div>
            </div>
        </li>

        <li class="item-e">
            <!-- box slider -->
            <div class="box">
                <!-- img box -->
                <div class="slide-img">
                    <img src="<?= base_url('assets/pict/display6.jpg') ?>" alt="6">
                    <!-- overlayer -->
                    <div class="overlayer">
                        <!--  -->
                    </div>
                </div>
                <!-- detail box -->
                <div class="detail-box">
                    <!-- type -->
                    <div class="type">
                        <span>DIALIUM</span>
                    </div>
                </div>
            </div>
        </li>

        <li class="item-e">
            <!-- box slider -->
            <div class="box">
                <!-- img box -->
                <div class="slide-img">
                    <img src="<?= base_url('assets/pict/display7.jpg') ?>" alt="7">
                    <!-- overlayer -->
                    <div class="overlayer">
                        <!--  -->
                    </div>
                </div>
                <!-- detail box -->
                <div class="detail-box">
                    <!-- type -->
                    <div class="type">
                        <span>CALAMUS With CARPATUS</span>
                    </div>
                </div>
            </div>
        </li>
    </ul>

    <!-- Display Product -->