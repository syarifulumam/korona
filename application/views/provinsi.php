<div class="container">
	<div class="row">
		<div class="col-lg-12">
			<div class="card">
				<div class="jumbotron jumbotron-fluid p-3 m-0 card-gradient">
					<div class="media">
						<img src="<?= base_url('assets/image/'.$provinsi->foto)?>"
							class="card-img-top p-2 shadow rounded bg-white" style="width: 200px;">
						<div class="media-body p-3 ">
							<h1 class="text-white pl-4 ml-1">Provinsi Banten</h1>
							<div class="row text-white text-center pt-2">
								<div class="col-3">
									<p class="h4 font-weight-normal pt-2">Total Sembuh</p>
									<h1><?= $sembuh ?></h1>
								</div>
								<span class="border-right"></span>
								<div class="col-3 bo">
									<p class="h4 font-weight-normal pt-2">Total Positif</p>
									<h1><?= $positif ?></h1>
								</div>
								<span class="border-right"></span>
								<div class="col-3">
									<p class="h4 font-weight-normal pt-2">Total Meninggal</p>
									<h1><?= $meninggal ?></h1>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="card-body">
					<button type="button" class="btn btn-primary btn-sm badge-pill " style="width:150px;">
						<i class="fas fa-phone-alt"></i> 112
					</button>
					<a href="<?= $provinsi->website ?>" class="btn btn-primary btn-sm badge-pill " style="width:150px;">
						<i class="fas fa-link"></i> Website
					</a>
					<h2 class="text-center">Rumah Sakit Rujukan</h2>
					<table class="table table-hover">
						<tbody>
							<?php foreach($rs as $key):?>
							<tr>
								<th scope="row">1</th>
								<td><?= $key->nama_rs ?></td>
								<td><?= $key->alamat ?></td>
								<td><?= $key->nomor ?></td>
							</tr>
							<?php endforeach; ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
