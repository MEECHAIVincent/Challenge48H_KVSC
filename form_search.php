<?php

require_once "connection.php";


?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="initial-scale=1.0, maximum-scale=2.0">
<title>challange 48</title>

<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
<script src="js/jquery-1.12.4-jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>

</head>

	<body>


	<nav class="navbar navbar-default navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="index.php">Back to Home</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

	<div class="wrapper">

	<div class="container">

		<div class="col-lg-12">

			<form method="post" class="form-horizontal" action="form_search.php">

				<div class="form-group">
					<label class="col-sm-3 control-label">Name</label>
					<div class="col-sm-6">
						<input type="text" name="txt_name" class="form-control" placeholder="enter name" />
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-3 control-label">categorie</label>
					<div class="col-sm-6">
						<select class="form-select"  name="txt_categorie" aria-label=".form-select-lg example">
						<option selected>enter la categorie</option>
						<option value="Produit">Produit</option>
						<option value="Ambiance">Ambiance</option>
						</select>
					</div>
				</div>

				<div class="form-group">
				<div class="col-sm-offset-3 col-sm-9 m-t-15">
				    <input type="submit"  name="search" class="btn btn-success " value="Insert">
				    <a href="index.php" class="btn btn-danger">Cancel</a>
				</div>
				</div>

			</form>
			<?php
				if (isset($_POST['search'])) {
					// (B1) SEARCH FOR USERS
					require "search.php";
				
					// (B2) DISPLAY RESULTS
					if (count($results) > 0) {
					foreach ($results as $r) {
						printf("<div>%s - %s</div>", $r['name'], $r['image']);
					}
					} else { echo "No results found"; }
				}
			?>


		</div>

	</div>

	</div>

	</body>
</html>