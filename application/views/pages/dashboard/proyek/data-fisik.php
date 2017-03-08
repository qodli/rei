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

        <?php if ($getData->num_rows() >= 1): ?>
            
        <?php $this->load->view('notification'); ?>
        
        <!-- add button -->
        <div class="row">
            <div class="col-xs-12">
                <div class="navbar-right">
                    <a href="<?php echo base_url('proyek'); ?>/<?php echo $this->uri->segment(2) ?>/add" class="btn btn-primary capitalize mb5">
                        <i class="ico-plus"></i> Tambah <?php echo $subtitle ?>
                    </a>
                </div>
            </div>
        </div><!-- end add button -->

        <!-- START content -->
        <div class="row mt10">

            <!-- table -->
            <div class="col-xs-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <div class="navbar-left capitalize">
                                <?php echo $subtitle ?>
                            </div>                        
                        </div>
                    </div>
                    <table class="table table-striped table-bordered dataTable table-tools" id="zero-configuration">
                        <thead>
                            <tr>
                                <th width="50">No</th>
                                <th>Nama Proyek</th>
                                <th width="120">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; foreach ($getData->result_array() as $vdata): ?>
                                <tr>
                                    <td class="text-center"><?php echo $no ?></td>
                                    <td>
                                        <?php echo $this->db->get_where('proyek_realestat', array('id_proyek_realestat' => $vdata['id_proyek_realestat']))->first_row()->nama_proyek_realestat; ?>
                                    </td>
                                    <td>
                                        <a href="<?php echo base_url('proyek'); ?>/<?php echo $this->uri->segment(2) ?>/detail?type=detail&ip=<?php echo $vdata['id_perusahaan'] ?>&q=<?php echo $vdata['id_proyek_realestat']; ?>" class="btn btn-primary">
                                            Lihat Detail 
                                        </a>
                                    </td>
                                   
                                </tr>
                            <?php $no++; endforeach; ?>

                        </tbody>
                    </table>
                    
                </div>
            </div><!-- end table -->

        </div><!--/ END content -->

        <?php else: ?>
            <div class="col-lg-6 col-lg-offset-3">
                <div class="panel panel-minimal" style="margin-top:10%;">
                    <div class="panel-body text-center">
                        <i class="ico-database3 longshadow fsize112 text-default"></i>
                    </div>
                    <div class="panel-body text-center">
                        <h1 class="semibold longshadow text-center text-default fsize32 mb10 mt0">Data Kosong</h1>
                        <h4 class="semibold text-primary text-center nm capitalize">Silahkan Isi <?php echo $subtitle ?> Anda</h4>
                    </div>

                    <div class="panel-body text-center">
                        <a href="<?php echo base_url('proyek'); ?>/<?php echo $this->uri->segment(2) ?>/add" class="btn btn-primary capitalize mb5">
                            <i class="ico-plus"></i> Tambah <?php echo $subtitle ?>
                        </a>
                    </div>
                </div>
            </div>

        <?php endif ?>

        
    </div>
    <!--/ END Template Container -->
</section>
<!--/ END Template Main -->

