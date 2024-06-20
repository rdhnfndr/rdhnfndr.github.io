<?php
// Memulai sesi
session_start();
include "header.php";

// Periksa apakah pengguna login atau tidak
if(!isset($_SESSION['username'])) {
  // Jika tidak, arahkan ke halaman login atau lakukan sesuatu yang sesuai
  header("Location: login.php");
  exit();
}

// Lakukan koneksi ke database
include "../koneksi.php";

// Memeriksa jika formulir dikirimkan
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Tangkap data yang dikirim dari formulir
  $newExplanation = $_POST['explanation'];

  // Query untuk update teks penjelasan di database
  $updateQuery = "UPDATE explain_text SET explanation = '$newExplanation' WHERE id = 1"; // Ubah sesuai dengan ID penjelasan

  // Eksekusi query
  if ($conn->query($updateQuery) === TRUE) {
    echo "";
  } else {
    echo "Error updating record: " . $conn->error;
  }
}

// Ambil data teks penjelasan dari database
$sqlExplain = "SELECT * FROM explain_text";
$resultExplain = $conn->query($sqlExplain);
if ($resultExplain->num_rows > 0) {
  $row = $resultExplain->fetch_assoc();
  $explainText = $row['explanation'];
}
?>

<div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <h2 class="text-center mb-4">Edit Penjelasan</h2>
        <form action= "index.php" method="POST">
          <div class="form-group">
            <label for="explanation">Edit Penjelasan:</label>
            <textarea class="form-control" id="explanation" name="explanation" rows="6"><?php echo $explainText; ?></textarea>
          </div>
          <button type="submit" class="btn btn-primary btn-block">Simpan Perubahan</button>
        </form>
      </div>
    </div>
  </div>