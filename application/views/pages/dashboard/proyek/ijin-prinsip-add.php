
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
            <div class="col-md-8 col-xs-12 centered">
                <!-- Form default layout -->
                <form class="panel panel-default" action="" method="post" autocomplete="off" data-parsley-validate>
                    <div class="panel-heading">
                        <h3 class="panel-title">Add <?php echo $title ?> <?php echo $subtitle ?></h3>
                    </div>               
                    <div class="panel-body">
                        
                        <div class="form-group">
                            <div class="row">
                                <div class="col-sm-6">
                                    <label class="control-label">Nama Perijinan <span class="text-danger">*</span></label>
                                    <?php if ($edit == 0): ?>
                                    	<input name="nama_izinprinsip" type="text" class="form-control" required>
                                    <?php else: ?>
                                    	<input name="nama_izinprinsip" type="text" class="form-control" required value="<?php echo $getEdit->nama_izinprinsip ?>">
                                    <?php endif; ?>
                                    
                                </div>
                                <div class="col-sm-6">
                                    <label class="control-label">No Perijinan <span class="text-danger">*</span></label>
                                    <?php if ($edit == 0): ?>
                                    	<input name="no_izinprinsip" type="text" class="form-control" required>
                                    <?php else: ?>
                                    	<input name="no_izinprinsip" type="text" class="form-control" required value="<?php echo $getEdit->no_izinprinsip ?>">
                                    <?php endif; ?>
                                </div>
                                
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-sm-6">
                                    <label class="control-label">Tanggal Perijinan <span class="text-danger">*</span></label>
                                    <?php if ($edit == 0): ?>
                                    	<input name="tgl_izinprinsip" type="text" class="form-control dateRei" required placeholder="Tahun-bulan-hari">
                                    <?php else: ?>
                                    	<input name="tgl_izinprinsip" type="text" class="form-control dateRei" required placeholder="tgl-bln-tahun" value="<?php echo $getEdit->tgl_izinprinsip ?>">
                                    <?php endif; ?>
                                </div>
                                <div class="col-sm-6">
                                    <label class="control-label">Pemberi Perijinan <span class="text-danger">*</span></label>
                                    <?php if ($edit == 0): ?>
                                    	<input name="pemberi_izinprinsip" type="text" class="form-control" required>
                                    <?php else: ?>
                                    	<input name="pemberi_izinprinsip" type="text" class="form-control" required value="<?php echo $getEdit->pemberi_izinprinsip ?>">
                                    <?php endif; ?>
                                </div>

                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-sm-6">
                                    <label class="control-label">Ijin Untuk Proyek <span class="text-danger">*</span></label>
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
                                
                                <div class="col-sm-6">
                                    <label class="control-label">Status Perijinan <span class="text-danger">*</span></label>
                                    <select name="status" class="form-control" required>
                                    	<?php if ($edit == 1): ?>
                                    		<option value="<?php echo $getEdit->status ?>">
                                                <?php if ($getEdit->status == 1): ?>
                                                    Sudah Aktif
                                                <?php elseif ($getEdit->status == 0): ?>
                                                    Dalam Proses
                                                <?php endif ?>
                                    		</option>
                                    	<?php endif; ?>
                                        <option value="">Pilih Salah Satu</option>
                                            <option value="1">
                                                Sudah Aktif    
                                            </option>
                                            <option value="0">
                                                Dalam Proses
                                            </option>

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
