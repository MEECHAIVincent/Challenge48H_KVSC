<?php include 'inc/header.php'; ?>
<?php
    include "config/config.php";

    if(isset($_POST['submit'])){

        // Count total files
        $countfiles = count($_FILES['files']['name']);

        var_dump($countfiles);
    
        // Prepared statement
        $query = "INSERT INTO photos (name,image) VALUES(?,?)";
    
        $statement = $conn->prepare($query);
    
        // Loop all files
        for($i=0;$i<$countfiles;$i++ ){
    
        // File name
        $filename = $_FILES['files']['name'][$i];
    
        // Location
        $target_file = 'img/'.$filename;
    
        // file extension
        $file_extension = pathinfo($target_file, PATHINFO_EXTENSION);
        $file_extension = strtolower($file_extension);
    
        // Valid image extension
        $valid_extension = array("png","jpeg","jpg");
    
        if(in_array($file_extension, $valid_extension)){
    
            // Upload file
            if(move_uploaded_file($_FILES['files']['tmp_name'][$i],$target_file)){
    
                // Execute query
            $statement->execute(array($filename,$target_file));
    
            }
        }
    
        }
        echo "File upload successfully";
    }
?>

<div class="container-fluid">
    
    <div class="page-header">
        <h1><span style="text-decoration: underline;">Ajouter une Photo : </span></h1>
    </div>

    <hr/>

	<form method='post' action='' enctype='multipart/form-data'>
        <input type='file' name='files[]' multiple />
        <input type='submit' value='Submit' name='submit' class='btn btn-success'  />
    </form>



</div>


<?php include 'inc/footer.php'; ?>

