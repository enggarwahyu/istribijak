$( document ).ready(function() {
  //validasi simpan
$("#simpan_tambah_calon").click(function(event){
    event.preventDefault();
    var base_url = $('#base_url').val();
    $.ajax({
      type: "POST",
        url: base_url + "index.php/?admin&module=manajemencalonformatur&auth=tambah",
        data: $("#form_tambah_calon").serialize(),
        success:function(data) {
          if(data=="1"){
                $('#tampil').html("<div class='alert alert-success'><b>Data berhasil disimpan</b></div>");
                window.location = base_url + "index.php/admin?menu=manajemencalonformatur";                 
              }
          else if(data=="2"){
          		$('#tampil').html("<div class='alert alert-danger'><b>Username dan Password masih kosong</b></div>");
          }
            else {
            	$('#tampil').html("<div class='alert alert-danger'><b>Username dan Password salah</b></div>"); 
          }
        },
      }); 
    });
  });