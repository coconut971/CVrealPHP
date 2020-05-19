<?php include('inc/data.inc.php') ?>
<?php include('inc/header.inc.php') ?>>

<?php


if (!empty($_POST)) {
    
    $pdo = new PDO("mysql:host=localhost;dbname=cvreal", "root", "" , array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
    $_POST["nomEcole1"] = htmlentities($_POST["nomEcole"], ENT_QUOTES);
    $_POST["nomFormation1"] = htmlentities($_POST["nomFormation"], ENT_QUOTES);
    $_POST["descriptions1"] = htmlentities($_POST["descriptions"], ENT_QUOTES);
    $_POST["dates_parcours1"] = htmlentities($_POST["dates_parcours"], ENT_QUOTES);
    $result = $pdo->exec("INSERT INTO parcours (nomEcole, nomFormation, descriptions, dates_parcours) VALUES ('$_POST[nomEcole]', '$_POST[nomFormation]', '$_POST[descriptions]', '$_POST[dates_parcours]');");

    echo "données ADDED";
    
}


?>
<div class="starter-template">
    <form method="POST" action="" enctype="multipart/form-data">

        <div class="form-group">
            <label for="nomEcole">Etablissement</label>
            <input type="text" class="form-control" id="nomEcole" name="nomEcole">
            <label for="nomFormation">Formation</label>
            <input type="text" class="form-control" id="nomFormation" name="nomFormation">
            <label for="descriptions">Descriptions</label>
            <input type="text" class="form-control" id="descriptions" name="descriptions">
            <label for="dates_parcours">Dates</label>
            <input type="text" class="form-control" id="dates_parcours" name="dates_parcours">
        </div>

        <button type="submit" class="btn btn-primary">Ajouter</button>

    </form>

</div>
<?php include('inc/footer.inc.php') ?>