<!doctype html>
<html class="no-js" lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<title>A Drawing Software by Webcontxt</title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<link rel="manifest" href="site.webmanifest">
		<link rel="apple-touch-icon" href="icon.png">
		<!-- Place favicon.ico in the root directory -->

		<link rel="stylesheet" href="css/normalize.css">
		<link rel="stylesheet" href="css/main.css">
	</head>
	<body>
		<!--[if lte IE 9]>
			<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
		<![endif]-->

		<div class="container">
			<ul class="demoToolList">
				<li>Clear the Image: <button id="clearCanvasSimpleSizes" type="button">Clear</button></li>
				<li>Choose a color: <button id="choosePurpleSimpleSizes" type="button">Purple</button><button id="chooseGreenSimpleSizes" type="button">Green</button><button id="chooseYellowSimpleSizes" type="button">Yellow</button><button id="chooseBrownSimpleSizes" type="button">Brown</button></li>
				<li><span class="highlight">Choose a size: </span><button id="chooseSmallSimpleSizes" type="button">Small</button><button id="chooseNormalSimpleSizes" type="button">Normal</button><button id="chooseLargeSimpleSizes" type="button">Large</button><button id="chooseHugeSimpleSizes" type="button">Huge</button></li>	
				<li>Save the Image: <button id="saveCanvas" type="button">Save</button></li>
			</ul>
			<div id="canvasSimpleSizesDiv"></div>
		</div>

		<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
		<script src="js/main.js"></script>
	</body>
</html>
