<?php
       if(isset($_POST["ajouter"])){
        $code=$_POST["code"];
        $nom=$_POST["nom"];
        $description=$_POST["description"];
        $budget=$_POST["budget"];
        $date_debut=$_POST["date_debut"];
        $date_fin=$_POST["date_fin"];
        $statut=$_POST["statut"];

            $sql="INSERT INTO projet values(NULL,'$code','$nom','$description','$budget','$date_debut','$date_fin','$statut')";
            mysqli_query($connexion,$sql);
            header("location:index.php");

        }
?>  

<div class="col-md-8 offset-2 mt-5">
    <div class="card">
        <div class="card-header bg-danger">
            Ajouter un Projet
        </div>
            <div class="card-body">
            <form action="" method="POST">
            <label for="" >Code </label>
                    <input type="text" action=""name="code" class="form-control">

                    <label for="">Nom</label>
                    <input type="text" name="nom" required class="form-control">
        
                    <label for="">Description</label>
                    <input type="text" name="description" required class="form-control">
                    <br>
                    <label for="">Budget</label>
                    <input type="number" name="budget" required class="form-control">
                    <br>
                    <label for="">Date debut</label>
                    <input type="date" name="date_debut" required class="form-control">
                    <br>
                    <label for="">Date Fin</label>
                    <input type="date" name="date_fin" required class="form-control">
                    <br>
                    <label for="sexe">Statut :</label>
                         <select name="statut" id="sexe" required class="form-control">
                         <option value="true">TRUE</option>
                         <option value="false">FALSE</option>
                        </select>
                        <br>
                    <button type="submit" name="ajouter" class="btn btn-dark">Ajouter</button>
                    <button type="submit" name="annuler" class="btn btn-danger">Retour</button>
                </form>
            </div>

    </div>
    
</div>

