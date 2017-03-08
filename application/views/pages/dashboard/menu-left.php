<aside class="sidebar sidebar-left sidebar-menu">
    
    <!-- Menu admin -->
    <section class="content slimscroll">
        <h5 class="heading">Main Menu</h5>
        <ul class="topmenu" data-toggle="menu">
            <!-- <li <?php if ($title == 'Dashboard') {echo'class=active';} ?>>
                <a href="<?php echo base_url() ?>">
                    <span class="figure"><i class="ico-home2"></i></span>
                    <span class="text">Dashboard</span>
                    <span class="arrow"></span>
                </a>
            </li>   -->


           
            <li class=<?php if ($title == 'Data') {echo '"active open"';} ?>>
                <a href="javascript:void(0);" data-target="#blog" data-toggle="submenu" data-parent=".topmenu">
                    <span class="figure"><i class="ico-book2"></i></span>
                    <span class="text">Data</span>
                    <span class="arrow"></span>
                </a>
                <ul id="blog" class="submenu collapse <?php if ($title == 'Data') {echo'in';} ?>">
                   <!--  <li class=<?php if ($title == 'Data' && $subtitle == 'view all') {echo '"active"';} ?>>
                        <a href="<?php echo base_url() ?>data">
                            <span class="text">Lihat Semua</span>
                        </a>
                    </li> -->
                    <li class=<?php if ($title == 'Data' && $subtitle == 'perusahaan') {echo '"active"';} ?>>
                        <a href="<?php echo base_url() ?>data/perusahaan">
                            <span class="text">Perusahaan</span>
                        </a>
                    </li>
                    <li class=<?php if ($title == 'Data' && $subtitle == 'cabang') {echo '"active"';} ?>>
                        <a href="<?php echo base_url() ?>data/cabang">
                            <span class="text">Cabang</span>
                        </a>
                    </li>
                    <li class=<?php if ($title == 'Data' && $subtitle == 'direksi') {echo '"active"';} ?>>
                        <a href="<?php echo base_url() ?>data/direksi">
                            <span class="text">Direksi</span>
                        </a>
                    </li>
                    <li class=<?php if ($title == 'Data' && $subtitle == 'komisaris') {echo '"active"';} ?>>
                        <a href="<?php echo base_url() ?>data/komisaris">
                            <span class="text">Komisaris</span>
                        </a>
                    </li>
                    <li class=<?php if ($title == 'Data' && $subtitle == 'pemegang saham') {echo '"active"';} ?>>
                        <a href="<?php echo base_url() ?>data/pemegang-saham">
                            <span class="text">Pemegang Saham</span>
                        </a>
                    </li>
                </ul>
            </li>  

            <!-- proyek -->
            <li class=<?php if ($title == 'Proyek') {echo '"active open"';} ?>>
                <a href="javascript:void(0);" data-target="#proyek" data-toggle="submenu" data-parent=".topmenu">
                    <span class="figure"><i class="ico-building"></i></span>
                    <span class="text">Proyek</span>
                </a>
                <ul id="proyek" class="submenu collapse <?php if ($title == 'Proyek') {echo'in';} ?>">
                    <li class=<?php if ($title == 'Proyek' && $subtitle == 'list proyek') {echo '"active"';} ?>>
                        <a href="<?php echo base_url() ?>proyek/list-proyek"><span class="text">List Proyek</span></a>
                    </li>
                    
                    <li class=<?php if ($title == 'Proyek' && $subtitle == 'nama proyek') {echo '"active"';} ?>>
                        <a href="<?php echo base_url() ?>proyek/nama-proyek"><span class="text">Nama / Detail Proyek</span></a>
                    </li>
                    
                    <li class=<?php if ($title == 'Proyek' && $subtitle == 'perijinan') {echo '"active"';} ?>>
                        <a href="<?php echo base_url() ?>proyek/perijinan"><span class="text">Perijinan</span></a>
                    </li>
                    
                    <li class=<?php if ($title == 'Proyek' && $subtitle == 'data fisik') {echo '"active"';} ?>>
                        <a href="<?php echo base_url() ?>proyek/data-fisik"><span class="text">Data Fisik</span></a>
                    </li>
                    

                    <li class=<?php if ($title == 'Proyek' && $subtitle == 'jasa lainnya') {echo '"active"';} ?>>
                        <a href="<?php echo base_url() ?>proyek/jasa-lainnya">
                            <span class="text">Penyedia Jasa Lainnya</span>
                        </a>
                    </li>
                    
                </ul>
            </li> <!-- end proyek -->


            <!-- <li class=<?php if ($title == 'Info') {echo '"active"';} ?>>
                <a href="<?php echo base_url() ?>info">
                    <span class="figure"><i class="ico-bullhorn2"></i></span>
                    <span class="text">Info</span>
                    <span class="arrow"></span>
                </a>
            </li>   -->
            
            <li class=<?php if ($title == 'Account') {echo '"active"';} ?>>
                <a href="<?php echo base_url() ?>account">
                    <span class="figure"><i class="ico-user"></i></span>
                    <span class="text">Account</span>
                    <span class="arrow"></span>
                </a>
            </li>  


    



            <li>
                <a href="<?php echo base_url() ?>logout">
                    <span class="figure"><i class="ico-unlock"></i></span>
                    <span class="text">Keluar</span>
                    <span class="arrow"></span>
                </a>
            </li>  

            

        </ul>
    </section><!-- end Menu admin -->


    
</aside>
