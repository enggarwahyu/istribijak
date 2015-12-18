 <section id="main-content">
          <section class="wrapper">
            <h3><i class="fa fa-angle-right"></i> Alokasi Penghasilan/Investasi</h3>
          <div class="row mt">
            <div class="col-lg-12">
              <! -- BASIC PROGRESS BARS -->
                  <div class="showback">
                     <form id="form" class="form-horizontal tasi-form">
                      <input type="hidden" id="base_url" name="<?php echo base_url(); ?>">
                      <div id="tampil"></div>
                        <div class="form-group">
                          <label class="col-sm-4 col-md-4 control-label " for="inputSuccess">Kategori Investasi</label>
                            <div class="col-md-8 col-sm-8">
                              <input type="text" class="form-control" name="kategori" id="inputSuccess" class="">
                            </div>
                        </div>
                        <div class="form-group">
                          <label class="col-sm-4 col-md-4 control-label" for="inputSuccess">Jumlah Uang Investasi (Rp.)</label>
                            <div class="col-md-8 col-sm-8">
                              <input type="text" class="form-control" name="jumlah" id="inputSuccess" class="">
                            </div>
                        </div>
                        <div class="box-footer" align="right">
                            <button id="btn" type="submit" class="btn btn-primary">Kirim</button>
                          </div>
                    </form>
                  </div>
        </section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->
      <?php echo $js;?>