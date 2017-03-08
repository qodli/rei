
<form action="" method="post" autocomplete="off" enctype="multipart/form-data">

     <div class="form-group">
        <div class="w-50">
            <div class="radio no-margin-top">
                <div class="w-100">
                    <input type="radio" name="no_anggota" class="btn_no"> Pendaftaran Baru Anggota
                </div>
                <div class="w-100">
                    <input type="radio" name="no_anggota" class="btn_ya" checked> Pendaftaran Ulang Anggota
                </div>
            </div>
        </div>
        <div class="w-50 no-anggota no-margin-bottom">
            <input type="text" name="no_anggota_rei" placeholder="Nomor Anggota REI" autofocus>
        </div>
    </div>


    <div class="get-form">
        <div class="container-2">
            <div class="form-group">
                <input type="text" name="nama_perusahaan[]" placeholder="Nama Perusahaan" required>
            </div>
            <div class="form-group">
                <textarea name="alamat_perusahaan[]" cols="30" rows="5" placeholder="Alamat Perusahaan" required></textarea>
            </div>
            <div class="form-group">
                <div class="w-33">
                    <input type="text" name="rt_rw[]" placeholder="RT/RW" required>
                </div>
                <div class="w-33">
                    <input type="text" name="kelurahan_desa[]" placeholder="Kelurahan/Desa" required>
                </div>
                <div class="w-33">
                    <input type="text" name="kecamatan[]" placeholder="Kecamatan" required>
                </div>
            </div>
             <div class="form-group">
                <div class="w-33">
                    <input type="text" name="kota_kabupaten[]" placeholder="Kota/Kabupaten" required>
                </div>
                <div class="w-33">
                    <input type="text" name="kodepos[]" placeholder="Kode Pos" required>
                </div>
                <div class="w-33">
                    <input type="text" name="rei_provinsi[]" placeholder="Provinsi" required>
                </div>
            </div>

            <div class="form-group">
                <input type="text" name="nama_rei_daerah[]" placeholder="Nama REI Daerah" required>
            </div>
            <div class="form-group">
                <input type="email" name="email_perusahaan[]" placeholder="Email" required>
            </div>
            <div class="form-group">
                <div class="w-50">
                    <input type="text" name="telp_perusahaan[]" placeholder="Telepon" required>
                </div>
                <div class="w-50">
                    <input type="text" name="fax_perusahaan[]" placeholder="Fax" required>
                </div>
            </div>
            <div class="form-group">
                <div class="w-50">
                    <input type="text" name="npwp_perusahaan[]" placeholder="NPWP" required>
                </div>
                <div class="w-50">
                    <input type="text" name="website_perusahaan[]" placeholder="Website" required>
                </div>
            </div>
            
            <div class="form-group">
                <textarea name="jenis_bidang_usaha_perusahaan[]" cols="30" rows="5" placeholder="Jenis Bidang Usaha" required></textarea>
            </div>
        </div>
    </div>

    <div class="form-group">
        <div class="btn-next">
            <!-- <div class="left btn-plus">
                <li><a href="javascript:;" class="btn-get-form">+</a></li>
                <li><span>Tambah Biodata Kantor Cabang</span></li>
            </div> -->
            <div class="right">
                <input type="submit" class="btn next" name="register" value="Save & Next">
            </div>
        </div>
    </div>


</form>

<script>
    $(document).ready(function(){
        $('.btn_ya').on('click', function() {
            $('.no-anggota').css('display', 'block');
            // $('.no-anggota').removeAttr('readonly');
        });

        $('.btn_no').on('click', function() {
            $('.no-anggota').css('display', 'none');
            $('.no-anggota input').val('')
            // $('.no-anggota').attr('readonly');
        });
        
        $('.btn-get-form').on('click', function() {
             $.ajax({
               url: '<?php echo base_url() ?>get_form/Form_home',
               success: function(html) {
                  $(".get-form").append(html);
               }
            });
        });

        

    })
</script>