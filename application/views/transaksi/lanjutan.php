<div class="main">
	<!-- MAIN CONTENT -->
	<div class="main-content">
		<div class="container-fluid">
			<!-- OVERVIEW -->
			<!-- END OVERVIEW -->
			<!-- RECENT PURCHASES -->
			<div class="panel">
				<div class="panel-body">
					<?php
					// $hidden = array('Aktif' => 'Aktif'), '', $hidden;
					echo form_open('transaksi/submit'); ?>
					<div class="card">
						<h3 class="card-header">Form Lanjutan Peminjaman</h3>
						<div class="card-body">
							<?php if (validation_errors()) : ?>
								<div class="alert alert-danger" role="alert">
									<?= validation_errors(); ?>
								</div>
							<?php endif; ?>
							<?php foreach ($this->cart->contents() as $items) : ?>
								<!-- <td><?= $items['qty'] ?></td> -->
								<div class="alert alert-info" role="alert">
									Buku : <?= $items['name'] ?> </br> Qty : <?= $items['qty'] ?>
								</div>
								</tr>
							<?php endforeach ?>
							<table class="table">
								<tbody>
									<tr>
										<th scope="row"><?php echo form_label('Nama', 'Nama'); ?></th>
										<td>
											<?php foreach ($member as $list) :
												$option[$list['Nama']] = $list['Nama'];
												endforeach ;
													$member = set_value('Nama');
													$style = array(
														'style'         => 'width:100%;',
														'class'         => 'form-control',
													);
											echo form_dropdown('Nama', $option, $member, $style);
											?>
										</td>
									</tr>
									<!-- <tr>
										<th scope="row"><?php echo form_label('Nama', 'Nama'); ?></th>
										<td>
											<?php
											$data = array(
												'name'          => 'Nama',
												'style'         => 'width:100%;',
												'class'         => 'form-control'
											);
											echo form_input($data);
											?>
										</td>
									</tr> -->
									<tr>
										<th scope="row"></th>
										<td>
											<?php
											$data = array(
												'type'          => 'submit',
												'name'          => 'submit',
												'value'          => 'Pinjam',
												'class'         => 'btn btn-primary float-end'
											);

											echo form_input($data);
											?>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
					</form>
				</div>
			</div>
		</div>
		<!-- END CONTAINER-FLUID -->
	</div>
	<!-- END MAIN CONTENT -->
</div>
