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
					foreach ($buku as $book) :
						$hidden = array('ID' => $book['ID_Buku']); ?>
						<?php echo form_open('buku/accData', '', $hidden); ?>
						<div class="card">
							<h3 class="card-header">Form Edit Data</h3>
							<div class="card-body">
								<?php if (validation_errors()) : ?>
									<div class="alert alert-danger" role="alert">
										<?= validation_errors(); ?>
									</div>
								<?php endif; ?>
								<table class="table">
									<tbody>
										<tr>
											<th scope="row"><?php echo form_label('ID', 'ID'); ?></th>
											<td>
												<?php
												$data = array(
													'style'         => 'width:100%;',
													'class'         => 'form-control',
													'value'         => $book['ID_Buku'],
													'disabled'      => TRUE
												);
												echo form_input($data);
												?>
											</td>
										</tr>
										<tr>
											<th scope="row"><?php echo form_label('Judul', 'Judul'); ?></th>
											<td>
												<?php
												$data = array(
													'name'          => 'Judul',
													'style'         => 'width:100%;',
													'class'         => 'form-control',
													'value'         => $book['Judul']
												);
												echo form_input($data);
												?>
											</td>
										</tr>
										<tr>
											<th scope="row"><?php echo form_label('Pengarang', 'Pengarang'); ?></th>
											<td>
												<?php $data = array(
													'name'          => 'Pengarang',
													'maxlength'     => '100',
													'style'         => 'width:100%;',
													'class'         => 'form-control',
													'value'         => $book['Pengarang']
												);
												echo form_input($data);
												?>
											</td>
										</tr>
										<tr>
											<th scope="row"><?php echo form_label('Penerbit', 'Penerbit'); ?></th>
											<td>
												<?php $data = array(
													'name'          => 'Penerbit',
													'maxlength'     => '100',
													'style'         => 'width:100%;',
													'class'         => 'form-control',
													'value'         => $book['Penerbit']
												);
												echo form_input($data);
												?>
											</td>
										</tr>
										<tr>
											<th scope="row"><?php echo form_label('Genre', 'Genre'); ?></th>
											<td>
												<?php foreach ($genre as $list) :
													$option[$list['kd_genre']] = $list['Genre'];
													if ($list['kd_genre'] == $book['Genre']) :
														$genre = $book['Genre'];
														$style = array(
															'style'         => 'width:100%;',
															'class'         => 'form-control',
															'selected'      => TRUE
														);
													else :
														$genre = $book['Genre'];
														$style = array(
															'style'         => 'width:100%;',
															'class'         => 'form-control',
														);
													endif;
												endforeach;
												echo form_dropdown('Genre', $option, $genre, $style);
												?>
											</td>
										</tr>
										<tr>
											<th scope="row"><?php echo form_label('Terbit', 'Terbit'); ?></th>
											<td>
												<?php $data = array(
													'type'          => 'date',
													'name'          => 'Tahun',
													'maxlength'     => '100',
													'style'         => 'width:100%;',
													'class'         => 'form-control',
													'value'         => $book['Tahun']
												);
												echo form_input($data);
												?>
											</td>
										</tr>
										<!-- <tr>
											<th scope="row"><?php echo form_label('Harga', 'Harga'); ?></th>
											<td>
												<?php $data = array(
													'name'          => 'Harga',
													'maxlength'     => '100',
													'style'         => 'width:100%;',
													'class'         => 'form-control',
													'value'         => $book['Harga']
												);
												echo form_input($data);
												?>
											</td>
										</tr> -->
										<tr>
											<th scope="row"></th>
											<td>
												<a href="<?= base_url(); ?>buku" class="btn btn-danger">Cancel</a>
												<?php
												$data = array(
													'type'          => 'submit',
													'name'          => 'submit',
													'value'          => 'Update',
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
					<?php endforeach; ?>
				</div>
			</div>
		</div>
		<!-- END CONTAINER-FLUID -->
	</div>
	<!-- END MAIN CONTENT -->
</div>
