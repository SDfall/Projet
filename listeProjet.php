<?php
        $sql="SELECT * FROM projet order by id Desc";
        $result=mysqli_query($connexion,$sql);
       // var_dump(mysqli_fetch_all($result));
     
?>

<div class="col-md-9 offset-1">
<a type="button" class="btn btn-dark float-end" href="?page=ajouter">Ajouter</a>
<br>
<br>
<table class="table table-dark table-striped">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Code</th>
      <th scope="col">Nom</th>
      <th scope="col">Description</th>
      <th scope="col">Budget</th>
      <th scope="col">Date debut</th>
      <th scope="col">Date fin</th>
      <th scope="col">Statut</th>
      <th scope="col">Option</th>
    </tr>
  </thead>
  <tbody>
  <?php while($ligne=mysqli_fetch_row($result)):?>
            <tr>
                <td><?php echo $ligne[0] ?></td>
                <td><?php echo $ligne[1] ?></td>
                <td><?php echo $ligne[2] ?></td>
                <td><?php echo $ligne[3] ?></td>
                <td><?php echo $ligne[4] ?></td>
                <td><?php echo $ligne[5] ?></td>
                <td><?php echo $ligne[6] ?></td>
                <td><?php echo $ligne[7] ?></td>
      <td>
      <a class="btn btn-primary" href="?page=modprojet&&id=<?php echo $ligne[0] ?>">Modifier</a>
      <a class="btn btn-danger" href="?page=delprojet&&id=<?php echo $ligne[0] ?>">Supprimer</a>
      </td>
    </tr>
    <?php endwhile ?>
   
  </tbody>
  
</table>

</div>