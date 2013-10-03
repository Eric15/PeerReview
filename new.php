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
				"Adriana Barrios German",
				"Alexander Hernandez",
				"Alma Nino",
				"Angeles Flores-Olmedo",
				"Antonio Roldan Mandelkow",
				"Benjamin Gonzalez",
				"Brayan Cabrera-Guillen",
				"Brian Llapa",
				"Bryan Elijah Sykes",
				"Carlos Jiminez-Casarubias",
				"Chit Ko Ko",
				"Christopher Martin Mendez Martinez",
				"Clarence Weah",
				"Eh Thaw Paw",
				"Eliseo Benjamin Jovel-Recinos",
				"Emily Perez Vara",
				"Erika Montano-Silva",
				"Ivan Jimenez",
				"Jackee Saw",
				"Jasani McMorris",
				"Jedet Martinez Gamino",
				"Jennifer Tapia",
				"Jesus Felipe Castillo-Palacios",
				"Julie Turnbaugh",
				"Julio Cesar Xolalpan de Jesus",
				"Ku Thaw",
				"Leonor Gallegos-Olivera",
				"Matthew Toe",
				"Michael Allen Runningshield Jr",
				"Myay Paw Wah",
				"Nataly Leal Islas",
				"Paw Paw",
				"Paw Kalu Wah",
				"Paw Mi Say",
				"Rafael Dominguez",
				"Ruby Ramirez",
				"Say Eh Blut",
				"Tavian Latrell Willard",
				"TJ Eaton",
				"Vanessa Islas Peralta",
				"William Fabian Ramon Hurtado",
				"Yingkong Vang",
				"Aaron Cardenas",
				"Aidee Ramos-Marquez",
				"Alexis Mendoza Santiago",
				"Alexis Rai Galindo-Mogollan",
				"Angel Berneil Running",
				"Ansoni Javier Jovel-Recinos",
				"Arturo Olivares-Arpista",
				"Bryan Montano Vergara",
				"Cesia RoseMarie White",
				"Charly Ansurez-Catalan",
				"Chris Barradas Flores",
				"Christian Alfredo Gil-Pliego",
				"Christie Baw",
				"Elisea Lybarger",
				"Eric Turner",
				"Hector Hernandez-Diaz",
				"Heron Francis",
				"Jack (Juan) Sarenpa-Maldonado",
				"Johanna Guillen",
				"Jonathan Ysaac Jovel-Recinos",
				"Jose Martinez Gonzalez",
				"Jose A. Montano-Silva",
				"Josie Turnbaugh",
				"Juan-Luis Villa-Lopez",
				"Mariah Southard",
				"Mauricio Martinez-Cruz",
				"Miguel Angel Flores-Olmedo",
				"Nicholas BraveHeart",
				"Nina Reign Krulikosky",
				"Patrick Weah",
				"Pee Doh",
				"Saw Eh Tha Dah",
				"Thay Ler",
				"Wendy Mendoza",
				"Yay Wah",
				"Zin Maung",
				"Aileen Fernandez",
				"Aileen Roque Tenorio",
				"Aiyana Thomas",
				"Alex Chavez",
				"Alexis B Schneider",
				"Alyssa Morris",
				"Amairani Fuentes-Noyola",
				"Angel Sanisaca",
				"Anissa Olson",
				"Charles Jones",
				"Cristobal Reyes",
				"Dakota Wayne Bluebird",
				"Dana Vega",
				"David Naula-Carrillo",
				"Deja La Rey Herrera-Rincon",
				"DeVontae Flowers",
				"Diego Arturo Perez",
				"Eh Moe",
				"Eh Kalu Dah",
				"Eh Ku Say",
				"Eh Ler Tha Paw",
				"Evelyn (Brittany) Hernandez-Jimenez",
				"Gabriela Guardado-Barrera",
				"Gavin Parsons",
				"Joseph Kavanaugh",
				"Kenyon Holzendorf",
				"Larry Alonso-Isidoro",
				"Lillian Percy",
				"Marco Ojeda",
				"Maria Isabel Lopez-Mendiola",
				"Nataly Sanmartin",
				"Paw Moo May Shell",
				"Rene Alexis Ovando-Morales",
				"Wah Wah Shee"

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
		<form action="verify.php" method="post">
		<div class="form-group">
			<label for="peername">Peer's name</label><br>
			<input class="form-control" type="text" id="peername" name="peername">
		</div>
			<input class="btn btn-primary" type="submit" name="submit" value="Submit Feedback">
		</form>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>