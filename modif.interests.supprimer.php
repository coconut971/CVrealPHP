<?php include('inc/data.inc.php') ?>
<?php include('inc/header.inc.php') ?>


<?php
$pdo = new PDO("mysql:host=localhost;dbname=cvreal", "root", "" , array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
$result = $pdo->query("SELECT * FROM interests");?>
<div class="starter-template">
<?php
while($interests = $result->fetch(PDO::FETCH_OBJ)) {


        echo $interests->id_interests . ".  ";
        echo $interests->descriptions . "<br>";

}


if (!empty($_POST)) {
    
    $_POST["id_interests1"] = htmlentities($_POST["id_interests"], ENT_QUOTES);
    $result = $pdo->exec("DELETE FROM interests WHERE id_interests = '$_POST[id_interests]';");

    echo "données supprimés ";
    
}


?>

    <form method="POST" action="" enctype="multipart/form-data">

        <div class="form-group">
            <label class="newlabel" for="id_interests">Tapez l'id</label>
            <input type="text" class="form-control2" id="id_interests" name="id_interests">

        <button type="submit" class="btn btn-primary">Suprimer</button>

    </form>

</div>



<?php include('inc/footer.inc.php') ?>