<?php 
session_start();
$username = "root";
$password = "";
$bdd = new PDO("mysql:host=localhost; dbname=users1;",$username,$password);
if(isset($_GET['id']) and !empty($_GET['id'])){    //virefier si idantifer a uter enter
    $getid=$_GET['id'];
    $recupid=$bdd->prepare('SELECT * FROM project WHERE id =?');
    $recupid->execute(array($getid));
    if($recupid->rowCount()>0){
   
   $bannirid=$bdd->prepare('DELETE FROM project WHERE  id=?');
   $bannirid->execute(array($getid));
   header('location:ajoute-project.php');



}else {
    echo "Aucun idantifer n'a été trouvé";
}
}else{
    echo "user name n'a pas ete recuperé";
}


?>