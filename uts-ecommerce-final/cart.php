<?php
session_start();

if (!isset($_SESSION['cart'])) $_SESSION['cart'] = [];

if (isset($_GET['action']) && $_GET['action'] == 'add') {
    $id = $_GET['id'];
    $_SESSION['cart'][] = $id;
    header("Location: cart.php");
    exit;
}

include('includes/header.php');
?>

<h2>Keranjang Belanja</h2>

<?php
$products = [
    1 => ['name'=>'Sepatu Nike', 'price'=>350000],
    2 => ['name'=>'Kaos Polos', 'price'=>75000],
    3 => ['name'=>'Topi Keren', 'price'=>50000],
];

$total = 0;
if (!empty($_SESSION['cart'])) {
    echo "<ul>";
    foreach($_SESSION['cart'] as $id){
        $item = $products[$id];
        $total += $item['price'];
        echo "<li>{$item['name']} - Rp ".number_format($item['price'],0,',','.')."</li>";
    }
    echo "</ul>";
    echo "<h3>Total: Rp ".number_format($total,0,',','.')."</h3>";
    echo "<a href='checkout.php'>Lanjut ke Pembayaran</a>";
} else {
    echo "<p>Keranjang masih kosong.</p>";
}
?>

<?php include('includes/footer.php'); ?>