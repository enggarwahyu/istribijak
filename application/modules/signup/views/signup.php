<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>Istri Bijak | Daftar</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url();?>assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="<?php echo base_url();?>assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="<?php echo base_url();?>source/img/favicon/favicon.png" rel="shortcut icon" type="image/png"/>
    <!-- Custom styles for this template -->
    <link href="<?php echo base_url();?>assets/css/style2.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/style-responsive.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->

	  <div id="login-page">
	  	<div class="container">
	  	
		      <form id="form-login" class="form-login" action="index.html">
            <input type="hidden" id="base_url" name="base_url" value="<?php echo base_url(); ?>">
		        <h2 class="form-login-heading">Daftar</h2>
		        <div class="login-wrap">
		            
                <div id="tampil">
                </div>

		            <input type="text" id="nama" name="nama" class="form-control" id="nama" placeholder="Nama" autofocus>
		            <br>
                <input type="text" id="username" name="username" class="form-control" id="username" placeholder="Username" autofocus>
                <br>
		            <input type="password" id="password" name="password" class="form-control" id="" placeholder="Kata Sandi">
		            <br>
		            <input type="password"  id="ulangi_password" name="ulangi_password" class="form-control" placeholder="Ketik Ulang Kata Sandi">
		            <br>
		            <input type="text" class="form-control" name="email" id="email" placeholder="Email">
		            <label class="checkbox"></label>
		            <button id="btn" class="btn btn-theme btn-block" href="#" type="submit"></i> Daftar Sekarang</button>
		            <br/>
		            		
		        </div>		
		      </form>	  	
	  	
	  	</div>
	  </div>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="<?php echo base_url();?>assets/js/jquery.js"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
    <?php echo $js; ?>
    <!--BACKSTRETCH-->
    <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.backstretch.min.js"></script>
    <script>
        $.backstretch("<?php echo base_url();?>assets/img/back.jpg", {speed: 500});
    </script>


  </body>
</html>
