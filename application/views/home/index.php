<div class="main">
	<!-- MAIN CONTENT -->
	<div class="main-content">
		<div class="container-fluid">
			<!-- OVERVIEW -->
			<!-- END OVERVIEW -->
			<!-- RECENT PURCHASES -->
			<div class="panel">
				<div class="panel-heading">
					<h3 class="panel-title">Perpustakaan</h3>
				</div>
			</div>
			<div class="panel">
				<div class="panel-heading">
					<h3 class="panel-title">Data Transaksi</h3>
				</div>
				<div class="panel-body">
					<table class="table">
						<thead>
							<tr>
								<th scope="col">ID Transaksi</th>
								<th scope="col">Nama Peminjam</th>
								<th scope="col">Judul Buku</th>
								<th scope="col">Tanggal Pinjam</th>
								<th scope="col">Tanggal Kembali</th>
								<th scope="col">Kuantitas</th>
								<th scope="col">Status</th>
								<th scope="col">Aksi</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($transaksi as $list) : ?>
								<tr>
									<td><?= $list['id_transaksi']; ?></td>
									<td><?= $list['pembeli']; ?></td>
									<td>
										<?= $list['Judul']; ?>
									</td>
									<td>
										<?= $list['tgl_pinjam']; ?>
									</td>
									<td>
										<?= $list['tgl_kembali']; ?>
									</td>
									<td>
										<?= $list['qty']; ?>
									</td>
									<td>
										<?= $list['stat']; ?>
									</td>
									<td>
										<?php if ($list['stat'] == "Meminjam") : ?>
											<a href="<?= base_url(); ?>transaksi/kembali/<?= $list['id_transaksi']; ?>" class="btn btn-danger">Kembali</a>
										<?php else : ?>
											<button href="<?= base_url(); ?>transaksi/kembali/<?= $list['id_transaksi']; ?>" class="btn btn-danger" disabled>Kembali</button>
										<?php endif; ?>

									</td>
								</tr>
							<?php endforeach; ?>
						</tbody>
					</table>
				</div>
			</div>
			<div class="panel" style="background-color: #5bc0de;">
				<h2 class="panel-title text-center" style="font-size: 30px; font-weight: bold; margin-top: 30px; color:black;">Persebaran Anggota</h2>
				<div class="row" style="margin-top: 50px;">
					<div class="col-md-1">
					</div>
					<div class="col-md-5">
						<div class="panel">
							<div class="panel-body">
								<h3 class="panel-title text-center">Data Anggota Berdasar Gender</h3>
								<div id="Gender"></div>
							</div>
						</div>
					</div>
					<div class="col-md-5">
						<div class="panel">
							<div class="panel-body">
								<h3 class="panel-title text-center">Data Anggota Berdasar Kewarganegaraan</h3>
								<div id="negara"></div>
							</div>
						</div>
					</div>
					<div class="col-md-1">
					</div>
				</div>
				<div class="row">
					<div class="col-md-3">
					</div>
					<div class="col-md-6">
						<div class="panel">
							<div class="panel-body">
								<h3 class="panel-title text-center">Data Anggota Berdasar Status</h3>
								<div id="status"></div>
							</div>
						</div>
					</div>
					<div class="col-md-3">
					</div>
				</div>
			</div>

			<div class="panel" style="background-color: #5bc0de;">
				<h2 class="panel-title text-center" style="font-size: 30px; font-weight: bold; margin-top: 30px; color:black;">Persebaran Buku</h2>
				<div class="row" style="margin-top: 50px;">
					<div class="col-md-1">
					</div>
					<div class="col-md-10">
						<div class="panel">
							<div class="panel-body">
								<h3 class="panel-title text-center">Data Buku Berdasar Genre</h3>
								<div style="height: 500px; width: 800px;" id="Genre"></div>
							</div>
						</div>
					</div>
					<div class="col-md-1">
					</div>
				</div>
			</div>
		</div>
		<!-- END CONTAINER-FLUID -->
	</div>
	<!-- END MAIN CONTENT -->
</div>
