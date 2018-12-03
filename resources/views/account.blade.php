@extends('layouts.app')

@section('title', 'Můj účet')

@section('navpanel')
	@parent
@endsection

@section('content')
<div style="padding-top: 100px"></div>
<div class="container" style="width: 80% !important; background-color: white !important; border-radius: 4 !important;"> 
	<h4 style="padding-top: 20px;">Jméno</h4>
	<!-- jméno -->
	<h6 style="padding-top: 20px">Přezdívka</h6>
	<!-- přezdívka -->
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
		Uživatel bez rodiny
	@endif

	@if($_SESSION['permission'] < 3)		
		<h5 style="padding-top: 20px">Počet splněných kriminálních činností</h5>
		<h6 style="padding-top: 20px">156165465</h6> 
	@endif	
	@if($_SESSION['permission'] === -1)
	<h4 style="padding-top: 20px;">Pozvánky</h4>
    <table class="table table-hover table-dark text-centered">
        <thead>
            <tr>
                <th scope="col" style="width: 60%;">Pozvánka od</th>
                <th scope="col" style="width: 20%;"></th>
                <th scope="col" style="width: 20%;"></th>
            </tr>
        </thead>
        <tbody>
		@if(!empty($invites))
			@foreach($invites as $invite)
            <tr>
                <td>{{$invite['FamiliaName']}}</td>

                <td>
					<form action="accept" method="post">
                        @csrf
                        <input type="hidden" value="{{$invite['Familia']}}" name="id">
                        <button type="submit" class="btn btn-primary" name="accept">Přijmout</button>
                	</form>
				</td>

				<td>
					<form action="decline" method="post">
                        @csrf
                        <input type="hidden" value="{{$invite['Familia']}}" name="id">
                        <button type="submit" class="btn btn-primary" name="decline">Odmítnout</button>
                	</form>
				</td>
            </tr>
			@endforeach
		@endif
        </tbody>
    </table>
    <div style="padding-top: 20px"></div>
    @endif
</div>
@endsection