<?php
session_start();
include 'config.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $produk = mysqli_query($conn, "SELECT * FROM produk WHERE id='$id'");
    $p = mysqli_fetch_assoc($produk);

    $_SESSION['cart'][$id] = [
        'nama' => $p['nama'],
        'harga' => $p['harga'],
        'jumlah' => ($_SESSION['cart'][$id]['jumlah'] ?? 0) + 1
    ];
}

include 'header.php';
?>

<h1>Keranjang Belanja</h1>
<table border="1" cellpadding="8" cellspacing="0">
<tr><th>Nama Produk</th><th>Harga</th><th>Jumlah</th><th>Total</th></tr>
<?php
$total = 0;
if (!empty($_SESSION['cart'])) {
    foreach ($_SESSION['cart'] as $id => $item) {
        $sub = $item['harga'] * $item['jumlah'];
        $total += $sub;
        echo "<tr>
                <td>{$item['nama']}</td>
                <td>Rp " . number_format($item['harga']) . "</td>
                <td>{$item['jumlah']}</td>
                <td>Rp " . number_format($sub) . "</td>
              </tr>";
    }
}
?>
</table>
<h3>Total Belanja: Rp <?php echo number_format($total); ?></h3>
<a href="checkout.php">Checkout</a>

<?php include 'footer.php'; ?>
