<h2 class="mt-5">Accueil</h2>
<?php
      
    if($mysqli->connect_errno) {

        ?>
            <!-- Echec de la connection a la base de donnees ($mysqli->connect_ernno) $mysqli->connect-error -->

            <ul class="list-group">
  
                <li class="list-group-item list-group-item-action d-flex gap-3 py-3" aria-current="true">
  
                    <div class="d-flex gap-2 w-100 justify-content-between">
                        <div>
                            <h6 class="mb-0">Erreur connection base de donnees</h6>
                            <p class="mb-0 opacity-75"><?php echo "(".$mysqli->connect_errno.") ".$mysqli->connect_error ?></p>
                        </div>
                        <small class="opacity-50 text-nowrap"></small>
                    </div>
                    <div><p style="text-align: center; border: 3px solid rgba(255,0,0,0.75);">Non Connecte(e)</p></div>                
                </li>
            </ul>

        <?php

    } else 
        {    
            ?>
                <!-- info sur la connection etalie $mysqli->host_info -->

                <ul class="list-group">
  
                    <li class="list-group-item list-group-item-action d-flex gap-3 py-3" aria-current="true">
  
                        <div class="d-flex gap-2 w-100 justify-content-between">
                            <div>
                                <h6 class="mb-0">Information serveur</h6>
                                <p class="mb-0 opacity-75"><?php echo $mysqli->host_info ?></p>
                            </div>
                            <small class="opacity-50 text-nowrap"></small>
                        </div>
                        <div><p style="text-align: center; border: 3px solid rgba(120,206,132,0.3);">Connecte(e) aux actualites</p></div>                
                     </li>
                </ul>

            <?php

            /* Sélection de toutes les lignes de la table*/
            $resultQueryTask = $mysqli->query("SELECT * FROM actu ORDER BY id ASC");
            
            if (!$resultQueryTask) {

                ?>
                    <!-- Echec de la requete $mysqli->error -->

                    <ul class="list-group">
  
                        <li class="list-group-item list-group-item-action d-flex gap-3 py-3" aria-current="true">

                            <div class="d-flex gap-2 w-100 justify-content-between">
                                <div>
                                    <h6 class="mb-0">Erreur de la requete !</h6>
                                    <p class="mb-0 opacity-75"><?php echo $mysqli->error ?></p>
                                </div>
                                <small class="opacity-50 text-nowrap"></small>
                            </div>
                            <div><p style="text-align: center; border: 3px solid rgba(255,212,133,0.75);;">Pas de reponse</p></div>                
                        </li>
                    </ul>

                <?php

            } else
                {

                    if ($resultQueryTask->num_rows < 1) {
                    
                        ?> 
                            <!-- Aucun resultat de la requete resultQuery->num-rows = 0 -->
                                 
                            <ul class="list-group">
  
                                <li class="list-group-item list-group-item-action d-flex gap-3 py-3" aria-current="true">
    
                                    <div class="d-flex gap-2 w-100 justify-content-between">
                                        <div>
                                            <h6 class="mb-0">Aucun resultat trouve</h6>
                                            <p class="mb-0 opacity-75">En attente de nouvelles actualites</p>
                                        </div>
                                        <small class="opacity-50 text-nowrap"></small>
                                    </div>
                                    <div><p style="text-align: center; border: 3px solid rgba(255,212,133,0.75);;">0 Actualite</p></div>                
                                </li>
                            </ul>
                                
                        <?php 
        
                    } else
                        { 
                            ?>
                                <!-- Affichage des resultats -->
                            
                                <ul class="list-group">
  
                                    <li class="list-group-item list-group-item-action d-flex gap-3 py-3" aria-current="true">

                                        <div class="d-flex gap-2 w-100 justify-content-between">
                                            <div>
                                                <h6 class="mb-0">Liste des Actualites</h6>
                                                <p class="mb-0 opacity-75">Aujourd'hui: <?php echo date('d/m/Y')?></p>
                                            </div>
                                            <small class="opacity-50 text-nowrap"></small>
                                        </div>
                                        <div><p style="text-align: center; box-shadow: 2px 2px 7px 1px rgba(120,206,132,0.3);"><strong><?php echo $resultQueryTask->num_rows." Actualites"?></strong></p></div>                
                                    </li>
                                    </ul>                          
                        
                                </br> 
                                <ul class="list-group">
 
                                    <?php foreach ($resultQueryTask as $rowTask){ ?>
                                            <li class="list-group-item list-group-item-action d-flex gap-3 py-3" aria-current="true"> 
                                                <div class="d-flex gap-2 w-100 justify-content-between">
                                                  <div>
                                                    <h6 class="mb-0"><?php echo ($rowTask["id"]) ?> - <?php echo ($rowTask["title"]) ?></h6>
                                                    <p class="mb-0 opacity-75"><?php echo ($rowTask["dateins"])?></p>
                                                  </div>
                                                  <small class="opacity-50 text-nowrap"></small>
                                                </div>
                                                <?php 
                                                     $linkRealise = $dir_ws."?mod=detail&id=".$rowTask["id"];
                                                ?>
                                                <a href="<?php echo $linkRealise ?>" type="button" class="btn btn-outline-success">Détail</a> 
                                            </li>   
                                        <?php } ?>
                                </ul>
                            <?php         
                        }

                }
                
        }

?>


