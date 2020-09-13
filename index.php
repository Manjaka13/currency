<!-- Author: Manjaka13 <manjaka.rajaonson@gmail.com> -->
<!DOCTYPE HTML>
<HTML lang="en">
	<HEAD>
		<title>Currency</title>
		<meta charset="UTF-8">
		<meta name="robots" content="index, follow">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
		<meta name="author" content="Manjaka13 <manjaka.rajaonson@gmail.com>"/>
		<meta name="description" content="Converts currency units."/>
		<link rel="shortcut icon" type="image/x-icon" href="img/logo_harijaona_rajaonson.png"/>
		<link rel="icon" type="image/x-icon" href="img/logo_harijaona_rajaonson.png"/>

		<!-- Import our styles -->
		<link rel="stylesheet" href="css/general.css">
		<link rel="stylesheet" href="css/fontawesome.css">
		<link rel="stylesheet" href="css/style.css">
	</HEAD>
	<BODY>
		<div id="root">

			<div id="currency">
				<div class="left">
					<p>1</p>
					<select class="devise1">
						<option value="EUR">EUR</option>
						<option value="USD">USD</option>
						<option value="MGA">MGA</option>
					</select>
					<p class="equals">=</p>
				</div>
				<div class="right">
					<p class="result"><img class="loading" src="img/loading.gif" alt="..."> <span class="data"></span></p>
					<select class="devise2">
						<option value="MGA">MGA</option>
						<option value="EUR">EUR</option>
						<option value="USD">USD</option>
					</select>
				</div>
			</div>

			<!-- Author -->
			<div id="copyright">
				<p>Made with <span class="fa fa-heart"></span> by <a class="link" href="https://www.namanagasycar.com/portfolio" title="The developer of this app.">Manjaka13</a></p>
			</div>

		</div>

		


		<!-- Import our JS -->
		<script src="js/ajax.js"></script>
		<script src="js/model.js"></script>
		<script src="js/view.js"></script>
		<script src="js/controller.js"></script>
		<script src="js/app.js"></script>

	</BODY>
</HTML>