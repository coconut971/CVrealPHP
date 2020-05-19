<?php include('inc/data.inc.php') ?>
<?php include('inc/header.inc.php') ?>>


<?php
$pdo = new PDO("mysql:host=localhost;dbname=cvreal", "root", "" , array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
$result = $pdo->query("SELECT * FROM parcours");?>
<div class="starter-template">
<?php
while($parcours = $result->fetch(PDO::FETCH_OBJ)) {


        echo $parcours->id_parcours . ".  ";
        echo $parcours->nomEcole . " - ";
        echo $parcours->nomFormation . " - ";
        echo $parcours->descriptions . " - ";
        echo $parcours->dates_parcours . "<br>";

}


if (!empty($_POST)) {
    
    $_POST["id_parcours1"] = htmlentities($_POST["id_parcours"], ENT_QUOTES);
    $result = $pdo->exec("DELETE FROM parcours WHERE id_parcours = '$_POST[id_parcours]';");

    echo "données supprimés ";
    
}


?>

    <form method="POST" action="" enctype="multipart/form-data">

        <div class="form-group">
            <label class="newlabel" for="id_parcours">Tapez l'id</label>
            <input type="text" class="form-control2" id="id_parcours" name="id_parcours">

        <button type="submit" class="btn btn-primary">Suprimer</button>

    </form>

</div>
<?php include('inc/footer.inc.php') ?>