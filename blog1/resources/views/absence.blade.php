


<!DOCTYPE html>
<html>
<body>

<h2>Absence</h2>

<form action="/absence" method="post">
{{ csrf_field() }}
  Nom:
  <p><input type="text" name="nom" ></p>
  
  
  Prenom:
  <p><input type="text" name="prenom" ></p>
  
   date:
 <p> <input type="date" name="date" value="{{old('date')}}"></p>
 
   @if($errors->has('date'))
  <p>{{ $errors->first('date') }}</p>
  @endif
  
  Motif:
  <select name="motif">
  <option value="blesse">Blessé</option>
  <option value="non licenci�">Non licencié</option>
  <option value="suspendu">Suspendu</option>
</select>

   @if($errors->has('motif'))
  <p>{{ $errors->first('motif') }}</p>
  @endif
  
  

 <p> <input type="submit" value="Submit"></p>
</form> 


</body>
</html>


