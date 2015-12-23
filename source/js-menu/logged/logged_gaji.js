$( document ).ready(function() {
  $('#confirm-delete').on('show.bs.modal', function(e) {
      $(this).find('.danger').attr('href', $(e.relatedTarget).data('href'));       
  });

  //hanya bisa masukin angka
  $('#inputgaji').keypress(function (data) {
      if (data.which!=46 && data.which!=44 && data.which!=8 && data.which!=0 &&
         (data.which<48 || data.which>57))
        return false;
  });
  $('#inputgaji').keyup(function(event) {
    $(this).val(function(index, value) {
      return value
        .replace(/[^,\d]/g, "")
        .replace(/\B(?=(\d{3})+(?!\d))/g, ".")
        .replace(/[,]\d{3}/g, ",00")
      ;
    });
  });
  //validasi simpan
$("#btn").click(function(event){
    event.preventDefault();
    var base_url = $('#base_url').val();
    $.ajax({
        type: "POST",
        url: base_url + "logged?menu=gaji&action=auth",
        data: $("#form").serialize(),
        success:function(data) {
          if(data=="sukses"){
                $('#tampil').html("<div class='alert alert-success'><b>Data berhasil disimpan</b></div>");
                window.location = base_url + "logged?menu=gaji";                 
              }
          else{
          		$('#tampil').html(data);
          }
        },
      }); 
    });
  });
