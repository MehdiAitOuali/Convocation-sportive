
<table class="table table-dark">



<?php foreach ($equipes as $equipe): ?>

<tr><td>{{$equipe->NomEquipe}} </td>
    <td>
      {{ $categories->find($equipe->IDCategorie)->NomCategorie}}
    </td> </tr>

<?php endforeach; ?>

</table>
