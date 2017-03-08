
<form action="" method="post" autocomplete="off" enctype="multipart/form-data">
	<div class="border-margin-bottom">
		<div class="form-group">
	        <div class="txt margin-bottom-10">Data Proyek:</div>
	        <input type="text" name="DP_nama_proyek" placeholder="Nama Proyek" autofocus>
	    </div>
	    <div class="form-group">
	        <textarea name="DP_alamat_proyek" cols="30" rows="5" placeholder="Alamat Proyek"></textarea>
	    </div>
	    <div class="form-group">
            <div class="w-33">
                <input type="text" name="DP_rt_rw" placeholder="RT/RW">
            </div>
            <div class="w-33">
                <input type="text" name="DP_kelurahan_desa" placeholder="Kelurahan/Desa">
            </div>
            <div class="w-33">
                <input type="text" name="DP_kecamatan" placeholder="Kecamatan">
            </div>
        </div>
         <div class="form-group">
            <div class="w-33">
                <input type="text" name="DP_kota_kabupaten" placeholder="Kota/Kabupaten">
            </div>
            <div class="w-33">
                <input type="text" name="DP_kode_pos" placeholder="Kode Pos">
            </div>
            <div class="w-33">
                <input type="text" name="DP_provinsi" placeholder="Provinsi">
            </div>
        </div>

	</div>

	<div class="border-margin-bottom">
		<div class="form-group">
	        <div class="txt margin-bottom-10">
	            <span>Estimasi Proyek Dimulai:</span> 
	        </div>
	        <div class="w-100">
	            <input type="text" name="proyek_dimulai" placeholder="Bulan / Tahun">
	        </div>
	    </div>
	    <div class="form-group">
	        <div class="txt margin-bottom-10">
	            <span>Estimasi Proyek Selesai:</span> 
	        </div>
	        <div class="w-100">
	            <input type="text" name="proyek_selesai" placeholder="Bulan / Tahun">
	        </div>
	    </div>

    </div>



	<div class="border-margin-bottom">
		<div class="form-group">
	        <div class="txt margin-bottom-10">
	        	Apakah proyek ini sama dengan proyek pengembang lain?
	        </div>

	        <div class="w-30">
	        	<select name="PP_status">
	                <option value="1">YA</option>
	                <option value="0">TIDAK</option>
	            </select>
	        </div>
	        <div class="w-70">
	        	<input type="text" name="PP_nama_pengembang" placeholder="Nama Pengembang">
	        </div>
	    </div>

	    <!-- <div class="form-group">
	        <div class="w-50">
	        	<input type="text" name="PP_no_izin" placeholder="No. Izin Prinsip">
	        </div>
	        <div class="w-50">
	        	<input type="text" name="PP_pemberi_izin" placeholder="Pemberi Izin">
	        </div>
	    </div> -->
	</div>
	
	<div class="border-margin-bottom">
	     <div class="form-group">
	        <div class="txt margin-bottom-10">
	        	Ijin prinsip:
	        </div>
	    </div>
	    <div class="form-group form_izin">
			<ul class="office">
				<li><input type="text" name="IP_nama_izin[]" placeholder="Nama Ijin"></li>
				<li><input type="text" name="IP_no_izin[]" placeholder="Nomor Ijin"></li>
				<li><input type="text" name="IP_date[]" placeholder="Tanggal/Bulan/Tahun"></li>
				<li><input type="text" name="IP_keluarkan[]" placeholder="Dikeluarkan Oleh"></li>
				<li><a href="javascript:;" class="new-plus btn_izin">+</a></li>
			</ul>
		</div>
	</div>

	<div class="border-margin-bottom">
		<div class="form-group margin-bottom-30">
			<h2>Rumah Tidak Bersusun</h2>
		</div>
		<div class="form-group">
			<!-- Rumah Umum -->
			<ul class="title-house">
				<li>Rumah Umum</li>
				<li><input type="checkbox" class="btnRTB"></li>
			</ul>
			<div class="rumah-susun actionRTB" style="display: none;">
				<ul class="office">
					<li><input type="text" name="RTB_RU_luasan[]" placeholder="Luasan Unit"></li>
					<li><input type="text" name="RTB_RU_jml_unit[]" placeholder="Jumlah Unit"></li>
					<li><input type="text" name="RTB_RU_harga[]" placeholder="Harga Jual Rata-rata"></li>
					<li><a href="javascript:;" class="new-plus btn_rumah_umum">+</a></li>
				</ul>
			</div>

			
	    	<!-- end Rumah Umum -->

	    	<!-- Rumah Komersil -->
			<ul class="title-house margin-top-20">
				<li>Rumah Komersil</li>
				<li><input type="checkbox" class="btnRK"></li>
			</ul>
			<div class="rumah-susun actionRK" style="display: none;">
				<div class="form_RK">
					<ul class="office">
						<li><input type="text" name="RTB_RK_luasan[]" placeholder="Luasan Unit"></li>
						<li><input type="text" name="RTB_RK_jml_luasan[]" placeholder="Jumlah Unit"></li>
						<li><input type="text" name="RTB_RK_harga[]" placeholder="Harga Jual Rata-rata"></li>
						<li><a href="javascript:;" class="new-plus btn_RK">+</a></li>
					</ul>
				</div>
				<!-- <div class="form-group">
			        <div class="w-50">
			        	<input type="text" name="RTB_RK_no_pembetukan" placeholder="No. Pembentukan Himpunan Penghuni Rusun"> 
			        </div>
			        <div class="w-50">
			        	<input type="text" name="RTB_RK_no_pembetukan_tgl" placeholder="Tanggal"> 
			        </div>
			    </div>
			    <div class="form-group">
			        <div class="w-50">
			        	<input type="text" name="RTB_RK_no_ijin" placeholder="No. Ijin Layak Huni"> 
			        </div>
			        <div class="w-50">
			        	<input type="text" name="RTB_RK_no_ijin_tgl" placeholder="Tanggal"> 
			        </div>
			    </div> -->
			</div>
		    <!-- end Rumah Komersil -->
		</div>
	</div>



	<div class="border-margin-bottom">
		<div class="form-group margin-bottom-30">
			<h2>Rumah Susun</h2>
		</div>
		<div class="form-group">
			<!-- Rumah Susun Umum FLPP -->
			<ul class="title-house">
				<li>Rumah Susun Umum FLPP</li>
				<li><input type="checkbox" class="check_RS"></li>
			</ul>
			<div class="rumah-susun actionRS" style="display: none;">
				<ul class="office">
					<li><input type="text" name="RS_RSU_luasan[]" placeholder="Luasan Unit"></li>
					<li><input type="text" name="RS_RSU_jml_unit[]" placeholder="Jumlah Unit"></li>
					<li><input type="text" name="RS_RSU_harga[]" placeholder="Harga Jual Rata-rata"></li>
					<li><a href="javascript:;" class="new-plus btn_rumah_susun">+</a></li>
				</ul>
			</div>
	    	<!-- end Rumah Susun Umum FLPP -->

	    	<!-- Rumah Susun Komersil -->
			<ul class="title-house margin-top-20">
				<li>Rumah Susun Komersil</li>
				<li><input type="checkbox" class="check_RSK"></li>
			</ul>
			<div class="rumah-susun action_RSK" style="display: none;">
				<div class="form_RSK">
					<ul class="office">
						<li><input type="text" name="RS_RSK_luasan[]" placeholder="Luasan Unit"></li>
						<li><input type="text" name="RS_RSK_jml_unit[]" placeholder="Jumlah Unit"></li>
						<li><input type="text" name="RS_RSK_harga[]" placeholder="Harga Jual Rata-rata"></li>
						<li><a href="javascript:;" class="new-plus btn_RSK">+</a></li>
					</ul>
				</div>
				<!-- <div class="form-group">
			        <div class="w-50">
			        	<input type="text" name="RS_RSK_no_pembentukan" placeholder="No. Pembentukan Himpunan Penghuni Rusun"> 
			        </div>
			        <div class="w-50">
			        	<input type="text" name="RS_RSK_RS_RSK_no_pembentukan_tgl" placeholder="Tanggal"> 
			        </div>
			    </div>
			    <div class="form-group">
			        <div class="w-50">
			        	<input type="text" name="RS_RSK_RS_RSK_no_ijin" placeholder="No. Ijin Layak Huni"> 
			        </div>
			        <div class="w-50">
			        	<input type="text" name="RS_RSK_RS_RSK_no_ijin_tgl" placeholder="Tanggal"> 
			        </div>
			    </div> -->
			</div>
		    <!-- end Rumah Susun Komersil -->
		</div>
	</div>




	<div class="border-margin-bottom">
		<div class="form-group margin-bottom-30">
			<h2>Perkantoran / Pertokoan / Pergudangan / Kawasan Industri</h2>
		</div>
		<div class="form-group">
			<ul class="title-house">
				<li>Unit Perkantoran</li>
				<li><input type="checkbox" class="check_PPK_UK"></li>
				<!-- <li>Realisasi Sampai Tahun Berjalan</li> -->
			</ul>
			<div class="action_PPK_UK" style="display: none">
				<ul class="office">
					<li><input type="text" name="PPPK_UPK_luasan[]" placeholder="Luasan Unit"></li>
					<li><input type="text" name="PPPK_UPK_jml_unit[]" placeholder="Jumlah Unit"></li>
					<li><input type="text" name="PPPK_UPK_harga[]" placeholder="Harga Jual Rata-rata"></li>
					<li><a href="javascript:;" class="new-plus btn_PPK_UK">+</a></li>
				</ul>
			</div>
		</div>


		<div class="form-group">
			<ul class="title-house">
				<li>Unit Pertokoan</li>
				<li><input type="checkbox" class="check_PPK_UPT"></li>
				<!-- <li>Realisasi Sampai Tahun Berjalan</li> -->
			</ul>
			<div class="action_PPK_UPT" style="display: none">
				<ul class="office">
					<li><input type="text" name="PPPK_UPT_luasan[]" placeholder="Luasan Unit"></li>
					<li><input type="text" name="PPPK_UPT_jml_unit[]" placeholder="Jumlah Unit"></li>
					<li><input type="text" name="PPPK_UPT_harga[]" placeholder="Harga Jual Rata-rata"></li>
					<li><a href="javascript:;" class="new-plus btn_PPK_UPT">+</a></li>
				</ul>
			</div>
		</div>

		<div class="form-group">
			<ul class="title-house">
				<li>Unit Pergudangan</li>
				<li><input type="checkbox" class="check_PPK_UP"></li>
				<!-- <li>Realisasi Sampai Tahun Berjalan</li> -->
			</ul>
			<div class="action_PPK_UP" style="display: none">
				<ul class="office">
					<li><input type="text" name="PPPK_UP_luasan[]" placeholder="Luasan Unit"></li>
					<li><input type="text" name="PPPK_UP_jml_unit[]" placeholder="Jumlah Unit"></li>
					<li><input type="text" name="PPPK_UP_harga[]" placeholder="Harga Jual Rata-rata"></li>
					<li><a href="javascript:;" class="new-plus btn_PPK_UP">+</a></li>
				</ul>
			</div>
		</div>

		<div class="form-group">
			<ul class="title-house">
				<li>Kawasan Industri</li>
				<li><input type="checkbox" class="check_PPK_KI"></li>
				<!-- <li>Realisasi Sampai Tahun Berjalan</li> -->
			</ul>
			<div class="action_PPK_KI" style="display: none">
				<ul class="office">
					<li><input type="text" name="PPPK_KI_luasan[]" placeholder="Luasan Unit"></li>
					<li><input type="text" name="PPPK_KI_jml_unit[]" placeholder="Jumlah Unit"></li>
					<li><input type="text" name="PPPK_KI_harga[]" placeholder="Harga Jual Rata-rata"></li>
					<li><a href="javascript:;" class="new-plus btn_PPK_KI">+</a></li>
				</ul>
			</div>
		</div>
	</div>

    <div class="form-group">
        <div class="btn-next">
            <div class="left btn-plus">
                <li><a href="javasript:;" class="btn-get-form">+</a></li>
                <li><span>Tambah Proyek</span></li>
            </div>
            <div class="right">
                <input type="submit" class="btn next" name="register" value="Save & Next">
            </div>
        </div>
    </div>
