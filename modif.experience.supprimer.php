<?php include('inc/data.inc.php') ?>
<?php include('inc/header.inc.php') ?>>


<?php
$pdo = new PDO("mysql:host=localhost;dbname=cvreal", "root", "" , array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
$result = $pdo->query("SELECT * FROM experience");?>
<div class="starter-template">
<?php
while($experience = $result->fetch(PDO::FETCH_OBJ)) {


        echo $experience->id_experience . ".  ";
        echo $experience->nom . " - ";
        echo $experience->descriptions . " - ";
        echo $experience->dates . " - ";
        echo $experience->organisation . "<br>";

}


if (!empty($_POST)) {
    
    $_POST["nom1"] = htmlentities($_POST["nom"], ENT_QUOTES);
    $result = $pdo->exec("DELETE FROM experience WHERE nom = '$_POST[nom]';");

    echo "données supprimés ";
    
}


?>

    <form method="POST" action="" enctype="multipart/form-data">

        <div class="form-group">
            <label class="newlabel" for="titre">Nom du Stage</label>
            <input type="text" class="form-control2" id="nom" name="nom">

        <button type="submit" class="btn btn-primary">Suprimer</button>

    </form>

</div>
<?php include('inc/footer.inc.php') ?>