<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <form method="post" action="<?= base_url('admin/produk/input_action') ?>" enctype="multipart/form-data">
        <div class="form-group">
            <label>ID Product</label>
            <input type="text" name="id_produk" class="form-control">
            <?= form_error('id_produk', '<small class="text-danger pl-3">', '</small>');  ?>
        </div>

        <div class="form-group">
            <label>Product Name</label>
            <input type="text" name="nama_produk" class="form-control">
            <?= form_error('nama_produk', '<small class="text-danger pl-3">', '</small>');  ?>
        </div>

        <div class="form-group">
            <label>Detail Product</label>
            <textarea name="detail" class="form-control"></textarea>
            <?= form_error('detail', '<small class="text-danger pl-3">', '</small>');  ?>
        </div>

        <div class="form-group">
            <label>Price</label>
            <input type="text" name="harga" class="form-control">
            <?= form_error('harga', '<small class="text-danger pl-3">', '</small>');  ?>
        </div>

        <div class="form-group">
            <label>Product Image</label><br>
            <input type="file" name="foto" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
        <a href="<?php echo base_url('admin/produk'); ?>" class="btn btn-secondary">
            Back
        </a>
    </form>
</div>