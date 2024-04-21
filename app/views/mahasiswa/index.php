<div class="container mt-3">
	<div class="row">
		<div class="col-lg-6">
			<?php flasher::flash(); ?>
		</div>
	</div>

	<div class="row">
		<div class="col-lg-6">
			<!-- Button Triger -->
			<button type="button" class="btn btn-primary mb-3 tombolTambahData" data-bs-toggle="modal" data-bs-target="#formModal">
				Tambah Data Mahasiswa
			</button>
		</div>
	</div>

	<div class="row">
		<div class="col-lg-6">
			<form action="<?= BASEURL; ?>/mahasiswa/cari" method="post">
				<div class="input-group">
					<input type="text" class="form-control" placeholder="Cari Mahasiswa 🔍..." aria-label="Recipient's username" aria-describedby="button-addon2" name="keyword" id="keyword" autocomplete="off">
					<button class="btn btn-primary" type="submit" id="tombolCari">Cari</button>
				</div>
			</form>
		</div>
	</div>
	<div class="row">
		<div class="col-6">
			<h3 class="mt-3">Daftar Mahasiswa</h3>
			<ul class="list-group">
				<?php foreach ($data['mhs'] as $mhs) : ?>
					<li class="list-group-item">
						<?= $mhs['nama']; ?>
						<a href="<?= BASEURL; ?>/mahasiswa/hapus/<?= $mhs['id']; ?>" class="badge text-bg-danger float-end ms-2" onclick="return confirm('yakin?')">hapus</a>
						<a href="<?= BASEURL; ?>/mahasiswa/ubah/<?= $mhs['id']; ?>" class="badge text-bg-success float-end ms-2 tampilModalUbah" data-bs-toggle="modal" data-bs-target="#formModal" data-id="<?= $mhs['id']; ?>">ubah</a>
						<a href="<?= BASEURL; ?>/mahasiswa/detail/<?= $mhs['id']; ?>" class="badge text-bg-primary float-end ms-2">detail</a>
					</li>
				<?php endforeach; ?>
			</ul>
		</div>
	</div>
</div>

<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="formModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h1 class="modal-title fs-5" id="formModalLabel">Tambah Data Mahasiswa</h1>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<form action="<?= BASEURL; ?>/mahasiswa/tambah" method="post" class="formModalBody">
				<input type="hidden" name="id" id="id">
				<div class="modal-body">
					<div class="mb-3">
						<label for="nama" class="form-label">Nama</label>
						<input type="text" class="form-control" id="nama" name="nama">
					</div>
					<div class="mb-3">
						<label for="nim" class="form-label">Nim</label>
						<input type="text" class="form-control" id="nim" name="nim">
					</div>
					<div class="mb-3">
						<label for="email" class="form-label">Email</label>
						<input type="text" class="form-control" id="email" name="email">
					</div>
					<div class="form-group">
						<label for="jurusan" class="form-label">Pilih Jurusan</label>
						<select name="jurusan" id="jurusan" class="form-control">
							<option value="Teknik Informatika">Teknik Informatika</option>
							<option value="Teknik Mesin">Teknik Mesin</option>
							<option value="Teknik Elektro">Teknik Elektro</option>
							<option value="Teknik Industri">Teknik Industri</option>
							<option value="Sistem Informasi">Sistem Informasi</option>
							<option value="Psikologi">Psikologi</option>
							<option value="PGSD">PGSD</option>
							<option value="Agrobisnis">Agrobisnis</option>
							<option value="Matematika">Matematika</option>
							<option value="Manajemen">Manajemen</option>
							<option value="Akuntansi">Akuntansi</option>
							<option value="Bahasa Inggris">Bahasa Inggris</option>
						</select>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary">Tidak perlu di isi karena di timpa menggunakan jquery</button>
			</form>
		</div>
	</div>
</div>
</div>