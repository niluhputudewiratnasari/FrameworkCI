<!DOCTYPE html>
<html>
<head>
	<title>Mahasiswa</title>
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/bootstrap.min.css') ?>">
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark shadow" style="background-color: #5f9ea0">
		<a href="" class="navbar-brand"> Tambah Data </a>
		<div class="navbar-nav">
			<a href="<?= site_url('bcontroller')?>" class="nav-link">Kembali</a>
		</div>
		
		<div class="navbar-nav ml-auto">
			<a href="" class="nav-link active">Dewiiratnas</a>
		</div>
	</nav>

	<div class="alert alert-dark text-center mt-1" role="alert">Form Tambah Data Jurusan</div>

	<br>

	<section class="contact" id="contact">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 text-center">
				</div>
			</div>

			<div class="row">
				<div class="col-sm-12">
					<form action="<?= site_url('bcontroller/simpan_data') ?>" method="post">
						<div class="form-group">
							<label for="nim">Kolom Jurusan</label>
							<input input type="text" name="kolom_jurusan" id="kolom_jurusan" class="form-control" placeholder="Masukkan Kolom Jurusan">
						</div>

						<div class="form-group">
							<label for="nama">Kolom Kelas</label>
							<input type="text" name="kolom_kelas" id="kolom_kelas" class="form-control" placeholder="Masukkan Kolom Kelas">
						</div>

						<div class="form-group">
							<label for="pesan">Kolom Isi</label>
							<input type="text" name="kolom_isi" id="kolom_isi" class="form-control" placeholder="Masukkan Kolom Isi"></input>
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