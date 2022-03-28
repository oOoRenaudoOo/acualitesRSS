<?php

    $resultat = $mysqli->query("SELECT * FROM `actu` WHERE `id`=".$_GET["id"]);
    $row = $resultat->fetch_assoc();

?>


<container>
    <h2 class="mt-5">Article</h2>
    </br></br>
    <p><hr size=5 width=100% align-center></p>
    <section backgroundcolor=>
        <div class="mb-3">
            <h1 align="center"><?php echo ($row["title"])?></h1>
            <p><hr size=5 width=100% align-center></p>
            </br></br>
            <p style="background-color:rgba(238,236,236,0.95)"><font size="5"><?php echo ($row["description"])?></font></p>
            </br></br></br>
            <p><?php echo($row["dateins"]." --- ")?>                    
                <a href="../index.php" type="button" class="btn btn-outline-success">Liste</a>        
            </p>
        </div>      
    </section>
</container>



