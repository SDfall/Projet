<?php
                  require_once("bd_connexion.php");
                  require_once("header.php");
                  
                  require_once("navbar.php");



                if(isset($_GET["page"])){
                    if($_GET["page"]=="ajouter"){
                        require_once("ajoutprojet.php");
                    }
                    if($_GET["page"]=="modprojet"){
                        $id=$_GET["id"];
                        $sql="SELECT * FROM projet where id=$id";
                        $result=mysqli_query($connexion,$sql);
                        $projet=mysqli_fetch_row($result);
                        require_once("modifierprojet.php");
                        

                    }
                    if($_GET["page"]=="delprojet"){
                        $id=$_GET["id"];
                        $sql="DELETE FROM projet where id=$id";
                        mysqli_query($connexion,$sql);
                        header("location:index.php");

                    }
                   
                }else{
                    require_once("listeProjet.php");
                 

                }

                require_once("footer.php");
        ?>