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
  	<a class="no_underline" href="index.php"><div class="clearfix danger">
      	<h1>Peer Appraiser</h1>
	</div></a>
	<div class="form-group" style="margin-left:auto;margin-right:auto;width:280px">
		<h2>Start giving feedback to your team!</h2>
		<form action="new_user.php" method="post">
		<div class="form-group">
			<label for="f_name">First Name</label><br>
			<input class="form-control" type="text" id="f_name" name="f_name">
		</div>
		<div class="form-group">
			<label for="l_name">Last Name</label><br>
			<input class="form-control" type="text" id="l_name" name="l_name">
		</div>
		<div class="form-group">
			<label for="email">Email Address</label><br>
			<input class="form-control" type="text" id="email" name="email">
		</div>
		<div class="form-group">
			<label for="password">New Password</label>
			<input class="form-control" type="password" id="password" name="password">
		</div>
		<div class="form-group">
			<label for="password_verify">Password again</label>
			<input class="form-control" type="password" id="password_verify" name="password_verify">
		</div>
			<input class="btn btn-primary" type="submit" name="submit" value="Sign up">
		</form>
	</div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="//code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>