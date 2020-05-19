<?php include('inc/header.inc.php') ?>

<div class="container-fluid p-0">

    <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="interests">
        <div class="w-100">
            <h2 class="mb-5">Interests</h2>
            <p><?php $result = $pdo->query("SELECT * FROM interests");
                    while($interests = $result->fetch(PDO::FETCH_OBJ)) { ?>
            <p><?php echo $interests->descriptions ;?></p>
        </div>
                    <?php } ?>
    </section>
        
   <hr class="m-0">
 
</div>

<?php include('inc/footer.inc.php') ?>