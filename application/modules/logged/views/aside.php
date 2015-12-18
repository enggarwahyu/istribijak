      <!--View : sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
              
                  <p class="centered"><a href="profile.html"><img src="<?php echo base_url();?>assets/img/ui-divya.jpg" class="img-circle" width="60"></a></p>
                  <h5 class="centered"><?php echo $this->session->userdata('nama_ibu') ;?></h5>
                    
                  <li class="mt">
                      <a href="<?php echo base_url();?>index.php/logged?menu=dashboard">
                          <i class="fa fa-globe"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-sign-in"></i>
                          <span>Alokasi Penghasilan</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="<?php echo base_url();?>index.php/logged?menu=gaji">Gaji</a></li>
                          <li><a  href="<?php echo base_url();?>index.php/logged?menu=pensiunan">Pensiunan</a></li>
                          <li><a  href="<?php echo base_url();?>index.php/logged?menu=investasi">Investasi</a></li>
                          <li><a  href="<?php echo base_url();?>index.php/logged?menu=lainnya">Lainnya</a></li>
                      </ul>
                  </li>

                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-sign-out"></i>
                          <span>Alokasi Pengeluaran</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="<?php echo base_url();?>index.php/logged?menu=belanja">Belanja</a></li>
                          <li><a  href="<?php echo base_url();?>index.php/logged?menu=tagihan">Tagihan</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu"  >
                      <a href="<?php echo base_url();?>index.php/logged?menu=lap_keuangan" >
                          <i class="fa fa-file-text-o"></i>
                          <span>Laporan Keuangan</span>
                      </a>
                  </li>
                  <li class="sub-menu"  >
                      <a href="<?php echo base_url();?>index.php/logged?menu=pro_keuangan" >
                          <i class="fa fa-file-text"></i>
                          <span>Proyeksi Keuangan</span>
                      </a>
                  </li>
                  <li class="sub-menu"  >
                      <a href="chartjs.html" >
                          <i class="fa fa-book"></i>
                          <span>Panduan</span>
                      </a>
                  </li>                 

              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--View : sidebar end-->