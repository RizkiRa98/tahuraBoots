<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <?php
    echo $this->session->flashdata('message');
    $this->session->unset_userdata('message');
    $this->session->sess_destroy();
    ?>
    <?= anchor('admin/edgecolour/input', '<button class="btn btn-sm btn-primary mb-3"><i class="fas fa-plus fa-sm"></i> Create Edge Colour</button>') ?>
    <table class="table table-bordered table-stripped table-hover">
        <tr>
            <th>NO</th>
            <th>ID Edge Colour</th>
            <th>Edge Colour Name</th>
            <th>Price</th>
            <th colspan="2">Action</th>
        </tr>

        <?php
        $no = 1;
        foreach ($edgecolour as $ec) :
        ?>
            <tr>
                <td width="20px"><?= $no++ ?></td>
                <td><?= $ec->id_edgecolour ?></td>
                <td><?= $ec->nama_edgecolour ?></td>
                <td>$ <?= $ec->harga ?></td>
                <td width="20px"><?= anchor('admin/edgecolour/update/' . $ec->id_edgecolour, '<div class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></div> ') ?>
                <td width="20px" onclick="javascript: return confirm('Ready to Delete?')"><?= anchor('admin/edgecolour/delete/' . $ec->id_edgecolour, '<div class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></div> ') ?>


                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>