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

</div>
@endsection