
    <!--View : Bottom -->  
    <!-- js placed at the end of the document so the pages load faster -->
    <script class="include" type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="<?php echo base_url();?>assets/js/jquery.scrollTo.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>assets/js/jquery.sparkline.js"></script>
    <link href="<?php echo base_url();?>source/plugins/jQuery/themes/ui-lightness/jquery-ui.css" rel="stylesheet">
    <script src="<?php echo base_url();?>source/plugins/jQuery/jquery-ui.js"></script>

      <!-- Javascript -->
      <script>
         $(function() {
            $( "#datepicker" ).datepicker({
                dateFormat : "yy-mm-dd",
            });
         });
      </script>

    <!--common script for all pages-->
    <script src="<?php echo base_url();?>assets/js/common-scripts.js"></script>
    
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/gritter/js/jquery.gritter.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/gritter-conf.js"></script>
    <script src="<?php echo base_url();?>assets/js/morris-conf.js"></script>   

    <!--script for this page-->
    <script src="<?php echo base_url();?>assets/js/sparkline-chart.js"></script>    
	<script src="<?php echo base_url();?>assets/js/zabuto_calendar.js"></script>
	
	<script type="text/javascript">
        $(document).ready(function () {
        var unique_id = $.gritter.add({
            // (string | mandatory) the heading of the notification
            title: 'Selamat Datang di Istri Bijak!',
            // (string | mandatory) the text inside the notification
            text: 'Disini Anda dapat mengelola keuangan keluarga dengan lebih mudah, mengatur pola konsumsi keluarga, hingga merencenakan keluarga dengan masa depan yang lebih cerah.<a href="how.html" target="_blank" style="color:#ffd777"> Ketahui lebih lanjut </a>.',
            // (string | optional) the image to display on the left
            image: '<?php echo base_url();?>assets/img/ui-divya.jpg',
            // (bool | optional) if you want it to fade out on its own or just sit there
            sticky: true,
            // (int | optional) the time you want it to be alive for before fading out
            time: '',
            // (string | optional) the class name you want to apply to that specific message
            class_name: 'my-sticky-class'
        });

        return false;
        });
	</script>
	
	<script type="application/javascript">
        $(document).ready(function () {
            $("#date-popover").popover({html: true, trigger: "manual"});
            $("#date-popover").hide();
            $("#date-popover").click(function (e) {
                $(this).hide();
            });
        
            $("#my-calendar").zabuto_calendar({
                action: function () {
                    return myDateFunction(this.id, false);
                },
                action_nav: function () {
                    return myNavFunction(this.id);
                },
                ajax: {
                    url: "show_data.php?action=1",
                    modal: true
                },
                legend: [
                    {type: "text", label: "Special event", badge: "00"},
                    {type: "block", label: "Regular event", }
                ]
            });
        });
        
        
        function myNavFunction(id) {
            $("#date-popover").hide();
            var nav = $("#" + id).data("navigation");
            var to = $("#" + id).data("to");
            console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
        }
    </script>

    <script type="text/javascript">
        $(function () {
            $('.datetimepicker').datetimepicker({
                format: 'YYYY/MM/DD HH:mm',
            });
        });
    </script>

  </body>
</html>
<!--End : View Bottom-->
