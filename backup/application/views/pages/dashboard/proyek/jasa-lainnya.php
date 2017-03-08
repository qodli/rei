
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
            
            <!-- table -->
            <div class="col-md-6 col-xs-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <div class="navbar-left">
                                <?php echo $title ?>
                            </div>
                        </div>
                    </div>
                    <table class="table table-striped table-bordered dataTable table-tools" id="zero-configuration">
                        <thead>
                            <tr>
                                <th width="50">No</th>
                                <th>Nama / Jenis Jasa</th>
                                <th>Deskripsi Jasa</th>
                                <th width="120"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; foreach ($getData->result_array() as $vdata): ?>
                                <tr>
                                    <td class="text-center"><?php echo $no ?></td>
                                    <td><?php echo $vdata['nama_jasa'] ?></td>
                                    <td><?php echo $vdata['deskripsi_jasa'] ?></td>
                                    <td>
                                         <select name="" class="form-control" onchange="location = this.options[this.selectedIndex].value;">
                                            <option value="">-- Action --</option>
                                            <option value="<?php echo base_url('proyek'); ?>/<?php echo $this->uri->segment(2) ?>?type=edit&id=<?php echo $vdata['id_proyek_jasa'] ?>&ip=<?php echo $vdata['id_perusahaan'] ?>">Edit</option>
                                            <option value="<?php echo base_url('proyek'); ?>/<?php echo $this->uri->segment(2) ?>?type=delete&id=<?php echo $vdata['id_proyek_jasa'] ?>&ip=<?php echo $vdata['id_perusahaan'] ?>">Delete</option>
                                        </select>
                                    </td>
                                </tr>
                            <?php $no++; endforeach; ?>

                        </tbody>
                    </table>
                    
                </div>
            </div><!-- end table -->

            <!-- form -->
            <div class="col-md-6 col-xs-12">
                <!-- Form default layout -->
                <form class="panel panel-default" action="" method="post" autocomplete="off" data-parsley-validate>
                    <div class="panel-heading">
                        <h3 class="panel-title">Add <?php echo $title ?> <?php echo $subtitle ?></h3>
                    </div>               
                    <div class="panel-body">
                        
                        <div class="form-group">
                            <div class="row">
                                <div class="col-sm-12">
                                    <label class="control-label">Nama / Jenis Jasa <span class="text-danger">*</span></label>
                                    <?php if ($edit == 0): ?>
                                            <input name="nama_jasa" type="text" class="form-control" required>
                                        <?php else: ?>
                                            <input name="nama_jasa" type="text" class="form-control" value="<?php echo $getEdit->nama_jasa ?>"required>
                                    <?php endif ?>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-sm-12">
                                    <label class="control-label">Deskripsi Jasa <span class="text-danger">*</span></label>

                                    <?php if ($edit == 0): ?>
                                            <textarea name="deskripsi_jasa" rows="7" class="form-control" required></textarea>
                                        <?php else: ?>
                                            <textarea name="deskripsi_jasa" rows="7" class="form-control" required><?php echo $getEdit->nama_jasa ?></textarea>
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
                        <?php endif; ?>
                    </div>
                </form>
                <!--/ Form default layout -->
            </div><!-- end form -->

                  
        </div>
        <!--/ END content -->

        
    </div>
    <!--/ END Template Container -->
</section>
