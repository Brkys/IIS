@extends('layouts.app')

@section('title', 'Území')

@section('navpanel')
    @parent
@endsection

@section('content')
<div class="container" style="padding-top: 100px; width: 80% !important;"> 
    <table class="table table-hover table-dark text-centered" id="custom-table">
        <thead>
            @if(!empty($lands))
                @foreach($lands as $land)
                    <tr>
                        <th scope="col">{{$land->Adresa}}</th>
                        <th scope="col">{{$land->JmenoFamilie}}</th>
                    </tr>
                @endforeach
            @endif
        </thead>
        <tbody>
            <tr>
                <td>yz</td>
                <td>xy</td>
            </tr>
        </tbody>
    </table>
</div>
@endsection