<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en" >

<head>
<meta charset="UTF-8">
<title>S. E. JSON Login</title>
<link rel="shortcut icon" href="http://www.sensationenergy.com/favicon.ico" type="image/x-icon" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/se.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>
<body>
<div class="zaglavlje">
<h1>Sensation Energy</h1>
<h2>Tutorials</h2>
</div>
<nav class="gornji_meni">
<a href="#" class="toggle"><i class="fa fa-reorder"></i></a>
<div class="left">
<a href="index.php" class="link"><i style="cursor:pointer;" class="fa fa-home" aria-hidden="true" title="HOME"></i></a>
</div>
</nav>
<br>
<?php
$_SESSION['user'] = base64_decode($_GET['user']);

function uzmiUser(){
$get = file_get_contents('user.json');
$u = json_decode($get,true);

return $u ;
}

$u = uzmiUser();

$user_id='0';

foreach($u as $us){

if($_SESSION['user'] == $us['user']){
?>
<br>
<br>
<div class="card">
<br>
<h2>First name: <?php echo $us['first_name']; ?></h2>
<h2>Last name: <?php echo $us['last_name']; ?></h2>
<h2>Email: <?php echo $us['email']; ?></h2>
<h2>User: <?php echo $us['user']; ?></h2>
<h2>Role: <?php echo  $us['role']; ?></h2>
<br>
<br>
</div>
<br>
<br>
<div align="center">
<a href="logout.php"><button class="btn-3">Logout</button></a>
<br>
</div>
<br>
<?php
} }
?>
<br>
<div class="footer">
Copyright @ Example
<?php echo date("Y");?>. All Rights Reserved.
</div>

<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script  src="js/se.js"></script>
</body>
</html>
