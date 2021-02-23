<?php

require_once "connection.php";
	$search_keyword = '';
	if(!empty($_POST['search']['keyword'])) {
		$search_keyword = $_POST['search']['keyword'];
	}
	$sql = 'SELECT * FROM tbl_file WHERE name LIKE :keyword OR categorie LIKE :keyword ORDER BY id DESC ';
	

	$pdo_statement = $db->prepare($sql);
	$pdo_statement->bindValue(':keyword', '%' . $search_keyword . '%', PDO::PARAM_STR);
	$pdo_statement->execute();
	$result = $pdo_statement->fetchAll();


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

			<form name='frmSearch' action='' method='post'>
				<div style='text-align:right;margin:20px 0px;'><input type='text' name='search[keyword]' value="<?php echo $search_keyword; ?>" id='keyword' maxlength='25'></div>
				<div class="table-responsive">
					<table class="table table-striped table-bordered table-hover">
						<thead>
							<tr>
							<th>Name</th>
							<th>categorie</th>
							<th>Image</th>
							<th>Edit</th>
                            <th>Delete</th>
							</tr>
						</thead>
						<tbody id='table-body'>
							<?php
							if(!empty($result)) { 
								foreach($result as $row) {
							?>
							<tr class='table-row'>
								<td><?php echo $row['name']; ?></td>
								<td><?php echo $row['categorie']; ?></td>
								<td><img src="upload/<?php echo $row['image']; ?>" width="100px" height="60px"></td>
								<td><a href="edit.php?update_id=<?php echo $row['id']; ?>" class="btn btn-warning">Edit</a></td>
                                <td><a href="?delete_id=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a></td>
							</tr>
							<?php
								}
							}
							?>
						</tbody>
					</table>
				</div>
			</form>

		</div>

	</div>

	</div>

	</body>
</html>