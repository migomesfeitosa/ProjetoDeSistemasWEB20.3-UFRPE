<?php 
include __DIR__ ."/template/header.php";

session_start();
$user = $_SESSION["logged_user"];

?>


<div id="content">
    <h1>Hello <?php echo $user->getUser(); ?> </h1>
</div>

<?php include __DIR__ ."/template/footer.php" ?>