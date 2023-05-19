<?php 
session_start();
$username = "root";
$password = "";
$bdd = new PDO("mysql:host=localhost; dbname=users1;", $username, $password);
if(!$_SESSION['mdp']) {
    header('location: sec.php');
}   
// $titre = $_POST['titre'];
// $prenom=$_POST['prenom'];
// $description = $_POST['description'];
// $email=$_POST['prenom'];
// $type1=$_POST['type1'];
if(isset($_POST['envoi'])) {
    if (!empty($_POST['titre']) and !empty($_POST['description']) and !empty($_POST['prenom']) and !empty($_POST['email'])) {
        $titre = htmlspecialchars($_POST['titre']); //pour ne pas entrer des scripts comme code HTML
        $description = nl2br(htmlspecialchars($_POST['description'])); //nl2br pour saut de ligne sans script
        $prenom=nl2br(htmlspecialchars($_POST['prenom']));
        $email=nl2br(htmlspecialchars($_POST['email']));
        $type1=nl2br(htmlspecialchars($_POST['type1']));

        $inserarticle = $bdd->prepare("INSERT INTO `membres` (`type1`,`nom`, `prenom`, `Spécialité`, `email`) VALUES (?,?,?, ?, ?)");

        $inserarticle->execute(array($type1,$titre,$prenom , $description, $email)); // ajouter les valeurs manquantes pour niveau et email

        // echo "l'article a bien été envoyé";
        header('location: ajoute-membres.php');
    } else {
        echo "Veuillez compléter tous les champs...";
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
    <h1>Add</h1>
<form action="" method="post">
   
        <input type="text" name="type1" id="x1" placeholder="type">
     
        <input type="text" name="titre" id="x2" placeholder="nom">

        <input type="text" name="prenom" id="x3" placeholder="prenom">
        
       
        <input name="description" id="x4" cols="30" rows="10" placeholder="Spécialité">
        
        <input type="email" name="email" id="x5" placeholder="email">
        
        <input id="aaa" type="submit" value="Add" name="envoi"> 
    </form>
</div>
</body>
</html>
