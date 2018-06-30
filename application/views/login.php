<!DOCTYPE html>
<html lang="en">
<head>
    <title>FarmHub | Home</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="<?= base_url() ;?>assets/css/reset.css" type="text/css" media="all">
    <link rel="stylesheet" href="<?= base_url() ;?>assets/css/layout.css" type="text/css" media="all">
    <link rel="stylesheet" href="<?= base_url() ;?>assets/css/style.css" type="text/css" media="all">
    <link rel="stylesheet" href="<?= base_url() ?>assets/boot/dist/css/bootstrap.min.css" type="text/css">
    <script type="text/javascript" src="<?= base_url() ;?>assets/js/jquery-1.6.js"></script>
    <script type="text/javascript" src="<?= base_url() ;?>assets/js/jquery.easing.1.3.js"></script>
    <script type="text/javascript" src="<?= base_url() ;?>assets/js/tms-0.3.js"></script>
    <script type="text/javascript" src="<?= base_url() ;?>assets/js/tms_presets.js"></script>
    <script type="text/javascript" src="<?= base_url() ;?>assets/js/script.js"></script>
</head>
<body id="page1">
    <div class="body1">
    <div class="main">
        <!--header -->
        <header>
        <div class="wrapper">
            <h1>FarmHub</h1>
            <h1><a href="<?= base_url('home/index');?>" id="logo"></a></a></h1>
            <nav>
            <ul id="menu">
                <li><a href="<?= base_url('home/index'); ?>">Home</a></li>
                <li><a href="<?= base_url() ;?>products.html">Products</a></li>
                <li><a href="<?= base_url() ;?>pricing.html">Pricing</a></li>
                <li><a href="<?= base_url() ;?>contact.html">Contact</a></li>
                <li class="active"><a href="<?= base_url('home/login') ;?>">Login</a></li>
            </ul>
            </nav>
        </div>
        <div class="col-md-6">
				<div class="card" style="margin-top: 10%;">
					<div class="card-body">

						<h3>Please login</h3><br>
						<form action="" method="POST" class="form-horizontal" role="form">
							<?php echo form_open('home/login'); ?>
						<div class="form-group">
              <?php echo form_error('username'); ?>
							<label class="control-label col-sm-3" for="username"><b>Username:</b></label>
							<div class="col-sm-10">
								<input type="text" name="username" value="<?php echo set_value('username'); ?>" id="username" placeholder="Username">
							</div>
						</div>

						<div class="form-group">
              <?php echo form_error('password'); ?>
							<label class="control-label col-sm-3" for="password"><b>Password:</b></label>
							<div class="col-sm-10">
								<input type="password"  name="password" value="<?php echo set_value('password'); ?>" id="password" placeholder="Enter password">
							</div>
						</div>

						<div class="form-group">
							<div class="col-sm-offset-2 col-sm-10">
								<div class="checkbox">
									<label><input type="checkbox" name="remember" id="remember"><b> Remember me</b></label>
								</div>
							</div>
						</div>

						<div class="form-group">
							<div class="col-sm-offset-2 col-sm-10">
								<button type="submit" class="btn btn-success">Sign in</button>
							</div>
						</div>
									<h5><i>Don't have an account?</i><a href="<?=base_url('home/signup') ?>"> Sign up here</a></h5><br />
								</form>
							</div>
						</div>
						<?php echo form_close(); ?>
					</div>

				</div>
			</div>

        </header>
        
</body>
</html>