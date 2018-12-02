@extends('layouts.app')

@section('title', 'Hlavní stránka')

@section('head')
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.1/css/bootstrap-select.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.1/js/bootstrap-select.js"></script>
@endsection

@section('navpanel')
	@parent
@endsection

@section('content')
<div style="padding-top: 100px"></div>
<div class="container" style="width: 80% !important; background-color: white !important; border-radius: 4 !important;"> 
	<h5>Přidat familii</h5>
	<input class="form-control" id="myInput" type="text" placeholder="Jméno familie">
	<h6>Don</h6>
	<select data-live-search="true" data-live-search-style="startsWith" class="selectpicker">
	    <option value="4444">4444</option>
	    <option value="Fedex">Fedex</option>
	    <option value="Elite">Elite</option>
	    <option value="Interp">Interp</option>
	    <option value="Test">Test</option>
	</select>
	<h6>Consigliare</h6>
	<select data-live-search="true" data-live-search-style="startsWith" class="selectpicker">
	    <option value="4444">4444</option>
	    <option value="Fedex">Fedex</option>
	    <option value="Elite">Elite</option>
	    <option value="Interp">Interp</option>
	    <option value="Test">Test</option>
	</select>
	<!-- CONSIGLIARE != DON -->

</div>
@endsection