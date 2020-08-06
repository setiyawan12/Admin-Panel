<div class="content-wrapper">
	<section class="content-header">
		<h1>Data Mahasiswa
			<small>Control Panel</small>
		</h1>
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-dashboard"><i Home</i> </a> </li> <li class="active">Data Mahasiswa</li>
		</ol>
	</section>
	<section class="content">
		<div class="container">
			<button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><i
					class="fa fa-plus"></i>Tambah Data Mahasiswa</button>
			<table class="table">
				<thead class="thead-dark">
					<tr>
						<th>NO</th>
						<th>Nama MAHASISWA</th>
						<th>NIM</th>
						<th>Tanggal LAHIR</th>
						<th>JURUSAN</th>
					</tr>
				</thead>
				<tbody>
					<?php
                    $no = 1;
                    foreach ($mahasiswa as $mhs) :
                    ?>
					<tr class="table-secondary">
						<td><?php echo $no++ ?></td>
						<td><?php echo $mhs->nama ?></td>
						<td><?php echo $mhs->nim ?></td>
						<td><?php echo $mhs->tgl_lahir ?></td>
						<td><?php echo $mhs->jurusan ?></td>
					</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
		</div>
	</section>
	<!-- Button trigger modal -->
	<!-- Modal -->
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
		aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">From Input Data Mahasiswa</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form method="post" action="<?php echo base_url() . 'mahasiswa/tambah_aksi'; ?>">
						<div class="form-group">
							<label for="">Nama Mahasiswa</label>
							<input for="text" name="nama" class="form-control"></input>
						</div>
						<div class="form-group">
							<label for="">Nim</label>
							<input for="text" name="nim" class="form-control"></input>
						</div>
						<div class="form-group">
							<label for="">Tanggal Lahir</label>
							<input for="text" name="tgl_lahir" class="form-control" type="date"></input>
						</div>
						<div class="form-group">
							<label for="">Jurusan</label>
							<input for="text" name="jurusan" class="form-control"></input>
						</div>
						<button type="reset" class="btn btn-danger" data-dismiss="modal">Close</button>
						<button type="submit" class="btn btn-primary">Simpan</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
