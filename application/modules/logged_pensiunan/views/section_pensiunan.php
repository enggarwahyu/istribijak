      <section id="main-content">
          <section class="wrapper">
            <h3><i class="fa fa-angle-right"></i> Alokasi Penghasilan/Pensiunan</h3>
              <div class="row mt">
                <div class="col-lg-12 col-md-12 col-sm-12">
                  <! -- BASIC PROGRESS BARS -->
                  <div class="showback">
                     <form class="form-horizontal tasi-form" id="form" >
                      <div id="tampil"></div>
                        <input type="hidden" name="base_url" id="base_url" value="<?php echo base_url();?>">
                        <div class="form-group">
                          <label class="col-sm-4 col-md-4 control-label " for="inputSuccess">Uang Pensiunan yang Diterima</label>
                            <div class="col-md-8 col-sm-8">
                              <input type="text" name="tanggal" class="form-control" id="inputSuccess" class="">
                            </div>
                        </div>
                        <div class="form-group">
                          <label class="col-sm-4 col-md-4 control-label" for="inputSuccess">Tanggal Terima Uang Pensiun</label>
                            <div class="col-md-8 col-sm-8">
                              <input type="text" name="jumlah" class="form-control datepicker" id="example1" class="example1" >
                            </div>
                        </div>
                        <div class="box-footer" align="right">
                            <button id="btn" type="submit" class="btn btn-primary">Kirim</button>
                          </div>
                    </form>
                  </div> 
      <!--main content end-->
    </section>
  </section>
  <?php echo $js;?>