<?php
session_start();
include '../koneksi.php'; // Koneksi ke database
require 'header.php';
?>


<?php
// Lakukan koneksi ke database di sini

// Cek jika formulir dikirimkan
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $productName = $_POST['product_name'];
    $productDescription = $_POST['product_description'];
    $productPrice = $_POST['product_price'];
    $categoryID = $_POST['category_id'];
    $productImageURL = $_POST['product_image_url'];

    // Query untuk memasukkan data produk ke dalam tabel
    $sql = "INSERT INTO products (name, description, price, category_id, image_url) 
            VALUES ('$productName', '$productDescription', '$productPrice', '$categoryID', '$productImageURL')";

    // Lakukan query ke database
    if ($conn->query($sql) === TRUE) {
        echo "";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Tutup koneksi ke database di sini
}
?>
<div class="container-fluid d-flex justify-content-center align-items-center" style="height: 100vh;">
    <div class="card p-4 col-md-6">
      <h2 class="text-center mb-4">Tambah Produk</h2>
      <form action="" method="POST" class="mb-8">
        <div class="form-group">
          <label for="productName">Nama Produk</label>
          <input type="text" class="form-control" id="productName" name="product_name" placeholder="Nama Produk">
        </div>
        <div class="form-group">
          <label for="productDesc">Deskripsi Produk</label>
          <textarea class="form-control" id="productDesc" name="product_description" rows="3" placeholder="Deskripsi Produk"></textarea>
        </div>
        <div class="form-group">
          <label for="productPrice">Harga Produk</label>
          <input type="number" class="form-control" id="productPrice" name="product_price" placeholder="Harga Produk">
        </div>
        <div class="form-group">
          <label for="categorySelect">Kategori</label>
          <select class="form-control" id="categorySelect" name="category_id">
            <option value="1">BMTH</option>
            <option value="2">Slipknot</option>
            <option value="3">Maternal</option>
            <!-- Tambahkan opsi lain sesuai dengan kategori yang ada -->
          </select>
        </div>
        <div class="form-group">
          <label for="productImg">URL Gambar</label>
          <input type="text" class="form-control" id="productImg" name="product_image_url" placeholder="URL Gambar">
        </div>
        <button type="submit" class="btn btn-primary">Tambah Produk</button>
        <a href="store.php" class="btn btn-secondary">Kembali</a>
      </form>
    </div>
  </div>