<?php
/**
 * Created by PhpStorm.
 * User: Eduardo Hernández
 * Date: 17/04/2018
 * Time: 5:05
 */
$pdo = new PDO("mysql:host=localhost;dbname=databaseform","root","");

?>
<html>
<?php include 'header.php' ?>
<?php include 'navbar.php' ?>
<body>
<h2 style="text-align: center">Welcome to the Form...</h2>
<div class="other">
    <img style="text-align:center" src="images/asdf.jpg" alt="">
</div>
<?php
include 'footer.php';
?>
</body>
</html>
