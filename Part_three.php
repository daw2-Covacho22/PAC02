<?php
session_start();
$_SESSION['username'] = $_POST['user'];
$_SESSION['userpass'] = $_POST['pass'];
$_SESSION['authuser'] = 0;

//Check username and password information
if (($_SESSION['username'] == 'covacho') and
    ($_SESSION['userpass'] == '1998')) {
    $_SESSION['authuser'] = 1;
} else {
    echo 'Sorry, but you don\'t have permission to view this page!';
    exit();     
}
?>
<html>
 <head>
  <title>Find my Favorite song!</title>
 </head>
 <body>
<?php
$myfavsong = urlencode("SolSolet");
echo "<a href='Part_four.php?favsong=$myfavsong'>";
echo "Click here to see information about my favorite song!"; 
echo "</a>";
?>
 </body>
</html>
