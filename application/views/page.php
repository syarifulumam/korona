<div class="container">
	<div class="row">
		<div class="col-lg-12">
			<div class="card">
				<img src="<?= base_url('assets/image/'.$artikel->thumbnail) ?>" class="card-img-top" alt="...">
				<div class="card-body p-5" style="margin-bottom: 400px">
					<h6 class="text-dark text-muted"><?= $artikel->tanggal ?></h6>
					<h4 class="text-dark pb-3"><?= $artikel->judul_artikel ?></h4>
					<?= $artikel->konten ?>
				</div>
			</div>
		</div>
	</div>
</div>
