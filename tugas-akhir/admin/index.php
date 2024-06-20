
<?php
if(isset($_GET['menu'])){
    if($_GET['menu']=='store'){
        include "store.php";
    } else if($_GET['menu']=='about'){
        include "about.php";
    } else {
        echo "Halaman tidak ditemukan";
    }
} else {
    include "home.php";
}
?>