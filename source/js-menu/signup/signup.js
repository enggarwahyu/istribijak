$( document ).ready(function() {
  //validasi simpan
$("#btn").click(function(event){
    event.preventDefault();
    var base_url = $('#base_url').val();
    $.ajax({
        type: "POST",
        url: base_url + "signup/verification",
        data: $("#form-login").serialize(),
        success:function(data) {
          if(data=="sukses"){
                $('#tampil').html("<div class='alert alert-success'><b>Data berhasil disimpan. <br>Anda dapat melakukan login</b></div>");
                window.location = base_url + "login";                 
              }
          else{
          		$('#tampil').html(data);
          }
        },
      }); 
    });
  });
