<div class="container">
	<div class="row mb-5 mt-5 penjelasan">
		<div class="col-lg-6 order-12 order-lg-1 mt-lg-5">
			<h3 class=" font-weight-bold mt-5">SELAMAT DATANG DI <span style="color: #455eb1">INFORMASI KORONA</span>
			</h3>
			<p class="lead">
				Cari tau kasus corona dan informasi penting tentang corona diprovinsi mu.
			</p>
			<?= form_open('home/detail') ?>
			<div class="input-group mb-3 w-75">
				<input type="text" class="form-control" placeholder="Contoh : Banten" aria-label="Recipient's username"
					aria-describedby="button-addon2" name="provinsi">
				<div class="input-group-append">
					<button class="btn btn-outline-info mt-0" type="submit" id="button-addon2">Cari</button>
				</div>
				</form>
			</div>
		</div>
		<div class="col-lg-6 order-1 order-lg-12 gambar">
			<img src="<?= base_url('assets/image/orang.jpg') ?>" class="img-responsiv" style="width:100%" />
		</div>
	</div>

	<div class="row w-100 pt-3">
		<div class="col-md-4">
			<div class="card border-info mx-sm-1 p-3 card-gradient">
				<div class="card border-info shadow text-info my-card"><img
						src="<?= base_url('assets/image/sembuh.png') ?>">
				</div>
				<div class="text-white text-center mt-4 pt-1">
					<h4>Sembuh</h4>
					<h1><?= $total[0]['sembuh'] ?></h1>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="card border-success mx-sm-1 p-3 card-gradient">
				<div class="card border-success shadow text-success my-card">
					<img src="<?= base_url('assets/image/sedih.png') ?>">
				</div>
				<div class="text-white text-center mt-4 pt-1">
					<h4>Positif</h4>
					<h1><?= $total[0]['positif'] ?></h1>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="card border-danger mx-sm-1 p-3 card-gradient">
				<div class="card border-danger shadow text-danger my-card"><img
						src="<?= base_url('assets/image/meninggal.png') ?>"></div>
				<div class="text-white text-center mt-4 pt-1">
					<h4>Meniggal</h4>
					<h1><?= $total[0]['meninggal'] ?></h1>
				</div>
			</div>
		</div>
	</div>
</div>
</div>


