@extends('layouts.app')

@section('title', 'Přiřazení kriminální činnosti')

@section('navpanel')
	@parent
@endsection

@section('content')
<div style="padding-top: 100px"></div>
<div class="container" style="; width: 80% !important; background-color: white !important;"> 
	<h4 style="padding-top: 20px;">Kriminální činnost</h4>
	<select style="width: 100%;">
	    <option>činnost 1</option>
	    <option>činnost 2</option>
    	<option>činnost 3</option>
  	</select>
    <input class="form-control" id="myInput" type="text" placeholder="Vyhledat podle jména.." onkeyup="filter()">
    <table class="table table-hover table-dark text-centered" id="filterTable">
        <thead>
            <tr>
                <th scope="col" style="width: 70%;">Jméno</th>
                <th scope="col" style="width: 30%;">Přiřadit</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Test test</td>
                <td><button type="button" class="btn btn-primary">Přiřadit</button></td>
            </tr>
        </tbody>
    </table>
</div>

<script>
function filter() {
   var input, filter, table, tr, td, i, txtValue;
   input = document.getElementById("myInput");
   filter = input.value.toUpperCase();
   table = document.getElementById("filterTable");
   tr = table.getElementsByTagName("tr");
   for (i = 0; i < tr.length; i++) {
   		td = tr[i].getElementsByTagName("td")[0];
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