<!DOCTYPE html>
<html>
<body>

<h2>Logistique</h2>

<form action="/logistique" method="post">
{{ csrf_field() }}
  Nom:
  <p><input type="text" name="nom" ></p>
 
  Prenom:
 <p> <input type="text" name="prenom" ></p>

   date:
<p>  <input type="date" name="date"></p>
@if($errors->has('date'))
  <p>{{ $errors->first('date') }}</p>
  @endif
Tache:
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
