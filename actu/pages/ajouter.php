<h2 class="mt-5">Ajouter une tache</h2>

<form method="post" action="<?php echo $dir_ws; ?>crud.php?action=ajouter">
    <div class="mb-3">
        <input type="texte" name="tache" class="form-control" id="exampleFormControlInput1" placeholder="Saisissez votre tache">
    </div>
    <div class="mb-3">
        <input type="submit" value="Ajouter"  class="btn btn-primary" id="exampleFormControlInput1" placeholder="Saisissez votre tache">
    </div>
</form>