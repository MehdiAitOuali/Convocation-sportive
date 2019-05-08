@extends('index')

@section('content')
<div class="container" >
 <h2>CONVOCATIONS</h2>
 <div class="row">
 <div class="col-xs-12 col-sm-6 col-md-8">
<table class="table  table-bordered table-striped table-sm  table-hover" style="background-color:white">

  <thead class="thead-dark">
<tr>
    <th >DATE</th>
    <td ><input type="date" id="start" name="trip-start"
       value="2019-05-08">
</td>

  </tr>
  <tr>
    <th>COMPETITION</th>
    <td><input type="text"></td>
  </tr>
  <tr>
    <th>EQUIPE ADVERSE</th>
    <td><input type="text"></td>
  </tr>
   <tr>
    <th>SITES</th>
    <td><input type="text"></td>
  </tr>
 <tr>
    <th>TERRAIN</th>
    <td><input type="text"></td>
  </tr>
 <tr>
    <th>HEURE</th>
    <td><input type="text"></td>
    
</td>
    
  </tr>
 <tr>
    <th>RDV</th>
    <td><input type="text"></td>
  </tr>
 <tr>
    <th>EQUIPE</th>
    <td><input type="text"></td>
  </tr>
<tr>
    <th align="right">1</th>
    <td><select name="carlist" form="carform">
 
</select></td>
  </tr>
  <tr>
    <th align="right">2</th>
    <td><select name="carlist" form="carform">
 
</select></td>
  </tr>
  <tr>
    <th align="right">3</th>
    <td><select name="carlist" form="carform">
 
</select></td>
  </tr>


<tr>
    <th align="right">4</th>
    <td><select name="carlist" form="carform">
 
</select></td>
  </tr>
<tr>
    <th align="right">5</th>
    <td><select name="carlist" form="carform">
 
</select></td>
  </tr>


<tr>
    <th align="right">6</th>
    <td><select name="carlist" form="carform">
 
</select></td>
  </tr>
<tr>
    <th align="right">7</th>
    <td><select name="carlist" form="carform">
 
</select></td>
  </tr>
<tr>
    <th align="right">8</th>
    <td><select name="carlist" form="carform">
 
</select></td>
  </tr>

<tr>
    <th align="right">9</th>
    <td><select name="carlist" form="carform">
 
</select></td>
  </tr>
<tr>
    <th align="right">10</th>
    <td><select name="carlist" form="carform">
 
</select></td>
  </tr>
<tr>
    <th align="right">11</th>
    <td><select name="carlist" form="carform">
 
</select></td>
  </tr>

<tr>
    <th align="right">12</th>
    <td><select name="carlist" form="carform">
 
</select></td>
  </tr>

<tr>
    <th align="right">13</th>
    <td><select name="carlist" form="carform">
 
</select></td>
  </tr>
  <tr>
    <th align="right">14</th>
    <td><select name="carlist" form="carform">
 
</select></td>
  </tr>

<tr>
    <th>RESPONSABLE</th>
    <td><input type="text"></td>
  </tr>
<tr>
    <th>DIRIGEANTS</th>
    <td><input type="text"></td>
  </tr>

<tr>
    <th>ARBITRE</th>
    <td><input type="text"></td>
  </tr>


<tr>
    <th rowspan="3">LOGISTIQUE</th>
    <td>VOITURES<input type="text"></td>
    <tr> <td>BUVETTES<input type="text"></td></tr>
    <tr>  <td>MAILLOTS<input type="text"></td></tr>
  </tr>









</table>

</div>

<div class="col-xs-6 col-md-2">


 <table class="table  table-bordered table-striped table-sm  table-hover" style="background-color:white">

  <thead class="thead-dark">
  <tr>
   <th>NON CONVOQUES</th>
  
  </tr>
  <tr>
  
     <td><input type="text" width="100%"></td>
   
  </tr>
  <tr>
     <td><input type="text"></td>
    
  </tr>
   <tr>
    <td><input type="text"></td>
    
  </tr>
   <tr>
    <td><input type="text"></td>
  </tr>
   <tr>
     <td><input type="text"></td>
    
  </tr>
   <tr>
   <td><input type="text"></td>
    
  </tr>
   <tr>
    <td><input type="text"></td>
  </tr>
   <tr>
    <td><input type="text"></td>
    
  </tr>
   <tr>
    <td><input type="text"></td>
    
  </tr>
   <tr>
   <td><input type="text"></td>
  </tr>
   <tr>
     <td><input type="text"></td>
    
  </tr>
   <tr>
    <td><input type="text"></td>
    
  </tr>
</table>
</div>
<div class="col-xs-6 col-md-2">
	<table class="table  table-bordered table-striped table-sm  table-hover" style="background-color:white">

  <thead class="thead-dark">
  <tr>
   <th>ABSENTS</th>
  
  </tr>
  <tr>
  
         <td><input type="text"></td>
   
  </tr>
  <tr>
     <td><input type="text"></td>
    
  </tr>
   <tr>
    <td><input type="text"></td>
    
  </tr>
   <tr>
    <td><input type="text"></td>
  </tr>
   <tr>
     <td><input type="text"></td>
    
  </tr>
   <tr>
   <td><input type="text"></td>
    
  </tr>
   <tr>
    <td><input type="text"></td>
  </tr>
   <tr>
    <td><input type="text"></td>
    
  </tr>
   <tr>
    <td><input type="text"></td>
    
  </tr>
   <tr>
   <td><input type="text"></td>
  </tr>
   <tr>
     <td><input type="text"></td>
    
  </tr>
   <tr>
    <td><input type="text"></td>
    
  </tr>
</table>
 </div>
 
 
 


</div>








</div>

@endsection

