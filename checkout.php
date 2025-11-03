<?php
session_start();
include 'header.php';
?>

<h1>Checkout</h1>
<p>Terima kasih telah berbelanja!</p>
<p>Pesanan kamu sedang diproses...</p>

<?php
session_destroy();
include 'footer.php';
?>
