@extends('layouts.app')

@section('title', 'Území')

@section('navpanel')
    @parent
@endsection

@section('content')
<div class="container" style="padding-top: 100px; width: 80% !important;"> 
    <table class="table table-hover table-dark text-centered" id="custom-table">
        <thead>
            <tr>
                <th scope="col">Jméno</th>
                <th scope="col">Adresa</th>
                <th scope="col">Vlastník</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>ab/td>
                <td>yz</td>
                <td>xy</td>
            </tr>
        </tbody>
    </table>
</div>
@endsection