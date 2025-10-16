<?php 

if (isset($_POST['submit'])) {
   setcookie('gender',$_POST['gender'], time() + 86400);
   session_start();
   $_SESSION['name'] = $_POST['name'];

   header('Location: index.php');
}
?>


<!DOCTYPE html> 
<html>
<head>
   <title> </title>
</head>
<body>

<form action="<?php echo $_SERVER['PHP_SELF']?>" class="white" method = "POST">

<input type="text" name = "name">

<select name="gender">

<option value="male">Male</option>
<option value="female">Female</option>

</select>
<input type="submit" name = "submit" value = "submit">
</form>
</body>
</html>