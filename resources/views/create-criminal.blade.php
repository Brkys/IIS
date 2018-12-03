@extends('layouts.app')

@section('title', 'Vytvoření kriminální činnosti')

@section('navpanel')
	@parent
@endsection

@section('content')
ID_Cinnosti	ID_Uzemi	TypCinnosti	DatumZacatku	DatumUkonceni

<div style="padding-top: 100px"></div>
<div class="container" style="width: 80% !important; background-color: white !important; border-radius: 4 !important;"> 
	<h4 style="padding-top: 20px;">Jméno</h4>
	<input class="form-control" id="myInput" type="text" placeholder="Jméno"> <!-- GET Jméno/úprava? -->
	<h6 style="padding-top: 20px">Přezdívka</h6>
	<input class="form-control" id="myInput" type="text" placeholder="Přezdívka"> <!-- GET Přezdívka/úprava? -->
	<h6 style="padding-top: 20px">Úroveň účtu</h6>

	<button type="button" class="btn btn-primary btn-block">Potvrdit</button>
	<div style="padding-top: 20px"></div>
	<script type="text/javascript">	$('select').selectpicker();</script>

	<!-- do přidávání do tabulky zakomponovat i datum začátku, což by mělo být now() -->

  <select style="width: 100%">
    <option>Here is the first option</option>
    <option>The second option</option>
    <option>The third option</option>
  </select>
@endsection