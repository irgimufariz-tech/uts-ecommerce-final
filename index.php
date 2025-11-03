<?php
include 'config.php';
include 'header.php';

$result = mysqli_query($conn, "SELECT * FROM produk");
?>

<h1>Daftar Produk</h1>
<div class="products">
<?php while ($row = mysqli_fetch_assoc($result)) { ?>
    <div class="product">
        <img src="images/<?php echo $row['gambar']; ?>" width="150"><br>
        <h3><?php echo $row['nama']; ?></h3>
        <p>Rp <?php echo number_format($row['harga']); ?></p>
        <a href="cart.php?id=<?php echo $row['id']; ?>">Add to Cart</a>
    </div>
<?php } ?>
</div>

<?php include 'footer.php'; ?>
