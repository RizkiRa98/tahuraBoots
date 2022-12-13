<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <form method="post" action="<?= base_url('admin/pegawai/action_input') ?>">
        <div class="form-group">
            <label> Nama Pegawai</label>
            <input type="text" name="nama_pegawai" placeholder="Input Nama Pegawai" class="form-control" value="<?= $nama_pegawai ?>">
            <?= form_error('nama_pegawai', '<small class="text-danger pl-3">', '</small>');  ?>

        </div>

        <div class="form-group">
            <label>Nama Pekerjaan</label>
            <input type="text" name="nama_pekerjaan" id="nama_pekerjaan" placeholder="Input Nama Pekerjaan" class="form-control">
            <?= form_error('nama_pekerjaan', '<small class="text-danger pl-3">', '</small>');  ?>
        </div>

        <div class="form-group">
            <label> Upah Pekerjaan(USD)</label>
            <input type="text" name="upah" id="upah" placeholder="Input Upah Pekerjaan ($)" class="form-control">
            <?= form_error('upah', '<small class="text-danger pl-3">', '</small>');  ?>
        </div>

        <button type="submit" class="btn btn-primary" id="save" name="save">Save</button>
        <a href="<?php echo base_url('admin/pegawai'); ?>" class="btn btn-secondary">
            Back
        </a>
    </form>
</div>