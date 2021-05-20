<?php  session_start(); ?>
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
function uzmiUser(){
$get = file_get_contents('user.json');
$u = json_decode($get,true);

return $u ;
}

$u = uzmiUser();


foreach($u  as $us){

if (isset($_SESSION['user']) && $us['role'] == 'admin'){
?>

<?php
if($_SESSION['user'] == $us['user']){

?>
<div align="center">
<h1>ADMIN</h1>
</div>
<br>
<a href="user.php?user=<?php echo base64_encode($_SESSION['user']) ?>"  class="link"><h2>User: <?php echo $_SESSION['user']; ?></h2></a>
<br>
<div align="center">
<h2> Role: <?php echo  $us['role']; ?></h2>
<br>

<a href="logout.php"><button class="btn-3">Logout</button></a>
</div>
<?php
} else {
echo '<meta http-equiv="refresh" content="0;URL=index.php" />';
}
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
