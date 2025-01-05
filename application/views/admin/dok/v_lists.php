<div class="col-lg-12">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <a href="<?= base_url('dok/add'); ?>" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Add</a>
        </div>
        <div class="panel-body">
            <?php 
                if($this->session->flashdata('pesan')){
                    echo '<div class="alert alert-success alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>';
                    echo $this->session->flashdata('pesan');  
                    echo '</div>';
                } 
            ?>
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Judul</th>
                        <th>File</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php $no=1; foreach($dok as $key => $value) { ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $value->judul_dok ?></td>
                        <td><?= $value->file_dok ?></td>
                        <td>
                            <a href="<?= base_url('dok/edit/'.$value->id_dok) ?>" class="btn btn-xs btn-success"><i class="fa fa-pencil"></i>Edit</a>
                            <a href="<?= base_url('dok/delete/'.$value->id_dok) ?>" onclick="return confirm('Apakah Data Ini Ingin Dihapus?')" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i>Delete</a>
                        </td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>