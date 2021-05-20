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
<form action="login.php" method="post">

<br>

<div class="form-group">
   <label for="korisnik">Username:</label>
<input type="text" name="user"  class="form-input" value="admin">
</div>
<div class="form-group">
   <label for="lozinka">Password:</label>
<input type="password" name="password" class="form-input" value="admin">
</div>


<div class="btn-group">
  <button type="submit" name="prijava" class="btn-3" >Login</button>

</div>
</form>


</div>


</div>
<br>
<div class="footer">
Copyright @ Example
<?php echo date("Y");?>. All Rights Reserved.
</div>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script  src="js/se.js"></script>
</body>
</html>
