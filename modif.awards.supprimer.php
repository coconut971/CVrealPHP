<?php include('inc/data.inc.php') ?>
<?php include('inc/header.inc.php') ?>>


<?php
$pdo = new PDO("mysql:host=localhost;dbname=cvreal", "root", "" , array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
$result = $pdo->query("SELECT * FROM awards");?>
<div class="starter-template">
<?php
while($awards = $result->fetch(PDO::FETCH_OBJ)) {


        echo $awards->id_awards . ".  ";
        echo $awards->nom_awards . "<br>";

}


if (!empty($_POST)) {
    
    $_POST["id_awards1"] = htmlentities($_POST["id_awards"], ENT_QUOTES);
    $result = $pdo->exec("DELETE FROM awards WHERE id_awards = '$_POST[id_awards]';");

    echo "données supprimés ";
    
}


?>

    <form method="POST" action="" enctype="multipart/form-data">

        <div class="form-group">
            <label class="newlabel" for="id_wards">Tapez l'id</label>
            <input type="text" class="form-control2" id="id_awards" name="id_awards">

        <button type="submit" class="btn btn-primary">Suprimer</button>

    </form>

</div>
<?php include('inc/footer.inc.php') ?>