<?php include('inc/header.inc.php') ?>
<div class="container-fluid p-0">    
    <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="awards">
        <div class="w-100">
            <h2 class="mb-5">Awards &amp; Certifications</h2>
            <?php $result = $pdo->query("SELECT * FROM awards");
                    while($awards = $result->fetch(PDO::FETCH_OBJ)) { ?>
            <ul class="fa-ul mb-0">
                <li>
                    <i class="fa-li fa fa-trophy text-warning"></i><?php echo $awards->nom_awards ;?>
                </li>
            
            </ul>
        </div>
                    <?php } ?>
    </section>
<div>
<?php include('inc/footer.inc.php') ?>