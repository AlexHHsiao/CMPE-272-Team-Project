<?php

$keys = array_keys($_COOKIE);
$length = count($_COOKIE);
if($length >= 5) 
{
  if ($keys[0] != "PHPSESSID")
   setcookie($keys[0], $_COOKIE[$keys[0]], time() - 3600 * 24 * 31); 
  else setcookie($keys[1], $_COOKIE[$keys[1]], time() - 3600 * 24 * 31); 
}
setcookie("Product6", "Life Creative Eyecream II", time() + 3600 * 24 * 31, "/","", 0);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"> 
</head>

<body>
<h1>Life Creative eyecream II</h1>


 
<p><img src="img/eyecream_II.jpg"/></p>
<p>Life Creatvie eyecream contains Growing Factor(GF), for ages above 25. Apply it during mornings and evenings.</p> 


</body>
</html>