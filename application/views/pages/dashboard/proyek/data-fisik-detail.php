<section id="main" role="main">
    <div class="container-fluid">
        <!-- Page Header -->
        <div class="page-header page-header-block">
            <div class="page-header-section">
                <h4 class="title semibold capitalize"><?php echo $subtitle ?> '<?php echo $this->db->get_where('proyek_realestat', array('id_proyek_realestat' => $_GET['q']))->first_row()->nama_proyek_realestat; ?>'</h4>
            </div>
            <div class="page-header-section">
                <!-- Toolbar -->
                <div class="toolbar">
                    <ol class="breadcrumb breadcrumb-transparent nm capitalize">
                        <li><a href="<?php echo base_url() ?><?php echo str_replace(' ', '-', strtolower($title)) ?>/"><?php echo $title ?></a></li>
                        <li><a href="<?php echo base_url() ?><?php echo str_replace(' ', '-', strtolower($title)) ?>/<?php echo str_replace(' ', '-', strtolower($subtitle)) ?>/"><?php echo $subtitle ?></a></li>
                        <li class="active"><?php echo $this->db->get_where('proyek_realestat', array('id_proyek_realestat' => $_GET['q']))->first_row()->nama_proyek_realestat; ?></li>
                    </ol>
                </div>
                <!--/ Toolbar -->
            </div>
        </div>
        <!-- Page Header -->

        <?php if ($getData->num_rows() >= 1): ?>
            
        <?php $this->load->view('notification'); ?>
        
      

        <!-- START content -->
        <div class="row mt10">

            <!-- table -->
            <div class="col-xs-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <div class="navbar-left capitalize">
                                <?php echo $subtitle ?>  '<?php echo $this->db->get_where('proyek_realestat', array('id_proyek_realestat' => $_GET['q']))->first_row()->nama_proyek_realestat; ?>'
                            </div>                        
                        </div>
                    </div>
                    <table class="table table-striped table-bordered dataTable table-tools" id="zero-configuration">
                        <thead>
                            <tr>
                                <th width="50">No</th>
                                <th>Klasifikasi</th>
                                <th>Luasan Unit</th>
                                <th>Jumlah Unit</th>
                                <th>Harga Jual</th>
                                <th width="120">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; foreach ($getDetail->result_array() as $vdata): ?>
                                <tr>
                                    <td class="text-center"><?php echo $no ?></td>
                                    <td><?php echo $vdata['klasifikasi'] ?></td>
                                    <td><?php echo $vdata['luasan_unit'] ?></td>
                                    <td><?php echo $vdata['jumlah_unit'] ?></td>
                                    <td><?php echo $vdata['harga_jual'] ?></td>
                                    <td>
                                         <select name="" class="form-control" onchange="location = this.options[this.selectedIndex].value;">
                                            <option value="">-- Action --</option>
                                            <option value="<?php echo base_url('proyek'); ?>/<?php echo $this->uri->segment(2) ?>/add?type=edit&id=<?php echo $vdata['id_data_fisik'] ?>&ip=<?php echo $vdata['id_perusahaan'] ?>&m=<?php echo base64_encode($this->session->userdata("email")) ?>">Edit</option>
                                            <option value="<?php echo base_url('proyek'); ?>/<?php echo $this->uri->segment(2) ?>?type=delete&id=<?php echo $vdata['id_data_fisik'] ?>&ip=<?php echo $vdata['id_perusahaan'] ?>">Delete</option>
                                        </select>
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

