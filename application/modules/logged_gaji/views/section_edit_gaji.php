      <section id="main-content">
          <section class="wrapper">
            <h3><i class="fa fa-angle-right"></i> Alokasi Penghasilan/Edit Gaji</h3>
          		<div class="row mt">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="col-lg-7 col-md-7 col-sm-12">
                      <div class="showback">
                       <form id="form" class="form-horizontal tasi-form" method="POST">
                        <div id="tampil"></div>
                          <input type="hidden" name="base_url" id="base_url" name="<?php echo base_url();?>">
                          <input type="hidden" name="auth" value="ubah">
                          <input type="hidden" name="id" value="<?php echo $id;?>">
                          <div class="form-group">
                            <label class="col-sm-4 col-md-4 control-label " for="inputSuccess">Jumlah Gaji yang Diterima</label>
                              <div class="col-md-8 col-sm-8">
                                <input type="text" name="jumlah" class="form-control" id="inputgaji" class="form-control" value="<?php echo $jumlah; ?>">
                              </div>
                          </div>
                          <div class="form-group">
                            <label class="col-sm-4 col-md-4 control-label" for="inputSuccess">Tanggal Terima Gaji</label>
                              <div class="col-md-8 col-sm-8">
                                <input type="text" class="form-control" name="tanggal" id="datepicker"  value="<?php echo $tanggal; ?>" readonly>
                              </div>
                          </div>
                          <div class="box-footer" align="right">
                              <button id="btn" type="submit" class="btn btn-primary">Kirim</button>
                            </div>
                      </form> 
                      </div>
                    </div>
                    <div class="col-lg-5 col-md-5 col-sm-12">
                      <div class="showback">
                        <div class="alert">
                          Panduan<br>
                          - Silahkan masukkan data jumlah gaji dengan <b> Angka </b>.
                        </div>
                      </div>  
                    </div>
                </div>
            </div>
      <!--main content end-->
      </section>
    </section>
<?php echo $js;?>
