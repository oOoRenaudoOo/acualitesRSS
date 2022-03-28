<?php

include ("config.php");




if (isset($_GET["action"])){
   
    switch($_GET["action"]) {
        
        case "ajouter":
            $maRequete = "INSERT INTO `task` (`id`, `tache`, `etat`, `dateins`) VALUES (NULL, '".$_POST["tache"]."', 'n', CURRENT_TIMESTAMP)";
            $resultat = $mysqli->query($maRequete);
            header("location: ".$dir_ws);
        break;

        case "realiser":
            $maRequete = "UPDATE task SET etat = 'o' WHERE id = ".$_GET["id"];
            $resultat = $mysqli->query($maRequete);
            header("location: ".$dir_ws);
        break;

        case "supprimer":
            $maRequete = "DELETE FROM task WHERE id = ".$_GET["id"];
            $resultat = $mysqli->query($maRequete);
            header("location: ".$dir_ws);
        break;           
    
    
    }


}else{
    // redirection par defaut

    header("location: ".$dir_ws);


}
?>