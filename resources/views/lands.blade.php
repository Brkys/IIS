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
                <th scope="col">Adresa</th>
                <th scope="col">Majitel</th>
            </tr>
        </thead>
        <tbody>
            @if(!empty($lands))
                @foreach($lands as $land)
                    <tr>
                        <th scope="col">{{$land->Adresa}}</th>
                        <th scope="col">{{$land->JmenoFamilie}}</th>
                    </tr>
                @endforeach
            @endif
        </tbody>
    </table>
</div>
@endsection