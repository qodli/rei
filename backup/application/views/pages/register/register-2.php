
<form action="" method="post" autocomplete="off" enctype="multipart/form-data">
	<div class="form-group form-one border-bottom">
		<div class="txt">
			Direksi Perusahaan:
		</div>
		<div class="form-plus">
			<li class="w-50-plus"><input type="text" name="nama_direksi[]" placeholder="Nama Direktur" autofocus></li>
			<li class="w-50-plus"><input type="text" name="jabatan_direksi[]" placeholder="Jabatan Direktur" autofocus></li>
			<!-- <li class="plus"><a href="javascript:;" class="btn-one">+</a></li> -->
		</div>
	</div>
	
	<div class="form-group form-two border-bottom">
		<div class="txt">
			Komisaris Perusahaan:
		</div>
		
		<div class="form-plus">
			<li class="w-50-plus"><input type="text" name="nama_komisaris[]" placeholder="Nama Komisaris" autofocus></li>
			<li class="w-50-plus"><input type="text" name="jabatan_komisaris[]" placeholder="Jabatan Komisaris" autofocus></li>
			<!-- <li class="plus"><a href="javascript:;" class="btn-two">+</a></li> -->
		</div>
	</div>

	<div class="form-group form-three border-bottom">
		<div class="txt">
			Pemegang Saham Perusahaan:
		</div>
		<div class="radio">
            <input type="radio" name="no_anggota" class="btn_tbk"> TBK
            <input type="radio" name="no_anggota" class="btn_ntbk" checked> Non-TBK
        </div>
        
        <div class="form-plus margin-top-10 ntbk">
			<li><input type="text" name="klasifikasi_perusahaan[]" placeholder="Nama Pemegang Saham"></li>
			<!-- <li class="plus"><a href="javascript:;" class="btn-three">+</a></li> -->
		</div>
	</div>

	<div class="form-group new-btn">
		<div class="btn-next">
	        <div class="right">
	            <input type="submit" class="btn next" name="register" value="Save & Next">
	        </div>
	    </div>
	</div>

</form>



<script>
    $(document).ready(function(){
        $('.btn-one').on('click', function() {
             $('.form-one').append('<div class="form-plus"><li class="w-50-plus"><input type="text" name="nama_direktur[]" placeholder="Nama Direktur" autofocus></li><li class="w-50-plus"><input type="text" name="jabatan_direktur[]" placeholder="Jabatan Direktur" autofocus></li></div>')
        });
        $('.btn-two').on('click', function() {
             $('.form-two').append('<div class="form-plus"><li class="w-50-plus"><input type="text" name="nama_komisaris[]" placeholder="Nama Komisaris" autofocus></li><li class="w-50-plus"><input type="text" name="jabatan_komisaris[]" placeholder="Jabatan Komisaris" autofocus></li></div>')
        });
        $('.btn-three').on('click', function() {
             $('.form-three').append('<div class="form-plus"> <li><input type="text" name="company-saham" placeholder="Nama Pemegang Saham"></li></div>')
        });
        
        $('.btn_tbk').on('click', function() {
             $('.ntbk input').attr('value', 'publik');
             $('.ntbk input').attr('readonly', '');
             $('.ntbk input').removeAttr('placeholder');
             $('.ntbk li.plus').css('display', 'none');
        });

        $('.btn_ntbk').on('click', function() {
             $('.ntbk input').removeAttr('value', '');
             $('.ntbk input').removeAttr('readonly', '');
             $('.ntbk input').attr('placeholder', 'Nama Pemegang Saham');
             $('.ntbk li.plus').css('display', 'block');
        });




    })
</script>