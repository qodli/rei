<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php echo $title ?> | Rei</title>
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/global.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/style.css">
	
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	
</head>
<body class="<?php echo $title ?>">
	<div class="container width-80-nflot">
		<div class="content dashboard">
			<div class="header width-80 right">
				<div class="notif left width-20">
					<a href="#"><i class="fa fa-bell-o" aria-hidden="true"></i></a>
				</div>
				<div class="logo">
					<div class="centered">
						
						<a href=""><img src="<?php echo base_url() ?>assets/img/logo.png"></a>
					</div>
				</div>
			</div>
			<div class="menu-dashboard left width-20">
				<div class="menu-profile left width-100">
					<div class="profile-photo left width-40">
						<div class="img" style="background: url(<?php echo base_url() ?>assets/img/avatar-default.png) top center no-repeat; background-size: 100%; padding-bottom: 100%;">
							
						</div>
					</div>

					<div class="profile-name right width-50">
						<a href=""><h3><?php echo $this->session->userdata('name'); ?></h3></a>
					</div>
				</div>

				<div class="menu-list left width-100">
					<ul>
						<li>
							<a href="<?php echo base_url() ?>" <?php if ($title == 'Dashboard') {echo "class='active'";} ?>>
								<div class="ic">
									<i class="fa fa-home" aria-hidden="true"></i>
								</div>
								<div class="txt">
									DASHBOARD
								</div>
							</a>
						</li>
						<!-- <li>
							<a href="<?php echo base_url() ?>">
								<div class="ic">
									<i class="fa fa-user" aria-hidden="true"></i>
								</div>
								<div class="txt">
									PROFIL
								</div>
							</a>
						</li>
						 -->

						<li>
							<a href="<?php echo base_url() ?>data" <?php if ($title == 'Data') {echo "class='active'";} ?>>
								<div class="ic">
									<i class="fa fa-file-o" aria-hidden="true"></i>
								</div>
								<div class="txt">
									DATA
								</div>
							</a>
						</li>

						<li>
							<a href="<?php echo base_url() ?>proyek/terdaftar" <?php if ($title == 'Proyek') {echo "class='active'";} ?>>
								<div class="ic">
									<i class="fa fa-flag-o" aria-hidden="true"></i>
								</div>
								<div class="txt">
									PROYEK
								</div>
							</a>
						</li>
						<li>
							<a href="#">
								<div class="ic">
									<i class="fa fa-book" aria-hidden="true"></i>
								</div>
								<div class="txt">
									AGENDA
								</div>
							</a>
						</li>
						<li>
							<a href="#">
								<div class="ic">
									<i class="fa fa-info-circle" aria-hidden="true"></i>
								</div>
								<div class="txt">
									INFO
								</div>
							</a>
						</li>
						<li>
							<a href="<?php echo base_url() ?>logout">
								<div class="ic">
									<i class="fa fa-unlock" aria-hidden="true"></i>
								</div>
								<div class="txt">
									LOGOUT
								</div>
							</a>
						</li>



					</ul>


				</div>
			</div>
			<div class="content-dashboard right width-80">
				<?php echo $contents ?>
			</div>
		</div>
	</div>
</body>
</html>

<script>
	$(document).ready(mysize);
	$(window).on('resize',mysize);
	function mysize(){
		$('.menu-list').css({
			'height': $('.content-dashboard').height()
		});

	}
	
</script>