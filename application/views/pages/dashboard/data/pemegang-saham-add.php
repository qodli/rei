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
                            <label class="control-label">Klasifikasi <span class="text-danger">*</span></label>
                            <div class="col-xs-12" style="padding: 0">
                            <?php if ($edit == 0): ?>
                                <label class="radio-inline">
                                    <input type="radio" name="klasifikasi" required checked class="btn_trbk"> Terbuka
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="klasifikasi" required class="btn_ntrbk"> Non Terbuka
                                </label>
                            <?php else: ?>
                                <label class="radio-inline">
                                    <input type="radio" name="klasifikasi" required <?php if ($getEdit->nama_pemegang_saham == 'Publik') {echo "checked";} ?> class="btn_trbk"> Terbuka
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="klasifikasi" required <?php if ($getEdit->nama_pemegang_saham != 'Publik') {echo "checked";} ?> class="btn_ntrbk"> Non Terbuka
                                </label>
                            <?php endif ?>

                            </div>
                        </div>
                        <div class="form-group" style="display: inline-block; width: 100%; margin-top: 20px">
                            <div class="row">
                                <div class="col-sm-12">
                                    <label class="control-label">Nama Pemegang Saham <span class="text-danger">*</span></label>
                                    <?php if ($edit == 0): ?>
                                        <input name="nama_pemegang_saham" type="text" class="form-control frm_shm" readonly value="Publik" required>
                                    <?php else: ?>
                                        <input name="nama_pemegang_saham" type="text" class="form-control frm_shm" <?php if ($getEdit->nama_pemegang_saham == 'Publik') {echo "readonly";} ?> value="<?php echo $getEdit->nama_pemegang_saham ?>"  required>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                        <div class="form-group" style="display: inline-block; width: 100%; margin-top: 20px">
                            <div class="row">
                                <div class="col-sm-12">
                                    <label class="control-label">NPWP Pemegang Saham <span class="text-danger">*</span></label>
                                    <?php if ($edit == 0): ?>
                                        <input name="npwp_pemegang_saham" type="text" class="form-control frm_shm" readonly value="Publik" required>
                                    <?php else: ?>
                                        <input name="npwpw_pemegang_saham" type="text" class="form-control frm_shm" <?php if ($getEdit->nama_pemegang_saham == 'Publik') {echo "readonly";} ?> value="<?php echo $getEdit->npwp_pemegang_saham ?>"  required>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>

                    <script>
                        $(document).ready(function(){
                            $('.btn_trbk').on('click', function() {
                                if($(this).is(":checked")) {
                                    $('.frm_shm').attr('readonly', '');
                                    $('.frm_shm').val('Publik');

                                 }else{
                                    $('.frm_shm').removeAttr('readonly');
                                    $('.frm_shm').val('');
                                 }
                            });
                            $('.btn_ntrbk').on('click', function() {
                                if($(this).is(":checked")) {
                                    $('.frm_shm').removeAttr('readonly');
                                    $('.frm_shm').val('');

                                 }else{
                                    $('.frm_shm').attr('readonly', '');
                                    $('.frm_shm').val('Publik');
                                 }
                            });

                        })
                    </script>
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