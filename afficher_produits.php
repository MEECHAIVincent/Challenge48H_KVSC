<?php include 'inc/header.php'; 
session_start();
?>
<div class="container-fluid">

    <div class="page-header">
        <h1><span style="text-decoration: underline;">Les photos Produits : </span></h1>
    </div>
    <center><table border = "1">
    <?php
        include('config/config.php');
        $sql="select * from photos where catego = 'produits'";
        $resultat=$conn->query($sql);
        while($photo=$resultat->fetch(PDO::FETCH_OBJ))
            {
            echo "<tr>
                    <td>".$photo->id_imag."</td>
                    <td> <img src='img/".$photo->Lien_img."' /></td>
                  </tr>";
            }
        ?>
    </table></center></br>
    <center><a href="index.php" class="btn btn-primary" >Acceuil</a></center>
    

</div>

<?php include 'inc/footer.php'; ?>