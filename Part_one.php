<?php
session_start();
setcookie("username","covacho",time()+60);
$_SESSION['authuser'] = 1;
?>

<html>
 <head>
  <title>Find my Favorite Song!</title>
 </head>
 <body>
<?php
$myfavsong = urlencode("SolSolet");
echo "<a href='Part_two.php?favsong=$myfavsong'>";
echo "Click here to see information about my favorite song!"; 
echo "</a>";
?>
 </body>
</html>