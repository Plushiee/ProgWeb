<!doctype html>
	<div class="container mt-3">
		<div class="row">
			<div class="col-lg-6">
				<?php Flasher::flash();?> 
			</div>
		</div>
        
        <div class="row mb-3">
            <div class="col-lg-6">
                <button type="button" class="btn btn-primary tombolTambahData" data-bs-toggle="modal" data-bs-target="#formModal">
					Tambah Data Mahasiswa
				</button>
            </div>
        </div>
        
        <div class="row">
            <div class="col-lg-6">
                <form action="<?= BASEURL; ?>mahasiswa/cari/" method="POST">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Cari mahasiswa..." name="keyword" id="keyword" autocomplete="off">
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="submit" id="tombolSubmit">Cari</button>
                          </div>
                    </div>
                </form>
            </div>
        </div>
		
		<div class="row">
			<div class="col-lg-6">
				<h3>Daftar Mahasiswa</h3>
				<ul class="list-group">
					<?php foreach($data['mhs'] as $mhs) { ?>
						<li class="list-group-item">
							<?= $mhs['nama'];?>
							<a href="<?= BASEURL; ?>mahasiswa/hapus/<?= $mhs['id']; ?>" class="badge bg-danger float-end me-1" onClick="return confirm('Yakin ingin menghapus data?');">hapus</a>
                            <a href="<?= BASEURL; ?>mahasiswa/detail/<?= $mhs['id']; ?>" class="tampilModalUbah badge bg-success float-end me-1" data-bs-toggle="modal" data-bs-target="#formModal" data-id="<?= $mhs['id']; ?>">edit</a>
							<a href="<?= BASEURL; ?>mahasiswa/detail/<?= $mhs['id']; ?>" class="badge bg-primary float-end me-1 ">detail</a>
						</li>
					<?php } ?>
				</ul>
			</div>
		</div>

		<!-- Modal -->
		<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<h1 class="modal-title fs-5" id="formModalLabel">Tambah Data Mahasiswa</h1>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class="modal-body">
						<form action="<?= BASEURL; ?>mahasiswa/tambah" method="POST">
                            <input type="hidden" name="id" id="id">
							<div class="form-group">
								<label for="nim">Nim</label>
								<input type="number" class="form-control" id="nim" name="nim">
							</div>

							<div class="form-group">
								<label for="nama">Nama</label>
								<input type="text" class="form-control" id="nama" name="nama">
							</div>

							<div class="form-group">
								<label for="kota">Kota</label>
								<input type="text" class="form-control" id="kota" name="kota">
							</div>
					</div>

					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
						<button type="submit" class="btn btn-primary">Tambah Data</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>