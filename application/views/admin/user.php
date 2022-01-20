<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <?php
    echo $this->session->flashdata('message');
    $this->session->unset_userdata('message');
    $this->session->sess_destroy();
    ?>
    <?= anchor('registration/create_user', '<button class="btn btn-sm btn-primary mb-3"><i class="fas fa-plus fa-sm"></i> Create User</button>') ?>
    <table class="table table-bordered table-stripped table-hover">
        <tr>
            <th>NO</th>
            <th>Name</th>
            <th>Email</th>
            <th>Role ID</th>
            <th colspan="2">Action</th>
        </tr>

        <?php
        $no = 1;
        foreach ($user as $usr) :
        ?>
            <tr>
                <td width="20px"><?= $no++ ?></td>
                <td><?= $usr->name ?></td>
                <td><?= $usr->email ?></td>
                <td><?= $usr->role_id ?></td>
                <td width="20px" onclick="javascript: return confirm('Ready to Delete?')"><?= anchor('registration/delete/' . $usr->id, '<div class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></div> ') ?>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>

<!-- Delete Modal-->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Delete?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Delete" below if you are ready to end your current session.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="<?php echo base_url('admin/registration/delete/' . $usr->id); ?>">Delete</a>
            </div>
        </div>
    </div>
</div>