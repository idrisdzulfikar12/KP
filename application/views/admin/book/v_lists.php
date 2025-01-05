<div class="col-lg-12">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <a href="<?= base_url('book/add'); ?>" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Add</a>
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
                <?php $no=1; foreach($book as $key => $value) { ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $value->judul_book ?></td>
                        <td><?= $value->file_book ?></td>
                        <td>
                            <a href="<?= base_url('book/edit/'.$value->id_book) ?>" class="btn btn-xs btn-success"><i class="fa fa-pencil"></i>Edit</a>
                            <a href="<?= base_url('book/delete/'.$value->id_book) ?>" onclick="return confirm('Apakah Data Ini Ingin Dihapus?')" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i>Delete</a>
                        </td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>