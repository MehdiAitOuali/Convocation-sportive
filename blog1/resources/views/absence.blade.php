
<!DOCTYPE html>
<html>
<body>

<h2>Absence</h2>

<form action="/absence" method="post">
{{ csrf_field() }}
  Nom:<br>
  <input type="text" name="nom" >
  <br>
  Prenom:<br>
  <input type="text" name="prenom" >
  <br>
   date:<br>
  <input type="date" name="date">
  <br>Motif:<br>
  <select name="motif">
  <option value="blesse">Blessé</option>
  <option value="non licenci�">Non licencié</option>
  <option value="suspendu">Suspendu</option>
</select>
<br><br>
  <input type="submit" value="Submit">
</form> 


</body>
</html>
