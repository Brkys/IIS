@extends('layouts.app')

@section('title', 'Aliance')

@section('navpanel')
	@parent
@endsection

@section('content')
<div class="container" style="padding-top: 100px; width: 80% !important;"> 
    <table class="table table-hover table-dark text-centered" id="custom-table">
        <thead>
            <tr>
                <th scope="col">Familie</th>
                <th scope="col">Familie</th>
                <th scope="col">Datum ukončení</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>test</td>
                <td>test</td>
                <td>datum ukončení</td>
            </tr>
        </tbody>
    </table>
</div>
@endsection