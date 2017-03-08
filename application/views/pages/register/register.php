<form action="" method="post" autocomplete="off">
	<div class="form-group">
		<input type="text" name="name" placeholder="Nama Lengkap" autofocus required class="input">
	</div>
	<div class="form-group">
		<input type="email" name="email" placeholder="Email" required class="email">
	</div>
	<div class="form-group">
		<input type="password" name="password" placeholder="Password" required class="password">
	</div>
	<div class="form-group">
		<input type="password" name="re_password" placeholder="Verify Password" required class="con_password">
	</div>

	<div class="form-group">
		<input type="text" name="tlp" placeholder="Telepon" required class="input">
	</div>
	
	<div class="form-group">
	    <div class="btn-next">
	        <div class="right">
	            <input type="submit" class="btn login" name="register" value="Daftar">
	        </div>
	    </div>
	</div>
</form>

<div class="text-center">
	Apakah sudah punya akun? <a href="<?php echo base_url() ?>login">Masuk</a>
</div>





