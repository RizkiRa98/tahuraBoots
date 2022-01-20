<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <?php foreach ($produk as $pdk) : ?>
        <form method="post" action="<?= base_url('admin/produk/action_update') ?>">
            <div class="form-group">
                <label>ID Produk</label>
                <input type="text" name="id_produk" class="form-control" value="<?= $pdk->id_produk; ?>">
            </div>

            <div class="form-group">
                <label>Product Name</label>
                <input type="text" name="nama_produk" class="form-control" value="<?= $pdk->nama_produk; ?>">
            </div>

            <div class="form-group">
                <label>Detail Product</label>
                <textarea type="textarea" name="detail" class="form-control" value="<?= $pdk->detail; ?>"></textarea>
            </div>

            <div class="form-group">
                <label>Price</label>
                <input type="text" name="harga" class="form-control" value="<?= $pdk->harga; ?>">
            </div>

            <button type="submit" class="btn btn-primary">Save</button>

            <a href="<?php echo base_url('admin/produk'); ?>" class="btn btn-secondary">
                Back
            </a>
        </form>
    <?php endforeach; ?>

</div>