@extends('layouts.app')

@section('title', 'Administrace')

@section('navpanel')
	@parent
@endsection

@section('content')
<div style="padding-top: 100px"></div>
<div class="container" style="width: 80% !important; background-color: white !important; border-radius: 4 !important;"> 
	<h4 style="padding-top: 20px;">Přidat familii</h4>
	<input class="form-control" id="myInput" type="text" placeholder="Jméno familie">
	<h6 style="padding-top: 20px">Don</h6>
	<select class="form-control" id="sel1">
	    <option>User1</option>
	    <option>User2</option>
	    <option>User3</option>
	    <option>User4</option>
	</select>
	<div style="padding-top: 20px"></div>
	<button type="button" class="btn btn-primary btn-block">Potvrdit</button>
	<hr>
	<h4 style="padding-top: 20px;">Přidat území</h4>
	<input class="form-control" id="myInput" type="text" placeholder="Jméno území">
	<h6>Majitel (volitelné)</h6>
	<select class="form-control" id="sel1">
	    <option>Familia1</option>
	    <option>Familia2</option>
	    <option>Familia3</option>
	    <option>Familia4</option>
	</select>
	<h6 style="padding-top: 20px">Adresa</h6>
	<input class="form-control" id="myInput" type="text" placeholder="Adresa">
	<h6 style="padding-top: 20px">Rozloha v m^2</h6>
	<input class="form-control" id="myInput" type="text" placeholder="Rozloha"> <!-- check čisla -->
	<button type="button" class="btn btn-primary btn-block">Potvrdit</button>
	<div style="padding-top: 20px"></div>
	<!-- CONSIGLIARE != DON -->

</div>
@endsection