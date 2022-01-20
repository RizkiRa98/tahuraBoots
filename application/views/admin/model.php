<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <?php
    echo $this->session->flashdata('message');
    $this->session->unset_userdata('message');
    $this->session->sess_destroy();
    ?>
    <?= anchor('admin/model/input', '<button class="btn btn-sm btn-primary mb-3"><i class="fas fa-plus fa-sm"></i> Create Model</button>') ?>
    <table class="table table-bordered table-stripped table-hover">
        <tr>
            <th>NO</th>
            <th>ID Model</th>
            <th>Model Name</th>
            <th>Size</th>
            <th>Price</th>
            <th colspan="2">Action</th>
        </tr>

        <?php
        $no = 1;
        foreach ($model as $mdl) :
        ?>
            <tr>
                <td width="20px"><?= $no++ ?></td>
                <td><?= $mdl->id_model ?></td>
                <td><?= $mdl->nama_model ?></td>
                <td><?= $mdl->size_model ?></td>
                <td>Rp. <?= $mdl->harga ?></td>
                <td width="20px"><?= anchor('admin/model/update/' . $mdl->id_model, '<div class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></div> ') ?>
                <td width="20px" onclick="javascript: return confirm('Ready to Delete?')"><?= anchor('admin/model/delete/' . $mdl->id_model, '<div class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></div> ') ?>

                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>