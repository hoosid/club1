<?php 
session_start();
$username = "root";
$password = "";
$bdd = new PDO("mysql:host=localhost; dbname=users1;",$username,$password);
if(!$_SESSION['mdp']){
    header('location :sec.php');
}
if(isset($_POST['envoi'])){
    if (!empty($_POST['titre']) and !empty($_POST['description']) and !empty($_POST['prenom']) and !empty($_POST['email'])) {
        $titre = htmlspecialchars($_POST['titre']); //pour ne pas entrer des scripts comme code HTML
        $description = nl2br(htmlspecialchars($_POST['description'])); //nl2br pour saut de ligne sans script
        $prenom=nl2br(htmlspecialchars($_POST['prenom']));
        $email=nl2br(htmlspecialchars($_POST['email']));
        $type1=nl2br(htmlspecialchars($_POST['type1']));
$inserarticle =$bdd->prepare('INSERT INTO `project`(  `type1`, `Responsables`, `num_proj`, `min_info`, `annee`) VALUES (?,?,?,?,?)');
$inserarticle->execute(array($type1,$titre,$prenom , $description, $email));
// echo "l'article a bien été envoiyé";
header('location:ajoute-project.php');
}else{
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
</head>
<body>

<form action="" method="post">
   
   <input type="text" name="type1" id="x1" placeholder="type">

   <input type="text" name="titre" id="x2" placeholder="responsables">

   <input type="text" name="prenom" id="x3" placeholder="num_project">
   
  
   <input name="email" id="x4" cols="30" rows="10" placeholder="annee">
   
   <textarea name="description" id="x5" placeholder="num_info"></textarea>
   
   <input id="aaa" type="submit" value="Add" name="envoi"> 
</form>
</body>
</html>