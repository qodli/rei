<div class="content login">
		<div class="login-logo width-47 left">
			<div class="centered">
				<img src="<?php echo base_url() ?>assets/img/rei-big.png">
			</div>
		</div>

	<div class="login-form width-47 right">	
		<form action="" method="post" autocomplete="off">
			<div class="title-login">
				<span>DAFTAR ULANG ANGGOTA REI</span>
				<?php if (isset($_GET['failed'])): ?>
					<div class="failed-action">
						Email atau Password Anda Salah!!
					</div>	
				<?php endif ?>
			</div>

			<div class="form-group">
				<input type="email" name="email" placeholder="Email" autofocus <?php if (isset($_GET['failed'])) {echo "class='failed'";} ?>>
			</div>
			<div class="form-group">
				<input type="password" name="password" placeholder="Password"  <?php if (isset($_GET['failed'])) {echo "class='failed'";} ?>>
			</div>
			
			<div class="form-group">
		        <div class="btn-next">
		            <div class="left">
		                <input type="submit" class="btn login" name="login" value="Masuk">
		            </div>
		        </div>
		    </div>
		</form>

		<div class="text-center">
			Apakah belum punya akun? <a href="<?php echo base_url() ?>register">Daftar</a>
		</div>
	</div>
</div>