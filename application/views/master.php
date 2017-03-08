<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php echo $title ?> | Rei</title>
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/style-reg.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/global.css">
	<!-- <script src="//code.jquery.com/jquery-1.10.2.js"></script> -->
	<script src="<?php echo base_url() ?>assets/js/jquery-1.10.2.js"></script>
	<script src="<?php echo base_url() ?>assets/js/rei-script.js"></script>
	
</head>
<body class="<?php echo $title ?>">
<div class="container">
	<div class="content login width-100">
		<div class="container">
			<div class="header width-100">
				<div class="logo-header left">
					<a href="<?php echo base_url() ?>">
						<img src="<?php echo base_url() ?>assets/img/logo.png">
					</a>
				</div>
				<div class="title-step">
					<div class="title-header width-70">
						<h3><?php echo $title ?></h3>
					</div>
					<?php $this->load->view('pages/register/step'); ?>
				</div>
			</div>


			<?php echo $contents ?>


		</div>
	</div>
</div> 
</body>
</html>

