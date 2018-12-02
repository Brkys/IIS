@extends('layouts.app')

@section('title', 'Novinky')

@section('navpanel')
    @parent
@endsection

@section('content')
<div class="container" style="padding-top: 100px; width: 80% !important;"> 
    <input class="form-control" id="myInput" type="text" placeholder="Vyhledat..">
    <table class="table table-hover table-dark text-centered" id="custom-table">
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
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
@endsection