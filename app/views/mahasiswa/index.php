<div class="container mt-5">
	<div class="row">
		<div class="col-6">
			<h3><?php echo $data['judul']; ?></h3>
			<table class="table table-bordered">
				<tr>
					<th>No</th><th>Nama</th><th>Nrp</th><th>Aksi</th>
				</tr>
				<?php 
				$no = 0;
					foreach ($data['mhs'] as $mhs) {
						$no++;
						echo "<tr>";
						echo "<td>".$no."</td>";
						echo "<td>".$mhs['nama']."</td>";
						echo "<td>".$mhs['nrp']."</td>";
						echo "<td><a href=".BASEURL."/mahasiswa/detail/".$mhs['id']." class='btn btn-primary'>
									  Detail
									</a></td>";
						echo "</tr>";
					}
				 ?>
			</table>
		</div>
	</div>

</div>