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
    <link href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" rel="stylesheet" media="screen">
<!--   <link href="css/cosmo.css" rel="stylesheet" media="screen"> -->
     <style>
		.ui-autocomplete {
			max-height: 300px;
			overflow-y: auto;
			/* prevent horizontal scrollbar */
			overflow-x: hidden;
		}
		/* IE 6 doesn't support max-height
		* we use height instead, but this forces the menu to always be this tall
		*/
		* html .ui-autocomplete {
			height: 300px;
		}
    </style>
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="../../assets/js/html5shiv.js"></script>
      <script src="../../assets/js/respond.min.js"></script>
    <![endif]-->
      <script>
		$(function() {
			var availableTags = [
				

			];
			$( "#peername" ).autocomplete({
				source: availableTags
			});
		});
	</script>
  </head>
  <body style="text-align:center; background: #eee">
	<div class="clearfix danger">
      	<h1>Peer Appraiser</h1>
	</div>
        <p style="display:block; margin:0 auto; width:280px;" class="clearfix info">Signed in as <?php echo $_SESSION['f_name'] ?></p>
	<div class="form-group" style="margin-left:auto;margin-right:auto;width:300px">
                <h2>New Scorecard</h2>
		<form action="feedback.php" method="post">
		<div class="form-group">
			<label for="peername">Peer's name</label><br>
			<input class="form-control" type="text" id="peername" name="peername">
		</div>
		<div class="panel panel-info">
		  <div class="panel-heading">This project was creative!</div>
		  <div class="panel-body">
			<label class="radio-inline">
				  <input type="radio" name="creative" id="creative1" value="1"> <span class="glyphicon glyphicon-thumbs-down"></span><span style="width:20px;" class="glyphicon glyphicon-thumbs-down"></span>
			</label>
			<label class="radio-inline">
				  <input type="radio" name="creative" id="creative2" value="2"> <span class="glyphicon glyphicon-thumbs-down"></span>
			</label>
			<label class="radio-inline">
				  <input type="radio" name="creative" id="creative3" value="3"> <span class="glyphicon glyphicon-thumbs-up"></span>
			</label>
			<label class="radio-inline">
				  <input type="radio" name="creative" id="creative4" value="4"> <span class="glyphicon glyphicon-thumbs-up"></span><span style="width:20px;" class="glyphicon glyphicon-thumbs-up"></span>
			</label>
		  </div>
		</div>
		<div class="panel panel-info">
		  <div class="panel-heading">I understand what the project is about!</div>
		  <div class="panel-body">
			<label class="radio-inline">
				  <input type="radio" name="understand" id="understand1" value="1"> <span class="glyphicon glyphicon-thumbs-down"></span><span style="width:20px;" class="glyphicon glyphicon-thumbs-down"></span>
			</label>
			<label class="radio-inline">
				  <input type="radio" name="understand" id="understand2" value="2"> <span class="glyphicon glyphicon-thumbs-down"></span>
			</label>
			<label class="radio-inline">
				  <input type="radio" name="understand" id="understand3" value="3"> <span class="glyphicon glyphicon-thumbs-up"></span>
			</label>
			<label class="radio-inline">
				  <input type="radio" name="understand" id="understand4" value="4"> <span class="glyphicon glyphicon-thumbs-up"></span><span style="width:20px;" class="glyphicon glyphicon-thumbs-up"></span>
			</label>
		  </div>
		</div>
		<div class="panel panel-info">
		  <div class="panel-heading">I'd like to see more projects like this</div>
		  <div class="panel-body">
			<label class="radio-inline">
				  <input type="radio" name="seemore" id="seemore1" value="1"> <span class="glyphicon glyphicon-thumbs-down"></span><span style="width:20px;" class="glyphicon glyphicon-thumbs-down"></span>
			</label>
			<label class="radio-inline">
				  <input type="radio" name="seemore" id="seemore2" value="2"> <span class="glyphicon glyphicon-thumbs-down"></span>
			</label>
			<label class="radio-inline">
				  <input type="radio" name="seemore" id="seemore3" value="3"> <span class="glyphicon glyphicon-thumbs-up"></span>
			</label>
			<label class="radio-inline">
				  <input type="radio" name="seemore" id="seemore4" value="4"> <span class="glyphicon glyphicon-thumbs-up"></span><span style="width:20px;" class="glyphicon glyphicon-thumbs-up"></span>
			</label>
		  </div>
		</div>
		<div class="panel panel-info">
		  <div class="panel-heading">Give a badge</div>
		  <div class="panel-body">
			<label class="radio-inline">
				  <input type="radio" name="badge" id="badge1" value="creative"> <span class="glyphicon glyphicon-certificate"></span> Creative
			</label>
			<label class="radio-inline">
				  <input type="radio" name="badge" id="badge2" value="genius"> <span class="glyphicon glyphicon-flash"></span> Genius
			</label>
			<label class="radio-inline">
				  <input type="radio" name="badge" id="badge3" value="artist"> <span class="glyphicon glyphicon-picture"></span> Artist
			</label>
			<label class="radio-inline">
				  <input type="radio" name="badge" id="badge4" value="speaker"> <span class="glyphicon glyphicon-comment"></span> Speaker
			</label>
		  </div>
		</div>
			<input class="btn btn-primary" type="submit" name="submit" value="Submit Feedback">
		</form>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>