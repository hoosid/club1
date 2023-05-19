<?php 
include "../cont-data/contactt.php";
$id=$_GET['id_meb'];
if (isset($_POST['envoi'])){
    
    $titre = $_POST['titre'];
    $prenom=$_POST['prenom'];
    $description = $_POST['description'];//niveau
    $email=$_POST['email'];
    $type1=$_POST['type1'];
    $sql = "UPDATE `membres` SET  type1='$type1',nom='$titre', prenom='$prenom', Spécialité='$description', email='$email' WHERE id_meb='$id'";

    $result = mysqli_query($con, $sql);
    
    if($result){
        header('Location: ajoute-membres.php');
        exit;
    } else {
        die(mysqli_error($con));
    }
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="add-mombre.css">
</head>
<body>
 <div class="page">
    <h1>UPdate</h1>
<form action="" method="post">
<input type="text" name="type1" id="x1" placeholder="type">
     
     <input type="text" name="titre" id="x2" placeholder="nom">

     <input type="text" name="prenom" id="x3" placeholder="prenom">
     
    
     <input name="description" id="x4" cols="30" rows="10" placeholder="Spécialité">
     
     <input type="email" name="email" id="x5" placeholder="email">
     
     <input id="aaa" type="submit" value="Update" name="envoi"> 
</form>
</body>

</html>