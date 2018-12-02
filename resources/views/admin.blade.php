@extends('layouts.app')

@section('title', 'Hlavní stránka')

@section('head')
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/css/bootstrap-select.min.css" />
@endsection

@section('navpanel')
	@parent
@endsection

@section('content')
<div class="container" style="padding-top: 100px; width: 80% !important; color: white !important"> 
	<h5>Přidat familii</h5>
	<input class="form-control" id="myInput" type="text" placeholder="Jméno familie">
	<h6>Don</h6>
	<select class="selectpicker" data-live-search="true">
	    <option>User1</option>
	    <option>User2</option>
	</select>
	<h6>Consigliare</h6>
	<select class="selectpicker" data-live-search="true">
	    <option>User1</option>
	    <option>User2</option>
	</select>
	<!-- CONSIGLIARE != DON -->

</div>
@endsection