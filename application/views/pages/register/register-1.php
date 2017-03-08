
    <form action="" method="post" autocomplete="off" enctype="multipart/form-data">
            <div class="get-form">
                <div class="container-2">
                    <div class="form-group">
                        <input type="text" name="nama_perusahaan[]" placeholder="Nama Perusahaan" required>
                    </div>
                    <div class="form-group">
                        <select name="skala_pengembang[]" id="">
                            <option value="" style="color: #a9a9a9">Skala Pengembang</option>
                            <option value="Besar">Besar</option>
                            <option value="Menegnah">Menengah</option>
                            <option value="Kecil">Kecil</option>
                        </select>
                    </div>
                    <div class="form-group">
                       
                        <div class="w-33">
                             <?php
                                mysql_connect('localhost', 'root', 'Appshouse137');
                                mysql_select_db('rei');

                                $sql = "SELECT nama_provinsi, id_provinsi FROM provinsi";
                                $result = mysql_query($sql);

                                echo "<select name='provinsi'>";
                                    echo "<option value''>Pilih Provinsi</option> ";
                                while ($row = mysql_fetch_array($result)) {
                                    echo "<option value='" . $row['id_provinsi'] . "'>" . $row['nama_provinsi'] . "</option>";
                                }
                                echo "</select>";

                                ?>
                        </div>
                         <div class="w-33">
                            <?php
                                // $sql = "SELECT nama_kabupaten, id_kabupaten FROM kabupaten";
                                $sql = "SELECT nama_kabupaten, id_kabupaten FROM kabupaten WHERE id_provinsi = '" . $row['id_provinsi'] . "'";
                                $result = mysql_query($sql);

                                echo "<select name='kota'>";
                                    echo "<option value''>Pilih Kota</option> ";
                                while ($row = mysql_fetch_array($result)) {
                                    echo "<option value='" . $row['id_kabupaten'] . "'>" . $row['nama_kabupaten'] . "</option>";
                                }
                                echo "</select>";

                                ?>
                        </div>
                        <div class="w-33">
                            <input type="text" name="dpd_rei[]" placeholder="DPD">
                        </div>
                    </div>

                    <div class="form-group">
                        <textarea name="alamat[]" cols="30" rows="5" placeholder="Alamat Perusahaan" required></textarea>
                    </div>
                    <div class="form-group">
                        <div class="w-33">
                            <input type="text" name="rtrw[]" placeholder="RT/RW" required>
                        </div>
                        <div class="w-33">
                            <input type="text" name="kelurahan[]" placeholder="Kelurahan/Desa" required>
                        </div>
                        <div class="w-33">
                            <input type="text" name="kecamatan[]" placeholder="Kecamatan" required>
                        </div>
                    </div>
                    <div class="form-group">

                            <input type="text" name="kodepos[]" placeholder="Kode Pos" required>
                    </div>
                    <div class="form-group">
                         <input type="text" name="npwp[]" placeholder="NPWP" required>
                    </div>
                    <div class="form-group">
                        <div class="w-50">
                            <input type="text" name="tlp[]" placeholder="Telepon" required>
                        </div>
                        <div class="w-50">
                            <input type="text" name="fax[]" placeholder="Fax" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="w-50">
                            <input type="email" name="email[]" placeholder="Email Perusahaan" required>
                           
                        </div>
                        <div class="w-50">
                            <input type="text" name="website[]" placeholder="Website">
                        </div>
                    </div>
                    
                    <div class="form-group line-top">
                        
                        <div class="txt ">
                            Perusahaan Cabang :
                        </div>
                    </div>
                     <div class="form-group">
                        <input type="text" name="" placeholder="Nama Perusahaan Cabang" >
                    </div>
                    <div class="form-group">
                        <textarea name="jenis_bidang_usaha_perusahaan[]" cols="30" rows="5" placeholder="Alamat Cabang" ></textarea>
                    </div>

                    <div class="form-group">
                        <div class="w-33">
                            <input type="text" name="rt_rw[]" placeholder="RT/RW Cabang" >
                        </div>
                        <div class="w-33">
                            <input type="text" name="kelurahan_desa[]" placeholder="Kelurahan/Desa Cabang" >
                        </div>
                        <div class="w-33">
                            <input type="text" name="kecamatan[]" placeholder="Kecamatan Cabang" >
                        </div>
                    </div>

                    <div class="form-group">

                            <input type="text" name="kodepos[]" placeholder="Kode Pos Cabang" >

                    </div>

                    <div class="form-group">
                     <input type="text" name="npwp_perusahaan[]" placeholder="NPWP Cabang" >
                        
                    </div>
                    <div class="form-group">
                        <div class="w-50">
                            <input type="text" name="telp_perusahaan[]" placeholder="Telepon Cabang" >
                        </div>
                        <div class="w-50">
                            <input type="text" name="fax_perusahaan[]" placeholder="Fax Cabang" >
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="w-50">
                           <input type="email" name="email_perusahaan[]" placeholder="Email Cabang" >
                        </div>
                        <div class="w-50">
                            <input type="text" name="website_perusahaan[]" placeholder="Website Cabang">
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="btn-next">
                    <div class="right">
                        <a href="">
                            <input type="submit" class="btn next" name="register" value="Save & Next">
                        </a>
                    </div>
                </div>
            </div>


        </form>

