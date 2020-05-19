<?php include('inc/data.inc.php') ?>
<?php include('inc/header.inc.php') ?>

<?php

if (!empty($_POST)) {
    
    $pdo = new PDO("mysql:host=localhost;dbname=cvreal", "root", "" , array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
    $_POST["descriptions1"] = htmlentities($_POST["descriptions"], ENT_QUOTES);
    $result = $pdo->exec("INSERT INTO interests (descriptions) VALUES ('$_POST[descriptions]');");

    echo "données ADDED";
    
}


?>
<div class="starter-template">
    <form method="POST" action="" enctype="multipart/form-data">

        <div class="form-group">
            <label for="descriptions">Interet</label>
            <input type="text" class="form-control" id="descriptions" name="descriptions">
        </div>

        <button type="submit" class="btn btn-primary">Ajouter</button>

    </form>

</div>

<?php include('inc/footer.inc.php') ?>