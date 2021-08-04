<!doctype html>
<html lang="en" class="fullscreen-bg">

<head>
	<title><?= $judul; ?></title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="<?= base_url(); ?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?= base_url(); ?>assets/vendor/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?= base_url(); ?>assets/vendor/linearicons/style.css">
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
		<div class="vertical-align-wrap">
			<div class="vertical-align-middle">
				<div class="auth-box ">
					<div class="left">
						<div class="content">
							<div class="header">
								<div class="logo text-center"><img src="<?= base_url(); ?>assets/img/logo-dark.png" alt="Klorofil Logo"></div>
								<p class="lead">Register</p>
							</div>
							<?php echo form_open('register'); ?>
							<div class="form-group">
								<label class="control-label sr-only">Nama</label>
								<input type="text" class="form-control" name="nama" value="<?php echo set_value('nama'); ?>" placeholder="Nama Lengkap" />
							</div>
							<div class="form-group">
								<label class="control-label sr-only">Email</label>
								<input type="text" class="form-control" name="email" value="<?php echo set_value('email'); ?>" placeholder="Email" />
							</div>
							<div class="form-group">
								<label class="control-label sr-only">Username</label>
								<input type="text" class="form-control" name="username" value="<?php echo set_value('username'); ?>" placeholder="Username" />
							</div>
							<!-- <div class="form-group">
								<label class="control-label sr-only">Level</label>
								<select class="form-control" name="level">
									<option value="">--Pilih Level--</option>
									<option value="Admin">Admin</option>
									<option value="User">User</option>
								</select>
							</div> -->
							<div class="form-group">
								<label class="control-label sr-only">Password</label>
								<input type="password" class="form-control" name="password" value="<?php echo set_value('password'); ?>" placeholder="Password" />
							</div>
							<input type="submit" name="btnSubmit" value="Register" class="btn btn-primary btn-lg btn-block" />
							<?php echo form_close(); ?>
						</div>
					</div>
					<div class="right">
						<div class="overlay"></div>
						<div class="content text">
							<h1 class="heading">Free Bootstrap dashboard template</h1>
							<p>by The Develovers</p>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>
	<!-- END WRAPPER -->
</body>

</html>
