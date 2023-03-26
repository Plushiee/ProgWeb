<!doctype html>
	<div class="container mt-5">
		<div class="col-6">
			<h3>Daftar Mahasiswa</h3>
			
			<ul>
				<?php foreach($data['mhs'] as $mhs) { ?>
				<ul>
					<li><?= $mhs['nama'];?></li>
					<li><?= $mhs['nim'];?></li>
					<li><?= $mhs['kota'];?></li>
					<br>
				</ul>
				<?php } ?>
			</ul>
		</div>
	</div>