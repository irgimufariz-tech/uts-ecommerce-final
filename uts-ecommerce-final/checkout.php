<?php
session_start();
include('includes/header.php');
?>

<h2>Checkout</h2>
<p>Terima kasih sudah berbelanja di toko kami!</p>

<?php
session_destroy();
?>

<?php include('includes/footer.php'); ?>