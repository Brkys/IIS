@extends('layouts.app')

@section('title', 'Familie')

@section('navpanel')
    @parent
@endsection

@section('content')
<div class="container" style="padding-top: 100px; width: 80% !important;"> 
    <table class="table table-hover table-dark text-centered" id="custom-table">
        <thead>
            <tr>
                <th scope="col" style="width: 30%;">Jméno</th>
                <th scope="col" style="width: 30%;">Don</th>
                <th scope="col" style="width: 30%;">Consigliere</th>
                <th scope="col" style="width: 10%;">Počet členů</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Quatro formagi</td>
                <td>Servesa de pub</td>
                <td>Funghi</td>
                <td>456</td>
            </tr>
        </tbody>
    </table>
</div>
@endsection