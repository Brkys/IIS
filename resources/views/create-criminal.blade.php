@extends('layouts.app')

@section('title', 'Vytvoření kriminální činnosti')

@section('navpanel')
	@parent
@endsection

@section('content')
ID_Cinnosti	ID_Uzemi	TypCinnosti	DatumZacatku	DatumUkonceni

<div style="padding-top: 100px"></div>
<div class="container" style="width: 80% !important; background-color: white !important; border-radius: 4 !important;"> 
	<h4 style="padding-top: 20px;">Území</h4>
	<select style="width: 100%;">
	    <option>Území 1</option>
	    <option>Území 2</option>
    	<option>Území 3</option>
  	</select>
	<h4 style="padding-top: 20px;">Popis činnosti</h4>
	<input class="form-control" id="myInput" type="text" placeholder="Typ činnosti"> 
	<h6 style="padding-top: 20px">Datum začátku</h6>
    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text">YYYY-MM-DD</span>
        </div>
		<input class="form-control" id="myInput" type="text" placeholder="Datum" value="">  <!-- php echo date(YYYY-MM-DD) nefunguje -->
    </div>
<div style="padding-top: 20px"></div>
<button type="button" class="btn btn-primary btn-block">Potvrdit</button>
<div style="padding-top: 20px"></div>
@endsection