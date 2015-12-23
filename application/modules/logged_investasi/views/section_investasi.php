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
                              <input type="text" class="form-control" name="jumlah" id="inputinvestasi">
                            </div>
                        </div>
                        <div class="box-footer" align="right">
                            <button id="btn" type="submit" class="btn btn-primary">Kirim</button>
                          </div>
                    </form>
                  </div>
                </div>
              </div>

            <div class="row mt">
              <div class="col-lg-12">
                <div class="showback">
                  <h4><i class="fa fa-angle-right"></i> Daftar Investasi Bulan <?php echo $bulantahun;?></h4>
                    <table class="table table-bordered table-striped table-condensed">
                      <thead>
                      <tr>
                          <th style='text-align:center;width:5%'>No</th>
                          <th style='text-align:center;width:40%'>Besar Dana Investasi</th>
                          <th style='text-align:center;width:40%' class="text">Tanggal Terima Dana Investasi</th>
                          <th style='text-align:center;width:15%' class="numeric">Action</th>
                      </tr>
                      </thead>
                      <tbody>
                        <?php  echo $data;?>
                      </tbody>
                  </table>
                </div>     
              </div>
            </div>
        </section><! --/wrapper -->
      </section><!-- /MAIN CONTENT --> 

      <div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            
                <div class="modal-header bg-red">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">Konfirmasi Delete</h4>
                </div>
            
                <div class="modal-body">
                    <p>Apakah anda Yakin akan menghapus data ini.</p>               
                </div>
                
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    <a href="#" class="btn btn-danger danger">Delete</a>
                </div>
            </div>
        </div>
    </div>
      <?php echo $js;?>