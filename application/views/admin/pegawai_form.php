<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <form method="post" action="<?= base_url('admin/pegawai/action_input') ?>">
        <div class="form-group">
            <label> Nama Pegawai</label>
            <input type="text" name="nama_pegawai" placeholder="Input Nama Pegawai" class="form-control" value="<?= $nama_pegawai ?>">

        </div>

        <div class="form-group">
            <label>Nama Pekerjaan</label>
            <select name="nama_pekerjaan" id="nama_pekerjaan" class="form-control">
                <option value="">---Select Pekerjaan---</option>
                <option>Upper</option>
                <option>Finishing</option>
                <option>Assembling</option>
                <option>Umum</option>
            </select>
        </div>

        <div class="form-group">
            <label> Upah Pekerjaan</label>
            <input type="text" name="upah" id="upah" placeholder="Input Upah Pekerjaan" class="form-control" value="$">
        </div>

        <button type="submit" class="btn btn-primary" id="save" name="save">Save</button>
        <a href="<?php echo base_url('admin/pegawai'); ?>" class="btn btn-secondary">
            Back
        </a>
    </form>
</div>