@extends('layouts.app')

@section('title', 'Hlavní stránka')

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
	<h6 style="padding-top: 20px">Consigliare</h6>
	<select class="form-control" id="sel1">
	  	<option>User1</option>
	    <option>User2</option>
	    <option>User3</option>
	    <option>User4</option>
	</select>
	<button type="button" class="btn btn-primary btn-block">Potvrdit</button>
	<hr>
	<h4 style="padding-top: 20px;">Jméno území</h4>
	<input class="form-control" id="myInput" type="text" placeholder="Jméno familie">
	<h6>Majitel (volitelné)</h6>
	<select class="form-control" id="sel1">
	    <option>User1</option>
	    <option>User2</option>
	    <option>User3</option>
	    <option>User4</option>
	</select>
	<h6 style="padding-top: 20px">Adresa</h6>
	<input class="form-control" id="myInput" type="text" placeholder="Jméno familie">
	<h6 style="padding-top: 20px">Rozloha v m^2</h6>
	<input class="form-control" id="myInput" type="text" placeholder="Jméno familie"> <!-- check čisla -->
	<button style="padding-top: 20px" type="button" class="btn btn-primary btn-block">Potvrdit</button>
	<!-- CONSIGLIARE != DON -->

</div>
@endsection