@extends('layouts.app')

@section('title', 'Můj účet')

@section('navpanel')
	@parent
@endsection

@section('content')
<div style="padding-top: 100px"></div>
<div class="container" style="width: 80% !important; background-color: white !important; border-radius: 4 !important;"> 
	<h4 style="padding-top: 20px;">Jméno</h4>
	<input class="form-control" id="myInput" type="text" placeholder="Jméno"> <!-- GET Jméno/úprava? -->
	<h6 style="padding-top: 20px">Přezdívka</h6>
	<input class="form-control" id="myInput" type="text" placeholder="Přezdívka"> <!-- GET Přezdívka/úprava? -->
	<h6 style="padding-top: 20px">Úroveň účtu</h6>
	@if($_SESSION['permission'] === 5)
		Administrátor
	@elseif ($_SESSION['permission'] === 4)
		Don
	@elseif ($_SESSION['permission'] === 3)
		Consigliare - vyšší
	@elseif ($_SESSION['permission'] === 2)
		Caporegime - nižší
	@elseif ($_SESSION['permission'] === 1)
		Caporegime
	@elseif ($_SESSION['permission'] === 0)
		Člen
	@else
		Chyba!
	@endif

	@if($_SESSION['permission'] < 3)		
		<h5 style="padding-top: 20px">Počet splněných kriminálních činností</h5>
		<h6 style="padding-top: 20px">156165465</h6> <!-- Get count -->
	@endif
	<div style="padding-top: 20px"></div>
	<button type="button" class="btn btn-primary btn-block">Potvrdit</button>
	<div style="padding-top: 20px"></div>
</div>
@endsection