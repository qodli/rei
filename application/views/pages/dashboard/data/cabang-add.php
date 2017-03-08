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
                        <li><a href="#"><?php echo $subtitle ?></a></li>
                        <li class="active"><?php echo $this->uri->segment(3) ?></li>
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
                                <div class="col-sm-12">
                                    <label class="control-label">Nama Perusahaan <span class="text-danger">*</span></label>
                                    <?php if ($edit == 0): ?>
                                        <input name="nama_cabang" type="text" class="form-control" required>
                                    <?php else: ?>
                                        <input name="nama_cabang" type="text" class="form-control" required value="<?php echo $getEdit->nama_cabang ?>">
                                    <?php endif ?>
                                </div>

                                 
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col-sm-12">
                                    <label class="control-label">Alamat <span class="text-danger">*</span></label>
                                    

                                    <?php if ($edit == 0): ?>
                                        <textarea name="alamat_cabang" rows="5" class="form-control" required></textarea>
                                    <?php else: ?>
                                        <textarea name="alamat_cabang" rows="5" class="form-control" required><?php echo $getEdit->alamat_cabang ?></textarea>
                                        
                                    <?php endif ?>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col-sm-6">
                                     <label class="control-label">RT/RW <span class="text-danger">*</span></label>
                                     <?php if ($edit == 0): ?>
                                        <input name="rtrw_cabang" type="text" class="form-control" required>
                                    <?php else: ?>
                                        <input name="rtrw_cabang" type="text" class="form-control" required value="<?php echo $getEdit->rtrw_cabang ?>">
                                    <?php endif ?>
                                </div>
                                <div class="col-sm-6">
                                      <label class="control-label">Kelurahan/Desa Cabang <span class="text-danger">*</span></label>
                                     <?php if ($edit == 0): ?>
                                        <input name="rtrw_cabang" type="text" class="form-control" required>
                                    <?php else: ?>
                                        <input name="rtrw_cabang" type="text" class="form-control" required value="<?php echo $getEdit->rtrw_cabang ?>">
                                    <?php endif ?>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                 <div class="col-sm-6">
                                      <label class="control-label">Kecamatan Cabang <span class="text-danger">*</span></label>
                                     <?php if ($edit == 0): ?>
                                        <input name="rtrw_cabang" type="text" class="form-control" required>
                                    <?php else: ?>
                                        <input name="rtrw_cabang" type="text" class="form-control" required value="<?php echo $getEdit->rtrw_cabang ?>">
                                    <?php endif ?>
                                </div>
                                <div class="col-sm-6">
                                      <label class="control-label">Kode Pos Cabang <span class="text-danger">*</span></label>
                                     <?php if ($edit == 0): ?>
                                        <input name="rtrw_cabang" type="text" class="form-control" required>
                                    <?php else: ?>
                                        <input name="rtrw_cabang" type="text" class="form-control" required value="<?php echo $getEdit->rtrw_cabang ?>">
                                    <?php endif ?>
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <div class="row">
                                <div class="col-sm-12">
                                    <label class="control-label">NPWP <span class="text-danger">*</span></label>
                                    <?php if ($edit == 0): ?>
                                        <input name="npwp_cabang" type="text" class="form-control" required>
                                    <?php else: ?>
                                        <input name="npwp_cabang" type="text" class="form-control" required value="<?php echo $getEdit->npwp_cabang ?>">
                                    <?php endif ?>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                            	<div class="col-sm-6">
                                    <label class="control-label">Nomor Telepon <span class="text-danger">*</span></label>
                                    <?php if ($edit == 0): ?>
                                        <input name="telp_cabang" type="text" class="form-control" required>
                                    <?php else: ?>
                                        <input name="telp_cabang" type="text" class="form-control" required value="<?php echo $getEdit->telp_cabang ?>">
                                    <?php endif ?>
                                </div>
                                <div class="col-sm-6">
                                    <label class="control-label">Nomor FAX <span class="text-danger">*</span></label>

                                    <?php if ($edit == 0): ?>
                                        <input name="fax_cabang" type="text" class="form-control" required>
                                    <?php else: ?>
                                        <input name="fax_cabang" type="text" class="form-control" required value="<?php echo $getEdit->fax_cabang ?>">
                                    <?php endif ?>
                                </div>
                            </div>
                        </div>


                        <div class="form-group">
                            <div class="row">
                                <div class="col-sm-6">
                                    <label class="control-label">Nama Email <span class="text-danger">*</span></label>
                                    <?php if ($edit == 0): ?>
                                        <input name="email_cabang" type="email" class="form-control" required>
                                    <?php else: ?>
                                        <input name="email_cabang" type="email" class="form-control" required value="<?php echo $getEdit->email_cabang ?>">
                                    <?php endif ?>
                                </div>
                                <div class="col-sm-6">
                                    <label class="control-label">Website <span class="text-danger">*</span></label>
                                    <?php if ($edit == 0): ?>
                                        <input name="website_cabang" type="text" class="form-control" required>
                                    <?php else: ?>
                                        <input name="website_cabang" type="text" class="form-control" required value="<?php echo $getEdit->website_cabang ?>">
                                    <?php endif ?>
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