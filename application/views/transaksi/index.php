<div class="main">
	<!-- MAIN CONTENT -->
	<div class="main-content">
		<div class="container-fluid">
			<!-- OVERVIEW -->
			<!-- END OVERVIEW -->
			<!-- RECENT PURCHASES -->
			<div class="panel">
				<h2 class="panel-title text-center" style="font-size: 20px; font-weight: bold; margin-top: 30px; color:black;">Market</h2>
				<div class="row" style="margin-top: 50px;">
					<?php foreach ($transaksi as $row) : ?>
						<div class="col-md-3">
							<div class="card" style="padding-left: 30px;" style="width: 26rem;">
								<div class="thumbnail">
									<img width="100" src="<?php echo base_url() . 'assets/Gambar/' . $row->gambar; ?>">
									<div class="caption">
										<h4 class="card-title" style="text-align: center; font-weight:bold;"><?php echo $row->Judul ?></h4>
										<!-- <p class="card-text" style="text-align: center;"><small class="text-muted"><?php echo "Rp " . number_format($row->Harga) ?></small></p> -->
										<div class="row">
											<!-- <div class="col-md-4">
												<p class="card-text"><small class="text-muted"><?php echo "Rp " . number_format($row->Harga) ?></small></p>
											</div> -->
											<!-- <div class="col-md-12">
												<input type="number" name="quantity" id="<?php echo $row->ID_Buku; ?>" value="1" class="quantity form-control">
											</div> -->
										</div>
										</br>
										<?= anchor('transaksi/add_to_cart/' . $row->ID_Buku, '<div class="btn btn-block btn-primary">Add To Cart</div>') ?>
										<!-- <button class="add_cart btn btn-success btn-block" data-ID_Buku="<?php echo $row->ID_Buku; ?>" data-Judul="<?php echo $row->Judul; ?>" data-Harga="<?php echo $row->Harga; ?>">Add To Cart</button> -->
									</div>
								</div>
							</div>
						</div>
					<?php endforeach ?>
				</div>
			</div>
			<!-- END CONTAINER-FLUID -->
		</div>
		<!-- END MAIN CONTENT -->
	</div>
</div>
