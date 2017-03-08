<!-- START Template Main -->
<section id="main" role="main">
    <!-- START Template Container -->
    <div class="container-fluid">
        <!-- Page Header -->
        <div class="page-header page-header-block">
            <div class="page-header-section">
                <h4 class="title semibold capitalize">Profile  <span class="text-primary"><?php echo $subtitle ?></span></h4>
            </div>
            <div class="page-header-section">
                <!-- Toolbar -->
                <div class="toolbar">
                    <ol class="breadcrumb breadcrumb-transparent nm">
                        <li><a href="#">Page</a></li>
                        <li class="active">Profile</li>
                    </ol>
                </div>
                <!--/ Toolbar -->
            </div>
        </div>
        <!-- Page Header -->
        
        <?php $this->load->view('notification'); ?>

        <!-- START row -->
        <div class="row">
            <!-- Left / Top Side -->
            <div class="col-lg-3">
                <!-- tab menu -->
                <ul class="list-group list-group-tabs">
                    <li class="list-group-item active"><a href="#profile" data-toggle="tab"><i class="ico-user2 mr5"></i> Profile</a></li>
                    <li class="list-group-item"><a href="#password" data-toggle="tab"><i class="ico-key2 mr5"></i> Password</a></li>
                </ul>
                <!-- tab menu -->

                <hr><!-- horizontal line -->

                <!-- figure with progress -->
                <ul class="list-table">
                    <li style="width:70px;">
                        <?php if ($getProfile->first_row()->avatar == NULL): ?>
                            <img class="img-circle img-bordered" src="<?php echo base_url() ?>assets/image/avatar/avatar.png" width="65px">
                        <?php else: ?>
                            <img class="img-circle img-bordered" src="<?php echo base_url() ?>avatar/<?php echo $getProfile->first_row()->avatar ?>" width="65px">
                        <?php endif ?>
                    </li>
                    <li class="text-left">
                        <h5 class="semibold ellipsis mt0 capitalize"><?php echo $subtitle ?></h5>
                        <div style="max-width:200px;">
                            <div class="progress progress-xs mb5">
                                <div class="progress-bar progress-bar-primary" style="width:100%"></div>
                            </div>
                            <p class="text-muted clearfix nm">
                                <span class="pull-left">Profile complete</span>
                                <span class="pull-right">100%</span>
                            </p>
                        </div>
                    </li>
                </ul>
                <!--/ figure with progress -->

                <hr><!-- horizontal line -->

              
            </div>
            <!--/ Left / Top Side -->

            <!-- Left / Bottom Side -->
            <div class="col-lg-9">
                <!-- START Tab-content -->
                <div class="tab-content">
                    
                    <!-- tab-pane: profile -->
                    <div class="tab-pane active" id="profile">
                        <!-- form profile -->
                        <form class="panel form-horizontal form-bordered" name="form-profile" method="post" autocomplete="off" enctype="multipart/form-data">
                            <div class="panel-body pt0 pb0">
                                <div class="form-group header bgcolor-default">
                                    <div class="col-md-12">
                                        <h4 class="semibold text-primary mt0 mb5">Profile</h4>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Photo</label>
                                    <div class="col-sm-9">
                                        <div class="btn-group pr5">
                                        <?php if ($getProfile->first_row()->avatar == NULL): ?>
                                            <img class="img-circle img-bordered" src="<?php echo base_url() ?>assets/image/avatar/avatar.png" alt="" width="34px">
                                        <?php else: ?>
                                            <img class="img-circle img-bordered" src="<?php echo base_url() ?>avatar/<?php echo $getProfile->first_row()->avatar ?>" alt="" width="34px">
                                        <?php endif ?>
                                        </div>
                                        <div class="btn-group">
                                            <input type="file" name="userfile">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Name</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" name="name" value="<?php echo $getProfile->first_row()->name ?>" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Email</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" value="<?php echo $getProfile->first_row()->email ?>" readonly>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Telepon</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" name="tlp" value="<?php echo $getProfile->first_row()->tlp ?>" required>
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Nama Perusahaan</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" value="<?php echo $getProfile->first_row()->company ?>" name="nama_perusahaan">
                                    </div>
                                </div>

                                
                            </div>
                            <div class="panel-footer">
                                <input type="submit" class="btn btn-primary" value="Save change" name="editProfile">
                            </div>
                        </form>
                        <!--/ form profile -->
                    </div>
                    <!--/ tab-pane: profile -->

                     <!-- tab-pane: password -->
                    <div class="tab-pane" id="password">
                        <!-- form password -->
                        <form class="panel form-horizontal form-bordered" name="form-password" method="post" autocomplete="off">
                            <div class="panel-body pt0 pb0">
                                <div class="form-group header bgcolor-default">
                                    <div class="col-md-12">
                                        <h4 class="semibold text-primary mt0 mb5">Password</h4>
                                        <p class="text-default nm">Change your password or recover your current one.</p>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Current password</label>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control" name="currentpass" required>
                                        <!-- <p class="help-block"><a href="javascript:void(0);">Forgot password?</a></p> -->
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">New password</label>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control" name="newpass" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Verify password</label>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control" name="verifypass" required>
                                    </div>
                                </div>
                            </div>
                            <div class="panel-footer">
                                <input type="submit" class="btn btn-primary" value="Save Change" name="changePass">
                            </div>
                        </form>
                    </div>
                    <!--/ tab-pane: password -->

                </div>
                <!--/ END Tab-content -->
            </div>
            <!--/ Left / Bottom Side -->
        </div>
        <!--/ END row -->
    </div>
    <!--/ END Template Container -->

</section>
<!--/ END Template Main -->
