<link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.8/dist/trix.css">
<script type="text/javascript" src="https://unpkg.com/trix@2.0.8/dist/trix.umd.min.js"></script>

<div class="col-lg-12">
    <div class="panel panel-primary">
        <div class="panel-heading">
            Add Data
        </div>
        <div class="panel-body">
            <?php 
                if(isset($error_upload)){
                    echo '<div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'.$error_upload.'</div>';
                }

                echo validation_errors('<div class="alert alert-warning alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>','</div>');

                echo form_open_multipart('artikel/add');
            ?>
            <div class="form-group">
                <label>Judul artikel</label>
                <input class="form-control" type="text" name="judul_artikel" placeholder="Judul artikel" required>
            </div>
            <div class="form-group">
                <label>Gambar</label>
                <input type="file" class="form-control" type="text" name="gambar_artikel" required>
            </div>
            <div class="form-group" >
                    <input type="hidden" id="isi_artikel" name="isi_artikel">
                    <trix-editor input="isi_artikel"></trix-editor>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Simpan</button>
                <button type="reset" class="btn btn-success">Reset</button>
            </div>

            <?php echo form_close(); ?>
        </div>
    </div>
</div>