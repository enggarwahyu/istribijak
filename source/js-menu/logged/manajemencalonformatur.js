$( document ).ready(function() {
  //validasi simpan
$("#simpan_tambah_calon").click(function(event){
    event.preventDefault();
    var base_url = $('#base_url').val();
    $.ajax({
        type: "POST",
        url: base_url + "index.php/admin?menu=manajemencalonformatur&action=oct",
        data: $("#form_tambah_calon").serialize(),
        success:function(data) {
          if(data == "sukses"){
                $('#tampil').html("<div class='alert alert-success'><b>Data berhasil disimpan</b></div>");
                window.location = base_url + "index.php/admin?menu=manajemencalonformatur";                 
              }
            else {
            	$('#tampil').html(data); 
          }
        },
      }); 
    });
  });