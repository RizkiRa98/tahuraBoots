<style>
    .workingspace {
        margin-top: 120px;
        text-align: center;
    }

    .workingspace h4 {
        font-size: 54px;
        font-weight: 200;
        margin-top: 30px;
    }

    .workingspace h4 span {
        font-weight: 500;
    }

    .workingspace p {
        font-size: 24px;
        color: black;
        font-weight: 4000;
        margin-top: 25px;
        margin-bottom: 25px;
        text-transform: uppercase;
    }

    .tombol {
        max-width: 50%;
        margin: auto;
    }

    .language {
        font-family: Viga;
        font-size: 36px;
        margin-top: 20px;
    }

    h2 {

        text-transform: uppercase;
        font-weight: 700;
    }

    .language .navlang {
        text-decoration: none;
        margin-right: 20px;
        margin-left: 20px;
    }

    .navlang {
        position: relative;
        display: inline-block;
        color: rgb(243, 108, 108);
        overflow: hidden;
        background: linear-gradient(to right, midnightblue, midnightblue 50%, rgb(243, 108, 108) 50%);
        background-clip: text;
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-size: 200% 100%;
        background-position: 100%;
        transition: background-position 275ms ease;
    }

    .navlang:hover {
        background-position: 0 100%;
    }

    @media (max-width: 576px) {
        .step {
            text-align: center;

        }

        .tombol {
            align-content: center;

            text-align: center;

        }

        .navlang {
            text-transform: uppercase;
            margin-right: 30px;
        }
    }
</style>

<div class="text-center">
    <h2>Select Language</h2>
    <div class="language">
        <a class="navlang" href="<?= base_url('dashboard/howto_foot_en') ?>">English</a>
        <a class="navlang" href="<?= base_url('dashboard/howto_foot_id') ?>">Indonesia</a>
    </div>
    <hr>
    <h1 class="h1 text-gray-900 mt-5" style="font-family:viga;text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.7);">How To Choose The Correct Shoe Size </h1>
</div>

<div class="container">
    <div class="row workingspace">
        <div class="col-lg-5"><img style="width:500px;height:350px;" src="../assets/img/howtofoot1.jpg" alt="howto_foot1" class="img-fluid"></div>
        <div class="col-lg-6">
            <h4>STEP 1</h4>
            <p>Put your foot on the piece of paper </p>
            <p>Holding your pen vertically, put a dot where your heel ends and where your longest toe ends.</p>
            <br><br>
        </div>
    </div>

    <div class="row workingspace">
        <div class="col-lg-5"><img style="width:600px;height:350px;" src="../assets/img/howtofoot2.jpg" alt="howtofoot2" class="img-fluid"></div>
        <div class="col-lg-6">
            <h4>STEP 2</h4>
            <p>Measure the distance between the two dots with your ruler</p>
            <p>Determine the length of your foot. Measure in centimetres.</p>
            <br><br>
        </div>
    </div>

    <div class="row workingspace">
        <div class="step">
            <h4>STEP 3</h4>
            <p>Do the same thing with your other foot.</p>
            <br><br>
        </div>
    </div>

    <div class="row workingspace">
        <div class="step">
            <h4>STEP 4</h4>
            <p>Find your size in the chart below.</p>
            <br>
            <p>Women's Footwear Size Chart</p><img style="width:600px;height:600x;" src="../assets/img/footsize1_wm.jpg" alt="footsize1_women" class="img-fluid">
            <br>
            <p>Men's Footwear Size Chart</p><img style="width:600px;height:600x;" src="../assets/img/footsize2_m.jpg" alt="footsize_men" class="img-fluid">
            <br><br>
        </div>
        <a href="<?= base_url('order') ?>" class="btn btn-danger tombol">Order Here</a><br>
    </div>
    <br><br>


</div>