<div class="container mt-5">
	<div class="row">
		<div class="col-6">
			<h3><?php echo $data['judul']; ?></h3>
			<ul class="list-group">
			  <li class="list-group-item">Nama : <?= $data['mhs']['nama'] ?></li>
			  <li class="list-group-item">Nrp : <?= $data['mhs']['nrp'] ?></li>
			  <li class="list-group-item">Jurusan : <?= $data['mhs']['jurusan'] ?></li>
			  <li class="list-group-item">Email : <?= $data['mhs']['email'] ?></li>
			  <li class="list-group-item">
			  <a href="<?php  echo BASEURL.'/mahasiswa'; ?>" 
		  		class="btn btn-primary">Kembali</a></li>
			</ul>
		</div>
	</div>

</div>