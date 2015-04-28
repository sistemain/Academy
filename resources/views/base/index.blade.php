<!DOCTYPE html>
<html>
<head>
	<title>{{Config::get("base.title")}}</title>
	<link rel="stylesheet" type="text/css" href="css/skeleton.css">
	<link rel="stylesheet" type="text/css" href="css/normalize.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
</head>
<body>
	@include("base.header")

	<div class="wrapper">
		
		@yield("content")

	</div>
	@include("base.footer")
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
</body>
</html>