<?php include('includes/header.php'); ?>

<h2>Daftar Produk</h2>
<div class="products">
<?php
$products = [
    ['id'=>1, 'name'=>'Sepatu Nike', 'price'=>350000],
    ['id'=>2, 'name'=>'Kaos Polos', 'price'=>75000],
    ['id'=>3, 'name'=>'Topi Keren', 'price'=>50000],
];

foreach($products as $p){
    echo "<div class='product'>
            <h3>{$p['name']}</h3>
            <p>Rp ".number_format($p['price'],0,',','.')."</p>
            <a href='cart.php?action=add&id={$p['id']}'>Tambah ke Keranjang</a>
          </div>";
}
?>
</div>

<?php include('includes/footer.php'); ?>