<section id="inner-headline">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h2 class="pageTitle">Standar Operasional Prosedur</h2>
			</div>
		</div>
	</div>
</section>
</section>
<br><br>

<div class="contact_info_container">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<table class="table table-bordered">
					<thead>
						<tr>
							<th class="text-center" width="50px">No</th>
							<th class="text-center">Judul</th>
							<th class="text-center" width="180px">Download</th>
						</tr>
					</thead>
					<tbody>
						<?php $no=1; foreach($sop as $key => $value) { ?>
						<tr>
							<td class="text-center"><?= $no++ ?></td>
							<td><?= $value->judul_sop ?></td>
							<td class="text-center"><a href="<?= base_url('file/file_s/'.$value->file_sop); ?>" class="btn btn-primary btn-sm rounded-button"><i class="fa fa-download"></i> Download</a></td>
						</tr>
						<?php } ?>
					</tbody>
					
				</table>
			</div>
		</div>
	</div>
</div>