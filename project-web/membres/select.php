<?php
include "../cont-data/contactt.php";

if(isset($_POST['request'])){
    $request =$_POST['request'];
    $query="SELECT * FROM  membres WHERE type1='$request'";
    $result=mysqli_query($con,$query);
    $count=mysqli_num_rows( $result);
}
?>

<div class="per">
 <div class="page-goch">
    <h2>Member</h2>
    
  <!--- hadi li tstokiha f bas de doni //////////////////////////////////////////////////////////////////////////////////////////////////// -->
<?php 
if($count){

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
   
   <?php
}else{
    echo "Sorry! no Faoud";
}
   ?>
   
   <!-- hna t5lAS////////////////////////////////////////////////////////// -->
</div>

</div>