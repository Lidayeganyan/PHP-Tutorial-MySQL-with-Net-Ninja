<?php 
include('config/db_connect.php');

$sql = 'SELECT title,ingredients, id  FROM pizzas ORDER BY created_at';
$result = mysqli_query($conn,$sql);
$pizzas = mysqli_fetch_all( $result, MYSQLI_ASSOC);
mysqli_free_result($result);
mysqli_close($conn);

?>



<!DOCTYPE html> 
<html>
<?php include('templates/header.php'); ?>
 <h4 class="center grey-text">
   Pizzas!
 </h4>
 <div class="container">
   <div class="row">
      <?php foreach($pizzas as $newitem){ ?>
         <div class="col s6 md3">
            <div class="card z-depth-0">         
               <img src="img/pizza.svg" class="pizza">

               <div class="card-content center">
                  <h6> <?php echo htmlspecialchars($newitem['title']); ?></h6>
                  <ul>
                     
                     <?php  foreach ( explode (',',$newitem['ingredients'])  as $ing){ ?>
                        <li> <?php echo htmlspecialchars($ing);?> </li> 
                     <?php }?>

                  </ul>
               </div>
               <div class="card-action right-align">
                  <a href="detalis.php?id=<?php echo $newitem['id'] ?>" class="brand-text">more info</a>
               </div>
            </div>
         </div>
         <?php }?>
   </div>  
 </div>


 <?php  include('templates/footer.php'); ?>
     <?php  var_dump($newitem['ingredients']); ?>


</html>