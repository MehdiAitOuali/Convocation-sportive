@extends('index')

@section('content')

<div class="container" >

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

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





<input id="myInput" type="text" placeholder="Search..">
<br><br>

<table id="my" class="table  table-bordered table-striped table-sm  table-hover" style="background-color:white">
 
  <thead class="thead-dark">
    <tr>
      <th onclick="sortTable(0)"> 	Nom</th>
    <th onclick="sortTable(1)"> Prenom</th>
    <th onclick="sortTable(2)">CatÃ©gorie</th>
    <th>Date de naissance</th>
    </tr>
  </thead>
  <tbody id="myTable">

  

  <?php foreach ( $effectifs as $effectif ): ?>
  
 
  <tr>
   <td>{{ $effectif->Nom }}</td>
   <td >{{ $effectif->Prenom }}</td>
   <td>{{ $categories->find($effectif->IDCategorie)->NomCategorie }}</td>
   <td>{{ $effectif->date_naissance }}</td>
  </tr>
  

 <?php endforeach; ?>
 
 
 </tbody>
</table>

<script>
function sortTable(n) {
  var table, rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
  table = document.getElementById("my");
  switching = true;
  
  dir = "asc"; 
  
  while (switching) {
   
    switching = false;
    rows = table.rows;
   
    for (i = 1; i < (rows.length - 1); i++) {
     
      shouldSwitch = false;
    
      x = rows[i].getElementsByTagName("TD")[n];
      y = rows[i + 1].getElementsByTagName("TD")[n];
      
      if (dir == "asc") {
        if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
          
          shouldSwitch= true;
          break;
        }
      } else if (dir == "desc") {
        if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
         
          shouldSwitch = true;
          break;
        }
      }
    }
    if (shouldSwitch) {
     
      rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
      switching = true;
    
      switchcount ++;      
    } else {
     
      if (switchcount == 0 && dir == "asc") {
        dir = "desc";
        switching = true;
      }
    }
  }
}
</script>

</div>


@endsection

