     
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--View : main content start-->
       <section id="main-content">
          <section class="wrapper">

              <div class="row">
                  <div class="col-lg-9 main-chart">
                  
                    <!-- /row mt -->  
                  
                      <h3><i class="fa fa-angle-right"></i> Dashboard</h3>
                      <div class="row mt">
                      <!-- SERVER STATUS PANELS -->
                        <div class="col-md-4 col-sm-4 mb">
                          <div class="white-panel pn donut-chart">
                            <div class="white-header">
                    <h5>Sisa Pemasukan Bulan Ini</h5>
                            </div>
                      <canvas id="serverstatus01" height="120" width="120"></canvas>
                        <script>
                          var doughnutData = [
                              {//untuk outcome bulan ini
                                value: <?php echo $metro1_persentase_sisa_income; ?>,
                                color:"#68dff0"
                              },
                              {//untuk income bulan ini
                                value : <?php echo $metro1_persentase_total_pengeluaran; ?>,
                                color : "#000000"
                              }
                            ];
                            var myDoughnut = new Chart(document.getElementById("serverstatus01").getContext("2d")).Doughnut(doughnutData);
                        </script>
                        <footer style="padding:5px;">
                          <div class="pull-left">
                            <h5><i class="fa fa-hdd-o"></i> Total Pengeluaran</h5>
                          </div>
                          <div class="pull-right">
                            <h5>Rp <?php echo $metro1_total_pengeluaran; ?>,-</h5>
                          </div>
                         <div class="pull-left">
                            <h5><i class="fa fa-hdd-o"></i> Sisa Income</h5>
                          </div>
                          <div class="pull-right">
                            <h5>Rp <?php echo $metro1_sisa_income; ?>,-</h5>
                          </div>
                        </footer>
                          </div><! --/grey-panel -->
                        </div><!-- /col-md-4-->
                        
                        <div class="col-md-4 col-sm-4 mb">
                          <div class="white-panel pn">
                          <div class="white-header">
                            <h5>Pengeluaran Terbesar Bulan Ini</h5>
                          </div>
                            <div class="centered">
                          <img src="<?php echo base_url();?>assets/img/product.png" width="120">
                            </div>
                          <footer style="padding:5px;">
                            <div class="pull-left">
                              <h5><i class="fa fa-hdd-o"></i> Belanja Terbesar</h5>
                            </div>
                            <div class="pull-right">
                              <h5><?php echo $metro1_nama_jenis_belanja; ?></h5>
                            </div>
                           <div class="pull-left">
                              <h5><i class="fa fa-hdd-o"></i> Nominal </h5>
                            </div>
                            <div class="pull-right">
                              <h5>Rp <?php echo $metro1_pengeluaran_terbesar; ?>,-</h5>
                            </div>
                          </footer>
                          </div>
                        </div><!-- /col-md-4 -->
                        
            <div class="col-md-4 mb">
              <!-- WHITE PANEL - TOP USER -->
              <div class="white-panel pn">
                <div class="white-header">
                  <h5>USER</h5>
                </div>
                <p><img src="<?php echo base_url();?>assets/img/ui-divya.jpg" class="img-circle" width="80"></p>
                <p><b><?php echo $this->session->userdata('nama_ibu') ;?></b></p>
                <div class="row">
                  
                </div>
              </div>
            </div><!-- /col-md-4 -->
                        

                    </div><!-- /row -->
                    
                            
          <div class="row">
            <!-- TWITTER PANEL -->
            <div class="col-md-4 mb">
                          <div class="darkblue-panel pn" style="background-color:#ec268f">
                            <div class="darkblue-header">
                        <h5>DATA KEUANGAN BULAN LALU</h5>
                            </div>
                          <footer style="padding:5px;">
                            <div class="pull-left">
                              <h5><i class="fa fa-hdd-o"></i> Sisa Income Bln Lalu</h5>
                            </div>
                            <div class="pull-right">
                              <h5>Rp <?php echo $metro4_sisa_income_bulan_lalu; ?>,-</h5>
                            </div>
                           <div class="pull-left">
                              <h5><i class="fa fa-hdd-o"></i>Total Belanja Bln Lalu </h5>
                            </div>
                            <div class="pull-right">
                              <h5>Rp <?php echo $metro4_total_belanja_bulan_lalu; ?>,-</h5>
                            </div>
                           <div class="pull-left">
                              <h5><i class="fa fa-hdd-o"></i>Total Cicilan Bln Lalu </h5>
                            </div>
                            <div class="pull-right">
                              <h5>Rp <?php echo $metro4_total_cicilan_bulan_lalu; ?>,-</h5>
                            </div>
                          </footer>
                <footer>
                          </div><! -- /darkblue panel -->
            </div><!-- /col-md-4 -->
            
            
            <div class="col-md-4 mb">
                          <div class="darkblue-panel pn"style="background-color:#ec268f">
                            <div class="darkblue-header">
                        <h5>RASIO PROYEKSI KEUANGAN BULAN DEPAN</h5>
                            </div>
                          <footer style="padding:5px;">
                            <div class="pull-left">
                              <h5><i class="fa fa-hdd-o"></i> Penghasilan</h5>
                            </div>
                            <div class="pull-right">
                              <h5>Rp <?php echo $metro4_sisa_income_bulan_lalu; ?>,-</h5>
                            </div>
                           <div class="pull-left">
                              <h5><i class="fa fa-hdd-o"></i>Belanja</h5>
                            </div>
                            <div class="pull-right">
                              <h5>Rp <?php echo $metro4_total_belanja_bulan_lalu; ?>,-</h5>
                            </div>
                           <div class="pull-left">
                              <h5><i class="fa fa-hdd-o"></i>Cicilan</h5>
                            </div>
                            <div class="pull-right">
                              <h5>Rp <?php echo $metro4_total_cicilan_bulan_lalu; ?>,-</h5>
                            </div>
                          </footer>
                <footer>
                          </div><! -- /darkblue panel -->
            </div><!-- /col-md-4 -->
            
            <div class="col-md-4 mb">
                          <div class="darkblue-panel pn"style="background-color:#ec268f">
                            <div class="darkblue-header">
                        <h5>PROFIL TAGIHAN</h5>
                            </div>
                          <footer style="padding:5px;">
                            <div class="pull-left">
                              <h5><i class="fa fa-hdd-o"></i> KPR&nbsp;&nbsp;&nbsp;&nbsp;</h5>
                            </div>
                            <div class="pull-right">
                              <h5>Rp <?php echo $metro4_sisa_income_bulan_lalu; ?>,-</h5>
                            </div>
                           <div class="pull-left">
                              <h5><i class="fa fa-hdd-o"></i>Tagihan Mobil&nbsp;&nbsp;&nbsp;&nbsp;</h5>
                            </div>
                            <div class="pull-right">
                              <h5>Rp <?php echo $metro4_total_belanja_bulan_lalu; ?>,-</h5>
                            </div>
                           <div class="pull-left">
                              <h5><i class="fa fa-hdd-o"></i>Tagihan Listrik&nbsp;&nbsp;&nbsp;&nbsp;</h5>
                            </div>
                            <div class="pull-right">
                              <h5>Rp <?php echo $metro4_total_cicilan_bulan_lalu; ?>,-</h5>
                            </div>
                          </footer>
                <footer>
                          </div><! -- /darkblue panel -->
            </div><!-- /col-md-4 -->
            
          </div><!-- /row --> 
          
        </div><!-- /col-lg-9 END SECTION MIDDLE -->
                  
                  
      <!-- **********************************************************************************************************************************************************
      RIGHT SIDEBAR CONTENT
      *********************************************************************************************************************************************************** -->                  
                  
                  <div class="col-lg-3 ds">
                    <!--COMPLETED ACTIONS DONUTS CHART-->
            <h3>NOTIFICATIONS</h3>
                                        
                      <!-- First Action -->
                      <div class="desc">
                        <div class="thumb">
                          <span class="badge bg-theme"><i class="fa fa-clock-o"></i></span>
                        </div>
                        <div class="details">
                          <p><muted>6 Desember 2015</muted><br/>
                             <b>Cicilan Rumah Jatuh Tempo</b>
                          </p>
                        </div>
                      </div>
                      <!-- Second Action -->
                      <div class="desc">
                        <div class="thumb">
                          <span class="badge bg-theme"><i class="fa fa-clock-o"></i></span>
                        </div>
                        <div class="details">
                          <p><muted>1 Desember 2015</muted><br/>
                              Biaya pendidikan anak harus dibayar<br/>
                          </p>
                        </div>
                      </div>
                      <!-- Third Action -->
                      <div class="desc">
                        <div class="thumb">
                          <span class="badge bg-theme"><i class="fa fa-clock-o"></i></span>
                        </div>
                        <div class="details">
                          <p><muted>30 November 2015</muted><br/>
                             Cicilan Mobil Jatuh tempo<br/>
                          </p>
                        </div>
                      </div>
                  </div><!-- /col-lg-3 -->
              </div><! --/row -->
          </section>
      </section>

      <!--End:View : Main Section-->