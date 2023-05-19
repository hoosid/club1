<?php 
include "../cont-data/contactt.php";
?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <link rel="stylesheet" href="pub1.css">
    
    <title>Document</title>
</head>
<body>
    <header>
        <img src="1680966344837.jpg" alt="">
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
   
    <div class="select-box">
<label for="utilise">puplication</label>
        <select name="utilise" id="utilise">
            <option value="all">All</option>
            <option value="PI">publication internationales</option>
            <option value="PN">Publication nationales</option>
            <option value="CI">Communication internationales</option>
            <option value="CN">Communication nationales</option>
            <option value="LB">Logiciels et brevets</option>
            <option value="OP">Ouvrages et polycopiés</option>
            <option value="TDS">Théses de doctorat soutenues</option>
            <option value="LD">Liste des doctorants en cours </option>
            <option value="MMS">Memoire de magister soutenus</option>
            <option value="MMSS">Memoire de master soutenus </option>
            </select>
        </div>
    
    <div class="container">
        <!-- hadi li tstokiha f bas de doni //////////////////////////////////////////////////////////////////////////////////////////////////// -->
        <?php 
$query="SELECT * FROM article";
$r=mysqli_query($con,$query);
while ($row=mysqli_fetch_assoc($r)){
?>
        <div class="item-container">
            <div class="img-container">
                <img src="iStock-179243711.jpg" alt="">
            </div>
            <div class="body-container">
                <div class="overlay"></div>
                <div class="event-info">
                    <p class="title"><?php echo $row['description']; ?> </p>
                    <div class="separator"></div>
                     <p class="info"><span>	<?php echo $row['titre']; ?></span></p>
                    <!-- <p class="price">Free</p> -->
                    <div class="additional-info">
                        <p class="info">
                            <i class="fas fa-map-marker-alt"></i>
                           <span>journal:</span><?php echo $row['journal']; ?>
                        </p>
                        <p class="info">
                            <i class="far fa-calendar-alt"></i>
                           <span>Date:</span><?php echo $row['date']; ?>
                        </p>
                        <p class="info description">
                       <span>Autheurs:</span><?php echo $row['autheur']; ?>
                         <!-- <span>more...</span> -->
                        </p>
                    </div>
                </div>
                <button class="action">Accéder </button>
            </div>
    
        </div>
      <!-- hna t5lAS////////////////////////////////////////////////////////// -->
      <?php 
    }
     ?>
    </div>
   

        <div class="page-final">
            <h3>  LABORATOIRE DE RECHERCHE POUR LE DEVELOPPEMENT DES SYSTEMES INFORMATISES</h3>
             <h4> Université Saad Dahlab - Blida 1  |  Faculté des Sciences  </h4>
             <h4> http://www.univ-blida.dz</h4> 
             <a href=""> Copyright ©2020 All rights reserved to LRDSI</a>
          </div> 






</body>
</html>