<main>
	<section class="section-1">
		<div class="container text-center">
			<!-- slider -->
			<div class="row">
				<div class="col-12 mt-5 mb-5">
					<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
							<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
							<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
						</ol>
						<div class="carousel-inner slider-gambar">
							<div class="carousel-item active">
								<a href="#"><img src="<?= base_url('assets/image/thubnail1.jpg') ?>"
										class="d-block w-100" alt="..."></a>
							</div>
							<div class="carousel-item">
								<a href="#"><img src="<?= base_url('assets/image/thubnail2.jpg') ?>"
										class="d-block w-100" alt="..."></a>
							</div>
							<div class="carousel-item">
								<a href="#"><img src="<?= base_url('assets/image/thubnail3.jpg') ?>"
										class="d-block w-100" alt="..."></a>
							</div>
						</div>
						<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button"
							data-slide="prev">
							<span class="carousel-control-prev-icon" aria-hidden="true"></span>
							<span class="sr-only">Previous</span>
						</a>
						<a class="carousel-control-next" href="#carouselExampleIndicators" role="button"
							data-slide="next">
							<span class="carousel-control-next-icon" aria-hidden="true"></span>
							<span class="sr-only">Next</span>
						</a>
					</div>
				</div>
			</div>
			<div class="row tentang">
				<div class="col-lg-12">
					<h1 class="text-center">Apa itu Covid-19 ?</h1>
					<p class="justify-content-center h5 lead pt-4 pb-5 px-5 mx-3 ">Coronavirus Disease 2019 atau
						COVID-19
						adalah
						penyakit baru yang
						dapat
						menyebabkan gangguan
						pernapasan dan radang paru. Penyakit ini disebabkan oleh infeksi Severe Acute Respiratory
						Syndrome
						Coronavirus 2 (SARS-CoV-2). Gejala klinis yang muncul beragam, mulai dari seperti gejala flu
						biasa
						(batuk, pilek, nyeri tenggorok, nyeri otot, nyeri kepala) sampai yang berkomplikasi berat
						(pneumonia
						atau sepsis).</p>
				</div>
			</div>
			<!-- end slider -->
			<div class="row nilai pb-5">
				<div class="col-lg-12">
					<h1 class="text-center pb-4">Gejala Covid-19</h1>
				</div>
				<div class="col-lg-4">
					<img src="<?= base_url('assets/image/batuk.png') ?>" class="img-responsiv">
					<h2>Batuk</h2>
				</div>
				<div class="col-lg-4">
					<img src="<?= base_url('assets/image/sesak.png') ?>" class="img-responsiv">
					<h2>Sesak Napas</h2>
				</div>
				<div class="col-lg-4">
					<img src="<?= base_url('assets/image/panas.png') ?>" class="img-responsiv">
					<h2>Demam</h2>
				</div>
			</div>
		</div>
	</section>
	</div>

	<div class="jumbotron jumbotron-fluid p-4 mt-5">
		<div class="container">
			<div class="row text-center">
				<div class="col-lg-5"><img src="<?= base_url('assets/image/donasi.png') ?>" class="w-50">
				</div>
				<div class="col-lg-7 text-center pt-3">
					<h4 class="pb-3">Ayo Berdonasi, Bantu Pencegahan COVID-19</h4>
					<p class="text-justify pb-3 mx-5">dengan berdonasi kita bisa membantu Tenaga medis, Pekerja Non
						Formal seperti supir angkutan umum, pedagang kaki lima,dll.</p>
					<a href="https://kitabisa.com/" target="_blank" class="btn btn-info w-50">Donasi</a>
				</div>
			</div>
		</div>
	</div>

	<div class="pertanyaan container">
		<div class="accordion py-5" id="accordionExample">
			<div class="card">
				<div class="card-header" id="headingOne">
					<h2 class="mb-0">
						<button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne"
							aria-expanded="true" aria-controls="collapseOne">
							Siapa yang termasuk Orang Dalam Pemantauan (ODP)?
						</button>
					</h2>
				</div>

				<div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
					<div class="card-body text-justify">Orang dalam pemantauan (ODP) adalah seseorang yang mengalami
						demam (≥38°C) atau riwayat demam; atau gejala gangguan sistem pernapasan, seperti pilek/sakit
						tenggorokan/batuk DAN tidak ada penyebab lain berdasarkan gambaran klinis yang meyakinkan DAN
						pada 14 hari terakhir sebelum timbul gejala, memenuhi salah satu kriteria: “memiliki riwayat
						perjalanan atau tinggal di luar negeri yang melaporkan transmisi lokal” atau “memiliki riwayat
						perjalanan atau tinggal di area transmisi lokal di Indonesia”.
					</div>
				</div>
			</div>
			<div class="card">
				<div class="card-header" id="headingTwo">
					<h2 class="mb-0">
						<button class="btn btn-link collapsed" type="button" data-toggle="collapse"
							data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
							Siapa yang termasuk Pasien Dalam Pengawasan?
						</button>
					</h2>
				</div>
				<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
					<div class="card-body text-justify">
						Pasien Dalam Pengawasan adalah seseorang dengan Infeksi Saluran Pernapasan Akut (ISPA) yaitu
						demam (≥38°C) atau riwayat demam; disertai salah satu gejala/tanda penyakit pernapasan seperti:
						batuk/sesak nafas/sakit tenggorokan/pilek/pneumonia ringan hingga berat DAN tidak ada penyebab
						lain berdasarkan gambaran klinis yang meyakinkan DAN pada 14 hari terakhir sebelum timbul
						gejala, memenuhi salah satu kriteria: "memiliki riwayat perjalanan atau tinggal di luar negeri
						yang melaporkan transmisi lokal" atau "memiliki riwayat perjalanan atau tinggal di area
						transmisi lokal di Indonesia";

						atau

						Seseorang dengan demam (≥38°C) atau riwayat demam atau ISPA DAN pada 14 hari terakhir sebelum
						timbul gejala memiliki riwayat kontak dengan kasus konfirmasi atau probabel COVID-19

						atau

						Seseorang dengan ISPA berat/pneumonia berat di area transmisi lokal di Indonesia yang
						membutuhkan perawatan di rumah sakit DAN tidak ada penyebab lain berdasarkan gambaran klinis
						yang meyakinkan.
					</div>
				</div>
			</div>
			<div class="card">
				<div class="card-header" id="headingThree">
					<h2 class="mb-0">
						<button class="btn btn-link collapsed" type="button" data-toggle="collapse"
							data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
							Seberapa bahaya COVID-19 ini?
						</button>
					</h2>
				</div>
				<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
					<div class="card-body text-justify">
						Seperti penyakit pernapasan lainnya, COVID-19 dapat menyebabkan gejala ringan termasuk pilek
						sakit tenggorokan, batuk, dan demam. Sekitar 80% kasus dapat pulih tanpa perlu perawatan khusus.
						Sekitar 1 dari setiap 6 orang mungkin akan menderita sakit yang parah, seperti disertai
						pneumonia atau kesulitan bernafas, yang biasanya muncul secara bertahap. Walaupun angka kematian
						penyakit ini masih jarang, namun bagi orang yang berusia lanjut, dan orang-orang dengan kondisi
						medis yang sudah ada sebelumnya (seperti diabetes, tekanan darah tinggi dan penyakit jantung),
						mereka biasanya lebih rentan untuk gejala yang lebih parah. Orang yang mengalami demam, batuk,
						dan sulit bernapas harus segera mendapatkan pertolongan medis.
					</div>
				</div>
			</div>
		</div>
	</div>
	</section>
</main>
