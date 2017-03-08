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
                <form class="panel panel-default" action="" method="post" autocomplete="off">
                    <div class="panel-heading">
                        <h3 class="panel-title">Add <?php echo $title ?> <?php echo $subtitle ?></h3>
                    </div>               
                    <div class="panel-body">
                        
                        <div class="form-group">
                            <div class="row">
                                <div class="col-sm-12">
                                    <label class="control-label">Nama Direksi <span class="text-danger">*</span></label>
                                    <?php if ($edit == 0): ?>
                                        <input name="nama_direksi" type="text" class="form-control">
                                    <?php else: ?>
                                        <input name="nama_direksi" type="text" class="form-control" value="<?php echo $getEdit->nama_direksi ?>">
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                         <div class="form-group">
                            <div class="row">
                                <div class="col-sm-12">
                                    <label class="control-label">Jabatan Direksi <span class="text-danger">*</span></label>

                                    <?php if ($edit == 0): ?>
                                        <input name="jabatan_direksi" type="text" class="form-control">
                                    <?php else: ?>
                                        <input name="jabatan_direksi" type="text" class="form-control" value="<?php echo $getEdit->jabatan_direksi ?>">
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                         <div class="form-group">
                            <div class="row">
                                <div class="col-sm-12">
                                    <label class="control-label">NPWP Direksi <span class="text-danger">*</span></label>

                                    <?php if ($edit == 0): ?>
                                        <input name="npwp_direksi" type="text" class="form-control">
                                    <?php else: ?>
                                        <input name="npwp_direksi" type="text" class="form-control" value="<?php echo $getEdit->npwp_direksi ?>">
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
            </div>

                  
        </div>
        <!--/ END content -->

        
    </div>
    <!--/ END Template Container -->
</section>
<!--/ END Template Main -->