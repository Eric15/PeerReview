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
	<div class="form-group" style="margin-left:auto;margin-right:auto;width:280px">
		<h2>Please Log In</h2>
		<form action="verify.php" method="post">
		<div class="form-group">
			<label for="username">User Name</label><br>
			<input class="form-control" type="text" id="username" name="username">
		</div>
		<div class="form-group">
			<label for="password">Password</label>
			<input class="form-control" type="password" id="password" name="password">
		</div>
			<input class="btn btn-primary" type="submit" name="submit" value="Login">
		</form>
	</div>
	<a href="register.php" class="btn btn-success btn-lg">New user?</a>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="//code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>






