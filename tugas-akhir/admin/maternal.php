<?php
include "header.php";
include "../koneksi.php";
include "sidebar.php";

?>
    <main class="col pt-0">
        <div class="product-container">
<?php
// Jalankan kueri untuk mengambil produk dari kategori BMTH
$sql = "SELECT * FROM products WHERE category_id = 3";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) { 
        ?>
             <div class="product-card">
                        <div class="product-image">
                            <img src="<?php echo $row['image_url']; ?>" alt="Product Image">
                        </div>
                        <div class="product-details">
                            <h3 class="product-title"><?php echo $row['name']; ?></h3>
                            <p class="product-description"><?php echo $row['description']; ?></p>
                            <span class="product-price">$<?php echo $row['price']; ?></span><br>
                            <!-- Tombol atau tautan lainnya -->
                            <!-- Ganti href dengan tautan sesuai kebutuhan -->
                            <a href="#" class="btn btn-primary"><i class='bx bx-dollar bx-tada' ></i> buy now</a>
                            <a href="#" class="btn btn-primary"><i class='bx bx-cart-add bx-tada' ></i> Add to Cart</a>
                        </div>
                    </div>
<?php
}
} else {
echo "Tidak ada produk dari kategori ini.";
}
?>