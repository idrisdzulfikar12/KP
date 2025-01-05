<div class="col-lg-12">
    <div class="panel panel-primary">
        <div class="panel-heading">
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
                    <th>Nama Pelapor</th>
                    <th>Sebagai</th>
                    <th>Alamat</th>
                    <th>No HP</th>
                    <th>Email</th>
                </tr>
                </thead>
                <tbody>
                <?php $no = 1; foreach ($pelapor as $key => $value) { ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $value->nama ?></td>
                    <td><?= $value->sebagai ?></td>
                    <td><?= $value->alamat ?></td>
                    <td><?= $value->no_hp ?></td>
                    <td><?= $value->email ?></td>
                    <td>
                    <a href="<?= base_url('form_pengaduan/detail/'.$value->pelapor_id) ?>" class="btn btn-xs btn-primary">
                        <i class="fa fa-eye"></i> Lihat Detail
                    </a>
                </td>
                </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
