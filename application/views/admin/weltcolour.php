<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <?php
    echo $this->session->flashdata('message');
    $this->session->unset_userdata('message');
    $this->session->sess_destroy();
    ?>
    <?= anchor('admin/weltcolour/input', '<button class="btn btn-sm btn-primary mb-3"><i class="fas fa-plus fa-sm"></i> Create Welt Colour</button>') ?>
    <table class="table table-bordered table-stripped table-hover">
        <tr>
            <th>NO</th>
            <th>ID Weltcolour</th>
            <th>Weltcolour Name</th>
            <th>Price</th>
            <th colspan="2">Action</th>
        </tr>

        <?php
        $no = 1;
        foreach ($weltcolour as $wc) :
        ?>
            <tr>
                <td width="20px"><?= $no++ ?></td>
                <td><?= $wc->id_weltcolour ?></td>
                <td><?= $wc->nama_weltcolour ?></td>
                <td>Rp. <?= $wc->harga ?></td>
                <td width="20px"><?= anchor('admin/weltcolour/update/' . $wc->id_weltcolour, '<div class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></div> ') ?>
                <td width="20px" onclick="javascript: return confirm('Ready to Delete?')"><?= anchor('admin/weltcolour/delete/' . $wc->id_weltcolour, '<div class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></div> ') ?>

                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>