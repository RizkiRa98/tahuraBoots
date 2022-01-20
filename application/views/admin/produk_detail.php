<div class="container-fluid">

    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <table class="table table-striped table-hover table-bordered">

        <?php foreach ($detail as $dt) : ?>

            <img class="mb-4" src="<?php echo base_url('assets/pict/') . $dt->foto ?>" style="width:20%">

            <tr>
                <td>ID Produk</td>
                <td><?php echo $dt->id_produk; ?></td>
            </tr>

            <tr>
                <td>Produck Name</td>
                <td><?php echo $dt->nama_produk; ?></td>
            </tr>

            <tr>
                <td>Detail Product</td>
                <td><?php echo $dt->detail; ?></td>
            </tr>

            <tr>
                <td>Price</td>
                <td><?php echo $dt->harga; ?></td>
            </tr>
        <?php endforeach ?>
    </table>

    <?php echo anchor('admin/produk', '<div class="btn btn-sm btn-secondary">Back</div>') ?><br><br><br>
</div>