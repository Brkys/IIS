@extends('layouts.app')

@section('title', 'Kriminální činnosti')

@section('navpanel')
	@parent
@endsection

@section('content')
<div class="container" style="padding-top: 100px; width: 80% !important;"> 
    <table class="table table-hover table-dark text-centered" id="filterTable">
        <thead>
            <tr>
                <th scope="col" style="width: 15%;">Území</th>
                <th scope="col" style="width: 15%;">Familie</th>
                <th scope="col" style="width: 40%;">Popis činnosti</th>
                <th scope="col" style="width: 10%;">Datum začátku</th>
                <th scope="col" style="width: 10%;">Datum ukončení</th>
                <th scope="col" style="width: 5%;">Počet podílejících se členů</th>
                <th scope="col" style="width: 5%;">Podílím se?</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Brno</td>
                <td>Quatro formagi</td>
                <td>Obsazení území</td>
                <td>23.2.1997</td>
                <td>23.2.1997</td>
                <td>264</td>
                <td>Ano</td>
            </tr>
        </tbody>
    </table>
</div>
@endsection