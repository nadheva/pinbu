<div class="main">
	<!-- MAIN CONTENT -->
	<div class="main-content">
		<div class="container-fluid">
			<!-- OVERVIEW -->
			<!-- END OVERVIEW -->
			<!-- RECENT PURCHASES -->
			<div class="panel">
				<div class="panel-heading">
					<h3>Detail Buku</h3>
					<table class="table">
						<tbody>
							<?php foreach ($buku as $book) : ?>
								<tr>
									<th scope="row">ID</th>
									<td><?= $book['ID_Buku']; ?></td>
								</tr>
								<tr>
									<th scope="row">Judul Buku</th>
									<td><?= $book['Judul']; ?></td>
								</tr>
								<tr>
									<th scope="row">Pengarang</th>
									<td><?= $book['Pengarang']; ?></td>
								</tr>
								<tr>
									<th scope="row">Penerbit</th>
									<td><?= $book['Penerbit']; ?></td>
								</tr>
								<tr>
									<th scope="row">Genre</th>
									<td><?= $book['Genre']; ?></td>
								</tr>
								<tr>
									<th scope="row">Terbit</th>
									<td><?= $book['Tahun']; ?></td>
								</tr>
								<tr>
									<th scope="row">Status</th>
									<td><?= $book['status']; ?></td>
								</tr>
								<tr>
									<th scope="row">Gambar</th>
									<td><img src="<?= base_url(); ?>/assets/Gambar/<?= $book['gambar']; ?>" width="150"></td>
								</tr>
								<tr>
									<th scope="row">
										<a style="margin-top: 20px;" href="<?= base_url(); ?>buku" class="btn btn-primary">Back</a>
									</th>
									<td></td>
								</tr>
							<?php endforeach; ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
		<!-- END CONTAINER-FLUID -->
	</div>
	<!-- END MAIN CONTENT -->
</div>
