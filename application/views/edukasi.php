<div class="container">
	<div class="row">
		<?php foreach ($artikel as $key):?>
		<div class="col-xl-4 mt-3 mb-5">
			<a href="<?= base_url('edukasi/p/'.$key->url)?>">
				<div class="card h-100" style="">
					<img src="<?= base_url('assets/image/'.$key->thumbnail) ?>" class="card-img-top" alt="...">
					<div class="card-body">
						<h6 class="text-dark text-muted"><?= $key->tanggal ?></h6>
						<h4 class="text-dark"><?= $key->judul_artikel ?></h4>
						<?= substr($key->konten,'0','90') ?>
					</div>
				</div>
			</a>
		</div>
		<?php endforeach; ?>
	</div>
</div>
