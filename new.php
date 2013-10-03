<?php 
session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Peer Appraiser</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="css/overrides.css" rel="stylesheet" media="screen">
<!--   <link href="css/cosmo.css" rel="stylesheet" media="screen"> -->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="../../assets/js/html5shiv.js"></script>
      <script src="../../assets/js/respond.min.js"></script>
    <![endif]-->
  </head>
  <body style="text-align:center; background: #eee">
	<div class="clearfix danger">
      	<h1>Peer Appraiser</h1>
	</div>
        <p style="display:block; margin:0 auto; width:280px;" class="clearfix info">Signed in as <?php echo $_SESSION['f_name'] ?></p>
	<div class="form-group" style="margin-left:auto;margin-right:auto;width:280px">
                <h2>New Scorecard</h2>
		<form action="verify.php" method="post">
		<div class="form-group">
			<label for="peername">Peer's name</label><br>
			<input class="form-control" type="text" id="peername" name="peername">
		</div>
			<input class="btn btn-primary" type="submit" name="submit" value="Submit Feedback">
		</form>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="//code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>