<?php

    $resultQueryTask = $mysqli->query("SELECT * FROM aide ORDER BY id ASC");



    if (!$resultQueryTask) {

        ?>
            <!-- Echec de la requete $mysqli->error -->

            </br></br></br><h2> Echec de la requette </h2>

        <?php

    } else
        {

            if ($resultQueryTask->num_rows < 1){

                ?>

                    </br></br><h2>il n' y a pas de resultat</h2>

                <?php

            } else
                { 
            
                    ?>

                        <h2>Liste des resultats<h2>

                
                    <?php

                }
            
        }
?>








