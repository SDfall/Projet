<?php 
        
        if(isset($_POST["modifier"])){
            $code=$_POST["code"];
            $nom=$_POST["nom"];
            $description=$_POST["description"];
            $budget=$_POST["budget"];
            $date_debut=$_POST["date_debut"];
            $date_fin=$_POST["date_fin"];
            $statut=$_POST["statut"];
           

            $sql="UPDATE projet set code='$code',nom='$nom',description='$decription',budget='$budget',date_debut='$date_debut',date_fin='$date_fin',statut='$statut'
            where id=$id";
            mysqli_query($connexion,$sql);
            header("location:index.php");

        }

?>
<div class="col-md-8 offset-2 mt-5">
    <div class="card">
        <div class="card-header bg-danger">
            Modifier un Projet
        </div>
        <div class="card-body">
            <form action="" method="POST">
            <label for="" hidden>Code </label>
                    <input type="text" name="code" class="form-control" value="<?php echo $projet[1] ?>"hidden>

                    <label for="">Nom</label>
                    <input type="text" name="nom" required class="form-control"value="<?php echo $projet[2] ?>">
                    <br>
                    <label for="">Description</label>
                    <input type="text" name="description" required class="form-control" value="<?php echo $projet[3] ?>">
                    <br>
                    <label for="">Budget</label>
                    <input type="number" name="budget" required class="form-control"value="<?php echo $projet[4] ?>">
                    <br>
                    <label for="">Date debut</label>
                    <input type="date" name="date_debut" required class="form-control" value="<?php echo $projet[5] ?>">
                    <br>
                    <label for="">Date Fin</label>
                    <input type="date" name="date_fin" required class="form-control"value="<?php echo $projet[6] ?>">
                    <br>
                    <label for="sexe">Statut :</label>
                         <select name="statut" id="statut" required class="form-control"value="<?php echo $projet[7] ?>">
                         <option value="true">TRUE</option>
                         <option value="false">FALSE</option>
                        </select>
                        <br>
                    <button type="submit" name="modifier" class="btn btn-dark">Modifier</button>
                    <button type="submit" name="annuler" class="btn btn-danger">Retour</button>
                </form>
            </div>

    </div>
    
</div>

