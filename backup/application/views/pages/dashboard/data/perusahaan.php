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
    
        <?php $this->load->view('notification'); ?>

        <!-- START content -->
        <div class="row">
            <div class="col-md-11 col-xs-12 centered">
                <!-- Form default layout -->
                <form class="panel panel-default" action="" method="post" autocomplete="off">
                    <div class="panel-heading">
                        <h3 class="panel-title"><?php echo $title ?> <?php echo $subtitle ?></h3>
                    </div>               
                    <div class="panel-body">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-4 col-sm-12">
                                    <label class="control-label">No Anggota Rei</label>
                                    <input name="no_anggota_rei" type="text" class="form-control" value="<?php echo $getData->first_row()->no_anggota_rei ?>" placeholder="Kosong">
                                </div>
                                <div class="col-md-4 col-sm-12">
                                    <label class="control-label">Nama Perusahaan <span class="text-danger">*</span></label>
                                    <input name="nama_perusahaan" type="text" class="form-control" value="<?php echo $getData->first_row()->nama_perusahaan ?>" required>
                                </div>
                                <div class="col-md-4 col-sm-12">
                                    <label class="control-label">Email Perusahaan <span class="text-danger">*</span></label>
                                    <input name="email_perusahaan" type="text" class="form-control" value="<?php echo $getData->first_row()->email_perusahaan ?>" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-4 col-sm-12">
                                    <label class="control-label">Nomor Telepon <span class="text-danger">*</span></label>
                                    <input name="telp_perusahaan" type="text" class="form-control" value="<?php echo $getData->first_row()->telp_perusahaan ?>" required>
                                </div>
                                <div class="col-md-4 col-sm-12">
                                    <label class="control-label">NPWP <span class="text-danger">*</span></label>
                                    <input name="npwp_perusahaan" type="text" class="form-control" value="<?php echo $getData->first_row()->npwp_perusahaan ?>" required>
                                </div>
                                <div class="col-md-4 col-sm-12">
                                    <label class="control-label">Nomor FAX <span class="text-danger">*</span></label>
                                    <input name="fax_perusahaan" type="text" class="form-control" value="<?php echo $getData->first_row()->fax_perusahaan ?>" required>
                                </div>
                            </div>
                        </div>


                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-4 col-sm-12">
                                    <label class="control-label">RT / RW <span class="text-danger">*</span></label>
                                    <input name="rt_rw" type="text" class="form-control" value="<?php echo $getData->first_row()->rt_rw ?>" required>
                                </div>
                                 <div class="col-md-4 col-sm-12">
                                    <label class="control-label">Kelurahan / Desa <span class="text-danger">*</span></label>
                                    <input name="kelurahan_desa" type="text" class="form-control" value="<?php echo $getData->first_row()->kelurahan_desa ?>" required>
                                </div>
                                 <div class="col-md-4 col-sm-12">
                                    <label class="control-label">Kecamatan <span class="text-danger">*</span></label>
                                    <input name="kecamatan" type="text" class="form-control" value="<?php echo $getData->first_row()->kecamatan ?>" required>
                                </div>

                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-4 col-sm-12">
                                    <label class="control-label">Kota / Kabupaten <span class="text-danger">*</span></label>
                                    <input name="kota_kabupaten" type="text" class="form-control" value="<?php echo $getData->first_row()->kota_kabupaten ?>" required>
                                </div>
                                 <div class="col-md-4 col-sm-12">
                                    <label class="control-label">Kode Pos <span class="text-danger">*</span></label>
                                    <input name="kodepos" type="text" class="form-control" value="<?php echo $getData->first_row()->kodepos ?>" required>
                                </div>
                                 <div class="col-md-4 col-sm-12">
                                    <label class="control-label">Provinsi <span class="text-danger">*</span></label>
                                    <input name="rei_provinsi" type="text" class="form-control" value="<?php echo $getData->first_row()->rei_provinsi ?>" required>
                                </div>

                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-4 col-sm-12">
                                    <label class="control-label">Nama Rei Daerah <span class="text-danger">*</span></label>
                                    <input name="nama_rei_daerah" type="text" class="form-control" value="<?php echo $getData->first_row()->nama_rei_daerah ?>" required>
                                </div>
                                 <div class="col-md-4 col-sm-12">
                                    <label class="control-label">Website <span class="text-danger">*</span></label>
                                    <input name="website_perusahaan" type="text" class="form-control" value="<?php echo $getData->first_row()->website_perusahaan ?>" required>
                                </div>

                                <div class="col-md-4 col-sm-12">
                                    <label class="control-label">Bidang Usaha <span class="text-danger">*</span></label>
                                    <input name="jenis_bidang_usaha_perusahaan" type="text" class="form-control" value="<?php echo $getData->first_row()->jenis_bidang_usaha_perusahaan ?>" required>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col-sm-12">
                                    <label class="control-label">Alamat <span class="text-danger">*</span></label>
                                    <textarea name="alamat_perusahaan" rows="5" class="form-control" required><?php echo $getData->first_row()->alamat_perusahaan ?></textarea>
                                </div>
                            </div>
                        </div>


                        
                    </div>
                    <div class="panel-footer">
                        <!-- <input type="submit" class="btn btn-primary" value="Edit" name="edit"> -->
                        <input type="submit" class="btn btn-primary" value="Edit Data Perusahaan" name="edit">
                    </div>
                </form>
                <!--/ Form default layout -->
            </div>

                  
        </div>
        <!--/ END content -->

        
    </div>
    <!--/ END Template Container -->
</section>


