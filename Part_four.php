<?php
session_start();

//Check user permission
if ($_SESSION['authuser'] != 1){
    echo "Sorry, but you don't have permission to view this page!";
    exit();     
}
?>
<html>
 <head>
  <title>My Song Site <?php echo $_GET['favsong'];?></title>
 </head>
 <body>
<?php
echo "Welcome to our Song site, ";
echo $_SESSION["username"];
echo "! <br/>";

echo "My favorite song is ";
echo $_GET['favsong'];
echo '<br>';

echo "My song rating for this song is: ";
$songrate = 2;
echo $songrate;
?>
 </body>
</html>
