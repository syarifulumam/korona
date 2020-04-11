<div class="container">
	<div class="row">
		<div class="col-lg-12">
			<div class="card">
				<img src="<?= base_url('assets/image/periksa.jpg') ?>" class="card-img-top" alt="...">
				<div class="card-body p-5" style="margin-bottom: 400px">
					<?= form_open('periksa/hasil')?>
					<div class="form-group">
						<p>Apakah ada riwayat kontak dengan pasien positif COVID-19 (berada dalam satu ruangan yang
							sama/kontak dalam jarak 1 meter) ATAU pernah berkunjung ke negara terjangkit/di area
							transmisi
							lokal COVID-19 dalam 14 hari terakhir ?</p>
						<div class="custom-control custom-radio">
							<input class="custom-control-input" type="radio" id="q1" name="pertama" value="Ya" checked>
							<label for="q1" class="custom-control-label">Ya</label>
						</div>
						<div class="custom-control custom-radio">
							<input class="custom-control-input" type="radio" id="q2" value="Tidak" name="pertama">
							<label for="q2" class="custom-control-label">Tidak</label>
						</div>
					</div>
					<div class="form-group">
						<p>Apakah anda sedang demam / riwayat demam suhu > 38 ℃ / batuk / pilek / sesak napas ?</p>
						<div class="custom-control custom-radio">
							<input class="custom-control-input" type="radio" id="q3" value="Ya" name="kedua" checked>
							<label for="q3" class="custom-control-label">Ya</label>
						</div>
						<div class="custom-control custom-radio">
							<input class="custom-control-input" type="radio" id="q4" value="Tidak" name="kedua">
							<label for="q4" class="custom-control-label">Tidak</label>
						</div>
					</div>
					<div class="form-group">
						<label for="exampleInputEmail1">Umur</label>
						<input type="text" class="form-control" name="umur" autocomplete="off"
							value="<?=set_value('umur')?>">
					</div>
					<button type="submit" class="btn btn-primary">Submit</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
