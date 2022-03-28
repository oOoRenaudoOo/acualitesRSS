<?php

include("config.php");



/* Recupere FLUX RSS

$content = file_get_contents ("https://www.lemonde.fr/les-decodeurs/rss_full.xml");

//var_dump($content);
//echo("</br></br>");


$monRSS = new SimpleXMLElement($content) ;

//var_dump($monRSS);
//echo("</br></br>");



foreach($monRSS->channel->item as $entry){

//var_dump($entry);
//echo("</br></br>");
  
// echo $entry->title;
// echo("</br></br>");


echo $entry->description ;
echo("</br></br>");


// copie du FLUX RSS ds base de donnee rss table actu

$mysqli->query("INSERT INTO `actu` (`id`, `title`, `description`, `dateins`) VALUES (NULL, '".$entry->title."', '".$entry->description."', CURRENT_TIMESTAMP)");



}

exit();

*/


include("common/header.html.php");

?>
    
    <!-- Center --->
    
<!-- Begin page content -->
<main class="flex-shrink-0">
  <div class="container">
    <?php
        include ("modules/module.php");

        
    ?>

  </div>
</main>

    <!-- Fin Center -->
    
<?php
  
  include("common/footer.html.php");


?>







