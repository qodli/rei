<h1 class="text-center" style="font-size: 1.5pc; color: #000">
	CEK EMAIL ANDA DAN KLIK VERIFIKASI UNTUK MENGAKTIFKAN AKUN ANDA
</h1>

<a href="#" class="centered">
	Kirim Ulang
</a>


<?php 
	$getUser = $this->db->get_where('user', array('email' => $this->session->userdata('email')));

	$email = base64_encode($getUser->first_row()->email);
	$code = base64_encode($getUser->first_row()->code_verification);
	$date = base64_encode($getUser->first_row()->date_verification);
 ?>


 <a href="<?php echo base_url() ?>verifikasi/aktif?m=<?php echo $email ?>&c=<?php echo $code ?>&d=<?php echo $date ?>" class="centered">
	Aktif
</a>
