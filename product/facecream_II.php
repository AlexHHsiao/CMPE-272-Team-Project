<?php
$keys = array_keys($_COOKIE);
$length = count($_COOKIE);
if($length >= 5) 
{
  if ($keys[0] != "PHPSESSID")
   setcookie($keys[0], $_COOKIE[$keys[0]], time() - 3600 * 24 * 31); 
  else setcookie($keys[1], $_COOKIE[$keys[1]], time() - 3600 * 24 * 31); 
}
   
setcookie("Product3", "Life Creative face cream II", time() + 3600 * 24 * 31, "/","", 0);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"> 
</head>

<body>
<h1>Life Creative face cream II</h1>

 
<p><img src="img/facecream_II.jpg"/></p>
<p>Life Creatvie face cream is one of our bestsellers, for ages above 25. Apply it during mornings.</p> 


</body>
</html>