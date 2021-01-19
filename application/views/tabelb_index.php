<!DOCTYPE html>
<html>
<head>
	<title>Mahasiswa</title>
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/bootstrap.min.css') ?>">
</head>
<body>

	<nav class="navbar navbar-expand-lg navbar-dark shadow" style="background-color: #5f9ea0">
		<a href="" class="navbar-brand"> Tugas </a>
		<div class="navbar-nav">
			<a href="" class="nav-link active">Home</a>
			<a href="<?= site_url('bcontroller/tambah')?>" class="nav-link">Tambah Data</a>
		</div>

		<div class="navbar-nav ml-auto">
			<a href="" class="nav-link active">Dewiiratnas</a>
		</div>
	</nav>

	<div class="alert alert-dark text-center mt-1" role="alert">Data Jurusan</div>


	<div class="container">
		<table class="table table-bordered table-sm text-center">
			<tr>
				<th>No</th>
				<th>Kolom Jurusan</th>
				<th>Kolom Kelas</th>
				<th>Kolom Isi</th>
				<th>Aksi</th>
			</tr>
			<?php $no = 1; ?>
			<?php foreach ($data_tabel as $key): ?>

				<tr>
					<td><?= $no++; ?></td>
					<td><?= $key->kolom_jurusan ?></td>
					<td><?= $key->kolom_kelas ?></td>
					<td><?= $key->kolom_isi ?></td>
					<td>
						<a href="<?= site_url('bcontroller/edit/'.$key->id_015) ?>" class="btn btn-info btn-sm">Edit</a>
						<a href="<?= site_url('bcontroller/hapus/'.$key->id_015) ?>" class="btn btn-danger btn-sm">Hapus</a>
					</tr>
				<?php endforeach ?>
			</table>
		</div>

	</body>
	</html>