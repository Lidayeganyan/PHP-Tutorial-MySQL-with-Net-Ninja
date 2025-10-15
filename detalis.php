<?php 
include('config/db_connect.php');


if(isset($_POST['delete'])){
   $id_to_delete = mysqli_real_escape_string($conn, $_POST['id_to_delete']);
   $sql = "DELETE FROM pizzas WHERE id = $id_to_delete";
   if (mysqli_query($conn,$sql)) {
      header('Location: index.php');
   }else{
      echo 'query error :' . mysqli_error($conn);
   }
}

if (isset($_GET['id'])) {

   $id = mysqli_real_escape_string($conn, $_GET['id']);
   $sql = "SELECT * FROM pizzas WHERE id = $id";
   $result = mysqli_query($conn, $sql);
   $pizzas = mysqli_fetch_assoc($result);
   mysqli_free_result($result);
   mysqli_close($conn);
}
?>



<!DOCTYPE html>
<?php include('templates/header.php'); ?>
   <div class="container center">
      <?php  if($pizzas): ?>
   <h4><?php echo htmlspecialchars ($pizzas['title']); ?></h4>
   <p>Created by: <?php echo htmlspecialchars($pizzas['email']); ?></p>
   <p><?php echo date($pizzas['created_at']); ?></p>
   <p> <?php echo htmlspecialchars ($pizzas['ingredients']);?></p>
         <form action="detalis.php" method='POST' >
            <input type="hidden" name='id_to_delete' value="<?php echo $pizzas['id'] ?>" >
            <input type="submit" name="delete" value ="Delete" class="btn brand z-depth-0">
         </form>
  
   <?php else: ?>
      <p>There are not pizza:(</p>
      <?php endif; ?>
   </div>
  <?php  include('templates/footer.php'); ?>

</html>

