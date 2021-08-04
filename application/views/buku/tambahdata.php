<div class="main">
	<!-- MAIN CONTENT -->
	<div class="main-content">
		<div class="container-fluid">
			<!-- OVERVIEW -->
			<!-- END OVERVIEW -->
			<!-- RECENT PURCHASES -->
			<div class="panel">
				<div class="panel-body">
					<?php echo form_open_multipart('buku/tambahData'); ?>
					<div class="card">
						<h3 class="card-header">Form Tambah Data</h3>
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
												'name'          => 'ID',
												'style'         => 'width:100%;',
												'class'         => 'form-control',
												'value'         => set_value('ID')
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
												'value'         => set_value('Judul')
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
												'value'         => set_value('Pengarang')
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
												'value'         => set_value('Penerbit')
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
											endforeach;
											$genre = set_value('Genre');
											$style = array(
												'style'         => 'width:100%;',
												'class'         => 'form-control',
											);
											echo form_dropdown('Genre', $option, $genre, $style)
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
												'value'         => set_value('Tahun')
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
												'value'         => set_value('Harga')
											);
											echo form_input($data);
											?>
										</td>
									</tr> -->
									<tr>
										<th scope="row"><?php echo form_label('Gambar', 'Gambar'); ?></th>
										<td>
											<?php $data = array(
												'type'          => 'file',
												'name'          => 'gambar',
												'class'         => 'form-control',
											);
											echo form_input($data);
											?>
										</td>
									</tr>
									<tr>
										<th scope="row"></th>
										<td>
											<?php
											$data = array(
												'type'          => 'submit',
												'name'          => 'submit',
												'value'          => 'Submit',
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
