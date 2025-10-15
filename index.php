<?php 
include('config/db_connect.php');
// $conn = mysqli_connect('localhost','newroot','localhost*','PHP Tutorial MySQL');

// if (!$conn) {
//    echo 'Connection error:' . mysqli_connect_error();
// }

$sql = 'SELECT title,ingredients, id  FROM pizzas';
$result = mysqli_query($conn,$sql);
$pizzas = mysqli_fetch_all( $result, MYSQLI_ASSOC);
// print_r($pizzas);
// print_r(explode(',', $pizzas[0]['ingredients']));
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