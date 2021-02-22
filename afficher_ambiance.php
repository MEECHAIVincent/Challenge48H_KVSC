<?php include 'inc/header.php'; ?>
<div class="container-fluid">

    <div class="page-header">
        <h1><span style="text-decoration: underline;">Les photos Ambiances : </span></h1>
    </div>
    <center><table border = "1">
    <?php
        include('config/fonction.php');
        $bdd= connect();
        $sql="select * from photoambience";
        $resultat=$bdd->query($sql);
        while($photo=$resultat->fetch(PDO::FETCH_OBJ))
            {
            echo "<tr>
                    <td>".$photo->id_pho."</td>
                    <td>".$photo->Nom."</td>
                  </tr>";
            }
        ?>
    </table></center></br>
    <center><a href="index.php" class="btn btn-primary" >Acceuil</a></center>
    

</div>

<?php include 'inc/footer.php'; ?>