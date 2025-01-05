<section id="inner-headline">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h2 class="pageTitle">Glosary</h2>
			</div>
		</div>
	</div>
</section>
</section>
<br><br>

<?php foreach($glosary as $key => $value) { ?>
    <div class="container">
        <div class="item" onclick="toggleContent(this)">
        <p class="title"><?= $value->judul_glosary ?></p>
        <div class="content"><?= $value->materi_glosary ?></div>
        </div>
    </div>
<?php } ?>

  <script>
    function toggleContent(element) {
      element.classList.toggle('expanded');
    }
  </script>