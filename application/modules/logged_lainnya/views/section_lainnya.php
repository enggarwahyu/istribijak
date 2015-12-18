 <section id="main-content">
    <section class="wrapper">
            <h3><i class="fa fa-angle-right"></i> Alokasi Penghasilan/Lainnya</h3>
            <div class="col-lg-12">
              <! -- BASIC PROGRESS BARS -->
              <div class="showback">
                 <form id="form" class="form-horizontal tasi-form">
                  <input type="hidden" id="base_url" value="<?php echo base_url();?>">
                    <div id="tampil"></div>
                    <div class="form-group has-success">
                        <label class="col-sm-4 control-label col-md-4" for="inputSuccess">Kategori</label>
                        <div class="col-md-8 col-sm-8">
                        <input type="text" name="kategori" class="form-control" id="inputSuccess" class="">
                        </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-4 col-md-4 control-label " for="inputSuccess">Jumlah Pengeluaran</label>
                        <div class="col-md-8 col-sm-8">
                          <input type="text" name="jumlah" class="form-control" id="inputSuccess" class="">
                        </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-4 col-md-4 control-label" for="inputSuccess">Tanggal</label>
                        <div class="col-md-8 col-sm-8">
                          <input type="text" name="tanggal" class="form-control datepicker" id="example1" class="">
                        </div>
                    </div>
                    <div class="box-footer" align="right">
                        <button id="btn" type="submit" class="btn btn-primary">Kirim</button>
                      </div>
                    </div>
                </form>
                  
            </div>
          </div><!--/showback -->
  </section><! --/wrapper -->
</section><!-- /MAIN CONTENT -->
<?php echo $js;?>
