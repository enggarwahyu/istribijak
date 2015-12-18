      <section id="main-content">
          <section class="wrapper">
            <h3><i class="fa fa-angle-right"></i> Alokasi Penghasilan/Gaji</h3>
          		<div class="row mt">
          			<div class="col-lg-12 col-md-12 col-sm-12">
              <! -- BASIC PROGRESS BARS -->
              <div class="showback">
                 <form id="form" class="form-horizontal tasi-form" method="POST">
                  <div id="tampil"></div>
                    <input type="hidden" name="base_url" id="base_url" name="<?php echo base_url();?>">
                    <div class="form-group">
                      <label class="col-sm-4 col-md-4 control-label " for="inputSuccess">Jumlah Gaji yang Diterima</label>
                        <div class="col-md-8 col-sm-8">
                          <input type="text" name="jumlah" class="form-control" id="inputSuccess" class="">
                        </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-4 col-md-4 control-label" for="inputSuccess">Tanggal Terima Gaji</label>
                        <div class="col-md-8 col-sm-8">
                          <input type="text" class="form-control datepicker" name="tanggal" id="example1">
                        </div>
                    </div>
                    <div class="box-footer" align="right">
                        <button id="btn" type="submit" class="btn btn-primary">Kirim</button>
                      </div>
                </form>
              </div>  
            </div>
            </div>
      <!--main content end-->
      </section>
    </section>
<?php echo $js;?>