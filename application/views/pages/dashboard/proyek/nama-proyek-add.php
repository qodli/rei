
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
        <div class="row mt10">
			
            <!-- form -->
            <div class="col-md-6 col-xs-12 centered">
                <!-- Form default layout -->
                <form class="panel panel-default" action="" method="post" autocomplete="off" data-parsley-validate>
                    <div class="panel-heading">
                        <h3 class="panel-title capitalize">Add <?php echo $subtitle ?></h3>
                    </div>               
                    <div class="panel-body">
                        
                        <div class="form-group">
                            <div class="row">
                                <div class="col-sm-6">
                                    <label class="control-label">Nama Proyek <span class="text-danger">*</span></label>
                                    <?php if ($edit == 0): ?>
                                        <input name="nama_proyek_realestat" type="text" class="form-control" required>
                                	<?php else: ?>
                                	   <input name="nama_proyek_realestat" type="text" class="form-control" required value="<?php echo $getEdit->nama_proyek_realestat ?>">
                                	<?php endif; ?>

                                </div>
                                 <div class="col-sm-6">
                                    <label class="control-label">Status Proyek <span class="text-danger">*</span></label>
                                    
                                    <select name="status_proyek_realestat" class="form-control" required>
										<?php if ($edit == 1): ?>
	                                		<option value="<?php echo $getEdit->status_proyek_realestat ?>"><?php echo $getEdit->status_proyek_realestat ?></option>
	                                	<?php endif; ?>

                                        <option value="">Pilih Salah Satu</option>
                                        <option value="Sedang Berjalan">Sedang Berjalan</option>
                                        <option value="Sudah Selesai">Sudah Selesai</option>
                                        <option value="Dalam Perencanaan">Dalam Perencanaan</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-sm-6">
                                    <label class="control-label">Apakah proyek ini bekerja sama dgn pengembang lain? <span class="text-danger">*</span></label>
                                    <div class="col-xs-12" style="padding: 0">
                                        <label class="radio-inline">
                                            <?php if ($edit == 0): ?>
                                                <input type="radio" value="1" name="kesamaan_proyek" class="btn_kesamaan_ya" required > Ya
                                            <?php else: ?>
                                                <?php if ($getEdit->kesamaan_proyek == '1'): ?>
                                                    <input type="radio" value="1" name="kesamaan_proyek" class="btn_kesamaan_ya" required checked> Ya
                                                <?php else: ?>
                                                    <input type="radio" value="1" name="kesamaan_proyek" class="btn_kesamaan_ya" required > Ya
                                                <?php endif ?>
                                            <?php endif; ?>
                                        </label>
                                        <label class="radio-inline">
                                            <?php if ($edit == 0): ?>
                                                <input type="radio" value="0" name="kesamaan_proyek" class="btn_kesamaan_tdk" required checked> Tidak
                                            <?php else: ?>
                                                <?php if ($getEdit->kesamaan_proyek == '0'): ?>
                                                    <input type="radio" value="0" name="kesamaan_proyek" class="btn_kesamaan_tdk" required checked> Tidak
                                                <?php else: ?>
                                                    <input type="radio" value="0" name="kesamaan_proyek" class="btn_kesamaan_tdk" required > Tidak
                                                <?php endif ?>
                                            <?php endif; ?>
                                        </label>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <label class="control-label">Nama Pengembang <span class="text-danger">*</span></label>
                                    <?php if ($edit == 0): ?>
                                        <input name="nama_pengembang" type="text" class="form-control nama_pengembang" required readonly>
                                    <?php else: ?>
                                        <?php if ($getEdit->nama_pengembang == '' || $getEdit->nama_pengembang == NULL): ?>
                                          <input name="nama_pengembang" type="text" class="form-control nama_pengembang" readonly>
                                        <?php else: ?>
                                            <input name="nama_pengembang" type="text" class="form-control nama_pengembang" required value="<?php echo $getEdit->nama_pengembang ?>">
                                        <?php endif; ?>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>

                         <div class="form-group">
                            <div class="row">
                                <div class="col-sm-6">
                                    <label class="control-label">Tahun Proyek Dimulai (Estimasi) <span class="text-danger">*</span></label>
                                    <div class="col-xs-12" style="padding: 0">
                                        <?php if ($edit == 0): ?>
                                            <input name="tahun_dimulai" type="number" class="form-control" required>
                                        <?php else: ?>
                                            <input name="tahun_dimulai" type="number" class="form-control" required value="<?php echo $getEdit->tahun_dimulai ?>">
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <label class="control-label">Tahun Proyek Selesai (Estimasi) <span class="text-danger">*</span></label>
                                    <div class="col-xs-12" style="padding: 0">
                                        <?php if ($edit == 0): ?>
                                            <input name="tahun_selesai" type="number" class="form-control" required>
                                        <?php else: ?>
                                            <input name="tahun_selesai" type="number" class="form-control" required value="<?php echo $getEdit->tahun_selesai ?>">
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>



                        <div class="form-group">
                            <div class="row">
                                <div class="col-sm-12">
                                    <label class="control-label">Alamat Proyek<span class="text-danger">*</span></label>
                                    <?php if ($edit == 0): ?>
                                    	<textarea name="alamat_proyek_realestat" rows="5" class="form-control" required></textarea>
                                    <?php else: ?>
                                    	<textarea name="alamat_proyek_realestat" rows="5" class="form-control" required><?php echo $getEdit->alamat_proyek_realestat ?></textarea>
                                    <?php endif; ?>
                                    
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
            </div><!-- end form -->
          
        </div><!--/ END content -->

        
        
    </div>
    <!--/ END Template Container -->
</section>
<!--/ END Template Main -->


<script>
    $(document).ready(function(){
        $('.btn_kesamaan_ya').on('click', function() {
            $('.nama_pengembang').removeAttr('readonly', '');
        });
        $('.btn_kesamaan_tdk').on('click', function() {
            $('.nama_pengembang').attr('readonly', '');
            $('.nama_pengembang').val('');

        });

    });
</script>