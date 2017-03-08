<!-- START Template Main -->
<section id="main" role="main">
    <div class="container-fluid">
        <!-- Page Header -->
        <div class="page-header page-header-block">
            <div class="page-header-section">
                <h4 class="title semibold capitalize"><?php echo $title ?> <?php echo $subtitle ?></h4>
            </div>
            <div class="page-header-section">
                <!-- Toolbar -->
                <div class="toolbar">
                    <ol class="breadcrumb breadcrumb-transparent nm capitalize">
                        <li><a href="#"><?php echo $title ?></a></li>
                        <li class="active"><?php echo $subtitle ?></li>
                    </ol>
                </div>
                <!--/ Toolbar -->
            </div>
        </div>
        <!-- Page Header -->

        <!-- START content -->
        <div class="row">
            <div class="col-md-10 col-xs-12 centered">
                <!-- Form default layout -->
                <form class="panel panel-default" action="" method="post" autocomplete="off" data-parsley-validate>
                    <div class="panel-heading">
                        <h3 class="panel-title capitalize">Tambah <?php echo $title ?> <?php echo $subtitle ?></h3>
                    </div>               
                    
                    <div class="panel-body">
                        
                        <div class="form-group">
                            <div class="row">
                                <div class="col-sm-3">
                                    <label class="control-label">Rumah Tak Bersusun <span class="text-danger">*</span></label>
                                    <div class="col-xs-12" style="padding: 0">
                                        <label class="radio-inline">
                                            <?php if ($edit == 0): ?>
                                                <input type="radio" name="klasifikasi" value="Rumah Umum" required>Rumah Umum
                                            <?php else: ?>
                                                <?php if ($getEdit->klasifikasi == 'Rumah Umum'): ?>
                                                    <input type="radio" name="klasifikasi" value="Rumah Umum" required checked>Rumah Umum
                                                <?php else: ?>
                                                    <input type="radio" name="klasifikasi" value="Rumah Umum" required>Rumah Umum
                                                <?php endif ?>
                                            <?php endif; ?>
                                        </label>
                                    </div>
                                     <div class="col-xs-12" style="padding: 0">
                                        <label class="radio-inline">
                                            <?php if ($edit == 0): ?>
                                                <input type="radio" name="klasifikasi" value="Rumah Komersil" required>Rumah Komersil
                                            <?php else: ?>
                                                <?php if ($getEdit->klasifikasi == 'Rumah Komersil'): ?>
                                                    <input type="radio" name="klasifikasi" value="Rumah Komersil" required checked>Rumah Komersil
                                                <?php else: ?>
                                                    <input type="radio" name="klasifikasi" value="Rumah Komersil" required>Rumah Komersil
                                                <?php endif ?>
                                            <?php endif; ?>
                                        </label>
                                    </div>
                                </div>

                                 <div class="col-sm-3">
                                    <label class="control-label">Rumah Bersusun<span class="text-danger">*</span></label>
                                    <div class="col-xs-12" style="padding: 0">
                                        <label class="radio-inline">
                                            <?php if ($edit == 0): ?>
                                                <input type="radio" name="klasifikasi" value="Rumah Susun Umum" required>Rumah Susun Umum
                                            <?php else: ?>
                                                <?php if ($getEdit->klasifikasi == 'Rumah Susun Umum'): ?>
                                                    <input type="radio" name="klasifikasi" value="Rumah Susun Umum" required checked>Rumah Susun Umum
                                                <?php else: ?>
                                                    <input type="radio" name="klasifikasi" value="Rumah Susun Umum" required>Rumah Susun Umum
                                                <?php endif ?>
                                            <?php endif; ?>
                                        </label>
                                    </div>
                                     <div class="col-xs-12" style="padding: 0">
                                        <label class="radio-inline">
                                            <?php if ($edit == 0): ?>
                                                <input type="radio" name="klasifikasi" value="Rumah Susun Komersil" required>Rumah Susun Komersil
                                            <?php else: ?>
                                                <?php if ($getEdit->klasifikasi == 'Rumah Susun Komersil'): ?>
                                                    <input type="radio" name="klasifikasi" value="Rumah Susun Komersil" required checked>Rumah Susun Komersil
                                                <?php else: ?>
                                                    <input type="radio" name="klasifikasi" value="Rumah Susun Komersil" required>Rumah Susun Komersil
                                                <?php endif ?>
                                            <?php endif; ?>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <label class="control-label">Perkantoran / Pertokoan / Pergudangan / Kawasan Industri <span class="text-danger">*</span></label>

                                    <div class="col-xs-12" style="padding: 0">
                                        <label class="radio-inline">
                                            <?php if ($edit == 0): ?>
                                                <input type="radio" name="klasifikasi" value="Unit Perkantoran" required>Unit Perkantoran
                                            <?php else: ?>
                                                <?php if ($getEdit->klasifikasi == 'Unit Perkantoran'): ?>
                                                    <input type="radio" name="klasifikasi" value="Unit Perkantoran" required checked>Unit Perkantoran
                                                <?php else: ?>
                                                    <input type="radio" name="klasifikasi" value="Unit Perkantoran" required>Unit Perkantoran
                                                <?php endif ?>
                                            <?php endif; ?>
                                        </label>
                                    </div>
                                    <div class="col-xs-12" style="padding: 0">
                                        <label class="radio-inline">
                                            <?php if ($edit == 0): ?>
                                                <input type="radio" name="klasifikasi" value="Unit Pertokoan" required>Unit Pertokoan
                                            <?php else: ?>
                                                <?php if ($getEdit->klasifikasi == 'Unit Pertokoan'): ?>
                                                    <input type="radio" name="klasifikasi" value="Unit Pertokoan" required checked>Unit Pertokoan
                                                <?php else: ?>
                                                    <input type="radio" name="klasifikasi" value="Unit Pertokoan" required>Unit Pertokoan
                                                <?php endif ?>
                                            <?php endif; ?>
                                        </label>
                                    </div>
                                    <div class="col-xs-12" style="padding: 0">
                                        <label class="radio-inline">
                                            <?php if ($edit == 0): ?>
                                                <input type="radio" name="klasifikasi" value="Unit Pergudangan" required>Unit Pergudangan
                                            <?php else: ?>
                                                <?php if ($getEdit->klasifikasi == 'Unit Pergudangan'): ?>
                                                    <input type="radio" name="klasifikasi" value="Unit Pergudangan" required checked>Unit Pergudangan
                                                <?php else: ?>
                                                    <input type="radio" name="klasifikasi" value="Unit Pergudangan" required>Unit Pergudangan
                                                <?php endif ?>
                                            <?php endif; ?>
                                        </label>
                                    </div>
                                     <div class="col-xs-12" style="padding: 0">
                                        <label class="radio-inline">
                                            <?php if ($edit == 0): ?>
                                                <input type="radio" name="klasifikasi" value="Kawasan Industri" required>Kawasan Industri
                                            <?php else: ?>
                                                <?php if ($getEdit->klasifikasi == 'Kawasan Industri'): ?>
                                                    <input type="radio" name="klasifikasi" value="Kawasan Industri" required checked>Kawasan Industri
                                                <?php else: ?>
                                                    <input type="radio" name="klasifikasi" value="Kawasan Industri" required>Kawasan Industri
                                                <?php endif ?>
                                            <?php endif; ?>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <hr style="margin: 40px 0;">

                        <div class="form-group">
                            <div class="row">
                                 <div class="col-md-6 col-xs-12">
                                    <label class="control-label">Luasan Unit <span class="text-danger">*</span></label>
                                    <?php if ($edit == 0): ?>
                                        <input name="luasan_unit" type="text" class="form-control" required>
                                    <?php else: ?>
                                        <input name="luasan_unit" type="text" class="form-control" required value="<?php echo $getEdit->luasan_unit ?>">
                                    <?php endif ?>
                                </div>
                                 <div class="col-md-6 col-xs-12">
                                    <label class="control-label">Jumlah Unit <span class="text-danger">*</span></label>
                                    <?php if ($edit == 0): ?>
                                        <input name="jumlah_unit" type="text" class="form-control" required>
                                    <?php else: ?>
                                        <input name="jumlah_unit" type="text" class="form-control" required value="<?php echo $getEdit->jumlah_unit ?>">
                                    <?php endif ?>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">

                                <div class="col-md-6 col-xs-12">
                                    <label class="control-label">Harga Jual Rata-Rata <span class="text-danger">*</span></label>
                                    <?php if ($edit == 0): ?>
                                        <input name="harga_jual" type="text" class="form-control" required>
                                    <?php else: ?>
                                        <input name="harga_jual" type="text" class="form-control" required value="<?php echo $getEdit->harga_jual ?>">
                                    <?php endif ?>
                                </div>

                                <div class="col-md-6 col-xs-12">
                                    <label class="control-label">Data Untuk Proyek <span class="text-danger">*</span></label>
                                    <select name="id_proyek_realestat" class="form-control" required>
                                        <?php if ($edit == 1): ?>
                                            <option value="<?php echo $getEdit->id_proyek_realestat ?>">
                                                <?php echo $this->db->get_where('proyek_realestat', array('id_proyek_realestat' => $getEdit->id_proyek_realestat))->first_row()->nama_proyek_realestat; ?>
                                            </option>
                                        <?php endif; ?>
                                        <option value="">Pilih Salah Satu</option>
                                        <?php 
                                            $cekUser = $this->db->get_where('user', array(
                                                'email' => $this->session->userdata('email')
                                            ));
                                            $getPrinsip = $this->db->get_where('proyek_realestat', array('id_perusahaan' => $cekUser->first_row()->id_perusahaan)); 
                                        ?>

                                        <?php foreach ($getPrinsip->result_array() as $key): ?>
                                            <option value="<?php echo $key['id_proyek_realestat'] ?>"><?php echo $key['nama_proyek_realestat'] ?></option>
                                        <?php endforeach ?>
                                    </select>
                                </div>
                            </div>
                        </div>



                        

                        
                    </div>
                    <div class="panel-footer">
                        <?php if ($edit == 0): ?>
                            <input type="submit" class="btn btn-primary" value="Submit" name="submit">
                        <?php else: ?>
                            <input type="submit" class="btn btn-primary" value="Edit" name="edit">
                        <?php endif ?>
                    </div>
                </form>
                <!--/ Form default layout -->
            </div>

                  
        </div>
        <!--/ END content -->

        
    </div>
    <!--/ END Template Container -->
</section>
<!--/ END Template Main -->