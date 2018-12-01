<?php session_start(); ?>  
<!DOCTYPE html>
<html lang="cz">
<head>
	<title>Mafie</title>

	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/app.css">

	<!-- Bootstrap CSS --> 
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
@if(!isset($_SESSION["loggedIn"]) || $_SESSION["loggedIn"] !== true)
@php 
return redirect('home');
@endphp
@endif
</body>
</html>