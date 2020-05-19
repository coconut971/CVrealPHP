<?php include('inc/data.inc.php') ?>
<?php include('inc/header.inc.php') ?>
<?php $result = $pdo->query("SELECT * FROM about WHERE id_about = '2';");
$result2 = $pdo->query("SELECT * FROM photo WHERE id_image = '1';");


$desc = $result->fetch(PDO::FETCH_OBJ);
$desc2 = $result2->fetch(PDO::FETCH_OBJ);
if (!empty($_POST)) {
    

    $_POST["nom1"] = htmlentities($_POST["nom"], ENT_QUOTES);
    $_POST["prenom1"] = htmlentities($_POST["prenom"], ENT_QUOTES);
    $_POST["adresse1"] = htmlentities($_POST["adresse"], ENT_QUOTES);
    $_POST["numero1"] = htmlentities($_POST["numero"], ENT_QUOTES);
    $_POST["email1"] = htmlentities($_POST["email"], ENT_QUOTES);
    $_POST["info1"] = htmlentities($_POST["info"], ENT_QUOTES);
    $_POST["image1"] = htmlentities($_POST["photo"], ENT_QUOTES);
    $result = $pdo->exec("UPDATE about SET nom = '$_POST[nom]', prenom = '$_POST[prenom]', adresse = '$_POST[adresse]', numero = '$_POST[numero]', email = '$_POST[email]', info = '$_POST[info]'  WHERE id_about =2;");
    $result2 = $pdo->exec("UPDATE photo SET url_image = '$_POST[photo]' WHERE id_image =1;");
    echo "Donnée(s) Enregister";
    

}


?>


<div class="starter-template">  

    <form method="POST" action="" enctype="multipart/form-data">

        <div class="form-group">
            <label for="nom">/nom>
            <input type="texte" class="form-control" id="nom" name="nom" value="<?php echo $desc->nom ?>">
        </div>

        <div class="form-group">
            <label for="prenom">prenom</label>
            <input class="form-control" id="prenom" name="prenom" value="<?php echo $desc->prenom ?>"></input>
        </div>
        <div class="form-group">
            <label for="prenom">adresse</label>
            <input class="form-control" id="adresse" name="adresse" value="<?php echo $desc->adresse ?>"></input>
        </div>
        <div class="form-group">
            <label for="prenom">numero</label>
            <input class="form-control" id="numero" name="numero" value="<?php echo $desc->numero ?>"></input>
        </div>
        <div class="form-group">
            <label for="prenom">email</label>
            <input class="form-control" id="email" name="email" value="<?php echo $desc->email ?>"></input>
        </div>
        <div class="form-group">
            <label for="prenom">info</label>
            <input class="form-control" id="info" name="info" value="<?php echo $desc->info ?>"></input>
        </div>
        <div class="form-group">
            <label for="prenom">photo</label>
            <input class="form-control" id="photo" name="photo" value=""></input>
        </div>

        <button type="submit" class="btn btn-primary">Enregister</button>

    </form>

</div>
<?php include('inc/footer.inc.php') ?>