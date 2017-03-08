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
        
        <!-- add button -->
        <div class="row">
            <div class="col-md-11 col-xs-12 centered">
                <div class="navbar-right">
                    <a href="javascript:;" class="btn btn-primary capitalize mb5 btn-edit-perusahaan">
                        Edit Data Perusahaan
                    </a>
                </div>
            </div>
        </div><!-- end add button -->

    
        <!-- START content -->
        <div class="row mt10">
            <div class="col-md-11 col-xs-12 centered">
                <!-- Form default layout -->
                <form class="panel panel-default" action="" method="post" autocomplete="off">
                    <div class="panel-heading">
                        <h3 class="panel-title"><?php echo $title ?> <?php echo $subtitle ?></h3>
                    </div>               
                    <div class="panel-body">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6 col-sm-12">
                                    <label class="control-label">No Anggota Rei</label>
                                    <input name="no_anggota_rei" type="text" class="form-control" value="<?php echo $getData->first_row()->no_anggota_rei ?>" placeholder="Kosong" readonly>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <label class="control-label">Nama Perusahaan <span class="text-danger">*</span></label>
                                    <input name="nama_perusahaan" type="text" class="form-control" value="<?php echo $getData->first_row()->nama_perusahaan ?>" required readonly>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6 col-sm-12">
                                    <label class="control-label">Skala Pengembangan</label>
                                    <select name="" id="" class="form-control" readonly>
                                        <option value="">Besar</option>
                                        <option value="">Menegah</option>
                                        <option value="">Kecil</option>
                                    </select>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <label class="control-label">Status</label>
                                    <select name="" id="" class="form-control" readonly>
                                        <option value="">Aktif</option>
                                        <option value="">Tidak Aktif</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-4 col-sm-12">
                                    <label class="control-label">Kota</label>
                                    <select name="" id="" class="form-control" readonly>
                                        <option value="">Kota</option>
                                    </select>
                                </div>
                                <div class="col-md-4 col-sm-12">
                                    <label class="control-label">Provinsi</label>
                                    <select name="" id="" class="form-control" readonly>
                                        <option value="">Provinsi</option>
                                    </select>
                                </div>
                                <div class="col-md-4 col-sm-12">
                                    <label class="control-label">DPD</label>
                                     <input name="email_perusahaan" type="text" class="form-control" value="<?php echo $getData->first_row()->nama_rei_daerah ?>"" required readonly>
                                </div>
                            </div>
                        </div>
                          <div class="form-group">
                            <div class="row">
                                <div class="col-sm-12">
                                    <label class="control-label">Alamat <span class="text-danger">*</span></label>
                                    <textarea name="alamat_perusahaan" rows="5" class="form-control" required readonly><?php echo $getData->first_row()->alamat_perusahaan ?></textarea>
                                </div>
                            </div>
                        </div>
                        


                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-3 col-sm-12">
                                    <label class="control-label">RT / RW <span class="text-danger">*</span></label>
                                    <input name="rt_rw" type="text" class="form-control" value="<?php echo $getData->first_row()->rt_rw ?>" required readonly>
                                </div>
                                 <div class="col-md-3 col-sm-12">
                                    <label class="control-label">Kelurahan / Desa <span class="text-danger">*</span></label>
                                    <input name="kelurahan_desa" type="text" class="form-control" value="<?php echo $getData->first_row()->kelurahan_desa ?>" required readonly>
                                </div>
                                 <div class="col-md-3 col-sm-12">
                                    <label class="control-label">Kecamatan <span class="text-danger">*</span></label>
                                    <input name="kecamatan" type="text" class="form-control" value="<?php echo $getData->first_row()->kecamatan ?>" required readonly>
                                </div>
                                  <div class="col-md-3 col-sm-12">
                                    <label class="control-label">Kode Pos <span class="text-danger">*</span></label>
                                    <input name="kodepos" type="text" class="form-control" value="<?php echo $getData->first_row()->kodepos ?>" required readonly>
                                </div>

                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                               
                                 <div class="col-md-12 col-sm-12">
                                    <label class="control-label">NPWP <span class="text-danger">*</span></label>
                                    <input name="npwp_perusahaan" type="text" class="form-control" value="<?php echo $getData->first_row()->npwp_perusahaan ?>" required readonly>
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <div class="row">
                               
                                <div class="col-md-6 col-sm-12">
                                    <label class="control-label">Nomor Telepon <span class="text-danger">*</span></label>
                                    <input name="telp_perusahaan" type="text" class="form-control" value="<?php echo $getData->first_row()->telp_perusahaan ?>" required readonly>
                                </div>
                               
                                <div class="col-md-6 col-sm-12">
                                    <label class="control-label">Nomor FAX <span class="text-danger">*</span></label>
                                    <input name="fax_perusahaan" type="text" class="form-control" value="<?php echo $getData->first_row()->fax_perusahaan ?>" required readonly>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                 <div class="col-md-6 col-sm-12">
                                    <label class="control-label">Email Perusahaan <span class="text-danger">*</span></label>
                                    <input name="email_perusahaan" type="text" class="form-control" value="<?php echo $getData->first_row()->email_perusahaan ?>" required readonly>
                                </div>
                                 <div class="col-md-6 col-sm-12">
                                    <label class="control-label">Website <span class="text-danger">*</span></label>
                                    <input name="website_perusahaan" type="text" class="form-control" value="<?php echo $getData->first_row()->website_perusahaan ?>" readonly>
                                </div>
                            </div>
                        </div>

                      


                        
                    </div>
                    <div class="panel-footer" style="display: none">
                        <input type="submit" class="btn btn-primary" value="Save" name="edit">
                    </div>
                </form>
                <!--/ Form default layout -->
            </div>

                  
        </div>
        <!--/ END content -->

        
    </div>
    <!--/ END Template Container -->
</section>





 <script>
    $(document).ready(function(){
        $('.btn-edit-perusahaan').live('click', function(){
            $('input, textarea').removeAttr('readonly');
            $('.panel-footer').show();
            $(this).html('cancel');
            $(this).removeClass('btn-primary btn-edit-perusahaan');
            $(this).addClass('btn-danger btn-cancel');
        });
        $('.btn-cancel').live('click', function(){
            $('input, textarea').attr('readonly', '');
            $('.panel-footer').hide();
            $(this).html('Edit Data Perusahaan');
            $(this).removeClass('btn-danger btn-cancel');
            $(this).addClass('btn-primary btn-edit-perusahaan');
        });

    })
</script>