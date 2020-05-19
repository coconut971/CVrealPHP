<?php include('inc/data.inc.php') ?>
<?php include('inc/header.inc.php') ?>>

<?php


if (!empty($_POST)) {
    $pdo = new PDO("mysql:host=localhost;dbname=cvreal", "root", "" , array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
    $_POST["nom1"] = htmlentities($_POST["nom"], ENT_QUOTES);
    $_POST["descriptions1"] = htmlentities($_POST["descriptions"], ENT_QUOTES);
    $_POST["dates1"] = htmlentities($_POST["dates"], ENT_QUOTES);
    $_POST["organisation1"] = htmlentities($_POST["organisation"], ENT_QUOTES);
    $result = $pdo->exec("INSERT INTO experience (nom, descriptions, dates, organisation) VALUES ('$_POST[nom]', '$_POST[descriptions]', '$_POST[dates]', '$_POST[organisation]');");

    echo "Experience ADDED";

}


?>
<div class="starter-template">
    <form method="POST" action="" enctype="multipart/form-data">

        <div class="form-group">
            <label for="titre">Nom</label>
            <input type="text" class="form-control" id="nom" name="nom">
            <label for="titre">Description</label>
            <input type="text" class="form-control" id="descriptions" name="descriptions">
            <label for="titre">Dates</label>
            <input type="text" class="form-control" id="dates" name="dates">
            <label for="titre">Organisation</label>
            <input type="text" class="form-control" id="organisation" name="organisation">
        </div>

        <button type="submit" class="btn btn-primary">Ajouter</button>

    </form>

</div>
<?php include('inc/footer.inc.php') ?>