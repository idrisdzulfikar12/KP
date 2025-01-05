<div class="col-lg-12">
    <div class="panel panel-primary">
        <div class="panel-heading">
        </div>
        <div class="panel-body">
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Subjek</th>
                    <th>Pesan</th>
                </tr>
                </thead>
                <tbody>
                <?php $no = 1; foreach ($kontak as $key => $value) { ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $value->nama_kontak ?></td>
                    <td><?= $value->email_kontak ?></td>
                    <td><?= $value->subjek_kontak ?></td>
                    <td><?= $value->pesan_kontak ?></td>
                </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
