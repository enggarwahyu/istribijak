$( document ).ready(function() {
  //validasi simpan
$("#btn").click(function(event){
    event.preventDefault();
    var base_url = $('#base_url').val();
    $.ajax({
        type: "POST",
        url: base_url + "logged?menu=pensiunan&action=insert",
        data: $("#form").serialize(),
        success:function(data) {
          if(data=="sukses"){
                $('#tampil').html("<div class='alert alert-success'><b>Data berhasil disimpan</b></div>");
                window.location = base_url + "logged?menu=pensiunan";                 
              }
          else{
          		$('#tampil').html(data);
          }
        },
      }); 
    });
  });
