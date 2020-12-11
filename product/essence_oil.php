<?php

$keys = array_keys($_COOKIE);
$length = count($_COOKIE);
if($length >= 5) 
{
  if ($keys[0] != "PHPSESSID" )
   setcookie($keys[0], $_COOKIE[$keys[0]], time() - 3600 * 24 * 31); 
  else setcookie($keys[1], $_COOKIE[$keys[1]], time() - 3600 * 24 * 31); 
}

setcookie("Product1", "Life Creative essence oil", time() + 3600 * 24 * 31, "/","", 0);




?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"> 
</head>

<body>
<h1>Essence oil</h1>
 
<p><img src="../img/essence_oil.jpg"/></p>
<p>Essence oil contains Grow Factor (GF), for all ages. </p> 


</body>
</html>