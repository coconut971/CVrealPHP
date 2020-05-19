<?php include("inc/header.inc.php"); ?>



  <div class="container-fluid p-0">
    <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="about">
        <div class="w-100">
          <h1 class="mb-0"><?php $result = $pdo->query("SELECT * FROM about");
            $about = $result->fetch(PDO::FETCH_OBJ); 

            echo $about->nom ;?>
            <span class="text-primary">
            <?php echo $about->prenom ;?>
            
            </span>
          </h1>
          <div class="subheading mb-5">
          <?php echo $about->adresse ;?>
          <div class="subheading mb-5">
          <?php echo $about->numero ;?>
          </div>
            <a href="mailto:name@email.com"><?php echo $about->email ;?></a>
          
          </div>

          </div>
          <p class="lead mb-5">
          <?php echo $about->info ;?></p>
          <div class="social-icons">
            <a href="https://www.linkedin.com/in/franck-croisic-insanedata/">
              <i class="fab fa-linkedin-in"></i>
            </a>
            <a href="https://github.com/coconut971">
              <i class="fab fa-github"></i>
            </a>
            <a href="https://twitter.com/COCONUT971">
              <i class="fab fa-twitter"></i>
            </a>
          </div>
        </div>
    </section>
    
    <hr class="m-0">
  </div>  
  

<?php include("inc/footer.inc.php"); ?>