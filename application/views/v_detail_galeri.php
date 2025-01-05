<div style="margin-top: 20px;">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="section_title_container text-center">
                    <h2 class="section_title"><?= $nama_galeri->nama_galeri ?></h2>
                </div>
            </div>
        </div>
        <div class="row about_row">
            
            <?php foreach($galeri as $key => $value) { ?>
            <div class="col-lg-4 about_col about_col_left">
                <div class="about_item">
                    <div class="about_item_image"><img src="<?= base_url('foto/'.$value->foto) ?>" width="310px" height="200px"></div>
                    <br><br>    
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</div>
