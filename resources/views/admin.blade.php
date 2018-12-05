@extends('layouts.app')

@section('title', 'Administrace')

@section('navpanel')
	@parent
@endsection

@section('content')
<div style="padding-top: 100px"></div>
<div class="container" style="width: 80% !important; background-color: white !important; border-radius: 4 !important;">
	<form action="createNewFamilia" method="post">
    	@csrf
		<h4 style="padding-top: 20px;">Přidat familii</h4>
		<input class="form-control" id="myInput" type="text" placeholder="Jméno familie" name="familia_name">
		<h6 style="padding-top: 20px">Don</h6>
		<select class="form-control" id="sel1" name="don_id">
			@if(!empty($freeUsers))
				@foreach($freeUsers as $user)
		    		<option value="{{$user->id}}">{{$user->full_name}}</option>
		    	@endforeach
		    @endif
		</select>
		<div style="padding-top: 20px"></div>
		<button type="submit" class="btn btn-primary btn-block" name="createNewFamilia">Potvrdit</button>
	</form>
	<hr>
	<h4 style="padding-top: 20px;">Přidat území</h4>
	<input class="form-control" id="myInput" type="text" placeholder="Jméno území">
	<h6>Majitel (volitelné)</h6>
	<select class="form-control" id="sel1">
	    <option>Bez majitele</option>
		@if(!empty($familias))
			<option>Jsemtu</option>
			@foreach($familias as $familia)
	    		<option>{{$familia->JmenoFamilie}}</option>
	    	@endforeach
	    @endif
	</select>
	<h6 style="padding-top: 20px">Adresa</h6>
	<input class="form-control" id="myInput" type="text" placeholder="Adresa">
	<h6 style="padding-top: 20px">Rozloha v m^2</h6>
	<input class="form-control" id="myInput" type="text" placeholder="Rozloha"> <!-- check čisla -->
	<button type="button" class="btn btn-primary btn-block">Potvrdit</button>
	<div style="padding-top: 20px"></div>
	<hr>
	<h6 style="padding-top: 20px">Zrušit familii</h6>
	<select class="form-control" id="sel1">
		@if(!empty($familias))
			@foreach($familias as $familia)
	    		<option>{{$familia->JmenoFamilie}}</option>
	    	@endforeach
	    @endif
	</select>
    <div style="padding-top: 20px"></div>
	<button type="button" class="btn btn-primary btn-block">Potvrdit</button>
	<!-- CONSIGLIARE != DON -->

</div>
@endsection