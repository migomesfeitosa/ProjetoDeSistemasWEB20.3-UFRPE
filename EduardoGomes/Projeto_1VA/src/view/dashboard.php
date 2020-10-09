<?php 
include __DIR__ ."/template/header.php";

$user = $_SESSION["logged_user"];

?>
<head>
    <link rel="stylesheet" href="/styles/dashboard.css">
</head>

<div class="dashboard-content">
    <h1>Hello <?php echo $user->getName(); ?> </h1>
</div>