                        <!-- Cadre du Module Liste de resultats-->


<!-- <X> L'element de la liste </X> --->


<ul class="list-group"> <!-- <X> Debut -->
  
    <li class="list-group-item list-group-item-action d-flex gap-3 py-3" aria-current="true">
    
        <div class="d-flex gap-2 w-100 justify-content-between">
            <div>
                <h6 class="mb-0"><?php echo ("MESSAGE ERREUR ou INFO LISTE") ?> - <?php echo ("MESSAGE ERREUR ou INFO LISTE") ?></h6>
                <p class="mb-0 opacity-75"><?php echo ("MESSAGE ERREUR ou INFO LISTE") ?></p>
            </div>
            <small class="opacity-50 text-nowrap"></small>
        </div>
    </li>

</ul> <!-- Fin </X>-->


<!-- Fin element de Liste -->




<!-- $mysqli = @new mysqli("localhost","username","passwd","database"); -->



<?php
      
    if(!$mysqli->connect_errno) {

        ?> 
             <!-- Echec de la connection a la base de donnees -->
             <!-- ($mysqli->connect_ernno) et $mysqli->connect-error -->
        
             <X Element de Liste + (n°) et message error X/>

        <?php

    } else 
        {
            ?>
                <!-- info sur la connection etalie $mysqli->host_info -->

                <X Element de Liste + (Info connection) X/>

            <?php

            /* Sélection de toutes les lignes de la table */
            $resultQueryTask = $mysqli->query("SELECT * FROM aide ORDER BY id ASC");
            
            if (!$resultQueryTask) {

                ?>
                    <!-- Echec de la requete $mysqli->error -->

                    <X Element de Liste + message error X/>

                <?php
            
            } else
                {
                    if ($resultQueryTask->num_rows < 1) {

                        ?>
                            <!-- Aucun resultat de la requete resultQuery->num-rows = 0 -->

                            <X Element de Liste + message Aucu resultat trouve X/>


                        <?php

                    } else 
                        {
                            ?>
                                <!-- Affichage des resultats -->
                                
                                <!-- <> Debut -->
                                
                                    <?php

                                        foreach ($resultQueryTask as $rowTask){
                                        
                                    ?>

                                            <!-- Element de la liste (suite) -->

                            
                                    <?php
                                
                                        }

                                    ?>
                            
                                <!-- <> FIN Liste -->

                                
                            <?php
                            
                        }    

                }  

        }


?>


