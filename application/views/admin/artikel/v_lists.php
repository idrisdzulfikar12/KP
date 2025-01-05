<div class="col-lg-12">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <a href="<?= base_url('artikel/add'); ?>" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Add</a>
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
                        <th>Judul artikel</th>
                        <th>Slug artikel</th>
                        <th>Tanggal</th>
                        <th>Gambar</th>
                        <th>Nama Publisher</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php $no=1; foreach($artikel as $key => $value) { ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $value->judul_artikel ?></td>
                        <td><?= $value->slug_artikel ?></td>
                        <td><?= $value->tgl_artikel ?></td>
                        <td><img src="<?= base_url('gambar_artikel/'.$value->gambar_artikel) ?>" width="150px"></td>
                        <td><?= $value->nama_user ?></td>
                        <td>
                            <a href="<?= base_url('artikel/edit/'.$value->id_artikel) ?>" class="btn btn-xs btn-success"><i class="fa fa-pencil"></i>Edit</a>
                            <a href="<?= base_url('artikel/delete/'.$value->id_artikel) ?>" onclick="return confirm('Apakah Data Ini Ingin Dihapus?')" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i>Delete</a>
                        </td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>