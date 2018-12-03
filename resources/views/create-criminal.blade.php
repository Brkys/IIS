@extends('layouts.app')

@section('title', 'Vytvoření kriminální činnosti')

@section('head')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>
@endsection

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

	<button type="button" class="btn btn-primary btn-block">Potvrdit</button>
	<div style="padding-top: 20px"></div>
	<script type="text/javascript">	$('select').selectpicker();</script>




<div class="styled-select slate">
  <select>
    <option>Here is the first option</option>
    <option>The second option</option>
    <option>The third option</option>
  </select>
</div>
@endsection