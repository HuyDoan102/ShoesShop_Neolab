<?php require('app/views/partials/header.php'); ?>
<?php 
   $user = $_SESSION['user'];
 ?>

<h1>Homopage</h1>
<h3>Hello <?= $user->fullname ?></h3>

<?php require('app/views/partials/footer.php'); ?>
  