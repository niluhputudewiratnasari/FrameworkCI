<!DOCTYPE html>
<html>
<head>
	<title>Mahasiswa</title>
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/bootstrap.min.css') ?>">
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark shadow" style="background-color: #5f9ea0">
		<a href="" class="navbar-brand"> Edit Mahasiswa </a>
		
		<div class="navbar-nav ml-auto">
			<a href="" class="nav-link active">Dewiiratnas</a>
		</div>
	</nav>

	<div class="alert alert-dark text-center mt-1" role="alert">Form Edit Data Mahasiswa</div>
	<br>

	<section class="contact" id="contact">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 text-center">
				</div>
			</div>

			<div class="row">
				<div class="col-sm-12">
					<form action="<?= site_url('mahasiswa/proses_edit') ?>" method="post">
						<div class="form-group">
							<label for="nim">NIM</label>
							<input type="hidden" name="nim" value="<?= $data_tabel->nim;?>">
							<input input type="text" name="nim" id="nim" class="form-control" placeholder="Masukkan NIM" value="<?= $data_tabel->nim;?>">
						</div>

						<div class="form-group">
							<label for="nama">Nama</label>
							<input type="text" name="nama" id="nama" class="form-control" placeholder="Masukkan Nama" value="<?= $data_tabel->nama;?>">
						</div>

						<div class="form-group">
							<label for="pesan">Alamat</label>
							<textarea name="alamat" class="form-control" rows="5" placeholder="Masukkan alamat"><?= $data_tabel->alamat;?></textarea>
						</div>

						<div class="form-group">
							<button type="submit" name="submit" class="btn btn-outline-primary btn-sm">Simpan</button>
						</div>
						
					</form>
				</div>
			</div>
		</section>

	</body>
	</html>