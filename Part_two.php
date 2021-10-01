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
echo "Welcome to our song site, ";
echo "! <br/>";

echo "My favorite Song is ";
echo $_GET['favsong'];

echo $_COOKIE['username'];
?>
 </body>
</html>