      <section id="main-content">
          <section class="wrapper">
            <h3><i class="fa fa-angle-right"></i> Alokasi Penghasilan/Pensiunan</h3>
              <div class="row mt">
                <div class="col-lg-12 col-md-12 col-sm-12">
                  <div class="showback">
                     <form class="form-horizontal tasi-form" id="form" >
                      <div id="tampil"></div>
                        <input type="hidden" name="base_url" id="base_url" value="<?php echo base_url();?>">
                        <div class="form-group">
                          <label class="col-sm-4 col-md-4 control-label " for="inputSuccess">Uang Pensiunan yang Diterima</label>
                            <div class="col-md-8 col-sm-8">
                              <input type="text" name="jumlah" class="form-control" id="inputpensiunan" >
                            </div>
                        </div>
                        <div class="form-group">
                          <label class="col-sm-4 col-md-4 control-label" for="inputSuccess">Tanggal Terima Uang Pensiun</label>
                            <div class="col-md-8 col-sm-8">
                              <input type="text" name="tanggal" class="form-control" id="datepicker" readonly>
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
                  <h4><i class="fa fa-angle-right"></i> Daftar Sumbangan Pensiunan Bulan <?php echo $bulantahun;?></h4>
                    <table class="table table-bordered table-striped table-condensed">
                      <thead>
                      <tr>
                          <th style='text-align:center;width:5%'>No</th>
                          <th style='text-align:center;width:40%'>Besar Dana Pensiunan</th>
                          <th style='text-align:center;width:40%' class="text">Tanggal Terima Dana Pensiunan</th>
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
      <!--main content end-->
    </section>
  </section>
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