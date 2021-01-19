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
					<form action="<?= site_url('bcontroller/proses_edit') ?>" method="post">
						<div class="form-group">
							<label for="id_015">No</label>
							<input type="hidden" name="id_015" value="<?= $data_tabel->id_015;?>">
							<input input type="text" name="id_015" id="id_015" class="form-control" placeholder="Masukkan No" value="<?= $data_tabel->id_015;?>">
						</div>

						<div class="form-group">
							<label for="kolom_jurusan">Kolom Jurusan</label>
							<input type="text" name="kolom_jurusan" id="kolom_jurusan" class="form-control" placeholder="Masukkan Nama" value="<?= $data_tabel->kolom_jurusan;?>">
						</div>

						<div class="form-group">
							<label for="kolom_kelas">Kolom Kelas</label>
							<input type="text" name="kolom_kelas" id="kolom_kelas" class="form-control" placeholder="Masukkan Nama" value="<?= $data_tabel->kolom_kelas;?>">
						</div>

						<div class="form-group">
							<label for="kolom_isi">Kolom isi</label>
							<input type="text" name="kolom_isi" id="kolom_isi" class="form-control" placeholder="Masukkan Nama" value="<?= $data_tabel->kolom_isi;?>">
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