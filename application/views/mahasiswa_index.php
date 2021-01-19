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
			<a href="<?= site_url('mahasiswa/tambah')?>" class="nav-link">Tambah Data</a>
		</div>

		<div class="navbar-nav ml-auto">
			<a href="" class="nav-link active">Dewiiratnas</a>
		</div>
	</nav>

	<div class="alert alert-dark text-center mt-1" role="alert">Data Mahasiswa</div>


	<div class="container">
		<table class="table table-bordered table-sm text-center">
			<tr>
				<th>No</th>
				<th>NIM</th>
				<th>Nama</th>
				<th>Alamat</th>
				<th>Aksi</th>
			</tr>
			<?php $no = 1; ?>
			<?php foreach ($data_tabel as $key): ?>

				<tr>
					<td><?= $no++; ?></td>
					<td><?= $key->nim ?></td>
					<td><?= $key->nama ?></td>
					<td><?= $key->alamat ?></td>
					<td>
						<a href="<?= site_url('mahasiswa/edit/'.$key->nim) ?>" class="btn btn-info btn-sm">Edit</a>
						<a href="<?= site_url('mahasiswa/hapus/'.$key->nim) ?>" class="btn btn-danger btn-sm">Hapus</a>
					</tr>
				<?php endforeach ?>
			</table>
		</div>

	</body>
	</html>