@extends('layouts.app')

@section('title', 'Novinky')

@section('navpanel')
    @parent
@endsection

@section('content')
<link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">   
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<link rel="stylesheet" href="http://cdn.datatables.net/1.10.2/css/jquery.dataTables.min.css"></style>
<script type="text/javascript" src="http://cdn.datatables.net/1.10.2/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

<div class="container" style="padding-top: 100px; width: 80% !important;"> 
    <!--<input class="form-control" id="myInput" type="text" placeholder="Vyhledat.." onkeyup="filter()"-->
    <table class="table table-hover table-dark text-centered" id="filterTable">
        <thead>
            <tr>
                <th scope="col" style="width: 20%;">Datum</th>
                <th scope="col" style="width: 80%;">Oznámení</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>23.2.1997</td>
                <td>Území bylo přebráno rodinou xy</td>
            </tr>
        </tbody>
    </table>
</div>


<script>
$(document).ready(function(){
    $('#filterTable').dataTable();
});
</script>
@endsection