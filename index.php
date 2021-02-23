<?php include 'inc/header.php'; 
session_start();
?>

<div class="container-fluid">
    
		<div class="page-header">
			<h1>Challenge 48H <small>passion froid</small></h1>
		</div>

    <hr />
    
    <div class="row-fluid ">
      <div class="hero-unit">
              <h3 class="text-center">Que voulez-vous faire ? </h3>
                  <p class="text-center">
          <a href="afficher_produits.php" class="btn btn-primary">Voir les photos Produits</a> <br /> <br />
          <a href="afficher_ambiance.php" class="btn btn-primary">Voir les photos Ambiances </a> <br /> <br />
        </p>
      </div>

      <hr />
			
			<div class="hero-unit">
          <p class="text-center">
						<a href="ajouter.php" class="btn btn-primary">Ajouter une Photo</a> <br /> <br />
					</p>
      </div>
    
    </div>
</div>

<?php include 'inc/footer.php'; ?>