<?php 
include "../cont-data/contactt.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Member</title>
    <link rel="stylesheet" href="members.css">
</head>
<body>
    <header>
       <img src="../projet1/1680966344837.jpg" alt="">
       <ul>
                 <li><a href="../home-page/index.php">Accuil</a></li>
                 <li><a href="../formation/formation.php">Formation</a></li>
                 <li><a href="../presentation/presentation.php">presentation</a></li>
                 
                 <li class="soso"><a href="#">Recherche</a>
                     <ul class="sous-menu">
                 <li><a href="../equipe/equipe.php" >Equipes</a></li>
                 <li><a href="../project1/pub.php" >Projets</a></li>          
                 <li><a href="../article1/pub1.php" >Publications</a></li>  
                 <li><a href="../membres/members.php">Membres</a></li>
                   </ul>
                 </li>
                 <li><a href="../contact/contact1.php" target="_blank">Contact </a></li>
             </ul>
            
       

    </header>
   <form action="members.php" method="get">
    <div class="select-box">
        <label for="nub">Members</label>
                <select name="nub" id="nub">
                    <option value="all">All</option>
                    <option value="BDD"> Big data et systemes decisionnels (BDD)</option>
                    <option value="INTEC"> Intelligence computationnelle (INTEC)</option>
                    <option value="RFA"> Reconnaissance des formes et applications (RFA)</option>
                    <option value="SIIR"> Securite de systemes informatiques et raisonnement (SIIR)</option>
                    </select>
                   
                </div>
                </form>
           
<div class="per">
 <div class="page-goch">
    <h2>Member</h2>
    
  <!--- hadi li tstokiha f bas de doni //////////////////////////////////////////////////////////////////////////////////////////////////// -->
<?php 

$query="SELECT * FROM membres";
$r=mysqli_query($con,$query);
while ($row=mysqli_fetch_assoc($r)){
    if(!( $row['type1']=='doctora' || $row['type1']=='DOCTORA')){
?>
<details>
    <summary><div class="inter">
     <img src="../projet1/img3.jpg" alt="">
         <h3><?php echo $row['nom']; ?></h3>
     </div> </summary>
    
    <div class="sous-mem">
         <h2> <?php echo $row['nom']; ?></h2>
         <ul>
              <li>type <?php 
             
              echo $row['type1']; ?></li>
             <li><?php 
             
             echo $row['Spécialité']; ?></li>
             <li> <?php 
              
             echo $row['email']; 
        
             ?></li>
         </ul> 
    </div>
    
   
    </details>
    
    <?php 
    }}
   
    ?>
<!-- hna t5lAS////////////////////////////////////////////////////////// -->

</div>
<div class="page-droit">
    <h2>Doctorants</h2>

    <?php 
 $query="SELECT * FROM membres";
 $r=mysqli_query($con,$query);

 while ($row=mysqli_fetch_assoc($r)){
    if(( $row['type1']=='doctora' || $row['type1']=='DOCTORA')){
// ?>   
 <!-- hadi li tstokiha f bas de doni //////////////////////////////////////////////////////////////////////////////////////////////////// -->
<details>
  <summary><div class="inter">
    <img src="../projet1/img3.jpg" alt="">
        <h3><?php 
     
        echo $row['nom']; ?></h3>
    </div> </summary>
   
   <div class="sous-mem">
        <h2> <?php 
        
        echo $row['nom']; ?></h2>
        <ul>
            <li>Spécialité : <?php 
           
            echo $row['Spécialité']; ?></li>
            <li> email : <?php  echo $row['email']; ?></li>
        </ul> 
   </div>
   
  
   </details>
   <?php 
    }}
   ?>
    <!-- hna t5lAS////////////////////////////////////////////////////////// -->
</div>

</div>

 
<div class="page-final">
    <h3>  LABORATOIRE DE RECHERCHE POUR LE DEVELOPPEMENT DES SYSTEMES INFORMATISES</h3>
     <h4> Université Saad Dahlab - Blida 1  |  Faculté des Sciences  </h4>
     <h4> http://www.univ-blida.dz</h4> 
     <a href=""> Copyright ©2020 All rights reserved to LRDSI</a>
  </div> 
  
</body>
</html>