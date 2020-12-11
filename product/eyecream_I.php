<?php

$keys = array_keys($_COOKIE);
$length = count($_COOKIE);
if($length >= 5) 
{
  if ($keys[0] != "PHPSESSID")
   setcookie($keys[0], $_COOKIE[$keys[0]], time() - 3600 * 24 * 31); 
  else setcookie($keys[1], $_COOKIE[$keys[1]], time() - 3600 * 24 * 31); 
}  
   setcookie("Product5", "Life Creative Eyecream I", time() + 3600 * 24 * 31, "/","", 0);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"> 
</head>

<body>
<h1>Life Creative eyecream I</h1>

 
<p><img src="img/eyecream_I.jpg"/></p>
<p>Life Creatvie eyecream contains Growing Factor(GF), for ages under 25. Apply it during mornings and evenings.</p> 


</body>
</html>