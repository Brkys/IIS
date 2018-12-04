@extends('layouts.app')

@section('title', 'Moje familie')

@section('navpanel')
	@parent
@endsection

@section('content')
<div style="padding-top: 100px"></div>
<div class="container" style="width: 80% !important; background-color: white !important;"> 
	<h1>Jméno familie</h1>
	<h4 style="padding-top: 20px;">Členové</h4>
    <input class="form-control" id="myInput" type="text" placeholder="Vyhledat člena.." onkeyup="filter()">
    <table class="table table-hover table-dark text-centered" id="filterTable">
        <thead>
            <tr>
                <th scope="col" style="width: 40%;">Jméno člena</th>
                <th scope="col" style="width: 20%;">Vyhodit</th>
                <th scope="col" style="width: 20%;"></th>
                <th scope="col" style="width: 20%;"></th>
            </tr>
        </thead>
        <tbody>
          @if(!empty($users))
            @foreach($users as $user)
              @if($user->permission !== 4)
                <tr>
                    <td>{{$user->full_name}} (
                      @if ($user->permission === 3)
                        Consigliare
                      @elseif ($user->permission === 2)
                        Caporegime - vyšší
                      @elseif ($user->permission === 1)
                        Caporegime - nižší
                      @elseif ($user->permission === 0)
                        Člen
                      @else
                        Uživatel bez rodiny
                      @endif
                      )
                    </td>
                    <td><button type="button" class="btn btn-danger">Vyhodit</button></td>
                    <td><button type="button" class="btn btn-primary">Povýšit</button></td>
                    <td><button type="button" class="btn btn-secondary">Degradovat</button></td>
                </tr>
              @endif
            @endforeach
          @else
            <tr>
              <td colspan="3">Nenalezení uživatelé</td>
            </tr>
          @endif
        </tbody>
    </table>
    <div style="padding-top: 20px"></div>
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