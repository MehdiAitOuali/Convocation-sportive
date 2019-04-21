<!DOCTYPE html>
<html>
<body>

<h2>Logistique</h2>

<form action="/logistique" method="post">
{{ csrf_field() }}
  Nom:<br>
  <input type="text" name="nom" >
  <br>
  Prenom:<br>
  <input type="text" name="prenom" >
  <br>
   date:<br>
  <input type="date" name="date">
  <br>Tache:<br>
  <select name="tache">
  <option value="maillot">Maillot</option>
  <option value="vestiaires">Vestiaires</option>
  <option value="buvette">Buvette</option>
  <option value="voiture">Voiture</option>
</select>
<br><br>
  <input type="submit" value="Submit">
</form> 


</body>
</html>
