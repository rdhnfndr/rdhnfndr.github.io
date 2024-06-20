<?php
  session_start();
    require "../koneksi.php";
    include "header.php";
    
    ?>

<main>
    <div id="carouselExample" class="carousel slide" data-bs-ride="carousel" data-bs-interval="1500">
      <div class="carousel-inner">
        <!-- Your carousel items -->
        <div class="carousel-item active">
          <img
            src="https://www.horizonsupply.co/cdn/shop/files/HSC-Darkside-Hoodie-Backcopy_500x_crop_center@2x.jpg?v=1699284540"
            class="d-block mx-auto" style="max-width: 40%; height: auto;" alt="...">
        </div>
        <div class="carousel-item">
          <img
            src="https://www.horizonsupply.co/cdn/shop/products/HSC_Dying_To_Live_Hoodie_Back_500x_crop_center@2x.jpg?v=1657112822"
            class="d-block mx-auto" style="max-width: 40%; height: auto;" alt="...">
        </div>
        <div class="carousel-item">
          <img
            src="https://www.horizonsupply.co/cdn/shop/files/NextgeN-Hoodie-Back-PREORDERJPG_38997057-6a56-4085-8bdf-e646fb81d3eb_500x_crop_center@2x.jpg?v=1687345038"
            class="d-block mx-auto" style="max-width: 40%; height: auto;" alt="...">
        </div>
        <div class="carousel-item">
          <img src="https://slipknotmerch.com/cdn/shop/products/Slipknot-Work-Zip-Up-Jacket-Front_800x.png?v=1699468049"
            class="d-block mx-auto" style="max-width: 40%; height: auto;" alt="...">
        </div>
        <div class="carousel-item">
          <img
            src="https://slipknotmerch.com/cdn/shop/files/SLIP173_0007_9190_SLP_MV01V2_HOODIE_BK_587x.png?v=1699979963"
            class="d-block mx-auto" style="max-width: 40%; height: auto;" alt="...">
        </div>
        <div class="carousel-item">
          <img src="https://slipknotmerch.com/cdn/shop/files/GLITCH-TEE_0003_SLIP-GLITCH-02_587x.png?v=1698713370"
            class="d-block mx-auto" style="max-width: 40%; height: auto;" alt="...">
        </div>
        <div class="carousel-item">
          <img src="https://www.maternaldisaster.com/wp-content/uploads/2023/10/brokite-1.jpg" class="d-block mx-auto"
            style="max-width: 40%; height: auto;" alt="...">
        </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    <!-- explain -->
    <section class="explanation-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
          <h1>Selamat Datang di 2631.merch!</h1>
            <hr>
          <?php
                        // Query untuk mengambil teks penjelasan dari database
                        $sqlExplain = "SELECT * FROM explain_text";
                        $resultExplain = $conn->query($sqlExplain);

                        if ($resultExplain->num_rows > 0) {
                            $row = $resultExplain->fetch_assoc();
                            $explainText = $row['explanation']; ?>
                            <p class="mb-4"><?php echo $explainText ?></p>                        
                            <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
        </section>


    <!-- logo -->
    <section class="logo-section">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-4">
            <a href="slipknot.php">
              <img src="../assets/image/sl.png" alt="Logo 1">
            </a>
          </div>
          <div class="col-4">
            <a href="bmth.php">
              <img src="../assets/image/bm.png" alt="Logo 2">
            </a>
          </div>
          <div class="col-4">
            <a href="maternal.php">
              <img src="../assets/image/mt.png" alt="Logo 3" style="max-width: 70%; height: auto;">
            </a>
          </div>
        </div>
      </div>
    </section>
  </main>

    <?php
        include "footer.php";
    ?>