</form>



<script>
			    $(document).ready(function(){
			        $('.btnRTB').on('click', function() {
			        	if($(this).is(":checked")) {
			             	$('.actionRTB').css('display', 'block');
			             }else{
			             	$('.actionRTB').css('display', 'none');
			             }
			        });
			        $('.btnRK').on('click', function() {
			        	if($(this).is(":checked")) {
			             	$('.actionRK').css('display', 'block');
			             }else{
			             	$('.actionRK').css('display', 'none');
			             }
			        });
			        $('.check_RS').on('click', function() {
			        	if($(this).is(":checked")) {
			             	$('.actionRS').css('display', 'block');
			             }else{
			             	$('.actionRS').css('display', 'none');
			             }
			        });

			        $('.check_RSK').on('click', function() {
			        	if($(this).is(":checked")) {
			             	$('.action_RSK').css('display', 'block');
			             }else{
			             	$('.action_RSK').css('display', 'none');
			             }
			        });

			        $('.check_PPK_UK').on('click', function() {
			        	if($(this).is(":checked")) {
			             	$('.action_PPK_UK').css('display', 'block');
			             }else{
			             	$('.action_PPK_UK').css('display', 'none');
			             }
			        });
			        $('.check_PPK_UPT').on('click', function() {
			        	if($(this).is(":checked")) {
			             	$('.action_PPK_UPT').css('display', 'block');
			             }else{
			             	$('.action_PPK_UPT').css('display', 'none');
			             }
			        });

			        $('.check_PPK_UP').on('click', function() {
			        	if($(this).is(":checked")) {
			             	$('.action_PPK_UP').css('display', 'block');
			             }else{
			             	$('.action_PPK_UP').css('display', 'none');
			             }
			        });
			        $('.check_PPK_KI').on('click', function() {
			        	if($(this).is(":checked")) {
			             	$('.action_PPK_KI').css('display', 'block');
			             }else{
			             	$('.action_PPK_KI').css('display', 'none');
			             }
			        });






			       
			        // append
			       $('.btn_izin').on('click', function() {
			             $('.form_izin').append('<ul class="office"><li><input type="text" name="IP_nama_izin[]" placeholder="Nama Ijin"></li><li><input type="text" name="IP_no_izin[]" placeholder="Nomor Ijin"></li><li><input type="text" name="IP_date[]" placeholder="Tanggal/Bulan/Tahun"></li><li><input type="text" name="IP_keluarkan[]" placeholder="Dikeluarkan Oleh"></li><li></li></ul>')
			        });


			        $('.btn_rumah_umum').on('click', function() {
			             $('.actionRTB').append('<ul class="office"><li><input type="text" name="RTB_RU_luasan[]" placeholder="Luasan Unit"></li><li><input type="text" name="RTB_RU_jml_unit[]" placeholder="Jumlah Unit"></li><li><input type="text" name="RTB_RU_harga[]" placeholder="Harga Jual Rata-rata"></li><li></li></ul>')
			        });
			        $('.btn_RK').on('click', function() {
			             $('.form_RK').append('<ul class="office"><li><input type="text" name="RTB_RK_luasan[]" placeholder="Luasan Unit"></li><li><input type="text" name="RTB_RK_jml_luasan[]" placeholder="Jumlah Unit"></li><li><input type="text" name="RTB_RK_harga[]" placeholder="Harga Jual Rata-rata"></li><li></li></ul>')
			        });


			        $('.btn_rumah_susun').on('click', function() {
			             $('.actionRS').append('<ul class="office"><li><input type="text" name="RS_RSU_luasan[]" placeholder="Luasan Unit"></li><li><input type="text" name="RS_RSU_jml_unit[]" placeholder="Jumlah Unit"></li><li><input type="text" name="RS_RSU_harga[]" placeholder="Harga Jual Rata-rata"></li><li></li></ul>')
			        });

			        $('.btn_RSK').on('click', function() {
			             $('.form_RSK').append('<ul class="office"><li><input type="text" name="RS_RSK_luasan[]" placeholder="Luasan Unit"></li><li><input type="text" name="RS_RSK_jml_unit[]" placeholder="Jumlah Unit"></li><li><input type="text" name="RS_RSK_harga[]" placeholder="Harga Jual Rata-rata"></li><li></li></ul>')
			        });


			        $('.btn_PPK_UK').on('click', function() {
			             $('.action_PPK_UK').append('<ul class="office"><li><input type="text" name="PPPK_UPK_luasan[]" placeholder="Luasan Unit"></li><li><input type="text" name="PPPK_UPK_jml_unit[]" placeholder="Jumlah Unit"></li><li><input type="text" name="PPPK_UPK_harga[]" placeholder="Harga Jual Rata-rata"></li><li></li></ul>')
			        });


			        $('.btn_PPK_UPT').on('click', function() {
			             $('.action_PPK_UPT').append('<ul class="office"><li><input type="text" name="PPPK_UPT_luasan[]" placeholder="Luasan Unit"></li><li><input type="text" name="PPPK_UPT_jml_unit[]" placeholder="Jumlah Unit"></li><li><input type="text" name="PPPK_UPT_harga[]" placeholder="Harga Jual Rata-rata"></li><li></li></ul>')
			        });

			         $('.btn_PPK_UP').on('click', function() {
			             $('.action_PPK_UP').append('<ul class="office"><li><input type="text" name="PPPK_UP_luasan[]" placeholder="Luasan Unit"></li><li><input type="text" name="PPPK_UP_jml_unit[]" placeholder="Jumlah Unit"></li><li><input type="text" name="PPPK_UP_harga[]" placeholder="Harga Jual Rata-rata"></li><li></li></ul>')
			        });

			          $('.btn_PPK_KI').on('click', function() {
			             $('.action_PPK_KI').append('<ul class="office"><li><input type="text" name="PPPK_KI_luasan[]" placeholder="Luasan Unit"></li><li><input type="text" name="PPPK_KI_jml_unit[]" placeholder="Jumlah Unit"></li><li><input type="text" name="PPPK_KI_harga[]" placeholder="Harga Jual Rata-rata"></li><li></li></ul>')
			        });





			        // end append


			    })
			</script>