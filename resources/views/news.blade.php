@extends('layouts.app')

@section('title', 'Novinky')

@section('navpanel')
    @parent
@endsection

@section('content')
<div class="container" style="padding-top: 100px; width: 80% !important;"> 
    <input class="form-control" id="myInput" type="text" placeholder="Vyhledat událost.." onkeyup="filter()">
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
function filter() {
  // Declare variables 
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("filterTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    } 
  }
}
</script>
@endsection