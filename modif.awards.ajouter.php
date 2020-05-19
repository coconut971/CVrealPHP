<?php include('inc/data.inc.php') ?>
<?php include('inc/header.inc.php') ?>

<?php


if (!empty($_POST)) {
    $pdo = new PDO("mysql:host=localhost;dbname=cvreal", "root", "" , array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
    $_POST["nom_awards1"] = htmlentities($_POST["nom_awards"], ENT_QUOTES);
    $result = $pdo->exec("INSERT INTO awards (nom_awards) VALUES ('$_POST[nom_awards]');");

    echo "Donnée(s) Enregister";
    header('Refresh: 0');

}


?>
<div class="starter-template">
    <form method="POST" action="" enctype="multipart/form-data">

        <div class="form-group">
            <label for="nom_awards">award</label>
            <input type="text" class="form-control" id="nom_awards" name="nom_awards">
        </div>

        <button type="submit" class="btn btn-primary">Ajouter</button>

    </form>

</div>
<?php include('inc/footer.inc.php') ?>