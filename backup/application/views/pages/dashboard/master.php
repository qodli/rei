<!DOCTYPE html>
<html>
    <head>
        <title><?php echo $title ?> | Rei</title>
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
        <link rel="shortcut icon" href="<?php echo base_url() ?>assets/img/icon.png">
        
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.0/themes/base/jquery-ui.css">
        <!-- <link rel="stylesheet" href="/resources/demos/style.css"> -->
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>

        <link rel="stylesheet" href="<?php echo base_url() ?>assets/library/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/stylesheet/layout.min.css">
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/stylesheet/uielement.min.css">
        <script src="<?php echo base_url() ?>assets/library/modernizr/js/modernizr.min.js"></script>
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/datatables/css/jquery.datatables.min.css">
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/style.css">
    </head>
    
    
<script>

$(document).ready(function(){
    $( ".dateRei" ).datepicker({
      changeMonth: true,
      changeYear: true,
      dateFormat: 'yy-mm-dd',
    });
 });
  </script>
    <body>
        <!-- START Template Header -->
        <header id="header" class="navbar navbar-fixed-top">
            <!-- START navbar header -->
            <div class="navbar-header">
                <!-- Brand -->
                <a class="navbar-brand" href="javascript:void(0);">
                    <!-- <span class="logo-figure"></span>
                    <span class="logo-text"></span> -->

                    <img src="<?php echo base_url() ?>assets/img/logo-text.png" style="height: 50%;">
                </a>
                <!--/ Brand -->
            </div>
            <!--/ END navbar header -->

            <!-- START Toolbar -->
            <div class="navbar-toolbar clearfix">
                <!-- START Left nav -->
                <ul class="nav navbar-nav navbar-left">
                    <!-- Sidebar shrink -->
                    <li class="hidden-xs hidden-sm">
                        <a href="javascript:void(0);" class="sidebar-minimize" data-toggle="minimize" title="Minimize sidebar">
                            <span class="meta">
                                <span class="icon"></span>
                            </span>
                        </a>
                    </li>
                    <!-- Sidebar shrink -->

                    <!-- Offcanvas left: This menu will take position at the top of template header (mobile only). Make sure that only #header have the `position: relative`, or it may cause unwanted behavior -->
                    <li class="navbar-main hidden-lg hidden-md hidden-sm">
                        <a href="javascript:void(0);" data-toggle="offcanvas" data-direction="ltr" rel="tooltip" title="Menu sidebar">
                            <span class="meta">
                                <span class="icon"><i class="ico-paragraph-left3"></i></span>
                            </span>
                        </a>
                    </li>
                    <!--/ Offcanvas left -->


                    <!-- Notification dropdown -->
                    <li class="dropdown custom" id="header-dd-notification">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
                            <span class="meta">
                                <span class="icon"><i class="ico-bell"></i></span>
                                <span class="hasnotification hasnotification-danger"></span>
                            </span>
                        </a>

                   
                        <!-- Dropdown menu -->
                        <div class="dropdown-menu" role="menu">
                            <div class="dropdown-header">
                                <span class="title">Notification <span class="count"></span></span>
                                <span class="option text-right"><a href="javascript:void(0);">Clear all</a></span>
                            </div>
                            <div class="dropdown-body slimscroll">
                                <!-- indicator -->
                                <div class="indicator inline"><span class="spinner"></span></div>
                                <!--/ indicator -->

                                <!-- Message list -->
                                <div class="media-list">
                                    <a href="javascript:void(0);" class="media read border-dotted">
                                        <span class="media-object pull-left">
                                            <i class="ico-basket2 bgcolor-info"></i>
                                        </span>
                                        <span class="media-body">
                                            <span class="media-text">Duis aute irure dolor in <span class="text-primary semibold">reprehenderit</span> in voluptate.</span>
                                            <!-- meta icon -->
                                            <span class="media-meta pull-right">2d</span>
                                            <!--/ meta icon -->
                                        </span>
                                    </a>

                                </div>
                                <!--/ Message list -->
                            </div>
                        </div>
                        <!--/ Dropdown menu -->
                    </li>
                    <!--/ Notification dropdown -->

                    <!-- Search form toggler  -->
                    <li>
                        <a href="javascript:void(0);" data-toggle="dropdown" data-target="#dropdown-form">
                            <span class="meta">
                                <span class="icon"><i class="ico-search"></i></span>
                            </span>
                        </a>
                    </li>
                    <!--/ Search form toggler -->
                </ul>
                <!--/ END Left nav -->

                <!-- START navbar form -->
                <div class="navbar-form navbar-left dropdown" id="dropdown-form">
                    <form action="" role="search">
                        <div class="has-icon">
                            <input type="text" class="form-control" placeholder="Search application...">
                            <i class="ico-search form-control-icon"></i>
                        </div>
                    </form>
                </div>
                <!-- START navbar form -->

                <!-- START Right nav -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Profile dropdown -->
                    <li class="dropdown profile">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
                            <span class="meta">
                                <span class="avatar"><img src="<?php echo base_url() ?>assets/image/avatar/avatar.png" class="img-circle" alt="" /></span>
                                <span class="text hidden-xs hidden-sm pr5 pl5"><?php echo $this->session->userdata('name') ?></span>
                                <span class="arrow"></span>
                            </span>
                        </a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="<?php echo base_url() ?>account"><span class="icon"><i class="ico-user-plus2"></i></span> My Accounts</a></li>
                            <li class="divider"></li>
                            <li><a href="<?php echo base_url() ?>logout"><span class="icon"><i class="ico-exit"></i></span> Sign Out</a></li>
                        </ul>
                    </li>
                    <!--/ Profile dropdown -->

                   
                </ul>
                <!--/ END Right nav -->
            </div>
            <!--/ END Toolbar -->
        </header>
        <!--/ END Template Header -->



        <?php $this->load->view('pages/dashboard/menu-left'); ?>      

        <?php echo $contents ?>

     
        <!-- <script type="text/javascript" src="<?php echo base_url() ?>assets/library/jquery/js/jquery.min.js"></script> -->
        <script type="text/javascript" src="<?php echo base_url() ?>assets/library/jquery/js/jquery-migrate.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url() ?>assets/library/bootstrap/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url() ?>assets/library/core/js/core.min.js"></script>

        <script type="text/javascript" src="<?php echo base_url() ?>assets/plugins/sparkline/js/jquery.sparkline.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url() ?>assets/javascript/app.min.js"></script>
        <!-- datatables -->
        <script type="text/javascript" src="<?php echo base_url() ?>assets/plugins/datatables/js/jquery.datatables.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url() ?>assets/plugins/datatables/tabletools/js/tabletools.min.js"></script>    
        <script type="text/javascript" src="<?php echo base_url() ?>assets/plugins/datatables/tabletools/js/zeroclipboard.js"></script>    
        <script type="text/javascript" src="<?php echo base_url() ?>assets/plugins/datatables/js/jquery.datatables-custom.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url() ?>assets/javascript/tables/datatable.js"></script>


    </body>
    <!--/ END Body -->
</html>



