<div class="col-lg-12">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus"></i> Add</button>
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
                        <th>Materi</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php $no=1; foreach($glosary as $key => $value) { ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $value->judul_glosary ?></td>
                        <td><?= $value->materi_glosary ?></td>
                        <td>
                            <button class="btn btn-xs btn-success" data-toggle="modal" data-target="#edit<?= $value->id_glosary ?>"><i class="fa fa-pencil"></i>Edit</button>
                            <a href="<?= base_url('glosary/delete/'.$value->id_glosary) ?>" onclick="return confirm('Apakah Data Ini Ingin Dihapus?')" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i>Delete</a>
                        </td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Modal Add-->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xs" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Add Glosary</h4>
            </div>
            <div class="modal-body">
                <?php echo form_open('glosary/add'); ?>
                <div class="form-group">
                    <label>Judul Glosary</label>
                    <input class="form-control" type="text" name="judul_glosary" placeholder="Judul Glosary" required>
                </div>
                <div class="form-group">
                    <label>Materi Glosary</label>
                    <textarea class="form-control" rows="3" type="text" name="materi_glosary" placeholder="Materi Glosary" required></textarea>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
            <?php echo form_close(); ?>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

<!-- Modal Edit-->
<?php foreach($glosary as $key => $value) { ?>
<div class="modal fade" id="edit<?= $value->id_glosary?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xs" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Edit Glosary</h4>
            </div>
            <div class="modal-body">
                <?php echo form_open('glosary/edit/'.$value->id_glosary); ?>
                <div class="form-group">
                    <label>Judul Glosary</label>
                    <input class="form-control" type="text" name="judul_glosary" value="<?= $value->judul_glosary ?>" placeholder="JudGlosary" required>
                </div>
                <div class="form-group">
                    <label>Materi Glosary</label>
                    <input class="form-control" rows="3" type="text" name="materi_glosary" value="<?= $value->materi_glosary ?>" placeholder="MatGlosary" required>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
            <?php echo form_close(); ?>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
<?php } ?>