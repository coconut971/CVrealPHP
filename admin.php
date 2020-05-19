<?php include('inc/data.inc.php') ?>
<?php include('inc/header.inc.php') ?>
<?php 
if (isset($_POST['mot_de_passe']) AND $_POST['mot_de_passe'] ==  "ALLO") 
    { ?>
        <a href="perso.php"  ><button type="submit" class="btn btn-primary">donnée personnel</button></a>
        <a href="modif.experience.php"  ><button type="submit" class="btn btn-primary">donnée experience</button></a>
        <a href="modif.parcours.php"  ><button type="submit" class="btn btn-primary">donnée diplome</button></a>
        <a href="modif.interests.php"  ><button type="submit" class="btn btn-primary">donnée interests</button></a>
        <a href="modif.awards.php"  ><button type="submit" class="btn btn-primary">donnée awards</button></a>
        <?php
    }
    

    else 

    {

        echo '<p>AHAHAH TU NA PAS LE MOT DE PASSE</p>';

    } ?>

<?php include('inc/footer.inc.php') ?>