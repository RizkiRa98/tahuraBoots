<style>
    .workingspace {
        margin-top: 120px;
        text-align: center;
    }

    .row {
        margin: 50px auto;
        max-width: 1000px;
        text-align: center;
    }

    .card {
        padding: 20px;
        box-sizing: border-box;
        margin-bottom: 20px;
        margin-left: 20px;
        background-color: #E0C097;
        width: 30%;
    }

    .tombol {
        margin: 50px auto;
        max-width: 70%;
    }

    .card span {
        margin: 5px 0px;
        font-weight: 700;
        letter-spacing: 0.5px;
        padding-right: 8px;
    }

    @media (max-width: 576px) {

        .card {
            border-radius: 10px;
            box-shadow: 1px 1px 1px rgba(0, 0, 0, 0.7);
            align-content: center;
        }

        .row {
            display: flex;
        }



    }
</style>
<div class="text-center">
    <h1 class="h4 text-gray-900 mt-5" style="font-family:viga;text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.7);">Galery Product</h1>
</div>
<div class="container">
    <!-- Slideshow container -->

    <!-- end slider -->

    <!-- cards -->
    <div class="row workingspace">

        <?php foreach ($produk as $pdk) : ?>
            <div class="card" style="width: 18rem; ">
                <img class="card-img-top" style="height: 200px;" src="<?= base_url() . '/assets/pict/' . $pdk->foto ?>" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title mb-1"><?= $pdk->nama_produk ?></h5>
                    <small><?= $pdk->detail ?></small><br>
                </div>
                <span class="badge badge-pill mb-3" style="background-color: #B42B51; border-radius:10px; font-size: large;">$ <?= $pdk->harga ?> </span>
            </div>

        <?php endforeach; ?>

        <a href="<?= base_url('order') ?>" class="btn btn-danger tombol">Order Here</a>
    </div>
    <!-- end cards -->

</div>