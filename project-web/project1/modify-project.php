<?php 
include "../cont-data/contactt.php";
$id1=$_GET['id'];
if (isset($_POST['envoi'])){

    $titre = $_POST['titre'];
    $prenom=$_POST['prenom'];
    $description = $_POST['description'];//niveau
    $email=$_POST['email'];
    $type1=$_POST['type1'];

    $sql = "UPDATE `project` SET type1=' $type1',Responsables='$titre',num_proj='$prenom',min_info=' $description',annee='$email' WHERE id='$id1'"; 
    $result = mysqli_query($con, $sql);

    if($result){
        header('Location: ajoute-project.php');
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
</head>
<body>
<form action="" method="post">
   
   <input type="text" name="type1" id="x1" placeholder="type">

   <input type="text" name="titre" id="x2" placeholder="responsables">

   <input type="text" name="prenom" id="x3" placeholder="num_project">
   
  
   <input name="email" id="x4" cols="30" rows="10" placeholder="annee">
   
   <textarea  name="description" id="x5" placeholder="num_info"></textarea>
   
   <input id="aaa" type="submit" value="Add" name="envoi"> 
</body>
</html>
