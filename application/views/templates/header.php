<!doctype html>
<html lang="en">

<head>
	<title><?= $judul; ?></title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="<?= base_url(); ?>assets/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?= base_url(); ?>assets/vendor/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?= base_url(); ?>assets/vendor/linearicons/style.css">
	<link rel="stylesheet" href="<?= base_url(); ?>assets/vendor/chartist/css/chartist-custom.css">
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="<?= base_url(); ?>assets/css/main.css">
	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<link rel="stylesheet" href="<?= base_url(); ?>assets/css/demo.css">
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="<?= base_url(); ?>assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="<?= base_url(); ?>assets/img/favicon.png">
</head>

<body>
	<!-- WRAPPER -->
	<div id="wrapper">
		<!-- NAVBAR -->
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="brand">
				<a href="<?= base_url(); ?>"><img src="<?= base_url(); ?>assets/img/logo-dark.png" alt="Klorofil Logo" class="img-responsive logo"></a>
			</div>
			<div class="container-fluid">
				<div class="navbar-btn">
					<button type="button" class="btn-toggle-fullwidth"><i class="lnr lnr-arrow-left-circle"></i></button>
				</div>
				<form class="navbar-form navbar-left">
					<div class="input-group">
						<input type="text" value="" class="form-control" placeholder="Search dashboard...">
						<span class="input-group-btn"><button type="button" class="btn btn-primary">Go</button></span>
					</div>
				</form>
				<!--<div class="navbar-btn navbar-btn-right">
                    <a class="btn btn-success update-pro" href="#" title="Upgrade to Pro"><i class="fa fa-rocket"></i> <span>UPGRADE TO PRO</span></a>
                </div>-->
				<div id="navbar-menu">
					<ul class="nav navbar-nav navbar-right">
						<li class="dropdown">
							<a href="#" class="dropdown-toggle icon-menu" data-toggle="dropdown">
								<i class="lnr lnr-cart"></i>
								<span class="badge bg-danger"><?php echo $keranjang = $this->cart->total_items() ?></span>
							</a>
							<ul class="dropdown-menu notifications" style="width: 500px;">
								<div class="panel">
									<div class="panel-body">
										<h6>Shopping Cart</h6>
										<table class="table table-striped">
											<thead>
												<tr>
													<th>Produk</th>
													<!-- <th>Harga</th> -->
													<th>Qty</th>
													<!-- <th>Subtotal</th> -->
													<th>Aksi</th>
												</tr>
											</thead>
											<tbody>
												<?php foreach ($this->cart->contents() as $items) : ?>
													<tr>
														<td><?= $items['name'] ?></td>
														<!-- <td><?= number_format($items['price']) ?></td> -->
														<td><?= $items['qty'] ?></td>
														<!-- <td><?= number_format($items['subtotal']) ?></td> -->
														<td>
															<a href="<?= base_url() ?>transaksi/hapus_cart/<?= $items['rowid']; ?>">
																<div class="btn btn-sm btn-danger">Batal</div>
															</a>
														</td>
													</tr>
												<?php endforeach ?>
												<!-- <tr>
													<th>Total</th>
													<td></td>
													<td></td>
													<td>Rp <?= number_format($this->cart->total()) ?></td>
												</tr> -->
												<tr>
													<th>
														<a href="<?= base_url() ?>transaksi/lanjutan/">
															<div class="btn btn-sm btn-primary">Lanjutkan Peminjaman</div>
														</a>
													</th>
													<td></td>
													<td></td>
													<td></td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</ul>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="lnr lnr-question-circle"></i> <span>Help</span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
							<ul class="dropdown-menu">
								<li><a href="#">Basic Use</a></li>
								<li><a href="#">Working With Data</a></li>
								<li><a href="#">Security</a></li>
								<li><a href="#">Troubleshooting</a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><span><?php echo ucfirst($this->session->userdata('nama')); ?></span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
							<ul class="dropdown-menu">
								<li><a href="#"><i class="lnr lnr-user"></i> <span>My Profile</span></a></li>
								<li><a href="#"><i class="lnr lnr-envelope"></i> <span>Message</span></a></li>
								<li><a href="#"><i class="lnr lnr-cog"></i> <span>Settings</span></a></li>
								<li><a href="<?= base_url('login/logout'); ?>"><i class="lnr lnr-exit"></i> <span>Logout</span></a></li>
							</ul>
						</li>
						<!-- <li>
							<a class="update-pro" href="https://www.themeineed.com/downloads/klorofil-pro-bootstrap-admin-dashboard-template/?utm_source=klorofil&utm_medium=template&utm_campaign=KlorofilPro" title="Upgrade to Pro" target="_blank"><i class="fa fa-rocket"></i> <span>UPGRADE TO PRO</span></a>
						</li> -->
					</ul>
				</div>
			</div>
		</nav>
		<!-- END NAVBAR -->
		<!-- LEFT SIDEBAR -->
		<div id="sidebar-nav" class="sidebar">
			<div class="sidebar-scroll">
				<nav>
					<ul class="nav">
						<li><a href="<?= base_url(); ?>home" class="active"><i class="lnr lnr-home"></i> <span>Dashboard</span></a></li>
						<li>
							<a href="#subPages" data-toggle="collapse" class="collapsed"><i class="lnr lnr-book"></i> <span>Book</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
							<div id="subPages" class="collapse ">
								<ul class="nav">
									<li><a href="<?= base_url() ?>buku/tambahdata" class="">Add Book</a></li>
									<li><a href="<?= base_url(); ?>buku" class="">Show Book</a></li>
								</ul>
							</div>
						</li>
						<li>
							<a href="#subPages1" data-toggle="collapse" class="collapsed"><i class="lnr lnr-user"></i> <span>Members</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
							<div id="subPages1" class="collapse ">
								<ul class="nav">
									<li><a href="<?= base_url() ?>anggota/tambahdata" class="">Add Member</a></li>
									<li><a href="<?= base_url(); ?>anggota" class="">Show Member</a></li>
								</ul>
							</div>
						</li>
						<li><a href="<?= base_url(); ?>transaksi"><i class="lnr lnr-cart"></i> <span>Peminjaman</span></a></li>
					</ul>
				</nav>
			</div>
		</div>
