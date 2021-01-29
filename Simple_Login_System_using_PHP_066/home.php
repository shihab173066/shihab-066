<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
     <h1>HELLO, <?php echo $_SESSION['name']; ?></h1>
     <h2>This is a simple try out for making a login system using php</h2>
     <a href="logout.php">LOGOUT</a>
</body>
</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>